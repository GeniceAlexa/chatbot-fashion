<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class AiService
{
    public function ask(string $system, array $messages, int $maxTokens = 600): string
    {
        $contents = array_map(fn ($m) => [
            'role' => $m['role'] === 'assistant' ? 'model' : 'user',
            'parts' => [['text' => $m['content']]],
        ], $messages);

        $url = config('services.ai.base') . '/'
            . config('services.ai.model') . ':generateContent';

        $response = Http::withHeaders([
                'x-goog-api-key' => config('services.ai.key'),
            ])
            ->connectTimeout(15)
            ->timeout(90)
            ->retry([1000, 2000], throw: false)
            ->post($url, [
                'systemInstruction' => [
                    'parts' => [
                            ['text' => $system]
                        ]
                ],
                'contents' => $contents,
                'generationConfig' => [
                    'maxOutputTokens' => $maxTokens
                ],
            ]);

        $text = $response->json('candidates.0.content.parts.0.text');

        if (blank($text)) {
            throw new \RuntimeException('AI tidak mengembalikan jawaban.');
        }

        return $text;
    }
}
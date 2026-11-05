<?php

namespace App\Http\Controllers;

use App\Services\AiService;
use App\Services\ProductSearchService;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function send(Request $request, AiService $ai, ProductSearchService $search)
    {
        $data = $request->validate([
            'message' => ['required', 'string', 'max:500'],
        ]);

        $products = $search->search($data['message']);

        $context = $products->isEmpty()
            ? 'Tidak ada produk yang cocok di database.'
            : $products->map(function ($p) {
                $variants = $p->variants
                    ->map(fn ($v) => "{$v->color} {$v->size} (stok {$v->stock})")
                    ->implode(', ');

                return "- {$p->name} | {$p->category->name} | Rp"
                    . number_format($p->price, 0, ',', '.')
                    . " | bahan {$p->material} | varian: {$variants}";
            })->implode("\n");

        $system = "Kamu asisten virtual toko fashion online. Jawab singkat, sopan, "
            . "dalam bahasa Indonesia. Jawab HANYA berdasarkan data produk di bawah. "
            . "Jika data tidak ada, katakan tidak tahu dan arahkan ke admin.\n\n"
            . "DATA PRODUK:\n{$context}";

        try {
            $reply = $ai->ask($system, [['role' => 'user', 'content' => $data['message']]]);
        } catch (\Throwable $e) {
            return response()->json(['reply' => 'Maaf, layanan sedang sibuk. Coba lagi sebentar ya.'], 503);
        }

        return response()->json(['reply' => $reply]);
    }
}

<?php

namespace App\Services;

use App\Models\Product;

class ProductSearchService
{
    public function search(string $message, int $limit = 5)
    {
        $words = $this->keywords($message);

        if (empty($words)) {
            return collect();
        }

        return Product::query()
            ->where('is_active', true)
            ->with(['category', 'variants'])
            ->where(function ($q) use ($words) {
                foreach ($words as $w) {
                    $q->orWhere('name', 'like', "%{$w}%")
                      ->orWhere('description', 'like', "%{$w}%")
                      ->orWhere('material', 'like', "%{$w}%")
                      ->orWhereHas('category', fn ($c) => $c->where('name', 'like', "%{$w}%"));
                }
            })
            ->limit($limit)
            ->get();
    }

    private function keywords(string $message): array
    {
        $stop = ['ada', 'apa', 'yang', 'dan', 'atau', 'dari', 'untuk', 'berapa', 'harga',
                 'harganya', 'ukuran', 'warna', 'kak', 'mau', 'cari', 'dong', 'nggak', 'gak'];

        $words = preg_split('/[^a-z0-9]+/i', mb_strtolower($message), -1, PREG_SPLIT_NO_EMPTY);

        return array_values(array_unique(array_filter(
            $words,
            fn ($w) => mb_strlen($w) > 2 && ! in_array($w, $stop)
        )));
    }
}
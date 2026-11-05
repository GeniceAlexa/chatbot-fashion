<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'atasan' => [
                ['name' => 'Kaos Oversize Basic', 'material' => 'Cotton Combed 24s', 'brand' => 'Lokal Basic',
                'gender' => 'unisex', 'price' => 89000, 'description' => 'Kaos potongan longgar untuk harian.',
                'colors' => ['Hitam', 'Putih', 'Abu'], 'sizes' => ['S', 'M', 'L', 'XL']],
                ['name' => 'Kemeja Linen Lengan Panjang', 'material' => 'Linen', 'brand' => 'Lokal Basic',
                'gender' => 'pria', 'price' => 199000, 'description' => 'Kemeja adem untuk kerja dan santai.',
                'colors' => ['Putih', 'Biru Muda'], 'sizes' => ['M', 'L', 'XL']],
            ],
            'sepatu' => [
                ['name' => 'Sneakers Canvas Low', 'material' => 'Canvas', 'brand' => 'Lokal Step',
                'gender' => 'unisex', 'price' => 259000, 'description' => 'Sneakers ringan untuk harian.',
                'colors' => ['Putih', 'Hitam'], 'sizes' => ['39', '40', '41', '42', '43']],
            ],
        ];

        $n = 0;
        foreach ($data as $slug => $products) {
            $categoryId = Category::where('slug', $slug)->value('id');

            foreach ($products as $item) {
                $product = Product::create([
                    'category_id' => $categoryId,
                    'name' => $item['name'],
                    'slug' => Str::slug($item['name']),
                    'description' => $item['description'],
                    'material' => $item['material'],
                    'brand' => $item['brand'],
                    'gender' => $item['gender'],
                    'price' => $item['price'],
                ]);

                foreach ($item['colors'] as $color) {
                    foreach ($item['sizes'] as $size) {
                        $n++;
                        $product->variants()->create([
                            'color' => $color,
                            'size' => $size,
                            'stock' => $n % 4 === 0 ? 0 : 5 + ($n % 10),
                        ]);
                    }
                }
            }
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $clothing = ['S', 'M', 'L', 'XL'];
        $shoes = ['39', '40', '41', '42', '43'];
        $all = ['All Size'];

        // [nama, bahan, brand, gender, harga, deskripsi, warna[], ukuran[]]
        $data = [
            'atasan' => [
                ['Kaos Oversize Basic', 'Cotton Combed 24s', 'Lokal Basic', 'unisex', 89000, 'Kaos potongan longgar untuk harian.', ['Hitam', 'Putih', 'Abu'], $clothing],
                ['Kemeja Linen Lengan Panjang', 'Linen', 'Lokal Basic', 'pria', 199000, 'Kemeja adem untuk kerja dan santai.', ['Putih', 'Biru Muda'], ['M', 'L', 'XL']],
                ['Blouse Katun Polos', 'Katun Poplin', 'Senja Studio', 'wanita', 129000, 'Blouse longgar yang nyaman dan mudah dipadukan.', ['Krem', 'Hitam', 'Dusty Pink'], ['S', 'M', 'L']],
                ['Polo Shirt Pique', 'Katun Pique', 'Nusa Wear', 'pria', 149000, 'Polo shirt berkerah untuk kerja casual.', ['Navy', 'Putih', 'Hijau Army'], $clothing],
                ['Kaos Crop Basic', 'Cotton Combed 30s', 'Senja Studio', 'wanita', 79000, 'Kaos crop pas badan untuk gaya santai.', ['Hitam', 'Putih'], ['S', 'M', 'L']],
                ['Sweater Rajut Ringan', 'Rajut Akrilik', 'Nusa Wear', 'unisex', 179000, 'Sweater rajut tipis yang hangat tanpa gerah.', ['Cokelat', 'Abu', 'Krem'], $clothing],
            ],
            'bawahan' => [
                ['Celana Chino Slim', 'Katun Twill Stretch', 'Nusa Wear', 'pria', 219000, 'Celana chino potongan slim untuk kerja dan santai.', ['Khaki', 'Hitam', 'Navy'], ['28', '30', '32', '34']],
                ['Celana Kulot Linen', 'Linen', 'Senja Studio', 'wanita', 169000, 'Kulot longgar adem dengan pinggang karet.', ['Krem', 'Hitam'], ['S', 'M', 'L']],
                ['Jeans Straight Cut', 'Denim', 'Lokal Basic', 'unisex', 249000, 'Jeans potongan lurus dengan warna klasik.', ['Biru Tua', 'Hitam'], ['28', '30', '32', '34']],
                ['Rok Plisket', 'Polyester Plisket', 'Senja Studio', 'wanita', 139000, 'Rok panjang plisket yang jatuh dan ringan.', ['Hitam', 'Mocca', 'Dusty Pink'], $all],
                ['Celana Jogger Katun', 'Katun Fleece', 'Lokal Basic', 'unisex', 159000, 'Celana jogger santai untuk di rumah dan olahraga ringan.', ['Hitam', 'Abu'], $clothing],
                ['Celana Pendek Chino', 'Katun Twill', 'Nusa Wear', 'pria', 119000, 'Celana pendek chino untuk akhir pekan.', ['Khaki', 'Navy'], ['28', '30', '32', '34']],
            ],
            'dress-gamis' => [
                ['Gamis Polos Crinkle', 'Crinkle Airflow', 'Senja Studio', 'wanita', 259000, 'Gamis polos yang jatuh dan tidak mudah kusut.', ['Hitam', 'Sage', 'Mocca'], ['M', 'L', 'XL']],
                ['Dress Midi Floral', 'Rayon', 'Senja Studio', 'wanita', 229000, 'Dress midi motif bunga untuk acara santai.', ['Biru Floral', 'Merah Muda Floral'], ['S', 'M', 'L']],
                ['Dress Kemeja Katun', 'Katun Poplin', 'Nusa Wear', 'wanita', 199000, 'Dress model kemeja dengan tali pinggang.', ['Putih', 'Biru Muda'], ['S', 'M', 'L']],
                ['Gamis Satin Elegan', 'Satin Velvet', 'Senja Studio', 'wanita', 349000, 'Gamis longgar berbahan satin untuk acara resmi.', ['Navy', 'Maroon'], ['M', 'L', 'XL']],
                ['Tunik Panjang Katun', 'Katun Rayon', 'Lokal Basic', 'wanita', 169000, 'Tunik panjang sebatas lutut untuk harian.', ['Putih', 'Mocca', 'Hitam'], $clothing],
                ['Dress Rajut Basic', 'Rajut Premium', 'Nusa Wear', 'wanita', 239000, 'Dress rajut pas badan yang elegan.', ['Hitam', 'Abu'], ['S', 'M', 'L']],
            ],
            'outer' => [
                ['Jaket Bomber Parasut', 'Parasut Waterproof', 'Nusa Wear', 'unisex', 289000, 'Jaket bomber ringan tahan percikan air.', ['Hitam', 'Hijau Army', 'Navy'], $clothing],
                ['Cardigan Rajut Panjang', 'Rajut Akrilik', 'Senja Studio', 'wanita', 189000, 'Cardigan panjang untuk menumpuk gaya.', ['Krem', 'Hitam', 'Mocca'], $all],
                ['Blazer Casual Linen', 'Linen Blend', 'Lokal Basic', 'unisex', 329000, 'Blazer ringan untuk kerja dan acara semi formal.', ['Hitam', 'Krem'], $clothing],
                ['Hoodie Fleece Polos', 'Fleece Katun', 'Lokal Basic', 'unisex', 249000, 'Hoodie tebal dan hangat dengan kantong depan.', ['Hitam', 'Abu', 'Navy'], $clothing],
                ['Jaket Denim Classic', 'Denim', 'Nusa Wear', 'unisex', 339000, 'Jaket denim klasik dengan potongan regular.', ['Biru Tua', 'Hitam'], $clothing],
                ['Vest Rajut', 'Rajut Katun', 'Senja Studio', 'unisex', 149000, 'Vest rajut untuk padu padan kemeja.', ['Krem', 'Cokelat'], $all],
            ],
            'sepatu' => [
                ['Sneakers Canvas Low', 'Canvas', 'Lokal Step', 'unisex', 259000, 'Sneakers ringan untuk harian.', ['Putih', 'Hitam'], $shoes],
                ['Sneakers Kulit Sintetis', 'Kulit Sintetis', 'Lokal Step', 'unisex', 349000, 'Sneakers bersih dengan sol empuk.', ['Putih', 'Hitam'], $shoes],
                ['Sandal Slide Karet', 'Karet EVA', 'Lokal Step', 'unisex', 99000, 'Sandal slide empuk untuk santai.', ['Hitam', 'Navy'], $shoes],
                ['Sepatu Loafer Kulit', 'Kulit Sapi', 'Lokal Step', 'pria', 399000, 'Loafer klasik untuk kerja.', ['Hitam', 'Cokelat'], ['40', '41', '42', '43']],
                ['Flat Shoes Anyaman', 'Anyaman Sintetis', 'Lokal Step', 'wanita', 189000, 'Flat shoes nyaman dengan detail anyaman.', ['Krem', 'Hitam'], ['37', '38', '39', '40']],
                ['Sepatu Lari Ringan', 'Mesh Breathable', 'Lokal Step', 'unisex', 329000, 'Sepatu lari ringan dengan sirkulasi udara baik.', ['Abu', 'Biru', 'Hitam'], $shoes],
            ],
            'tas' => [
                ['Tote Bag Kanvas', 'Kanvas Tebal', 'Kota Bags', 'unisex', 119000, 'Tote bag yang muat laptop 13 inci.', ['Krem', 'Hitam'], $all],
                ['Ransel Daily', 'Polyester Waterproof', 'Kota Bags', 'unisex', 229000, 'Ransel harian dengan sekat laptop.', ['Hitam', 'Abu', 'Navy'], $all],
                ['Sling Bag Mini', 'Kanvas', 'Kota Bags', 'unisex', 139000, 'Sling bag kecil untuk barang esensial.', ['Hitam', 'Cokelat'], $all],
                ['Tas Selempang Kulit Sintetis', 'Kulit Sintetis', 'Kota Bags', 'wanita', 259000, 'Tas selempang elegan untuk acara santai.', ['Hitam', 'Mocca', 'Dusty Pink'], $all],
                ['Tas Laptop 14 Inci', 'Polyester', 'Kota Bags', 'unisex', 279000, 'Tas laptop berlapis busa pelindung.', ['Hitam', 'Abu'], $all],
                ['Pouch Organizer', 'Kanvas', 'Kota Bags', 'unisex', 69000, 'Pouch kecil untuk merapikan kabel dan alat tulis.', ['Hitam', 'Krem'], $all],
            ],
            'aksesoris' => [
                ['Topi Baseball Polos', 'Katun Twill', 'Pesona', 'unisex', 79000, 'Topi baseball dengan tali belakang adjustable.', ['Hitam', 'Putih', 'Navy'], $all],
                ['Ikat Pinggang Kulit Sintetis', 'Kulit Sintetis', 'Pesona', 'pria', 99000, 'Ikat pinggang dengan gesper klasik.', ['Hitam', 'Cokelat'], ['100 cm', '110 cm', '120 cm']],
                ['Kaos Kaki Katun 3 Pasang', 'Katun', 'Pesona', 'unisex', 49000, 'Satu paket tiga pasang kaos kaki.', ['Hitam', 'Putih'], $all],
                ['Kacamata Hitam Retro', 'Polycarbonate', 'Pesona', 'unisex', 119000, 'Kacamata hitam dengan lensa UV400.', ['Hitam', 'Cokelat'], $all],
                ['Syal Rajut', 'Rajut Akrilik', 'Pesona', 'unisex', 89000, 'Syal rajut tebal untuk cuaca dingin.', ['Abu', 'Krem', 'Merah'], $all],
                ['Dompet Lipat Sintetis', 'Kulit Sintetis', 'Pesona', 'pria', 109000, 'Dompet lipat dengan slot kartu.', ['Hitam', 'Cokelat'], $all],
            ],
        ];

        $n = 0;

        foreach ($data as $categorySlug => $products) {
            $categoryId = Category::where('slug', $categorySlug)->value('id');

            foreach ($products as [$name, $material, $brand, $gender, $price, $description, $colors, $sizes]) {
                $product = Product::create([
                    'category_id' => $categoryId,
                    'name' => $name,
                    'slug' => Str::slug($name),
                    'description' => $description,
                    'material' => $material,
                    'brand' => $brand,
                    'gender' => $gender,
                    'price' => $price,
                ]);

                foreach ($colors as $color) {
                    foreach ($sizes as $size) {
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
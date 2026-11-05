<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Faq;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faqs = [
            ['topic' => 'pemesanan', 'question' => 'Bagaimana cara memesan?',
            'answer' => 'Pilih produk, lalu hubungi admin melalui WhatsApp dengan menyebutkan produk, warna, dan ukuran.'],
            ['topic' => 'pembayaran', 'question' => 'Metode pembayaran apa saja yang tersedia?',
            'answer' => 'Transfer bank dan QRIS.'],
            ['topic' => 'pengiriman', 'question' => 'Berapa lama estimasi pengiriman?',
            'answer' => 'Estimasi 2-5 hari kerja tergantung kota tujuan.'],
            ['topic' => 'tukar ukuran', 'question' => 'Apakah bisa tukar ukuran?',
            'answer' => 'Bisa, maksimal 7 hari setelah barang diterima, selama label masih terpasang dan barang belum dipakai.'],
            ['topic' => 'ukuran', 'question' => 'Bagaimana memilih ukuran yang pas?',
            'answer' => 'Lihat panduan ukuran di deskripsi produk. Jika ragu, pilih satu ukuran lebih besar.'],
            ['topic' => 'kontak', 'question' => 'Bagaimana menghubungi admin?',
            'answer' => 'Hubungi admin melalui WhatsApp setiap hari pukul 09.00-21.00.'],
        ];

        foreach ($faqs as $faq) {
            Faq::create($faq);
        }
    }
}

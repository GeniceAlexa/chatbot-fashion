<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    public function run(): void
    {
        $faqs = [
            ['pemesanan', 'Bagaimana cara memesan?', 'Pilih produk, tanyakan ketersediaan ke chatbot, lalu hubungi admin lewat WhatsApp dengan menyebutkan nama produk, warna, ukuran, dan alamat pengiriman.'],
            ['pembayaran', 'Metode pembayaran apa saja yang tersedia?', 'Transfer bank (BCA, BRI, Mandiri) dan QRIS. Pembayaran di tempat (COD) belum tersedia.'],
            ['pembayaran', 'Berapa lama batas waktu pembayaran?', 'Pembayaran dilakukan maksimal 24 jam setelah pesanan dikonfirmasi admin. Lewat dari itu pesanan dibatalkan otomatis.'],
            ['pengiriman', 'Berapa lama estimasi pengiriman?', 'Estimasi 2-5 hari kerja untuk Pulau Jawa dan 4-8 hari kerja untuk luar Pulau Jawa.'],
            ['pengiriman', 'Ekspedisi apa yang digunakan?', 'Kami mengirim melalui JNE, J&T, dan SiCepat.'],
            ['ongkir', 'Apakah ada gratis ongkir?', 'Gratis ongkir untuk pembelian minimal Rp300.000 ke wilayah Pulau Jawa. Di bawah itu, ongkir dihitung sesuai kota tujuan dan berat paket.'],
            ['tukar ukuran', 'Apakah bisa tukar ukuran?', 'Bisa, maksimal 7 hari setelah barang diterima, dengan syarat label masih terpasang, barang belum dipakai atau dicuci, dan stok ukuran pengganti tersedia. Ongkir pengiriman kembali ditanggung pembeli.'],
            ['retur', 'Bagaimana jika barang cacat atau salah kirim?', 'Hubungi admin maksimal 2x24 jam setelah barang diterima dengan menyertakan video unboxing. Barang akan diganti atau dananya dikembalikan.'],
            ['ukuran', 'Bagaimana memilih ukuran pakaian yang pas?', 'Panduan lingkar dada: S sekitar 88 cm, M sekitar 92 cm, L sekitar 96 cm, XL sekitar 100 cm. Jika ragu di antara dua ukuran, pilih yang lebih besar.'],
            ['ukuran', 'Bagaimana dengan ukuran sepatu?', 'Ukuran sepatu mengikuti standar EU (39-43). Jika kaki lebar atau ragu, pilih satu nomor lebih besar.'],
            ['perawatan', 'Bagaimana cara mencuci pakaian?', 'Cuci dengan dibalik menggunakan air dingin, jangan pakai pemutih, jangan setrika langsung pada bagian sablon, dan jemur di tempat teduh.'],
            ['stok', 'Bagaimana mengecek stok?', 'Tanyakan ke chatbot untuk melihat stok terbaru per warna dan ukuran. Ketersediaan final dikonfirmasi admin saat pemesanan.'],
            ['promo', 'Apakah ada diskon atau promo?', 'Promo diumumkan melalui media sosial toko. Silakan tanyakan ke admin untuk promo yang sedang berjalan.'],
            ['kontak', 'Jam layanan admin kapan?', 'Admin melayani lewat WhatsApp setiap hari pukul 09.00-21.00 WIB. Chatbot ini tersedia 24 jam.'],
        ];

        foreach ($faqs as [$topic, $question, $answer]) {
            Faq::create(compact('topic', 'question', 'answer'));
        }
    }
}
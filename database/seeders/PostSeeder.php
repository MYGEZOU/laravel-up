<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        Post::truncate();

        Post::create([
            'title' => 'Membangun REST API dengan Laravel 12: Panduan Lengkap',
            'slug' => 'membangun-rest-api-dengan-laravel-12-panduan-lengkap',
            'content' => "Laravel 12 hadir dengan berbagai peningkatan signifikan yang membuat proses pengembangan REST API menjadi lebih efisien dan menyenangkan. Dalam artikel ini, kita akan membahas langkah demi langkah bagaimana membangun REST API yang robust menggunakan fitur-fitur terbaru Laravel 12.\n\nPertama, kita akan mulai dengan menginstal Laravel dan mengkonfigurasi database. Laravel mendukung berbagai driver database seperti MySQL, PostgreSQL, dan SQLite. Untuk proyek produksi, sangat disarankan menggunakan PostgreSQL atau MySQL.\n\nSelanjutnya, kita akan mendefinisikan model dan migrasi database. Eloquent ORM milik Laravel membuat interaksi dengan database menjadi sangat intuitif. Dengan menggunakan model, kita dapat dengan mudah melakukan operasi CRUD tanpa harus menulis query SQL secara manual.\n\nPada bagian ini, kita juga akan membahas bagaimana mengimplementasikan autentikasi menggunakan Laravel Sanctum, sebuah paket ringan untuk autentikasi SPA dan API token. Sanctum menyediakan mekanisme yang sederhana namun aman untuk mengautentikasi pengguna API Anda.\n\nTerakhir, kita akan membahas best practices dalam versioning API, penanganan error yang baik, dan dokumentasi API menggunakan OpenAPI/Swagger. API yang terdokumentasi dengan baik akan memudahkan konsumen API untuk mengintegrasikan layanan Anda.",
            'image' => null,
            'published_at' => Carbon::now()->subDays(5),
        ]);

        Post::create([
            'title' => 'Implementasi Machine Learning di Python: Studi Kasus Prediksi Akademik',
            'slug' => 'implementasi-machine-learning-python-prediksi-akademik',
            'content' => "Machine Learning telah menjadi salah satu teknologi paling berpengaruh dalam dekade terakhir ini. Dalam artikel ini, saya akan berbagi pengalaman nyata mengimplementasikan algoritma Random Forest untuk memprediksi kelulusan mahasiswa — sebuah proyek yang saya kerjakan sebagai tugas akhir mata kuliah AI.\n\nProyek ini menggunakan dataset nilai akademik dari 500 mahasiswa selama 4 semester. Setiap entri berisi nilai rata-rata, jumlah kehadiran, skor ujian tengah semester, dan status kelulusan akhir.\n\nLangkah pertama adalah eksplorasi dan pembersihan data (EDA). Saya menemukan bahwa sekitar 8% data memiliki nilai yang hilang (missing values) dan beberapa outlier yang perlu ditangani. Menggunakan library Pandas dan Matplotlib, proses ini menjadi jauh lebih mudah.\n\nSetelah data bersih, saya melatih model Random Forest dengan 100 estimator. Hasilnya? Akurasi model mencapai 92% pada data uji — jauh melampaui target awal sebesar 80%. Precision dan Recall-nya pun seimbang, menandakan model tidak mengalami overfitting.",
            'image' => null,
            'published_at' => Carbon::now()->subDays(12),
        ]);

        Post::create([
            'title' => 'Tailwind CSS Custom Color Palette: Tips & Trik untuk Dark Mode',
            'slug' => 'tailwind-css-custom-color-palette-tips-trik-dark-mode',
            'content' => "Tailwind CSS adalah framework yang luar biasa fleksibel, terutama ketika Anda perlu membangun desain yang benar-benar unik. Dalam artikel ini, saya akan berbagi bagaimana saya membangun palet warna kustom untuk portofolio ini dan mengintegrasikannya dengan sempurna ke dalam ekosistem Tailwind.\n\nPalet warna yang saya gunakan terinspirasi dari nuansa laut yang dalam: Blue Black (#021C1E) sebagai warna dasar gelap, Cadet Blue (#004445) untuk kartu dan elemen sekunder, Rain (#2C7873) sebagai aksen tengah, dan Greenery (#6FB98F) untuk highlight dan call-to-action.\n\nUntuk menambahkan warna kustom di Tailwind, cukup tambahkan di file tailwind.config.js. Namun karena portofolio ini menggunakan CDN, kita menggunakan inline script untuk mendefinisikan konfigurasi secara langsung.\n\nTips paling penting: gunakan warna dalam format HSL jika memungkinkan, karena memudahkan pembuatan varian gelap/terang secara sistematis. Selain itu, selalu pertimbangkan kontras warna untuk aksesibilitas — pastikan rasio kontras teks-latar minimal 4.5:1 untuk memenuhi standar WCAG 2.1 AA.",
            'image' => null,
            'published_at' => Carbon::now()->subDays(20),
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use Carbon\Carbon;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::truncate();

        Project::create([
            'title' => 'Sistem Ujian Akhir Semester Pemrograman Web',
            'description' => 'Sebuah platform ujian online untuk mahasiswa, dibangun dengan Laravel dan MySQL. Dilengkapi dengan fitur timer ujian realtime, manajemen bank soal, dan perhitungan hasil penilaian secara otomatis.',
            'category' => 'Web App',
            'image' => null,
            'project_url' => 'https://uaspw.darzkine.my.id',
            'completion_date' => Carbon::parse('2025-06-15'),
        ]);

        Project::create([
            'title' => 'Aplikasi Prediksi Kelulusan Mahasiswa dengan AI',
            'description' => 'Aplikasi web inovatif yang menggunakan model machine learning untuk memprediksi probabilitas kelulusan mahasiswa berdasarkan rekam data akademik historis. Dibangun dengan framework Laravel untuk antarmuka, Python Flask sebagai microservice AI, dan MySQL sebagai basis data.',
            'category' => 'AI/Web App',
            'image' => null,
            'project_url' => 'https://uasai.darzkine.my.id/app/index.php',
            'completion_date' => Carbon::parse('2025-08-20'),
        ]);

        Project::create([
            'title' => 'Website Portofolio & Blog Pribadi',
            'description' => 'Website portofolio ini sendiri, yang dirancang khusus untuk menampilkan karya, artikel blog, dan profil profesional secara elegan. Dibangun sepenuhnya menggunakan ekosistem Laravel, styling kustom dengan Tailwind CSS, dan dipercantik dengan library animasi AOS.',
            'category' => 'Personal Website',
            'image' => null,
            'project_url' => 'https://darzkine.my.id',
            'completion_date' => Carbon::parse('2025-09-10'),
        ]);
    }
}

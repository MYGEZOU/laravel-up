<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Testimonial;

class TestimonialSeeder extends Seeder
{
    public function run(): void
    {
        // Hapus data lama agar tidak duplikat jika dijalankan ulang
        Testimonial::truncate();

        Testimonial::create([
            'name' => 'Dr. Andi Wijaya, S.Kom., M.T.',
            'role' => 'Dosen Pembimbing Proyek UASPW',
            'quote' => 'Darz menunjukkan dedikasi yang luar biasa dalam merancang sistem ujian online ini. Kualitas kode yang ditulis sangat bersih, terstruktur, dan fitur berjalan tanpa celah bahkan saat diakses puluhan mahasiswa sekaligus.',
            'photo' => null,
        ]);

        Testimonial::create([
            'name' => 'Prof. Lina Marlina, Ph.D.',
            'role' => 'Dosen Pengampu Mata Kuliah AI',
            'quote' => 'Implementasi algoritma AI untuk prediksi kelulusan yang dibangun Darz sangat presisi dan solutif. Ia berhasil menjembatani kompleksitas Machine Learning dengan UI yang user-friendly.',
            'photo' => null,
        ]);

        Testimonial::create([
            'name' => 'Rina Safitri',
            'role' => 'Frontend Developer',
            'quote' => 'Bekerja sama dengan Darz adalah pengalaman yang luar biasa. Ia bukan hanya seorang backend developer yang handal, tapi juga memiliki pemahaman mendalam tentang UI/UX yang membuat kolaborasi tim menjadi sangat mulus.',
            'photo' => null,
        ]);
    }
}

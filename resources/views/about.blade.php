{{-- resources/views/about.blade.php --}}
@extends('layouts.app')

@section('title', 'Tentang Darz')
@section('description', 'Pelajari lebih lanjut tentang Darz, keahlian teknis (Hard Skills) dan Soft Skills yang dimiliki, serta pengalaman sebagai Full Stack Developer.')

@section('content')
<div class="bg-cadet-blue min-h-screen py-24 relative overflow-hidden">
    <!-- Decorative -->
    <div class="absolute top-0 right-0 w-64 h-64 bg-greenery rounded-full mix-blend-multiply filter blur-3xl opacity-10"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <div class="text-center mb-16" data-aos="fade-down">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4">Mengenal <span class="text-greenery">Lebih Dekat</span></h1>
            <div class="w-24 h-1.5 bg-gradient-to-r from-rain to-greenery mx-auto rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <!-- Kolom Kiri: Naratif -->
            <div data-aos="fade-right" data-aos-duration="1000">
                <h2 class="text-3xl font-bold text-white mb-6">Perjalanan & Dedikasi</h2>
                <div class="space-y-4 text-gray-300 text-lg leading-relaxed">
                    <p>
                        Sejak pertama kali menulis baris kode pertama, saya terpikat oleh kemungkinan tak terbatas dari dunia digital. Saya adalah seorang web developer yang sangat bersemangat dalam memadukan keindahan antarmuka pengguna dengan kekuatan algoritma backend yang efisien.
                    </p>
                    <p>
                        Dengan ketertarikan khusus pada persimpangan antara Web Development dan Artificial Intelligence, saya terus mengeksplorasi cara untuk membuat aplikasi tidak hanya interaktif, tetapi juga cerdas. Mengubah ide kompleks menjadi solusi digital yang elegan dan dapat diukur adalah hal yang memotivasi saya setiap hari.
                    </p>
                    <p>
                        Tujuan karier saya jelas: terus berinovasi, berkontribusi dalam tim yang dinamis, dan membangun produk teknologi tinggi yang memberikan dampak nyata bagi pengguna maupun efisiensi bisnis.
                    </p>
                </div>
            </div>

            <!-- Kolom Kanan: Keahlian -->
            <div data-aos="fade-left" data-aos-duration="1000" class="bg-blue-black/30 p-8 rounded-3xl border border-rain/30 shadow-2xl backdrop-blur-sm">
                
                <h3 class="text-2xl font-bold text-white mb-6 flex items-center gap-3">
                    <svg class="w-6 h-6 text-greenery" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                    Hard Skills
                </h3>
                <div class="space-y-5 mb-10">
                    <!-- Progress Bar 1 -->
                    <div>
                        <div class="flex justify-between text-sm font-medium mb-1">
                            <span class="text-gray-300">Laravel & PHP</span>
                            <span class="text-greenery">95%</span>
                        </div>
                        <div class="w-full bg-rain/40 rounded-full h-2">
                            <div class="bg-greenery h-2 rounded-full" style="width: 95%"></div>
                        </div>
                    </div>
                    <!-- Progress Bar 2 -->
                    <div>
                        <div class="flex justify-between text-sm font-medium mb-1">
                            <span class="text-gray-300">Tailwind CSS</span>
                            <span class="text-greenery">90%</span>
                        </div>
                        <div class="w-full bg-rain/40 rounded-full h-2">
                            <div class="bg-greenery h-2 rounded-full" style="width: 90%"></div>
                        </div>
                    </div>
                    <!-- Progress Bar 3 -->
                    <div>
                        <div class="flex justify-between text-sm font-medium mb-1">
                            <span class="text-gray-300">MySQL & Database Design</span>
                            <span class="text-greenery">85%</span>
                        </div>
                        <div class="w-full bg-rain/40 rounded-full h-2">
                            <div class="bg-greenery h-2 rounded-full" style="width: 85%"></div>
                        </div>
                    </div>
                    <!-- Progress Bar 4 -->
                    <div>
                        <div class="flex justify-between text-sm font-medium mb-1">
                            <span class="text-gray-300">Python & Machine Learning</span>
                            <span class="text-greenery">80%</span>
                        </div>
                        <div class="w-full bg-rain/40 rounded-full h-2">
                            <div class="bg-greenery h-2 rounded-full" style="width: 80%"></div>
                        </div>
                    </div>
                    <!-- Progress Bar 5 -->
                    <div>
                        <div class="flex justify-between text-sm font-medium mb-1">
                            <span class="text-gray-300">Git & Version Control</span>
                            <span class="text-greenery">85%</span>
                        </div>
                        <div class="w-full bg-rain/40 rounded-full h-2">
                            <div class="bg-greenery h-2 rounded-full" style="width: 85%"></div>
                        </div>
                    </div>
                </div>

                <h3 class="text-2xl font-bold text-white mb-6 flex items-center gap-3">
                    <svg class="w-6 h-6 text-greenery" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    Soft Skills
                </h3>
                <div class="flex flex-wrap gap-3">
                    <span class="px-4 py-2 bg-rain/20 border border-greenery/30 text-gray-200 rounded-full text-sm font-medium shadow-sm">Problem Solving</span>
                    <span class="px-4 py-2 bg-rain/20 border border-greenery/30 text-gray-200 rounded-full text-sm font-medium shadow-sm">Komunikasi</span>
                    <span class="px-4 py-2 bg-rain/20 border border-greenery/30 text-gray-200 rounded-full text-sm font-medium shadow-sm">Manajemen Waktu</span>
                    <span class="px-4 py-2 bg-rain/20 border border-greenery/30 text-gray-200 rounded-full text-sm font-medium shadow-sm">Kerja Tim</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

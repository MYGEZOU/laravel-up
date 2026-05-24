{{-- resources/views/projects/show.blade.php --}}
@extends('layouts.app')

@section('title', $project->title . ' - Portofolio Darz')
@section('description', Str::limit(strip_tags($project->description), 150))

@section('content')
<div class="bg-blue-black min-h-screen py-24 relative overflow-hidden">
    <!-- Decorative Elements -->
    <div class="absolute top-0 right-0 w-full h-96 bg-gradient-to-b from-cadet-blue/30 to-blue-black z-0"></div>
    <div class="absolute top-40 left-10 w-96 h-96 bg-rain rounded-full mix-blend-multiply filter blur-3xl opacity-20 transform -translate-x-1/2"></div>
    
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Back button -->
        <a href="{{ route('projects.index') }}" class="inline-flex items-center text-gray-400 hover:text-greenery mb-10 transition-colors group bg-blue-black/50 backdrop-blur-sm px-4 py-2 rounded-full border border-rain/30" data-aos="fade-right">
            <svg class="w-5 h-5 mr-2 transform group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            Kembali ke Portofolio
        </a>

        <!-- Header Info -->
        <div class="mb-10 text-center md:text-left" data-aos="fade-up">
            <div class="flex flex-wrap items-center justify-center md:justify-start gap-4 mb-6">
                <span class="bg-cadet-blue text-greenery text-sm font-bold px-4 py-1.5 rounded-full border border-greenery/30 shadow-lg shadow-greenery/10">
                    {{ $project->category }}
                </span>
                <span class="text-gray-300 text-sm flex items-center gap-2 bg-blue-black/50 px-4 py-1.5 rounded-full border border-rain/30 backdrop-blur-sm">
                    <svg class="w-4 h-4 text-greenery" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    {{ $project->completion_date ? $project->completion_date->format('F Y') : 'Ongoing' }}
                </span>
            </div>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white leading-tight tracking-tight">{{ $project->title }}</h1>
        </div>

        <!-- Big Image -->
        <div class="rounded-3xl overflow-hidden mb-16 shadow-[0_20px_50px_rgba(0,68,69,0.3)] border border-rain/30 bg-[#011415] aspect-video flex items-center justify-center relative group" data-aos="zoom-in" data-aos-duration="1000">
            @if($project->image)
                <img src="{{ $project->image }}" alt="{{ $project->title }}" class="w-full h-full object-cover">
            @else
                <img src="https://via.placeholder.com/1200x675/004445/6FB98F?text={{ urlencode(Str::limit($project->title, 20)) }}" alt="{{ $project->title }}" class="w-full h-full object-cover">
            @endif
        </div>

        <!-- Dynamic Content Setup based on Project Title -->
        @php
            $role = 'Developer';
            $process = [];
            $result = '';
            
            if(str_contains(strtolower($project->title), 'ujian akhir semester pemrograman web')) {
                $role = 'Full Stack Developer';
                $process = [
                    'Analisis kebutuhan dosen dan mahasiswa untuk menciptakan alur ujian yang efisien dan meminimalkan kecurangan.',
                    'Perancangan arsitektur database relasional yang tangguh untuk mengakomodir bank soal dinamis dan sesi ujian concurrent.',
                    'Pengembangan backend RESTful API yang solid menggunakan framework Laravel, memastikan reliabilitas timer ujian.',
                    'Implementasi antarmuka frontend yang responsif, bersih, dan intuitif menggunakan kombinasi Bootstrap dan Tailwind CSS.',
                    'Uji coba performa dan fungsionalitas menyeluruh dengan melibatkan lebih dari 50 pengguna aktif secara bersamaan.'
                ];
                $result = 'Meningkatkan efisiensi proses penilaian dosen hingga 40%, mengurangi penggunaan kertas secara drastis (go-green), dan memberikan fleksibilitas akses ujian dari perangkat mana saja tanpa hambatan.';
            } 
            elseif(str_contains(strtolower($project->title), 'ai') || str_contains(strtolower($project->title), 'prediksi kelulusan')) {
                $role = 'AI Engineer & Backend Developer';
                $process = [
                    'Pengumpulan, pembersihan, dan prapemrosesan dataset nilai akademik mahasiswa historis yang komprehensif.',
                    'Eksperimen dan training model machine learning menggunakan algoritma Random Forest dengan library Scikit-Learn di Python.',
                    'Pengembangan microservice API terpisah menggunakan Flask untuk mengekspos model prediksi secara efisien.',
                    'Integrasi seamless antara backend Laravel (sebagai main controller) dengan Flask API, lengkap dengan visualisasi data interaktif di frontend.',
                    'Validasi model secara ketat menggunakan data uji dan teknik cross-validation untuk memastikan tidak terjadi overfitting.'
                ];
                $result = 'Mencapai tingkat akurasi prediksi kelulusan sebesar 92%, sangat membantu dosen pembimbing akademik dalam memberikan intervensi dini yang tepat sasaran bagi mahasiswa berisiko.';
            }
            else {
                $role = 'Desainer & Developer';
                $process = [
                    'Riset mendalam terkait tren UI/UX modern untuk memaksimalkan personal branding profesional.',
                    'Implementasi desain antarmuka kustom yang estetis menggunakan palet warna khusus di Tailwind CSS dan library animasi scroll AOS.',
                    'Pengembangan Content Management System (CMS) sederhana namun efisien untuk memanajemen konten blog dan data portofolio secara mandiri.',
                    'Optimasi teknis tingkat lanjut pada performa, aksesibilitas, dan SEO (mencapai skor Lighthouse 90+ di semua metrik).'
                ];
                $result = 'Berhasil memperkuat eksistensi online dan personal branding, berfungsi sebagai showcase interaktif untuk keterampilan teknis, serta meningkatkan peluang kolaborasi profesional.';
            }
        @endphp

        <!-- Project Content Details -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 lg:gap-16">
            
            <!-- Left: Main Content -->
            <div class="lg:col-span-2 space-y-12">
                <section data-aos="fade-up">
                    <h3 class="text-2xl font-bold text-white mb-6 border-b border-rain/30 pb-3 flex items-center gap-3">
                        <svg class="w-6 h-6 text-greenery" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path></svg>
                        Deskripsi Proyek
                    </h3>
                    <div class="prose prose-invert prose-greenery max-w-none text-gray-300 leading-relaxed text-lg">
                        <p>{{ $project->description }}</p>
                    </div>
                </section>

                <section data-aos="fade-up">
                    <h3 class="text-2xl font-bold text-white mb-6 border-b border-rain/30 pb-3 flex items-center gap-3">
                        <svg class="w-6 h-6 text-greenery" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path></svg>
                        Proses Pengerjaan
                    </h3>
                    <div class="space-y-4">
                        @foreach($process as $index => $step)
                        <div class="flex items-start bg-blue-black/40 p-5 rounded-xl border border-cadet-blue/30 hover:border-greenery/50 transition-colors">
                            <div class="bg-cadet-blue rounded-full min-w-[2.5rem] h-10 flex items-center justify-center mr-4 text-greenery font-bold shadow-inner">
                                {{ $index + 1 }}
                            </div>
                            <div class="mt-1.5">
                                <p class="text-gray-300">{{ $step }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </section>
                
                <section data-aos="fade-up">
                    <h3 class="text-2xl font-bold text-white mb-6 border-b border-rain/30 pb-3 flex items-center gap-3">
                        <svg class="w-6 h-6 text-greenery" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                        Hasil & Dampak
                    </h3>
                    <div class="bg-cadet-blue/30 p-8 rounded-2xl border border-rain/20 shadow-inner">
                        <p class="text-gray-300 leading-relaxed text-lg font-medium italic">
                            "{{ $result }}"
                        </p>
                    </div>
                </section>
            </div>

            <!-- Right: Sidebar -->
            <div class="space-y-8" data-aos="fade-left" data-aos-delay="200">
                
                <!-- CTA -->
                @if($project->project_url)
                <div class="bg-gradient-to-br from-cadet-blue to-blue-black p-8 rounded-3xl border border-greenery/30 shadow-[0_0_30px_rgba(44,120,115,0.2)] text-center relative overflow-hidden">
                    <div class="absolute -top-10 -right-10 w-32 h-32 bg-greenery rounded-full mix-blend-overlay filter blur-2xl opacity-50"></div>
                    
                    <h4 class="text-white font-bold text-xl mb-2">Live Preview</h4>
                    <p class="text-gray-400 text-sm mb-6">Jelajahi fitur dan pengalaman secara langsung.</p>
                    
                    <a href="{{ $project->project_url }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center w-full px-6 py-4 rounded-xl bg-greenery hover:bg-rain text-white font-bold transition-all duration-300 shadow-[0_4px_15px_rgba(111,185,143,0.4)] hover:shadow-[0_8px_25px_rgba(44,120,115,0.6)] hover:-translate-y-1">
                        Kunjungi Proyek
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                    </a>
                </div>
                @endif
                
                <!-- Role -->
                <div class="bg-cadet-blue/40 p-6 rounded-2xl border border-rain/30 shadow-lg backdrop-blur-sm">
                    <h4 class="text-gray-300 text-sm font-medium mb-1 uppercase tracking-wider">Peran Saya</h4>
                    <p class="text-white font-bold text-lg flex items-center gap-2">
                        <svg class="w-5 h-5 text-greenery" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                        {{ $role }}
                    </p>
                </div>
                
                <!-- Share -->
                <div class="border-t border-rain/30 pt-6">
                    <h4 class="text-gray-400 text-sm font-medium mb-4 uppercase tracking-wider">Bagikan Proyek</h4>
                    <div class="flex gap-4">
                        <button class="w-12 h-12 rounded-xl bg-cadet-blue flex items-center justify-center text-white hover:bg-greenery hover:shadow-[0_0_15px_rgba(111,185,143,0.5)] hover:-translate-y-1 transition-all duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                        </button>
                        <button class="w-12 h-12 rounded-xl bg-cadet-blue flex items-center justify-center text-white hover:bg-greenery hover:shadow-[0_0_15px_rgba(111,185,143,0.5)] hover:-translate-y-1 transition-all duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

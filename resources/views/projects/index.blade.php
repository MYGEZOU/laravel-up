{{-- resources/views/projects/index.blade.php --}}
@extends('layouts.app')

@section('title', 'Karya Terbaik - Portofolio Darz')
@section('description', 'Kumpulan proyek inovatif dan aplikasi web dari Darz, menampilkan berbagai studi kasus yang menarik dan fungsional.')

@section('content')
<div class="bg-blue-black min-h-screen py-24 relative overflow-hidden">
    <!-- Decorative Elements -->
    <div class="absolute top-20 right-10 w-96 h-96 bg-rain rounded-full mix-blend-multiply filter blur-3xl opacity-20 transform translate-x-1/2"></div>
    <div class="absolute bottom-20 left-10 w-96 h-96 bg-greenery rounded-full mix-blend-multiply filter blur-3xl opacity-10 transform -translate-x-1/2"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Header -->
        <div class="text-center mb-16" data-aos="fade-down">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4">Karya <span class="text-greenery">Terbaik</span></h1>
            <div class="w-24 h-1.5 bg-gradient-to-r from-rain to-greenery mx-auto rounded-full"></div>
            <p class="mt-6 text-gray-400 text-lg max-w-2xl mx-auto">Eksplorasi proyek-proyek inovatif yang telah saya kerjakan. Dari aplikasi web kompleks hingga desain yang berpusat pada pengguna.</p>
        </div>

        <!-- Portfolio Grid (1 col mobile, 3 col desktop) -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse ($projects as $index => $project)
            <a href="{{ route('projects.show', $project->id) }}" class="block group" data-aos="fade-up" data-aos-delay="{{ ($index % 3) * 100 }}">
                <div class="bg-cadet-blue rounded-2xl overflow-hidden shadow-[0_4px_20px_rgba(0,0,0,0.3)] transition-all duration-500 transform group-hover:-translate-y-3 group-hover:shadow-[0_20px_40px_rgba(111,185,143,0.3)] h-full flex flex-col border border-rain/30 group-hover:border-greenery/70 relative">
                    
                    <!-- Image Area -->
                    <div class="h-56 relative overflow-hidden bg-[#011415] flex items-center justify-center z-10">
                        @if($project->image)
                            <img src="{{ $project->image }}" alt="{{ $project->title }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        @else
                            <img src="https://via.placeholder.com/400x250/004445/6FB98F?text={{ urlencode(Str::limit($project->title, 15)) }}" alt="{{ $project->title }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        @endif
                        
                        <!-- Overlay Category -->
                        <div class="absolute top-4 left-4 z-20">
                            <span class="bg-blue-black/90 backdrop-blur-md text-greenery text-xs font-bold px-3 py-1.5 rounded-full border border-greenery/40 shadow-lg">
                                {{ $project->category }}
                            </span>
                        </div>
                    </div>

                    <!-- Content Area -->
                    <div class="p-6 flex-grow flex flex-col z-10 bg-cadet-blue">
                        <h3 class="text-xl font-bold text-white mb-3 group-hover:text-greenery transition-colors duration-300">{{ $project->title }}</h3>
                        <p class="text-gray-300 text-sm flex-grow line-clamp-2 leading-relaxed mb-4">
                            {{ Str::limit(strip_tags($project->description), 100) }}
                        </p>
                        
                        <div class="mt-auto pt-4 border-t border-rain/40 flex justify-between items-center">
                            <span class="text-gray-400 text-xs font-medium flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-rain" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                {{ $project->completion_date ? $project->completion_date->format('M Y') : 'Ongoing' }}
                            </span>
                            <span class="text-greenery text-sm font-semibold flex items-center group-hover:translate-x-2 transition-transform duration-300">
                                Detail
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </span>
                        </div>
                    </div>
                </div>
            </a>
            @empty
            <div class="col-span-full text-center py-20 bg-cadet-blue/30 rounded-3xl border border-rain/30" data-aos="fade-up">
                <svg class="w-20 h-20 text-rain/50 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                <h3 class="text-2xl font-bold text-gray-300 mb-2">Belum ada proyek</h3>
                <p class="text-gray-400">Silakan tambahkan proyek melalui seeder atau database.</p>
            </div>
            @endforelse
        </div>
    </div>
</div>
@endsection

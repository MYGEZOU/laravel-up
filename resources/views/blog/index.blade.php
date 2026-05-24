@extends('layouts.app')

@section('title', 'Blog & Artikel - Portofolio Darz')
@section('description', 'Kumpulan tulisan, tutorial, dan artikel terkait web development, teknologi, serta cerita perjalanan karir saya.')

@section('content')
<div class="bg-blue-black min-h-screen py-24 relative overflow-hidden">
    <!-- Decorative Elements -->
    <div class="absolute top-20 right-10 w-96 h-96 bg-rain rounded-full mix-blend-multiply filter blur-3xl opacity-20 transform translate-x-1/2"></div>
    <div class="absolute bottom-20 left-10 w-96 h-96 bg-greenery rounded-full mix-blend-multiply filter blur-3xl opacity-10 transform -translate-x-1/2"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Header -->
        <div class="text-center mb-16" data-aos="fade-down">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4">Blog & <span class="text-greenery">Artikel</span></h1>
            <div class="w-24 h-1.5 bg-gradient-to-r from-rain to-greenery mx-auto rounded-full"></div>
            <p class="mt-6 text-gray-400 text-lg max-w-2xl mx-auto">Berbagi pengetahuan, tutorial coding, dan wawasan seputar dunia teknologi informasi.</p>
        </div>

        <!-- Blog Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse ($posts as $index => $post)
            <a href="{{ route('blog.show', $post->slug) }}" class="block group" data-aos="fade-up" data-aos-delay="{{ ($index % 3) * 100 }}">
                <div class="bg-cadet-blue rounded-2xl overflow-hidden shadow-[0_4px_20px_rgba(0,0,0,0.3)] transition-all duration-500 transform group-hover:-translate-y-3 group-hover:shadow-[0_20px_40px_rgba(111,185,143,0.3)] h-full flex flex-col border border-rain/30 group-hover:border-greenery/70">
                    
                    <!-- Image Area -->
                    <div class="h-48 relative overflow-hidden bg-[#011415] flex items-center justify-center">
                        @if($post->image)
                            <img src="{{ $post->image }}" alt="{{ $post->title }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        @else
                            <div class="absolute inset-0 bg-gradient-to-br from-[#011415] to-blue-black opacity-80"></div>
                            <svg class="w-12 h-12 text-rain/50 transition-transform duration-700 group-hover:scale-125 group-hover:text-greenery/70" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                        @endif
                    </div>

                    <!-- Content Area -->
                    <div class="p-6 flex-grow flex flex-col bg-cadet-blue">
                        <div class="flex items-center gap-2 mb-3 text-xs font-semibold text-greenery tracking-wider uppercase">
                            <span>Blog</span>
                            <span>&bull;</span>
                            <span>{{ $post->published_at->format('d M Y') }}</span>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3 group-hover:text-greenery transition-colors duration-300 leading-tight">{{ $post->title }}</h3>
                        <p class="text-gray-300 text-sm flex-grow line-clamp-3 leading-relaxed mb-4">
                            {{ Str::limit(strip_tags($post->content), 120) }}
                        </p>
                        
                        <div class="mt-auto flex items-center text-greenery text-sm font-semibold group-hover:translate-x-2 transition-transform duration-300">
                            Baca Selengkapnya
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </div>
                    </div>
                </div>
            </a>
            @empty
            <div class="col-span-full text-center py-20 bg-cadet-blue/30 rounded-3xl border border-rain/30" data-aos="fade-up">
                <svg class="w-20 h-20 text-rain/50 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                <h3 class="text-2xl font-bold text-gray-300 mb-2">Belum ada artikel</h3>
                <p class="text-gray-400">Nantikan artikel-artikel menarik selanjutnya.</p>
            </div>
            @endforelse
        </div>
        
        <!-- Pagination (if exists) -->
        <div class="mt-12 flex justify-center">
            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection

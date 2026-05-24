@extends('layouts.app')

@section('title', $post->title . ' - Blog Darz')
@section('description', Str::limit(strip_tags($post->content), 150))

@section('content')
<div class="bg-blue-black min-h-screen py-24 relative overflow-hidden">
    <!-- Decorative Elements -->
    <div class="absolute top-0 right-0 w-full h-96 bg-gradient-to-b from-cadet-blue/30 to-blue-black z-0"></div>
    
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Back button -->
        <a href="{{ route('blog.index') }}" class="inline-flex items-center text-gray-400 hover:text-greenery mb-10 transition-colors group bg-blue-black/50 backdrop-blur-sm px-4 py-2 rounded-full border border-rain/30" data-aos="fade-right">
            <svg class="w-5 h-5 mr-2 transform group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            Kembali ke Blog
        </a>

        <!-- Header Info -->
        <div class="mb-10 text-center md:text-left" data-aos="fade-up">
            <div class="flex flex-wrap items-center justify-center md:justify-start gap-3 mb-6 text-sm">
                <span class="text-greenery font-bold uppercase tracking-wider">Artikel</span>
                <span class="text-gray-500">&bull;</span>
                <span class="text-gray-400 flex items-center gap-1.5">
                    <svg class="w-4 h-4 text-rain" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    {{ $post->published_at->format('d F Y') }}
                </span>
            </div>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white leading-tight tracking-tight">{{ $post->title }}</h1>
        </div>

        <!-- Image -->
        @if($post->image)
        <div class="rounded-3xl overflow-hidden mb-12 shadow-[0_20px_50px_rgba(0,68,69,0.3)] border border-rain/30 aspect-video" data-aos="zoom-in" data-aos-duration="1000">
            <img src="{{ $post->image }}" alt="{{ $post->title }}" class="w-full h-full object-cover">
        </div>
        @endif

        <!-- Content -->
        <div class="bg-cadet-blue/20 p-8 md:p-12 rounded-3xl border border-rain/20 shadow-xl backdrop-blur-sm" data-aos="fade-up">
            <div class="prose prose-invert prose-lg prose-greenery max-w-none text-gray-300 leading-loose">
                {!! nl2br(e($post->content)) !!}
            </div>
            
            <!-- Share -->
            <div class="mt-12 pt-8 border-t border-rain/30 flex items-center justify-between">
                <h4 class="text-white font-bold text-lg">Bagikan Artikel Ini</h4>
                <div class="flex gap-3">
                    <button class="w-10 h-10 rounded-full bg-blue-black flex items-center justify-center text-white border border-cadet-blue hover:bg-greenery hover:border-greenery transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                    </button>
                    <button class="w-10 h-10 rounded-full bg-blue-black flex items-center justify-center text-white border border-cadet-blue hover:bg-greenery hover:border-greenery transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

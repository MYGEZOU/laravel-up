@extends('layouts.app')

@section('title', 'Portofolio Darz - Full Stack Developer')
@section('description', 'Portofolio digital Darz, seorang Full Stack Developer yang berfokus pada pengalaman digital luar biasa dan inovatif.')

@section('content')
<x-hero />

<section id="tentang" class="py-20 bg-[#011415]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Tentang <span class="text-greenery">Saya</span></h2>
            <div class="w-24 h-1 bg-gradient-to-r from-rain to-greenery mx-auto rounded-full"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div data-aos="fade-right">
                <div class="aspect-square rounded-2xl bg-gradient-to-tr from-cadet-blue to-blue-black p-1 shadow-2xl relative">
                    <div class="w-full h-full rounded-xl bg-blue-black/80 flex items-center justify-center border border-rain/30">
                        <span class="text-rain text-9xl font-bold opacity-20">D</span>
                    </div>
                </div>
            </div>
            <div data-aos="fade-left">
                <h3 class="text-2xl font-semibold mb-4 text-white">Full Stack Developer & AI Enthusiast</h3>
                <p class="text-gray-400 mb-6 leading-relaxed">
                    Sejak pertama kali menulis baris kode pertama, saya terpikat oleh kemungkinan tak terbatas dari dunia digital. Saya memadukan keindahan antarmuka pengguna dengan kekuatan algoritma backend yang efisien — mulai dari proyek web app berbasis Laravel hingga sistem prediksi berbasis AI.
                </p>
                <div class="grid grid-cols-2 gap-4 mb-6">
                    <div class="bg-blue-black p-4 rounded-xl border border-cadet-blue/30">
                        <h4 class="text-greenery font-bold text-xl mb-1">3+</h4>
                        <p class="text-gray-400 text-sm">Proyek Live</p>
                    </div>
                    <div class="bg-blue-black p-4 rounded-xl border border-cadet-blue/30">
                        <h4 class="text-greenery font-bold text-xl mb-1">92%</h4>
                        <p class="text-gray-400 text-sm">Akurasi AI Model</p>
                    </div>
                </div>
                <a href="{{ route('about') }}" class="inline-flex items-center gap-2 text-greenery font-semibold hover:underline group">
                    Pelajari Lebih Lanjut
                    <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>
        </div>
    </div>
</section>

<section id="portofolio" class="py-20 bg-blue-black">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Karya <span class="text-greenery">Terbaru</span></h2>
            <div class="w-24 h-1 bg-gradient-to-r from-rain to-greenery mx-auto rounded-full"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @forelse ($projects as $index => $project)
            <div class="bg-[#011415] rounded-xl overflow-hidden group border border-cadet-blue/20 hover:border-greenery/50 transition-all flex flex-col h-full" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                <div class="h-48 bg-cadet-blue relative overflow-hidden flex items-center justify-center">
                    @if($project->image)
                        <img src="{{ $project->image }}" alt="{{ $project->title }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    @else
                        <img src="https://via.placeholder.com/400x250/004445/6FB98F?text={{ urlencode(Str::limit($project->title, 15)) }}" alt="{{ $project->title }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    @endif
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-black to-transparent opacity-60"></div>
                </div>
                <div class="p-6 relative flex-grow flex flex-col justify-between">
                    <div>
                        <span class="text-greenery text-xs font-bold uppercase tracking-wider block mb-2">{{ $project->category }}</span>
                        <h3 class="text-xl font-bold text-white mb-2 group-hover:text-greenery transition-colors">{{ $project->title }}</h3>
                        <p class="text-gray-400 text-sm mb-4 leading-relaxed line-clamp-3">{{ Str::limit(strip_tags($project->description), 100) }}</p>
                    </div>
                    <a href="{{ route('projects.show', $project->id) }}" class="text-rain hover:text-greenery text-sm font-semibold inline-flex items-center group/link mt-auto">
                        Lihat Detail
                        <svg class="w-4 h-4 ml-1 group-hover/link:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                </div>
            </div>
            @empty
            <div class="col-span-3 text-center text-gray-400">Belum ada karya terbaru.</div>
            @endforelse
        </div>
        <div class="text-center mt-12">
            <a href="{{ route('projects.index') }}" class="inline-flex items-center gap-2 px-6 py-3 border-2 border-greenery hover:bg-greenery hover:text-white text-greenery font-bold rounded-full transition-all duration-300">
                Lihat Semua Portofolio
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
            </a>
        </div>
    </div>
</section>

<section id="kontak" class="py-20 bg-gradient-to-b from-[#011415] to-blue-black relative">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        @if(session('success'))
        <div class="mb-8 bg-greenery/20 border border-greenery text-greenery px-6 py-4 rounded-xl flex items-center shadow-lg" data-aos="fade-in">
            <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            <span class="font-medium">{{ session('success') }}</span>
        </div>
        @endif

        <div class="bg-blue-black/50 backdrop-blur-sm border border-cadet-blue/30 p-8 md:p-12 rounded-3xl shadow-2xl" data-aos="zoom-in">
            <div class="text-center mb-10">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Mulai <span class="text-greenery">Proyek</span> Bersama</h2>
                <p class="text-gray-400">Punya ide proyek hebat? Mari kita bicarakan!</p>
            </div>
            <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-300 mb-2">Nama</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" class="w-full bg-[#011415] border @error('name') border-red-500 @else border-cadet-blue/50 @enderror rounded-lg px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-greenery/50 focus:border-greenery transition-all" placeholder="John Doe">
                        @error('name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-300 mb-2">Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" class="w-full bg-[#011415] border @error('email') border-red-500 @else border-cadet-blue/50 @enderror rounded-lg px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-greenery/50 focus:border-greenery transition-all" placeholder="john@example.com">
                        @error('email')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="message" class="block text-sm font-medium text-gray-300 mb-2">Pesan</label>
                    <textarea id="message" name="message" rows="4" class="w-full bg-[#011415] border @error('message') border-red-500 @else border-cadet-blue/50 @enderror rounded-lg px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-greenery/50 focus:border-greenery transition-all resize-none" placeholder="Ceritakan tentang proyek Anda...">{{ old('message') }}</textarea>
                    @error('message')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="w-full bg-gradient-to-r from-rain to-cadet-blue hover:from-greenery hover:to-rain text-white font-bold py-3 px-6 rounded-lg transition-all transform hover:-translate-y-0.5 shadow-lg shadow-greenery/20">
                    Kirim Pesan
                </button>
            </form>
        </div>
    </div>
</section>

<style>
    @keyframes blob {
        0% { transform: translate(0px, 0px) scale(1); }
        33% { transform: translate(30px, -50px) scale(1.1); }
        66% { transform: translate(-20px, 20px) scale(0.9); }
        100% { transform: translate(0px, 0px) scale(1); }
    }
    .animate-blob {
        animation: blob 7s infinite;
    }
    .animation-delay-2000 {
        animation-delay: 2s;
    }
    .animation-delay-4000 {
        animation-delay: 4s;
    }
</style>
@endsection

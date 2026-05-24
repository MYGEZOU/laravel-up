{{-- resources/views/contact/index.blade.php --}}
@extends('layouts.app')

@section('title', 'Hubungi Darz - Mari Berkolaborasi')
@section('description', 'Punya ide proyek hebat? Mari berkolaborasi! Hubungi Darz sekarang melalui formulir atau email pribadi.')

@section('content')
<div class="bg-cadet-blue min-h-screen py-24 relative overflow-hidden">
    <!-- Decorative Elements -->
    <div class="absolute top-0 right-0 w-full h-96 bg-gradient-to-b from-blue-black/50 to-cadet-blue z-0"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-greenery rounded-full mix-blend-multiply filter blur-3xl opacity-10"></div>
    
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Header -->
        <div class="text-center mb-16" data-aos="fade-down">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4">Mulai <span class="text-greenery">Proyek</span> Bersama</h1>
            <div class="w-24 h-1.5 bg-gradient-to-r from-rain to-greenery mx-auto rounded-full"></div>
            <p class="mt-6 text-gray-300 text-lg">Tertarik untuk bekerja sama atau sekadar ingin menyapa? Kirim pesan melalui formulir di bawah ini.</p>
        </div>

        @if(session('success'))
        <div class="max-w-4xl mx-auto mb-8 bg-greenery/20 border border-greenery text-greenery px-6 py-4 rounded-xl flex items-center shadow-lg" data-aos="fade-in">
            <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            <span class="font-medium">{{ session('success') }}</span>
        </div>
        @endif

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Form Section -->
            <div class="lg:col-span-2 bg-blue-black/50 backdrop-blur-md p-8 md:p-12 rounded-3xl shadow-2xl border border-rain/30" data-aos="fade-right">
                <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-300 mb-2">Nama Lengkap</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" class="w-full bg-[#011415] border @error('name') border-red-500 @else border-cadet-blue/50 @enderror rounded-xl px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-greenery/50 focus:border-greenery transition-all shadow-inner" placeholder="John Doe">
                            @error('name')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-300 mb-2">Alamat Email</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" class="w-full bg-[#011415] border @error('email') border-red-500 @else border-cadet-blue/50 @enderror rounded-xl px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-greenery/50 focus:border-greenery transition-all shadow-inner" placeholder="john@example.com">
                            @error('email')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-300 mb-2">Pesan Anda</label>
                        <textarea id="message" name="message" rows="6" class="w-full bg-[#011415] border @error('message') border-red-500 @else border-cadet-blue/50 @enderror rounded-xl px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-greenery/50 focus:border-greenery transition-all resize-none shadow-inner" placeholder="Ceritakan tentang ide atau kebutuhan Anda...">{{ old('message') }}</textarea>
                        @error('message')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" class="w-full bg-greenery hover:bg-rain text-white font-bold py-4 px-6 rounded-xl transition-all transform hover:-translate-y-1 shadow-[0_4px_15px_rgba(111,185,143,0.4)] hover:shadow-[0_8px_25px_rgba(44,120,115,0.6)] flex justify-center items-center gap-2">
                        Kirim Pesan Sekarang
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>
                    </button>
                </form>
            </div>

            <!-- Alternative Contact Info -->
            <div class="space-y-8" data-aos="fade-left" data-aos-delay="200">
                <div class="bg-blue-black/50 backdrop-blur-md p-8 rounded-3xl shadow-xl border border-rain/30">
                    <h3 class="text-2xl font-bold text-white mb-6">Alternatif Kontak</h3>
                    <p class="text-gray-300 mb-8 leading-relaxed">Selain formulir di samping, Anda juga dapat menjangkau saya secara langsung melalui email atau media sosial profesional di bawah ini.</p>
                    
                    <div class="space-y-6">
                        <!-- Email -->
                        <a href="mailto:darzkine@example.com" class="flex items-center group">
                            <div class="w-12 h-12 bg-cadet-blue rounded-full flex items-center justify-center text-greenery group-hover:bg-greenery group-hover:text-white transition-all duration-300 shadow-md">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm text-gray-400 font-medium">Email Pribadi</p>
                                <p class="text-white font-semibold group-hover:text-greenery transition-colors">darzkine@example.com</p>
                            </div>
                        </a>
                        
                        <!-- LinkedIn -->
                        <a href="https://linkedin.com/in/darz" target="_blank" rel="noopener noreferrer" class="flex items-center group">
                            <div class="w-12 h-12 bg-cadet-blue rounded-full flex items-center justify-center text-greenery group-hover:bg-greenery group-hover:text-white transition-all duration-300 shadow-md">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm text-gray-400 font-medium">LinkedIn</p>
                                <p class="text-white font-semibold group-hover:text-greenery transition-colors">Darz Kine</p>
                            </div>
                        </a>
                        
                        <!-- GitHub -->
                        <a href="https://github.com/darz" target="_blank" rel="noopener noreferrer" class="flex items-center group">
                            <div class="w-12 h-12 bg-cadet-blue rounded-full flex items-center justify-center text-greenery group-hover:bg-greenery group-hover:text-white transition-all duration-300 shadow-md">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm text-gray-400 font-medium">GitHub</p>
                                <p class="text-white font-semibold group-hover:text-greenery transition-colors">@darz</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

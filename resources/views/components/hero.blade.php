{{-- resources/views/components/hero.blade.php --}}
<div class="relative bg-blue-black min-h-screen flex items-center justify-center overflow-hidden">
    <!-- Decorative glow -->
    <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-cadet-blue rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse"></div>
    <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-rain rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse" style="animation-delay: 2s;"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center" data-aos="fade-up" data-aos-duration="1000">
        <h2 class="text-greenery font-bold tracking-widest uppercase mb-4 text-sm md:text-base">Halo, saya</h2>
        <h1 class="text-5xl md:text-7xl font-extrabold text-white mb-6 tracking-tight">
            Darzkine
        </h1>
        <h3 class="text-2xl md:text-4xl font-semibold text-gray-300 mb-8">
            Full Stack Developer & AI Enthusiast
        </h3>
        <p class="mt-4 text-xl text-gray-400 max-w-2xl mx-auto mb-10 leading-relaxed">
            Membangun solusi digital elegan dengan performa tinggi, dari backend Laravel hingga kecerdasan buatan.
        </p>
        
        <div class="flex justify-center gap-4">
            <a href="/#portofolio" class="px-8 py-4 bg-greenery hover:bg-rain text-white font-bold rounded-full transition-all transform hover:-translate-y-1 hover:shadow-[0_10px_20px_rgba(111,185,143,0.3)] duration-300">
                Jelajahi Karya Saya
            </a>
            <a href="{{ route('contact.index') }}" class="px-8 py-4 bg-transparent border-2 border-cadet-blue hover:border-greenery text-gray-300 hover:text-white font-bold rounded-full transition-all duration-300">
                Hubungi Saya
            </a>
        </div>
    </div>
</div>

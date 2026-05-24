@extends('layouts.app')

@section('title', 'Testimoni & Review - Portofolio Darz')
@section('description', 'Apa kata klien dan rekan kerja tentang pengalaman mereka bekerja sama dengan Darz.')

@section('content')
<div class="bg-blue-black min-h-screen py-24 relative overflow-hidden">
    <!-- Decorative Elements -->
    <div class="absolute top-40 left-10 w-96 h-96 bg-greenery rounded-full mix-blend-multiply filter blur-3xl opacity-10 animate-blob"></div>
    <div class="absolute bottom-20 right-10 w-96 h-96 bg-rain rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-2000"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Header -->
        <div class="text-center mb-16" data-aos="fade-down">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4">Apa Kata <span class="text-greenery">Mereka</span></h1>
            <div class="w-24 h-1.5 bg-gradient-to-r from-rain to-greenery mx-auto rounded-full"></div>
            <p class="mt-6 text-gray-400 text-lg max-w-2xl mx-auto">Pengalaman dan testimoni langsung dari klien serta rekan kerja yang pernah berkolaborasi bersama saya.</p>
        </div>

        <!-- Testimonial Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse ($testimonials as $index => $testimonial)
            <div class="bg-cadet-blue rounded-3xl p-8 shadow-xl relative border border-rain/30 hover:border-greenery/50 transition-colors duration-300" data-aos="fade-up" data-aos-delay="{{ ($index % 3) * 150 }}">
                <!-- Quote Icon -->
                <div class="absolute top-6 right-8 text-rain/30">
                    <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                        <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                    </svg>
                </div>
                
                <p class="text-gray-200 text-lg leading-relaxed mb-8 relative z-10 italic">
                    "{{ $testimonial->quote }}"
                </p>
                
                <div class="flex items-center gap-4 mt-auto">
                    <div class="w-12 h-12 rounded-full bg-blue-black flex items-center justify-center border-2 border-greenery overflow-hidden shadow-lg">
                        @if($testimonial->photo)
                            <img src="{{ $testimonial->photo }}" alt="{{ $testimonial->name }}" class="w-full h-full object-cover">
                        @else
                            <span class="text-greenery font-bold text-lg">{{ substr($testimonial->name, 0, 1) }}</span>
                        @endif
                    </div>
                    <div>
                        <h4 class="text-white font-bold">{{ $testimonial->name }}</h4>
                        <p class="text-greenery text-sm font-medium">{{ $testimonial->role }}</p>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center py-12">
                <p class="text-gray-400">Belum ada testimoni saat ini.</p>
            </div>
            @endforelse
        </div>
    </div>
</div>

<style>
    @keyframes blob {
        0% { transform: translate(0px, 0px) scale(1); }
        33% { transform: translate(30px, -50px) scale(1.1); }
        66% { transform: translate(-20px, 20px) scale(0.9); }
        100% { transform: translate(0px, 0px) scale(1); }
    }
    .animate-blob { animation: blob 7s infinite; }
    .animation-delay-2000 { animation-delay: 2s; }
</style>
@endsection

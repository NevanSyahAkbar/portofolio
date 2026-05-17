@extends('layouts.app')

@section('title', 'About Nevan | Story')

@section('content')
<main class="bg-dark-obsidian pt-32 pb-20">

    <section class="container mx-auto px-10 mb-32">
        <div class="container mx-auto grid lg:grid-cols-12 gap-10 items-center relative z-10 px-10">
            <div class="lg:col-span-5 flex justify-center lg:justify-end" data-aos="fade-right">
                <div class="relative group w-full max-w-[300px]">
                    <div class="absolute -inset-1 bg-gold-glow/20 blur-2xl rounded-2xl opacity-0 group-hover:opacity-100 transition duration-1000"></div>
                    <div class="relative bg-[#121212] border border-white/10 rounded-2xl overflow-hidden aspect-square shadow-2xl">
                        <img src="{{ asset('images/Nevan.jpeg') }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-105 transition duration-700">
                    </div>
                    <div class="absolute -bottom-3 -right-3 bg-gold-glow text-black text-[10px] font-black px-4 py-1 rounded-full shadow-lg z-30">EST. 2026</div>
                </div>
            </div>
            <div class="lg:col-span-7 space-y-6 text-center lg:text-left" data-aos="fade-left">
                <h2 class="text-gold-glow font-black tracking-[0.3em] uppercase text-[10px]">Who is Nevan?</h2>
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-black italic uppercase tracking-tighter leading-[0.9]">
                    Hi! I'm <span class="text-transparent bg-clip-text bg-gradient-to-r from-white to-gray-500">Nevan</span>
                </h1>
                <p class="text-gray-400 text-base md:text-lg leading-relaxed font-light italic max-w-xl mx-auto lg:mx-0">
                    "Saya adalah Software Developer yang percaya bahwa teknologi adalah jembatan antara imajinasi dan realitas. Dengan spesialisasi di website, saya fokus membangun sistem yang cerdas namun tetap indah dipandang."
                </p>
            </div>
        </div>
    </section>

    <section class="bg-white/[0.02] py-24 border-y border-white/5">
        <div class="container mx-auto px-10">
            <div class="text-center mb-16">
                <h3 class="text-[10px] uppercase tracking-[0.4em] text-gray-500 font-bold">What I Do</h3>
            </div>

            <div class="flex flex-wrap md:flex-nowrap justify-center gap-12 text-center">

                <div class="max-w-xs space-y-4" data-aos="fade-up">
                    <h4 class="text-xl font-bold italic tracking-tight text-gold-glow uppercase">SOFTWARE DEVELOPMENT</h4>
                    <p class="text-gray-500 text-sm font-light leading-relaxed">
                        Membangun arsitektur FullStack yang kokoh menggunakan Laravel & MySQL yang terintegrasi API.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <section class="container mx-auto px-10 py-32 space-y-40 border-b border-white/5">
        <div class="flex flex-col lg:flex-row items-center gap-16">
            <div class="lg:w-1/2 space-y-6" data-aos="fade-right">
                <h4 class="text-gold-glow text-xs font-black tracking-widest uppercase">2025 - Internship</h4>
                <h2 class="text-4xl font-black italic tracking-tighter uppercase leading-none">PT. Pelabuhan Indonesia (Persero) Regional 2</h2>
                <p class="text-gray-400 leading-relaxed font-light">Saya berperan sebagai Full-stack Developer dalam pengembangan Simona di PT Pelindo Regional 2 Tanjung Priok. Fokus utama saya adalah mendigitalisasi pengelolaan data alat dan administrasi pelabuhan ke dalam satu platform yang efisien. Dengan framework Laravel, saya membangun sistem database serta fitur bulk actions untuk mempercepat alur kerja operasional. Pengalaman ini mengasah kemampuan saya dalam mentransformasi kebutuhan industri logistik ke dalam solusi teknologi yang aplikatif.</p>

            </div>
            <div class="lg:w-1/2" data-aos="fade-left">
                <div class="bg-[#121212] rounded-xl overflow-hidden border border-white/5 shadow-2xl">
                    <img src="{{ asset('images/Pelindo.jpg') }}" class="w-full grayscale hover:grayscale-0 transition duration-700">
                </div>
            </div>
        </div>

        <div class="flex flex-col lg:flex-row-reverse items-center gap-16">
            <div class="lg:w-1/2 space-y-6" data-aos="fade-left">
                <h4 class="text-purple-500 text-xs font-black tracking-widest uppercase">Asisten Praktikum</h4>
                <h2 class="text-4xl font-black italic tracking-tighter uppercase leading-none">PIC Praktikum Pemograman Web</h2>
                <p class="text-gray-400 leading-relaxed font-light">Saya dipercaya untuk mengelola operasional praktikum secara keseluruhan—mulai dari perencanaan hingga eksekusi di lapangan. Fokus utama saya adalah memastikan komunikasi antara dosen, tim asisten, dan mahasiswa berjalan lancar, sambil tetap menjaga agar setiap materi praktikum tersampaikan sesuai standar kualitas akademik yang ada.</p>

            </div>
            <div class="lg:w-1/2" data-aos="fade-right">
                <div class="bg-[#121212] rounded-xl overflow-hidden border border-white/5 shadow-2xl">
                    <img src="{{ asset('images/PIC.jpg') }}" class="w-full grayscale hover:grayscale-0 transition duration-700">
                </div>
            </div>
        </div>

        <div class="flex flex-col lg:flex-row items-center gap-16">
        <div class="lg:w-1/2 space-y-8" data-aos="fade-right">
            <div class="space-y-2">
                <h4 class="text-gold-glow text-xs font-black tracking-widest uppercase">Research</h4>
                <h2 class="text-4xl font-black italic tracking-tighter uppercase leading-none text-white">Machine Learning</h2>
            </div>

            <p class="text-gray-400 leading-relaxed font-light">
                TikTok telah menjadi salah satu platform populer bagi pengguna untuk berbagi opini dan pengalaman. Namun, ulasan di platform ini sering menggunakan bahasa informal dan tidak konsisten sehingga analisis sentimen menjadi tantangan. Penelitian sebelumnya masih banyak berfokus pada metode pembelajaran mesin tradisional atau model pra-terlatih umum, dengan sedikit perhatian pada karakteristik linguistik pengguna Indonesia.
            </p>

            <div class="pt-4">
                <a href="https://ieeexplore.ieee.org/document/11413778?denied=" target="_blank" class="inline-flex items-center gap-3 group">
                    <span class="text-[10px] font-black uppercase tracking-[0.3em] text-white group-hover:text-gold-glow transition-colors">
                        Show More
                    </span>
                    <div class="w-10 h-[1px] bg-white/20 group-hover:w-16 group-hover:bg-gold-glow transition-all duration-500"></div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 text-gold-glow opacity-0 -translate-x-3 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-500">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg>
                </a>
            </div>
        </div>

    <div class="lg:w-1/2" data-aos="fade-left">
        <div class="bg-[#121212] rounded-xl overflow-hidden border border-white/5 shadow-2xl group">
            <img src="{{ asset('images/random.png') }}" class="w-full grayscale group-hover:grayscale-0 group-hover:scale-105 transition duration-700">
        </div>
    </div>
</div>
        <div class="flex flex-col lg:flex-row-reverse items-center gap-16">
            <div class="lg:w-1/2 space-y-6" data-aos="fade-left">
                <h4 class="text-purple-500 text-xs font-black tracking-widest uppercase">Organisasi</h4>
                <h2 class="text-4xl font-black italic tracking-tighter uppercase leading-none">Himpunan Mahasiswa Teknologi Informasi</h2>
                <p class="text-gray-400 leading-relaxed font-light">HMIT berperan mendukung pengembangan akademik dan profesional mahasiswa Teknologi Informasi melalui pembelajaran, jejaring, dan kontribusi sosial. Bidang olahraga menjadi wadah penyaluran minat bakat, menjaga kebugaran, serta memperkuat solidaritas mahasiswa.</p>
            </div>
            <div class="lg:w-1/2" data-aos="fade-right">
                <div class="bg-[#121212] rounded-xl overflow-hidden border border-white/5 shadow-2xl">
                    <img src="{{ asset('images/orga.jpeg') }}" class="w-full grayscale hover:grayscale-0 transition duration-700">
                </div>
            </div>
        </div>
    </section>

<section class="py-24 bg-dark-obsidian">
    <div class="container mx-auto px-10">
        <div class="text-center mb-16" data-aos="fade-down">
            <h3 class="text-[10px] uppercase tracking-[0.4em] text-gold-glow font-black">Tech Stack</h3>
            <h2 class="text-3xl font-black italic text-white uppercase mt-2">Tools & Skills</h2>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-5 gap-4 md:gap-6">
           @php
                $skills = [
                    ['name' => 'Laravel', 'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg'],
                    ['name' => 'PHP', 'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg'],
                    ['name' => 'Python', 'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg'],
                    ['name' => 'MySQL', 'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg'],
                    ['name' => 'Tailwind', 'icon' => 'tailwind-svg'],
                    ['name' => 'HTML+CSS', 'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg'],
                    ['name' => 'Javascript', 'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg'],
                    ['name' => 'Rest API', 'icon' => 'https://www.vectorlogo.zone/logos/getpostman/getpostman-icon.svg'], // Menggunakan logo Postman sebagai representasi
                    ['name' => 'Java', 'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/java/java-original.svg'],
                    ['name' => 'Figma', 'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/figma/figma-original.svg'],
                    ['name' => 'Git', 'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original.svg'],
                ];
            @endphp
            @foreach($skills as $skill)
            <div class="skill-card group" data-aos="zoom-in">
                <div class="relative z-10 flex flex-col items-center justify-center">
                    <div class="w-12 h-12 mb-3 flex items-center justify-center">
                        @if($skill['icon'] == 'tailwind-svg')
                            <svg class="w-10 h-10 transition-transform duration-500 group-hover:scale-110 group-hover:drop-shadow-[0_0_8px_rgba(56,189,248,0.5)]" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.001 7.425c-2.454 0-3.926 1.227-4.417 3.682 1.104-1.473 2.454-1.964 4.049-1.473.91.281 1.56.88 2.28 1.577 1.173 1.135 2.531 2.45 5.505 2.45 2.454 0 3.926-1.227 4.417-3.682-1.104 1.473-2.454 1.964-4.049 1.473-.91-.281-1.56-.88-2.28-1.577-1.173-1.135-2.531-2.45-5.505-2.45zm-6.618 5.89c-2.454 0-3.926 1.227-4.417 3.682 1.104-1.473 2.454-1.964 4.049-1.473.91.281 1.56.88 2.28 1.577 1.173 1.135 2.531 2.45 5.505 2.45 2.454 0 3.926-1.227 4.417-3.682-1.104 1.473-2.454 1.964-4.049 1.473-.91-.281-1.56-.88-2.28-1.577-1.173-1.135-2.531-2.45-5.505-2.45z" fill="#38BDF8"/>
                            </svg>
                        @else
                            <img src="{{ $skill['icon'] }}" alt="{{ $skill['name'] }}" class="w-10 h-10 object-contain transition-transform duration-500 group-hover:scale-110">
                        @endif
                    </div>
                    <span class="text-[8px] md:text-[9px] font-black uppercase tracking-[0.2em] text-gray-500 group-hover:text-white transition-colors duration-500 text-center leading-none">
                        {{ $skill['name'] }}
                    </span>
                </div>
                <div class="absolute inset-0 bg-white/[0.02] border border-white/5 rounded-xl group-hover:bg-white/[0.04] group-hover:border-gold-glow/30 transition-all duration-500 shadow-xl"></div>
            </div>
            @endforeach
        </div>
    </div>
</section>

    <section class="container mx-auto px-10 py-20 text-center">
        <h2 class="text-3xl font-black italic tracking-tighter uppercase mb-8">Let's Work <span class="text-gold-glow">Together</span></h2>
        <a href="{{ url('/contact') }}"
            class="{{ Request::is('contact')
            ? 'bg-white text-black border-b-2 border-gold-glow'
            : 'text-gray-500 hover:bg-white/10' }}
          px-4 py-2 rounded-lg font-bold transition-all duration-300">
            Contact me
        </a>
    </section>

</main>
@endsection

@push('scripts')
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        once: true,
    });
</script>
@endpush

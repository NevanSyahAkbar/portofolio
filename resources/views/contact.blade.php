@extends('layouts.app')

@section('title', 'Contact | NevanCode')

@section('content')
<main class="bg-[#080808] min-h-screen pt-32 pb-20 overflow-hidden relative">

    <div class="fixed inset-0 pointer-events-none z-0">
        <div class="absolute inset-0 opacity-[0.05]"
             style="background-image: url('data:image/svg+xml,%3Csvg width=\'80\' height=\'80\' viewBox=\'0 0 80 80\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath d=\'M0 0h80v80H0z\' fill=\'none\'/%3E%3Cpath d=\'M10 10h20v1H10zM10 10v20h1V10zM50 50h20v1H50zM50 50v20h1V50z\' fill=\'%23d4af37\' fill-opacity=\'0.4\'/%3E%3C/svg%3E');">
        </div>

        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
            <div class="w-[1000px] h-[1000px] bg-[#d4af37] opacity-[0.07] blur-[150px] rounded-full"></div>
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-[#d4af37] opacity-[0.12] blur-[100px] rounded-full"></div>
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[300px] h-[300px] bg-[#d4af37] opacity-[0.2] blur-[60px] rounded-full"></div>
        </div>

        <div class="absolute inset-0">
            <div class="particle p1"></div>
            <div class="particle p2"></div>
            <div class="particle p3"></div>
            <div class="particle p4"></div>
            <div class="particle p5"></div>
            <div class="particle p6"></div>
        </div>
    </div>

    <div class="container mx-auto px-10 relative z-10 h-full flex flex-col justify-center">

        <div class="mb-24 text-center" data-aos="fade-down">
            <h4 class="text-gold-glow font-black tracking-[0.4em] uppercase text-[10px] mb-6">Available for Projects</h4>
            <div class="h-[1px] w-24 bg-gold-glow mx-auto opacity-40 shadow-[0_0_10px_#d4af37]"></div>
        </div>

        <div class="max-w-6xl mx-auto w-full grid grid-cols-1 md:grid-cols-3 gap-8 justify-items-center text-center">

            <a href="mailto:nevansyahakbar03@gmail.com" class="contact-card group w-full" data-aos="fade-up" data-aos-delay="100">
                <div class="card-content">
                    <span class="text-[9px] text-gray-500 uppercase font-black tracking-widest mb-4 block">Direct Gmail</span>
                    <h3 class="text-xl font-black italic text-white group-hover:text-gold-glow transition-all duration-500 lowercase tracking-tighter">
                        nevansyahakbar03@gmail.com
                    </h3>

                </div>
                <div class="card-glow"></div>
            </a>

            <a href="https://www.linkedin.com/in/nevan-syah-akbar/" target="_blank" class="contact-card group w-full" data-aos="fade-up" data-aos-delay="200">
                <div class="card-content">
                    <span class="text-[9px] text-gray-500 uppercase font-black tracking-widest mb-4 block">LINKEDIN</span>
                    <h3 class="text-xl font-black italic text-white group-hover:text-gold-glow transition-all duration-500 lowercase tracking-tighter">
                        Nevan Syah Akbar
                    </h3>

                </div>
                <div class="card-glow"></div>
            </a>

            <a href="https://github.com/NevanSyahAkbar" target="_blank" class="contact-card group w-full" data-aos="fade-up" data-aos-delay="300">
                <div class="card-content">
                    <span class="text-[9px] text-gray-500 uppercase font-black tracking-widest mb-4 block">GitHub</span>
                    <h3 class="text-xl font-black italic text-white group-hover:text-gold-glow transition-all duration-500 lowercase tracking-tighter">
                        @NevanSyahAkbar
                    </h3>
                </div>
                <div class="card-glow"></div>
            </a>

            <a href="https://github.com/NevanSyahAkbar" target="_blank" class="contact-card group w-full" data-aos="fade-up" data-aos-delay="300">
                <div class="card-content">
                    <span class="text-[9px] text-gray-500 uppercase font-black tracking-widest mb-4 block">Nomer</span>
                    <h3 class="text-xl font-black italic text-white group-hover:text-gold-glow transition-all duration-500 lowercase tracking-tighter">
                       whatsapp
                    </h3>
                </div>
                <div class="card-glow"></div>
            </a>
        </div>

        <div class="mt-40 flex flex-col items-center gap-4" data-aos="zoom-in">
            <div class="flex items-center gap-3 bg-white/[0.03] border border-white/10 px-8 py-3 rounded-full backdrop-blur-md">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-green-500"></span>
                </span>
                <span class="text-[10px] text-white font-black uppercase tracking-[0.3em]">Open to work</span>
            </div>
        </div>
    </div>
</main>

<style>
    /* 1. Particle Styling & Animation */
    .particle {
        position: absolute;
        width: 3px;
        height: 3px;
        background: #d4af37;
        border-radius: 50%;
        filter: blur(1px) drop-shadow(0 0 5px #d4af37);
        opacity: 0;
        animation: float 10s infinite ease-in-out;
    }

    .p1 { top: 20%; left: 15%; animation-delay: 0s; }
    .p2 { top: 60%; left: 85%; animation-delay: 2s; }
    .p3 { top: 40%; left: 50%; animation-delay: 4s; }
    .p4 { top: 80%; left: 30%; animation-delay: 1s; }
    .p5 { top: 15%; left: 75%; animation-delay: 5s; }
    .p6 { top: 70%; left: 10%; animation-delay: 3s; }

    @keyframes float {
        0% { transform: translateY(0) scale(0); opacity: 0; }
        50% { opacity: 0.6; transform: translateY(-50px) scale(1.2); }
        100% { transform: translateY(-100px) scale(0); opacity: 0; }
    }

    /* 2. Card Styling */
    .contact-card {
        @apply relative overflow-hidden bg-white/[0.01] border border-white/5 rounded-[2rem] p-12 transition-all duration-700 backdrop-blur-[2px];
    }

    .contact-card:hover {
        @apply border-gold-glow/40 -translate-y-4 bg-white/[0.03];
        box-shadow: 0 30px 60px -15px rgba(0,0,0,0.8), 0 0 20px rgba(212,175,55,0.05);
    }

    .card-content { @apply relative z-10; }

    .card-glow {
        @apply absolute inset-0 bg-gradient-to-br from-gold-glow/[0.08] to-transparent opacity-0 transition-opacity duration-700;
    }

    .contact-card:hover .card-glow { @apply opacity-100; }
</style>
@endsection

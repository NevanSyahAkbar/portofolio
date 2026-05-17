<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nevan Syah Akbar | Software Development</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'dark-obsidian': '#080808',
                        'gold-glow': '#d4af37',
                    }
                }
            }
        }
    </script>

    <style type="text/tailwindcss">
        @layer base {
            body {
                @apply bg-dark-obsidian text-white h-screen overflow-hidden antialiased flex flex-col cursor-default;
            }
        }
        @layer components {
            .code-window {
                @apply bg-[#121212]/90 backdrop-blur-xl border border-white/10 rounded-xl p-6 shadow-2xl transition-all duration-300 ease-out;
            }
            .code-window:hover {
                @apply border-gold-glow/40 shadow-[0_0_40px_rgba(212,175,55,0.15)] -translate-y-1;
            }
            .btn-gold {
                @apply bg-white text-black px-8 py-3 rounded-lg font-bold transition-all duration-200 active:scale-95 hover:bg-gold-glow hover:text-white hover:shadow-[0_0_20px_rgba(212,175,55,0.4)];
            }
            .glow-sphere {
                @apply absolute blur-[120px] rounded-full opacity-20 pointer-events-none transition-transform duration-700 ease-out;
            }

            /* Animasi Persiapan Huruf */
            .char {
                opacity: 0;
                display: inline-block;
                transform: translateY(10px);
            }

            /* PERBAIKAN: Gradasi pada huruf individual */
            .gradient-text .char {
                @apply text-transparent bg-clip-text bg-gradient-to-r from-white via-white to-gray-500;
            }
        }
    </style>
</head>
<body onmousemove="parallax(event)">

    <header class="w-full z-50">
        <div class="container mx-auto px-10 py-8 flex justify-between items-center">
            <div class="flex items-center gap-3 group cursor-pointer relative">

                <div class="relative group-hover:scale-110 transition-transform duration-300 ease-out">
                    <svg width="26" height="30" viewBox="0 0 110 128" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-7 h-auto">
                        <defs>
                            <linearGradient id="logoGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                <stop offset="0%" stop-color="#fff" />
                                <stop offset="100%" stop-color="#d4af37" /> </linearGradient>
                            <filter id="logoGlow" x="-20%" y="-20%" width="140%" height="140%">
                                <feGaussianBlur stdDeviation="3" result="blur" />
                                <feFlood flood-color="#d4af37" flood-opacity="0.3" result="glowColor"/>
                                <feComposite in="glowColor" in2="blur" operator="in" result="softGlow_blended" />
                                <feMerge>
                                    <feMergeNode in="softGlow_blended" />
                                    <feMergeNode in="SourceGraphic" />
                                </feMerge>
                            </filter>
                        </defs>
                        <g filter="url(#logoGlow)">
                            <circle cx="16" cy="16" r="16" fill="url(#logoGradient)"/>
                            <circle cx="94" cy="16" r="16" fill="url(#logoGradient)"/>
                            <circle cx="16" cy="112" r="16" fill="url(#logoGradient)"/>
                            <circle cx="94" cy="112" r="16" fill="url(#logoGradient)"/>
                            <circle cx="55" cy="64" r="16" fill="url(#logoGradient)"/>
                            <path d="M16 16V112" stroke="url(#logoGradient)" stroke-width="6" stroke-linecap="round"/>
                            <path d="M94 16V112" stroke="url(#logoGradient)" stroke-width="6" stroke-linecap="round"/>
                            <path d="M16 112L94 16" stroke="url(#logoGradient)" stroke-width="6" stroke-linecap="round"/>
                        </g>
                    </svg>
                </div>

                <span class="text-xl font-bold tracking-tight italic relative top-[1px]">Nevan Syah Akbar</span>
            </div>

            <nav class="flex items-center gap-8 text-[10px] uppercase tracking-[0.2em] font-bold">
                <a href="#" class="text-gold-glow border-b border-gold-glow/50 pb-1">welcome</a>
                <a href="{{ url('/about') }}" class="{{ Request::is('about') ? 'text-gold-glow border-b border-gold-glow/50' : 'text-gray-500' }} hover:text-gold-glow transition-colors pb-1">
                    About
                </a>
                <a href="{{ url('/project') }}" class="{{ Request::is('project') ? 'text-gold-glow border-b border-gold-glow/50' : 'text-gray-500' }} hover:text-gold-glow transition-colors pb-1">
                    Project
                </a>
                <a href="{{ url('/contact') }}" class="{{ Request::is('contact') ? 'text-gold-glow border-b border-gold-glow/50' : 'text-gray-500' }} hover:text-gold-glow transition-colors pb-1">
                    contact
                </a>
            </nav>
            <div class="hidden md:block w-24"></div>
        </div>
    </header>

    <main class="relative flex-1 flex items-center justify-center px-10 overflow-hidden">
        <div id="glow" class="glow-sphere w-[500px] h-[500px] bg-gold-glow -top-20 left-1/2 -translate-x-1/2"></div>

        <div class="container mx-auto grid lg:grid-cols-2 gap-12 items-center relative z-10">
            <div class="space-y-8 text-center lg:text-left">
                <h1 id="main-title" class="text-5xl md:text-6xl lg:text-[4.2rem] font-black leading-[0.95] uppercase italic tracking-tighter">
                    <span class="gradient-text border border-white/10 px-4 rounded-xl inline-block my-2 py-1">
                        <span class="type-text">Software</span>
                    </span> <br>
                    <span class="type-text block">Development</span>
                </h1>

                <p id="sub-text" class="text-gray-400 max-w-sm mx-auto lg:mx-0 leading-relaxed text-sm font-light opacity-0">
                    Menjadi mitra strategis dalam membangun fondasi digital masa depan yang memadukan kreativitas dengan fungsionalitas tingkat tinggi.
                </p>

                <div id="hero-btns" class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start opacity-0">
                    <button onclick="window.location.href='{{ url('/about') }}'" class="btn-gold">Get Started →</button>
                </div>
            </div>

            <div class="relative hidden lg:block scale-90 origin-right">
                <div id="card" class="code-window border-gold-glow/10 relative z-20 transform -rotate-1">
                    <div class="flex gap-2 mb-6">
                        <div class="w-2.5 h-2.5 bg-[#ff5f56] rounded-full hover:scale-125 transition-transform"></div>
                        <div class="w-2.5 h-2.5 bg-[#ffbd2e] rounded-full hover:scale-125 transition-transform"></div>
                        <div class="w-2.5 h-2.5 bg-[#27c93f] rounded-full hover:scale-125 transition-transform"></div>
                    </div>
                    <pre class="text-xs font-mono text-gray-400 leading-relaxed text-left">
<span class="text-purple-400">document</span>.<span class="text-blue-400">addEventListener</span>(<span class="text-green-400">"DOMContentLoaded"</span>, () => {
    <span class="text-orange-400">const</span> app = <span class="text-orange-400">new</span> LaravelApp({
        engine: <span class="text-green-400">"IndoBERT"</span>,
        accuracy: <span class="text-green-400">"98.5%"</span>
    });
    app.<span class="text-blue-400">launch</span>();
});</pre>
                </div>

                <div id="card-small" class="absolute -bottom-8 -right-6 code-window p-4 w-60 z-30 border-gold-glow/30 transform rotate-3 shadow-gold-glow/5">
                    <pre class="text-[10px] font-mono text-gold-glow/80">
.nevan-code {
    font-family: 'Fira Code';
    border-radius: 10px;
}</pre>
                </div>
            </div>
        </div>
    </main>

    <footer class="w-full z-50">
        <div class="container mx-auto px-10 py-8 flex justify-between items-center text-[9px] text-gray-600 font-bold tracking-[0.3em] uppercase">

            <div class="container mx-auto px-10 flex justify-between items-center text-[9px] text-gray-600 font-bold tracking-[0.3em] uppercase">
            <p>&copy; 2026 Nevan Syah Akbar</p>
            </div>
        </div>
    </footer>

    <script>
        // 1. Script Pecah Teks Menjadi Huruf
        const textElements = document.querySelectorAll('.type-text');
        textElements.forEach(el => {
            const text = el.textContent.trim();
            el.textContent = "";
            [...text].forEach(char => {
                const span = document.createElement('span');
                span.textContent = char === " " ? "\u00A0" : char; // Handle space
                span.className = "char";
                el.appendChild(span);
            });
        });

        // 2. Animasi Pengetikan dengan GSAP
        // 2. Animasi Pengetikan dengan GSAP
window.addEventListener('load', () => {
    // 1. Munculkan sub-text dan tombol SEKALI saja (tanpa loop)
    gsap.to(["#sub-text", "#hero-btns"], {
        opacity: 1,
        y: -10,
        duration: 1,
        delay: 0.8,
        ease: "power2.out"
    });

    // 2. Buat Timeline KHUSUS untuk teks judul saja yang looping
    const titleTimeline = gsap.timeline({ repeat: -1, repeatDelay: 2 });

    titleTimeline
        // Huruf Muncul (Ngetik)
        .to(".char", {
            opacity: 1,
            y: 0,
            stagger: 0.05,
            duration: 0.1,
            ease: "power2.out"
        })
        // Teks diam sejenak agar bisa dibaca
        .to({}, { duration: 3 })
        // Huruf Hilang (Reset untuk loop berikutnya)
        .to(".char", {
            opacity: 0,
            y: 10,
            stagger: 0.02,
            duration: 0.5,
            ease: "power2.in"
        });
});

        // 3. Script Parallax (Sensitif)
        function parallax(e) {
            const glow = document.getElementById('glow');
            const card = document.getElementById('card');
            const cardSmall = document.getElementById('card-small');

            let x = e.clientX / window.innerWidth;
            let y = e.clientY / window.innerHeight;

            glow.style.transform = `translate(calc(-50% + ${x * 60}px), ${y * 60}px)`;

            if(window.innerWidth > 1024) {
                // Rotasi kartu utama
                card.style.transform = `rotateX(${(y - 0.5) * 15}deg) rotateY(${(x - 0.5) * 15}deg) rotateZ(-1deg)`;
                // Pergerakan kartu kecil
                cardSmall.style.transform = `translate(${x * 20}px, ${y * 20}px) rotate(3deg)`;
            }
        }
    </script>


</body>
</html>

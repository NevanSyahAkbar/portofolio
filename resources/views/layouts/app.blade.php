<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Nevan Syah Akbar')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
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
            body { @apply bg-dark-obsidian text-white antialiased flex flex-col cursor-default; }
        }
        @layer components {
            .code-window { @apply bg-[#121212]/90 backdrop-blur-xl border border-white/10 rounded-xl p-6 shadow-2xl transition-all duration-300; }
            .btn-gold { @apply bg-white text-black px-8 py-3 rounded-lg font-bold transition-all duration-200 active:scale-95 hover:bg-gold-glow hover:text-white; }
            .section-card { @apply bg-[#121212]/50 backdrop-blur-md border border-white/5 rounded-2xl p-8 hover:border-gold-glow/20 transition-all duration-500; }
            .char { opacity: 0; display: inline-block; }
            .gradient-text .char { @apply text-transparent bg-clip-text bg-gradient-to-r from-white via-white to-gray-500; }
        }
    </style>
</head>
<body class="overflow-x-hidden min-h-screen">

    <header class="w-full fixed top-0 z-50 bg-dark-obsidian/20 backdrop-blur-lg">
        <div class="container mx-auto px-10 py-8 flex justify-between items-center">
            <a href="{{ url('/') }}" class="flex items-center gap-2 group">
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
            </a>

            <nav class="flex items-center gap-8 text-[10px] uppercase tracking-[0.2em] font-bold">
                <a href="{{ url('/') }}" class="{{ Request::is('/') ? 'text-gold-glow border-b border-gold-glow/50' : 'text-gray-500' }} hover:text-gold-glow transition-colors pb-1">Home</a>
                <a href="{{ url('/about') }}" class="{{ Request::is('about') ? 'text-gold-glow border-b border-gold-glow/50' : 'text-gray-500' }} hover:text-gold-glow transition-colors pb-1">About</a>
                <a href="{{ url('/project') }}" class="{{ Request::is('project') ? 'text-gold-glow border-b border-gold-glow/50' : 'text-gray-500' }} hover:text-gold-glow transition-colors pb-1">
                    project
                </a>
                <a href="{{ url('/contact') }}" class="{{ Request::is('contact') ? 'text-gold-glow border-b border-gold-glow/50' : 'text-gray-500' }} hover:text-gold-glow transition-colors pb-1">
                    contact
                </a>
            </nav>
            <div class="hidden md:block w-24"></div>
        </div>
    </header>

    @yield('content')

    <footer class="w-full py-8 mt-auto">
        <div class="container mx-auto px-10 flex justify-between items-center text-[9px] text-gray-600 font-bold tracking-[0.3em] uppercase">
            <p>&copy; 2026 Nevan Syah Akbar</p>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>

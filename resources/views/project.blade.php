@extends('layouts.app')

@section('title', 'Projects | Nevan Syah Akbar')

@section('content')
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<main class="bg-dark-obsidian min-h-screen pt-32 pb-20 overflow-x-hidden" x-data="{ openModal: false, activeProject: {} }">
    <div class="fixed inset-0 pointer-events-none z-0">
        <div class="absolute top-[-10%] right-[-10%] w-[500px] h-[500px] bg-gold-glow/5 blur-[150px] rounded-full"></div>
        <div class="absolute bottom-[-10%] left-[-10%] w-[500px] h-[500px] bg-purple-600/5 blur-[150px] rounded-full"></div>
    </div>

    <div class="container mx-auto px-10 relative z-10">
        <div class="mb-20 space-y-12">
            <div class="flex flex-col items-center text-center" data-aos="fade-down">
                <h4 class="text-gold-glow font-black tracking-[0.4em] uppercase text-[10px] mb-4">Nevan Syah Akbar Showcase</h4>
                <div class="h-[1px] w-20 bg-gradient-to-r from-transparent via-gold-glow to-transparent opacity-50"></div>
            </div>

            <div class="flex flex-wrap gap-4 justify-center relative z-20">
                <button class="filter-btn active" onclick="filterProjects('all', this)">All Works</button>
                <button class="filter-btn" onclick="filterProjects('web', this)">Web App</button>
                <button class="filter-btn" onclick="filterProjects('game', this)">Game Dev</button>
                <button class="filter-btn" onclick="filterProjects('uiux', this)">UI/UX Design</button>
                <button class="filter-btn" onclick="filterProjects('android', this)">Mobile App</button>
            </div>
        </div>

        <div id="project-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 relative z-10">

            <div class="project-card block" data-category="web">
                <div class="group relative overflow-hidden rounded-2xl border border-white/10 aspect-video bg-[#121212]">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent z-10 opacity-90 group-hover:opacity-0 transition-opacity duration-700"></div>
                    <img src="{{ asset('images/simona.png') }}" class="color-reveal w-full h-full object-cover group-hover:scale-110 transition-all duration-700">

                    <div class="absolute inset-0 z-30 flex items-center justify-center gap-4 opacity-0 group-hover:opacity-100 transition-all duration-500 translate-y-5 group-hover:translate-y-0">
                        <button @click="openModal = true; activeProject = { title: 'SIMONA', tech: ['Laravel', 'RestApi', 'MySQL'], desc: 'Digitalisasi sistem monitoring administrasi (SIMONA) merupakan solusi modern untuk membantu proses pengelolaan dan pencatatan data administrasi secara lebih efisien dan terstruktur. Sistem ini memungkinkan monitoring data dilakukan secara real-time sehingga mempermudah pengguna dalam melakukan pengawasan, pencarian, serta pembaruan informasi dengan cepat dan akurat. Dengan penerapan SIMONA, proses administrasi menjadi lebih efektif, mengurangi risiko kesalahan pencatatan, serta mendukung peningkatan produktivitas kerja dalam lingkungan perusahaan atau instansi.', img: '{{ asset('images/dash.png') }}', gallery: ['{{ asset('images/Login.png') }}', '{{ asset('images/dash.png') }}', '{{ asset('images/Perlengkapan.png') }}', '{{ asset('images/Form.png') }}', '{{ asset('images/Kelola.png') }}'] }"
                                class="action-btn-orange">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                        </button>
                        <a href="{{ url('https://github.com/NevanSyahAkbar/Simona-app') }}" class="action-btn-orange">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                        </a>
                    </div>

                    <div class="absolute bottom-0 left-0 p-6 z-20 transition-all duration-500 group-hover:translate-y-10 group-hover:opacity-0 pointer-events-none">
                        <span class="text-gold-glow text-[9px] font-black uppercase tracking-widest">Laravel, Rest API, MySQL</span>
                        <h3 class="text-xl font-black italic text-white uppercase tracking-tighter mt-1">SIMONA</h3>
                    </div>
                </div>
            </div>

            <div class="project-card block" data-category="web">
                <div class="group relative overflow-hidden rounded-2xl border border-white/10 aspect-video bg-[#121212]">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent z-10 opacity-90 group-hover:opacity-0 transition-opacity duration-700"></div>
                    <img src="{{ asset('images/mycup.png') }}" class="color-reveal w-full h-full object-cover group-hover:scale-110 transition-all duration-700">

                    <div class="absolute inset-0 z-30 flex items-center justify-center gap-4 opacity-0 group-hover:opacity-100 transition-all duration-500 translate-y-5 group-hover:translate-y-0">
                        <button @click="openModal = true; activeProject = { title: 'MyCup - Coffee Shop', tech: 'TypeScript', desc: 'MyCup menyajikan kurasi biji kopi pilihan dengan cita rasa autentik yang siap menemani setiap momen produktif maupun waktu santai Anda. Temukan kenyamanan dalam setiap sesapan di ruang kami yang hangat, karena di sini, setiap cangkir kopi punya ceritanya sendiri.', img: '{{ asset('images/mycup.png') }}', gallery: ['{{ asset('images/Menu.png') }}', '{{ asset('images/order.png') }}', '{{ asset('images/profil.png') }}'] }"
                                class="action-btn-orange">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                        </button>
                        <a href="{{ url('https://majestic-toffee-e81b34.netlify.app/') }}" class="action-btn-orange">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                        </a>
                    </div>

                    <div class="absolute bottom-0 left-0 p-6 z-20 transition-all duration-500 group-hover:translate-y-10 group-hover:opacity-0 pointer-events-none">
                        <span class="text-purple-400 text-[9px] font-black uppercase tracking-widest">TypeScript</span>
                        <h3 class="text-xl font-black italic text-white uppercase tracking-tighter mt-1">MyCup - Coffee Shop</h3>
                    </div>
                </div>
            </div>

            <div class="project-card block" data-category="game">
                <div class="group relative overflow-hidden rounded-2xl border border-white/10 aspect-video bg-[#121212]">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent z-10 opacity-90 group-hover:opacity-0 transition-opacity duration-700"></div>
                    <img src="{{ asset('images/nightshift2.jpg') }}" class="color-reveal w-full h-full object-cover group-hover:scale-110 transition-all duration-700">

                    <div class="absolute inset-0 z-30 flex items-center justify-center gap-4 opacity-0 group-hover:opacity-100 transition-all duration-500 translate-y-5 group-hover:translate-y-0">
                        <button @click="openModal = true; activeProject = { title: 'Nightshift', tech: 'Unity', desc: 'Game horor berbasis Unity 3D adalah permainan interaktif yang dirancang untuk memberikan pengalaman menegangkan dan menakutkan kepada pemain melalui penggunaan teknologi grafis tiga dimensi (3D) yang dikembangkan menggunakan game engine Unity. Game ini menggabungkan elemen cerita menyeramkan, suasana mencekam, serta mekanik gameplay seperti eksplorasi, puzzle, dan survival.', img: '{{ asset('images/nightshift2.jpg') }}', gallery: ['{{ asset('images/nightshift2.jpg') }}'] }"
                                class="action-btn-orange">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                        </button>
                    </div>

                    <div class="absolute bottom-0 left-0 p-6 z-20 transition-all duration-500 group-hover:translate-y-10 group-hover:opacity-0 pointer-events-none">
                        <span class="text-green-400 text-[9px] font-black uppercase tracking-widest">Unity</span>
                        <h3 class="text-xl font-black italic text-white uppercase tracking-tighter mt-1">Nightshift - Horror Game</h3>
                    </div>
                </div>
            </div>

            <div class="project-card block" data-category="web">
                <div class="group relative overflow-hidden rounded-2xl border border-white/10 aspect-video bg-[#121212]">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent z-10 opacity-90 group-hover:opacity-0 transition-opacity duration-700"></div>
                    <img src="{{ asset('images/web.png') }}" class="color-reveal w-full h-full object-cover group-hover:scale-110 transition-all duration-700">

                    <div class="absolute inset-0 z-30 flex items-center justify-center gap-4 opacity-0 group-hover:opacity-100 transition-all duration-500 translate-y-5 group-hover:translate-y-0">
                        <button @click="openModal = true; activeProject = { title: 'NeboyyPedia', tech: 'HTML + CSS', desc: 'Tingkatkan level permainanmu ke titik puncak bersama platform top-up dan jasa joki terbaik untuk para gamer sejati! Mulai dari pengisian diamond yang kilat hingga layanan rank boosting oleh pemain pro berpengalaman, kami hadir sebagai solusi lengkap untuk menguasai setiap arena di berbagai game favoritmu.', img: '{{ asset('images/web.png') }}', gallery: ['{{ asset('images/web.png') }}'] }"
                                class="action-btn-orange">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                        </button>
                    </div>

                    <div class="absolute bottom-0 left-0 p-6 z-20 transition-all duration-500 group-hover:translate-y-10 group-hover:opacity-0 pointer-events-none">
                        <span class="text-blue-400 text-[9px] font-black uppercase tracking-widest">HTML + CSS</span>
                        <h3 class="text-xl font-black italic text-white uppercase tracking-tighter mt-1">NeboyyPedia</h3>
                    </div>
                </div>
            </div>

            <div class="project-card block" data-category="uiux">
                <div class="group relative overflow-hidden rounded-2xl border border-white/10 aspect-video bg-[#121212]">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent z-10 opacity-90 group-hover:opacity-0 transition-opacity duration-700"></div>
                    <img src="{{ asset('images/moble.png') }}" class="color-reveal w-full h-full object-cover group-hover:scale-110 transition-all duration-700">

                    <div class="absolute inset-0 z-30 flex items-center justify-center gap-4 opacity-0 group-hover:opacity-100 transition-all duration-500 translate-y-5 group-hover:translate-y-0">
                        <button @click="openModal = true; activeProject = { title: 'Michie Cars Club', tech: 'Figma', desc: 'Sistem manajemen tugas untuk tim dengan fitur kolaborasi real-time, tracking progress, dan integrasi dengan berbagai tools produktivitas. Platform ini dirancang untuk menyinkronkan seluruh alur kerja tim dalam satu dasbor terpusat guna meminimalisir miskomunikasi dan meningkatkan efisiensi operasional secara signifikan. Melalui sistem pelaporan otomatis dan visualisasi data yang intuitif, Anda dapat memantau prioritas kerja dengan jelas sekaligus memastikan setiap target besar tercapai tepat pada waktunya.', img: '{{ asset('images/moble.png') }}', gallery: ['{{ asset('images/moble.png') }}', '{{ asset('images/michie.png') }}'] }"
                                class="action-btn-orange">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                        </button>
                        <a href="{{ url('https://www.figma.com/design/IWlUUSFjzbG6oIjwTulJbf/web-mobil?node-id=0-1&p=f&t=UQsxPMMolFRy3pKb-0') }}" class="action-btn-orange">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                        </a>
                    </div>

                    <div class="absolute bottom-0 left-0 p-6 z-20 transition-all duration-500 group-hover:translate-y-10 group-hover:opacity-0 pointer-events-none">
                        <span class="text-pink-400 text-[9px] font-black uppercase tracking-widest">Figma</span>
                        <h3 class="text-xl font-black italic text-white uppercase tracking-tighter mt-1">Michie Cars Club</h3>
                    </div>
                </div>
            </div>

            <div class="project-card block" data-category="android">
                <div class="group relative overflow-hidden rounded-2xl border border-white/10 aspect-video bg-[#121212]">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent z-10 opacity-90 group-hover:opacity-0 transition-opacity duration-700"></div>
                    <img src="{{ asset('images/kantor.png') }}" class="color-reveal w-full h-full object-cover group-hover:scale-110 transition-all duration-700">

                    <div class="absolute inset-0 z-30 flex items-center justify-center gap-4 opacity-0 group-hover:opacity-100 transition-all duration-500 translate-y-5 group-hover:translate-y-0">
                        <button @click="openModal = true; activeProject = { title: 'Mister Team App', tech: 'Flutter', desc: 'Aplikasi Perkantoran yang dirancang untuk mendukung dan meningkatkan produktivitas kerja di lingkungan kantor,Aplikasi ini umumnya mencakup berbagai fitur yang membantu pengguna dalam melakukan tugas-tugas.', img: '{{ asset('images/kantor.png') }}', gallery: ['{{ asset('images/kantor.png') }}'] }"
                                class="action-btn-orange">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                        </button>
                        <a href="{{ url('https://www.figma.com/design/DQLszmSnfqKBRkxBjuvfll/APB-Mr.Team?node-id=0-1&p=f&m=draw') }}" class="action-btn-orange">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                        </a>
                    </div>

                    <div class="absolute bottom-0 left-0 p-6 z-20 transition-all duration-500 group-hover:translate-y-10 group-hover:opacity-0 pointer-events-none">
                        <span class="text-blue-400 text-[9px] font-black uppercase tracking-widest">Flutter</span>
                        <h3 class="text-xl font-black italic text-white uppercase tracking-tighter mt-1">Mister Team app</h3>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div x-show="openModal" class="fixed inset-0 z-[100] flex items-center justify-center p-6 bg-black/95 backdrop-blur-xl" style="display: none;" @keydown.escape.window="openModal = false">
        <div class="bg-[#0a0a0a] border border-white/10 w-full max-w-5xl rounded-[2.5rem] relative overflow-hidden shadow-[0_0_50px_rgba(249,115,22,0.2)]" @click.away="openModal = false">

            <button @click="openModal = false" class="absolute top-8 right-8 text-white/50 hover:text-orange-500 transition-colors z-50">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>

            <div class="p-10 md:p-16 space-y-10 max-h-[90vh] overflow-y-auto scrollbar-custom">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div class="rounded-2xl overflow-hidden border border-white/5 shadow-2xl">
                        <img :src="activeProject.img" class="w-full h-auto object-cover">
                    </div>
                    <div class="flex flex-col justify-center text-left">
                        <span class="text-orange-500 font-black text-[10px] tracking-widest uppercase" x-text="activeProject.tech"></span>
                        <h2 class="text-4xl font-black italic text-white uppercase mt-2" x-text="activeProject.title"></h2>
                        <p class="text-gray-400 text-sm italic border-l-2 border-orange-500/30 pl-6 mt-4" x-text="activeProject.desc"></p>
                    </div>
                </div>

                <div class="space-y-4" x-show="activeProject.gallery && activeProject.gallery.length > 0">
                    <h4 class="text-[10px] font-black text-gray-500 uppercase tracking-[0.3em]">Project Gallery</h4>
                    <div class="flex gap-4 overflow-x-auto pb-4 scrollbar-custom">
                        <template x-for="(photo, index) in activeProject.gallery" :key="index">
                            <div class="flex-shrink-0 w-64 md:w-80 aspect-video rounded-xl overflow-hidden border border-white/10 hover:border-orange-500/50 transition-all cursor-pointer">
                                <img :src="photo" class="w-full h-full object-cover" @click="activeProject.img = photo">
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<style>
    .color-reveal { filter: grayscale(100%) brightness(0.7); transition: filter 0.6s ease, transform 0.6s ease; }
    .group:hover .color-reveal { filter: grayscale(0%) brightness(1) !important; }

    /* SOLID ORANGE ACTION BUTTONS */
    .action-btn-orange {
        width: 3rem; height: 3rem;
        background-color: #f97316 !important;
        border-radius: 9999px; display: flex; align-items: center; justify-content: center;
        color: white; transition: all 0.3s;
        box-shadow: 0 0 20px rgba(249, 115, 22, 0.4);
    }
    .action-btn-orange:hover { transform: scale(1.1); box-shadow: 0 0 35px rgba(249, 115, 22, 0.7); }

    .filter-btn { @apply px-8 py-3 rounded-xl border border-white/5 bg-white/5 text-[10px] font-black uppercase tracking-[0.2em] text-gray-500 transition-all; cursor: pointer; }
    .filter-btn.active { @apply border-gold-glow/50 text-black bg-white; box-shadow: 0 0 30px rgba(212, 175, 55, 0.2); }

    .project-card { transition: opacity 0.5s ease, transform 0.5s ease; }
    .project-card.is-hidden { display: none !important; }

    /* SCROLLBAR CUSTOM STYLING */
    .scrollbar-custom::-webkit-scrollbar { height: 4px; width: 4px; }
    .scrollbar-custom::-webkit-scrollbar-track { background: rgba(255, 255, 255, 0.05); border-radius: 10px; }
    .scrollbar-custom::-webkit-scrollbar-thumb { background: #f97316; border-radius: 10px; }
    .scrollbar-custom::-webkit-scrollbar-thumb:hover { background: #fb923c; }
</style>

<script>
    function filterProjects(category, btn) {
        const buttons = document.querySelectorAll('.filter-btn');
        buttons.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        const cards = document.querySelectorAll('.project-card');
        cards.forEach(card => {
            if (category === 'all' || card.getAttribute('data-category') === category) {
                card.classList.remove('is-hidden');
                card.style.opacity = "1";
                card.style.transform = "scale(1)";
            } else {
                card.style.opacity = "0";
                card.style.transform = "scale(0.95)";
                setTimeout(() => { if(card.style.opacity === "0") card.classList.add('is-hidden'); }, 400);
            }
        });
    }
</script>
@endsection

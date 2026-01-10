<!-- Subtle Background Gradient Orbs (tanpa pola titik) -->
<div class="fixed inset-0 pointer-events-none z-0">
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden">
        <div class="absolute -top-40 -left-40 w-96 h-96 bg-linear-to-br from-sage-300/20 to-transparent rounded-full blur-3xl"></div>
        <div class="absolute top-1/4 right-0 w-80 h-80 bg-linear-to-bl from-teal-200/15 to-transparent rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-1/4 w-96 h-96 bg-linear-to-tr from-sage-200/20 to-transparent rounded-full blur-3xl"></div>
        <div class="absolute bottom-1/3 right-1/4 w-64 h-64 bg-linear-to-tl from-cream-200/30 to-transparent rounded-full blur-2xl animate-breathe"></div>
    </div>
</div>

<!-- Header with Enhanced Glassmorphism -->
<header class="fixed top-0 left-0 right-0 z-50" id="header">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <nav class="glass-card-strong rounded-2xl mt-3 px-5 py-3.5 shadow-glass border border-white/40">
            <div class="flex justify-between items-center">
                <!-- Logo with hover animation -->
                <a href="{{ url('/') }}" class="flex items-center gap-3 group">
                    <div class="relative">
                        <div class="w-11 h-11 rounded-xl bg-linear-to-br from-sage-400 via-sage-500 to-sage-600 flex items-center justify-center shadow-lg shadow-sage-500/20 group-hover:shadow-sage-500/40 transition-all duration-500 group-hover:scale-105">
                            <i class="fas fa-leaf text-white text-lg group-hover:rotate-12 transition-transform duration-300"></i>
                        </div>
                        <div class="absolute -inset-1 bg-linear-to-br from-sage-400 to-sage-600 rounded-xl blur opacity-0 group-hover:opacity-30 transition-opacity duration-500"></div>
                    </div>
                    <div>
                        <h1 class="text-lg font-semibold text-stone-800 group-hover:text-sage-700 transition-colors">Anxiety Relief</h1>
                        <p class="text-xs text-stone-400 -mt-0.5 tracking-wide">Mindful Wellness</p>
                    </div>
                </a>

                <!-- Desktop Navigation with indicators -->
                <ul class="hidden md:flex items-center gap-1">
                    <li><a href="#home" class="nav-link">Home</a></li>
                    <li><a href="#about" class="nav-link">Tentang</a></li>
                    <li><a href="#features" class="nav-link">Fitur</a></li>
                    <li><a href="#how-it-works" class="nav-link">Cara Kerja</a></li>
                    <li><a href="#benefits" class="nav-link">Manfaat</a></li>
                    <li class="ml-4">
                        <a href="#features" class="btn-primary text-sm py-2.5 px-5 shadow-lg shadow-sage-500/20 hover:shadow-sage-500/30">
                            <i class="fas fa-spa text-xs"></i>
                            Mulai Relaksasi
                        </a>
                    </li>
                </ul>

                <!-- Mobile Menu Button -->
                <button id="mobileMenuBtn" class="md:hidden w-10 h-10 rounded-xl bg-sage-50 flex items-center justify-center text-sage-600 hover:bg-sage-100 active:scale-95 transition-all">
                    <i class="fas fa-bars"></i>
                </button>
            </div>

            <!-- Mobile Navigation -->
            <div id="mobileMenu" class="md:hidden hidden pt-5 pb-3 border-t border-sage-100/50 mt-4">
                <div class="flex flex-col gap-1">
                    <a href="#home" class="mobile-nav-link">Home</a>
                    <a href="#about" class="mobile-nav-link">Tentang</a>
                    <a href="#features" class="mobile-nav-link">Fitur</a>
                    <a href="#how-it-works" class="mobile-nav-link">Cara Kerja</a>
                    <a href="#benefits" class="mobile-nav-link">Manfaat</a>
                    <a href="#features" class="btn-primary text-center mt-3 text-sm">
                        <i class="fas fa-spa"></i>
                        Mulai Relaksasi
                    </a>
                </div>
            </div>
        </nav>
    </div>
</header>

<!-- Main Content -->
<main class="relative z-10">

    <!-- ==================== HERO SECTION ==================== -->
    <section id="home" class="min-h-screen flex items-center pt-28 pb-16 overflow-hidden relative">
        <!-- Hero dark overlay for readability over photo -->
        <div class="absolute inset-0 bg-linear-to-b from-black/55 via-black/60 to-black/70 pointer-events-none z-0"></div>
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 w-full">
            <div class="relative z-10 grid lg:grid-cols-2 gap-12 lg:gap-16 items-center text-white">

                <!-- Hero Content -->
                <div class="order-2 lg:order-1">
                    <!-- Badge -->
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-linear-to-r from-sage-100 to-sage-50 border border-sage-200/50 text-sage-700 text-sm font-medium mb-6 animate-fade-in-up shadow-sm">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-sage-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-sage-500"></span>
                        </span>
                        Platform Wellness Terpercaya
                    </div>

                    <!-- Main Heading -->
                    <h1 class="font-serif text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-semibold text-white leading-[1.1] mb-6 animate-fade-in-up" style="animation-delay: 0.1s;">
                        Temukan
                        <span class="text-gradient-sage relative">
                            Ketenangan
                            <svg class="absolute -bottom-2 left-0 w-full h-3 text-sage-300/50" viewBox="0 0 200 12" preserveAspectRatio="none">
                                <path d="M0,8 Q50,0 100,8 T200,8" stroke="currentColor" stroke-width="3" fill="none" stroke-linecap="round"/>
                            </svg>
                        </span>
                        <br>dalam Diri Anda
                    </h1>

                    <!-- Description -->
                    <p class="text-base sm:text-lg text-stone-100/90 leading-relaxed mb-8 max-w-lg animate-fade-in-up" style="animation-delay: 0.2s;">
                        Alat bantu relaksasi berbasis penelitian untuk membantu Anda mengelola kecemasan ringan dengan <span class="text-sage-600 font-medium">teknik pernapasan</span>, <span class="text-teal-600 font-medium">musik terapi</span>, dan <span class="text-purple-600 font-medium">mindfulness</span>.
                    </p>

                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-3 mb-10 animate-fade-in-up" style="animation-delay: 0.3s;">
                        <a href="#features" class="btn-primary shadow-xl shadow-sage-500/20 hover:shadow-sage-500/30">
                            <i class="fas fa-play-circle"></i>
                            Mulai Sekarang
                        </a>
                        <a href="#about" class="btn-secondary group">
                            <i class="fas fa-info-circle group-hover:rotate-12 transition-transform"></i>
                            Pelajari Lebih Lanjut
                        </a>
                    </div>

                    <!-- Stats Row -->
                    <div class="flex flex-wrap gap-6 sm:gap-10 animate-fade-in-up" style="animation-delay: 0.4s;">
                        <div class="stat-item">
                            <div class="text-2xl sm:text-3xl font-serif font-bold text-white">4+</div>
                            <div class="text-xs sm:text-sm text-stone-200">Teknik Relaksasi</div>
                        </div>
                        <div class="w-px h-12 bg-linear-to-b from-transparent via-stone-200 to-transparent hidden sm:block"></div>
                        <div class="stat-item">
                            <div class="text-2xl sm:text-3xl font-serif font-bold text-white">100%</div>
                            <div class="text-xs sm:text-sm text-stone-200">Aman & Non-Medis</div>
                        </div>
                        <div class="w-px h-12 bg-linear-to-b from-transparent via-stone-200 to-transparent hidden sm:block"></div>
                        <div class="stat-item">
                            <div class="text-2xl sm:text-3xl font-serif font-bold text-sage-200">Gratis</div>
                            <div class="text-xs sm:text-sm text-stone-200">Selamanya</div>
                        </div>
                    </div>
                </div>

                <!-- Hero Visual -->
                <div class="order-1 lg:order-2 relative animate-fade-in-up" style="animation-delay: 0.2s;">
                    <div class="relative mx-auto max-w-sm sm:max-w-md lg:max-w-lg">

                        <!-- Main Card -->
                        <div class="glass-card-strong rounded-3xl p-6 sm:p-8 shadow-2xl shadow-sage-500/10 border border-white/50">
                            <div class="aspect-square rounded-2xl bg-linear-to-br from-sage-50 via-cream-50 to-sage-100 flex items-center justify-center relative overflow-hidden">
                                <!-- Animated breathing circles -->
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <div class="w-52 h-52 rounded-full border-2 border-sage-200/40 animate-breathe"></div>
                                </div>
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <div class="w-40 h-40 rounded-full border-2 border-sage-300/30 animate-breathe" style="animation-delay: 0.5s;"></div>
                                </div>
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <div class="w-28 h-28 rounded-full bg-linear-to-br from-sage-100 to-sage-200/50 animate-breathe" style="animation-delay: 1s;"></div>
                                </div>

                                <!-- Center Icon -->
                                <div class="relative z-10 text-center">
                                    <i class="fas fa-leaf text-sage-500 text-5xl sm:text-6xl animate-float drop-shadow-lg"></i>
                                </div>
                            </div>

                            <!-- Card Footer -->
                            <div class="mt-6 text-center px-2">
                                <div class="bg-white/60 backdrop-blur-sm rounded-xl px-5 py-4 shadow-soft border border-white/80 transition-all duration-300 hover:bg-white/70 hover:shadow-md">
                                    <p class="text-stone-800 font-semibold text-base leading-snug">Bernafas dengan Tenang</p>
                                    <p class="text-stone-500 text-sm mt-1.5 leading-relaxed">Ikuti ritme pernapasan alami</p>
                                </div>
                            </div>
                        </div>

                        <!-- Floating Feature Cards -->
                        <div class="absolute -top-3 -right-3 sm:-top-4 sm:-right-4 glass-card-strong rounded-xl sm:rounded-2xl p-3 sm:p-4 shadow-lg border border-white/50 animate-float z-20">
                            <div class="flex items-center gap-2 sm:gap-3">
                                <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-lg sm:rounded-xl bg-linear-to-br from-sage-400 to-sage-500 flex items-center justify-center shadow-md">
                                    <i class="fas fa-music text-white text-xs sm:text-sm"></i>
                                </div>
                                <div class="hidden sm:block">
                                    <p class="text-sm font-medium text-stone-700">Musik Terapi</p>
                                    <p class="text-xs text-stone-400">Binaural Sound</p>
                                </div>
                            </div>
                        </div>

                        <div class="absolute -bottom-3 -left-3 sm:-bottom-4 sm:-left-4 glass-card-strong rounded-xl sm:rounded-2xl p-3 sm:p-4 shadow-lg border border-white/50 animate-float z-20" style="animation-delay: 1s;">
                            <div class="flex items-center gap-2 sm:gap-3">
                                <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-lg sm:rounded-xl bg-linear-to-br from-teal-400 to-teal-500 flex items-center justify-center shadow-md">
                                    <i class="fas fa-wind text-white text-xs sm:text-sm"></i>
                                </div>
                                <div class="hidden sm:block">
                                    <p class="text-sm font-medium text-stone-700">Teknik 4-7-8</p>
                                    <p class="text-xs text-stone-400">Pernapasan</p>
                                </div>
                            </div>
                        </div>

                        <!-- Decorative element -->
                        <div class="absolute top-1/2 -right-8 sm:-right-12 w-24 h-24 bg-linear-to-br from-sage-200/40 to-transparent rounded-full blur-2xl -z-10"></div>
                        <div class="absolute -bottom-8 left-1/4 w-32 h-32 bg-linear-to-tr from-teal-200/30 to-transparent rounded-full blur-2xl -z-10"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll indicator -->
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 hidden lg:flex flex-col items-center gap-2 animate-bounce-slow">
            <span class="text-xs text-stone-400 tracking-wider">SCROLL</span>
            <i class="fas fa-chevron-down text-sage-400"></i>
        </div>
    </section>

    <!-- ==================== TRUST INDICATORS ==================== -->
    <section class="py-12 relative overflow-hidden">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="glass-card rounded-2xl p-6 sm:p-8 shadow-soft border border-white/40 bg-white/95">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-8">
                    <div class="text-center group">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-xl bg-linear-to-br from-sage-100 to-sage-50 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-shield-check text-sage-500 text-lg"></i>
                        </div>
                        <h4 class="font-semibold text-stone-700 text-sm">100% Aman</h4>
                        <p class="text-xs text-stone-400 mt-0.5">Tanpa Efek Samping</p>
                    </div>
                    <div class="text-center group">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-xl bg-linear-to-br from-teal-100 to-teal-50 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-microscope text-teal-500 text-lg"></i>
                        </div>
                        <h4 class="font-semibold text-stone-700 text-sm">Berbasis Riset</h4>
                        <p class="text-xs text-stone-400 mt-0.5">Metode Terbukti</p>
                    </div>
                    <div class="text-center group">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-xl bg-linear-to-br from-purple-100 to-purple-50 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-clock text-purple-500 text-lg"></i>
                        </div>
                        <h4 class="font-semibold text-stone-700 text-sm">Akses 24/7</h4>
                        <p class="text-xs text-stone-400 mt-0.5">Kapan Saja</p>
                    </div>
                    <div class="text-center group">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-xl bg-linear-to-br from-amber-100 to-amber-50 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-heart text-amber-500 text-lg"></i>
                        </div>
                        <h4 class="font-semibold text-stone-700 text-sm">Mudah Digunakan</h4>
                        <p class="text-xs text-stone-400 mt-0.5">Tanpa Registrasi</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== ABOUT SECTION ==================== -->
    <section id="about" class="py-20 relative">
        <!-- Section Divider -->
        <div class="absolute top-0 left-0 right-0 h-px bg-linear-to-r from-transparent via-sage-200 to-transparent"></div>

        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-14">
                <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-sage-100/80 text-sage-700 text-sm font-medium mb-4">
                    <i class="fas fa-info-circle text-xs"></i>
                    Tentang Kami
                </span>
                <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-semibold text-stone-900 mb-5">
                    Pendekatan <span class="text-gradient-sage">Holistik</span> untuk Kesejahteraan Mental
                </h2>
                <p class="text-stone-500 text-base sm:text-lg">
                    Kami menyediakan alat bantu relaksasi yang dirancang berdasarkan penelitian ilmiah untuk membantu Anda mencapai ketenangan.
                </p>
            </div>

            <!-- Principle Cards -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5 sm:gap-6 mb-12">
                <!-- Card 1 -->
                <div class="feature-card group">
                    <div class="w-14 h-14 rounded-2xl bg-linear-to-br from-sage-400 to-sage-500 flex items-center justify-center mb-5 shadow-lg shadow-sage-500/20 group-hover:shadow-sage-500/30 group-hover:scale-105 transition-all duration-300">
                        <i class="fas fa-flask text-white text-xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-stone-800 mb-2">Berbasis Penelitian</h3>
                    <p class="text-stone-500 text-sm leading-relaxed">Setiap teknik yang kami sediakan telah terbukti secara ilmiah efektif untuk mengurangi kecemasan ringan.</p>
                </div>

                <!-- Card 2 -->
                <div class="feature-card group">
                    <div class="w-14 h-14 rounded-2xl bg-linear-to-br from-teal-400 to-teal-500 flex items-center justify-center mb-5 shadow-lg shadow-teal-500/20 group-hover:shadow-teal-500/30 group-hover:scale-105 transition-all duration-300">
                        <i class="fas fa-hand-holding-heart text-white text-xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-stone-800 mb-2">Mudah Diakses</h3>
                    <p class="text-stone-500 text-sm leading-relaxed">Tersedia kapan saja Anda butuhkan, tanpa perlu instalasi atau registrasi yang rumit.</p>
                </div>

                <!-- Card 3 -->
                <div class="feature-card group sm:col-span-2 lg:col-span-1">
                    <div class="w-14 h-14 rounded-2xl bg-linear-to-br from-purple-400 to-purple-500 flex items-center justify-center mb-5 shadow-lg shadow-purple-500/20 group-hover:shadow-purple-500/30 group-hover:scale-105 transition-all duration-300">
                        <i class="fas fa-shield-alt text-white text-xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-stone-800 mb-2">Aman & Netral</h3>
                    <p class="text-stone-500 text-sm leading-relaxed">Pendekatan non-medis yang aman untuk semua orang, dengan bahasa yang menenangkan.</p>
                </div>
            </div>

            <!-- Disclaimer -->
            <div class="glass-card rounded-2xl p-5 sm:p-6 border-l-4 border-amber-400 bg-linear-to-r from-amber-50/80 to-cream-50/50">
                <div class="flex items-start gap-4">
                    <div class="w-10 h-10 rounded-lg bg-amber-100 flex items-center justify-center shrink-0">
                        <i class="fas fa-exclamation-triangle text-amber-500"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold text-stone-800 mb-1 text-sm">Informasi Penting</h4>
                        <p class="text-stone-600 text-sm leading-relaxed">
                            Website ini bertujuan untuk edukasi dan membantu relaksasi, <strong>bukan sebagai pengganti saran atau tindakan medis profesional</strong>. Jika mengalami gejala kecemasan berat, segera konsultasikan dengan tenaga kesehatan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== FEATURES SECTION ==================== -->
    <section id="features" class="py-20 relative">
        <!-- Background accent -->
        <div class="absolute inset-0 bg-linear-to-b from-transparent via-sage-50/30 to-transparent -z-10"></div>

        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-14">
                <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-sage-100/80 text-sage-700 text-sm font-medium mb-4">
                    <i class="fas fa-star text-xs"></i>
                    Fitur Utama
                </span>
                <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-semibold text-stone-800 mb-5">
                    Pilihan <span class="text-gradient-sage">Teknik Relaksasi</span>
                </h2>
                <p class="text-stone-500 text-base sm:text-lg">
                    Empat pendekatan berbeda untuk membantu Anda menemukan ketenangan sesuai preferensi.
                </p>
            </div>

            <!-- Feature Cards Grid -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5">
                <!-- Musik Relaksasi -->
                <a href="{{ url('/musik') }}" class="group block">
                    <div class="feature-card-interactive h-full">
                        <div class="relative aspect-4/3 rounded-xl bg-linear-to-br from-sage-100 via-sage-50 to-cream-50 flex items-center justify-center mb-5 overflow-hidden">
                            <div class="absolute inset-0 bg-linear-to-t from-sage-200/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                            <i class="fas fa-headphones text-sage-400 text-4xl group-hover:scale-110 group-hover:text-sage-500 transition-all duration-300 relative z-10"></i>
                            <!-- Decorative circles -->
                            <div class="absolute top-2 right-2 w-8 h-8 rounded-full bg-sage-200/50 blur-sm"></div>
                            <div class="absolute bottom-4 left-3 w-6 h-6 rounded-full bg-sage-300/30 blur-sm"></div>
                        </div>
                        <div class="flex items-start justify-between gap-3">
                            <div>
                                <h3 class="text-base font-semibold text-stone-800 mb-1 group-hover:text-sage-700 transition-colors">Musik Relaksasi</h3>
                                <p class="text-stone-400 text-xs leading-relaxed">Alunan musik dengan frekuensi menenangkan</p>
                            </div>
                            <div class="w-8 h-8 rounded-lg bg-sage-100 flex items-center justify-center shrink-0 group-hover:bg-sage-500 transition-colors duration-300">
                                <i class="fas fa-arrow-right text-sage-500 text-xs group-hover:text-white group-hover:translate-x-0.5 transition-all"></i>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Pernapasan 4-7-8 -->
                <a href="{{ url('/pernapasan') }}" class="group block">
                    <div class="feature-card-interactive h-full">
                        <div class="relative aspect-4/3 rounded-xl bg-linear-to-br from-teal-100 via-teal-50 to-cream-50 flex items-center justify-center mb-5 overflow-hidden">
                            <div class="absolute inset-0 bg-linear-to-t from-teal-200/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                            <i class="fas fa-wind text-teal-400 text-4xl group-hover:scale-110 group-hover:text-teal-500 transition-all duration-300 relative z-10"></i>
                            <div class="absolute top-2 right-2 w-8 h-8 rounded-full bg-teal-200/50 blur-sm"></div>
                            <div class="absolute bottom-4 left-3 w-6 h-6 rounded-full bg-teal-300/30 blur-sm"></div>
                        </div>
                        <div class="flex items-start justify-between gap-3">
                            <div>
                                <h3 class="text-base font-semibold text-stone-800 mb-1 group-hover:text-teal-700 transition-colors">Pernapasan 4-7-8</h3>
                                <p class="text-stone-400 text-xs leading-relaxed">Teknik untuk menenangkan sistem saraf</p>
                            </div>
                            <div class="w-8 h-8 rounded-lg bg-teal-100 flex items-center justify-center shrink-0 group-hover:bg-teal-500 transition-colors duration-300">
                                <i class="fas fa-arrow-right text-teal-500 text-xs group-hover:text-white group-hover:translate-x-0.5 transition-all"></i>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Mindfulness -->
                <a href="{{ url('/mindfulness') }}" class="group block">
                    <div class="feature-card-interactive h-full">
                        <div class="relative aspect-4/3 rounded-xl bg-linear-to-br from-purple-100 via-purple-50 to-cream-50 flex items-center justify-center mb-5 overflow-hidden">
                            <div class="absolute inset-0 bg-linear-to-t from-purple-200/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                            <i class="fas fa-brain text-purple-400 text-4xl group-hover:scale-110 group-hover:text-purple-500 transition-all duration-300 relative z-10"></i>
                            <div class="absolute top-2 right-2 w-8 h-8 rounded-full bg-purple-200/50 blur-sm"></div>
                            <div class="absolute bottom-4 left-3 w-6 h-6 rounded-full bg-purple-300/30 blur-sm"></div>
                        </div>
                        <div class="flex items-start justify-between gap-3">
                            <div>
                                <h3 class="text-base font-semibold text-stone-800 mb-1 group-hover:text-purple-700 transition-colors">Mindfulness</h3>
                                <p class="text-stone-400 text-xs leading-relaxed">Panduan untuk meningkatkan kesadaran</p>
                            </div>
                            <div class="w-8 h-8 rounded-lg bg-purple-100 flex items-center justify-center shrink-0 group-hover:bg-purple-500 transition-colors duration-300">
                                <i class="fas fa-arrow-right text-purple-500 text-xs group-hover:text-white group-hover:translate-x-0.5 transition-all"></i>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Visual Relaksasi -->
                <a href="{{ url('/visual') }}" class="group block">
                    <div class="feature-card-interactive h-full">
                        <div class="relative aspect-4/3 rounded-xl bg-linear-to-br from-amber-100 via-amber-50 to-cream-50 flex items-center justify-center mb-5 overflow-hidden">
                            <div class="absolute inset-0 bg-linear-to-t from-amber-200/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                            <i class="fas fa-mountain-sun text-amber-400 text-4xl group-hover:scale-110 group-hover:text-amber-500 transition-all duration-300 relative z-10"></i>
                            <div class="absolute top-2 right-2 w-8 h-8 rounded-full bg-amber-200/50 blur-sm"></div>
                            <div class="absolute bottom-4 left-3 w-6 h-6 rounded-full bg-amber-300/30 blur-sm"></div>
                        </div>
                        <div class="flex items-start justify-between gap-3">
                            <div>
                                <h3 class="text-base font-semibold text-stone-800 mb-1 group-hover:text-amber-700 transition-colors">Visual Relaksasi</h3>
                                <p class="text-stone-400 text-xs leading-relaxed">Visualisasi alam yang menenangkan</p>
                            </div>
                            <div class="w-8 h-8 rounded-lg bg-amber-100 flex items-center justify-center shrink-0 group-hover:bg-amber-500 transition-colors duration-300">
                                <i class="fas fa-arrow-right text-amber-500 text-xs group-hover:text-white group-hover:translate-x-0.5 transition-all"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- ==================== HOW IT WORKS ==================== -->
    <section id="how-it-works" class="py-20 relative">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-14">
                <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-teal-100/80 text-teal-700 text-sm font-medium mb-4">
                    <i class="fas fa-route text-xs"></i>
                    Cara Kerja
                </span>
                <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-semibold text-stone-800 mb-5">
                    Mulai dalam <span class="text-gradient-sage">3 Langkah</span> Mudah
                </h2>
                <p class="text-stone-500 text-base sm:text-lg">
                    Tidak perlu registrasi atau instalasi. Langsung gunakan kapan saja Anda butuhkan.
                </p>
            </div>

            <!-- Steps -->
            <div class="grid md:grid-cols-3 gap-6 relative">
                <!-- Connection Line (desktop) -->
                <div class="hidden md:block absolute top-20 left-[20%] right-[20%] h-0.5 bg-linear-to-r from-sage-200 via-teal-200 to-sage-200"></div>

                <!-- Step 1 -->
                <div class="relative text-center group">
                    <div class="w-16 h-16 mx-auto mb-5 rounded-2xl bg-linear-to-br from-sage-400 to-sage-500 flex items-center justify-center shadow-xl shadow-sage-500/20 group-hover:shadow-sage-500/30 group-hover:scale-105 transition-all duration-300 relative z-10">
                        <span class="text-white text-xl font-bold">1</span>
                    </div>
                    <h3 class="text-lg font-semibold text-stone-800 mb-2">Pilih Teknik</h3>
                    <p class="text-stone-500 text-sm max-w-xs mx-auto">Pilih salah satu dari empat teknik relaksasi yang tersedia sesuai kebutuhan Anda.</p>
                </div>

                <!-- Step 2 -->
                <div class="relative text-center group">
                    <div class="w-16 h-16 mx-auto mb-5 rounded-2xl bg-linear-to-br from-teal-400 to-teal-500 flex items-center justify-center shadow-xl shadow-teal-500/20 group-hover:shadow-teal-500/30 group-hover:scale-105 transition-all duration-300 relative z-10">
                        <span class="text-white text-xl font-bold">2</span>
                    </div>
                    <h3 class="text-lg font-semibold text-stone-800 mb-2">Ikuti Panduan</h3>
                    <p class="text-stone-500 text-sm max-w-xs mx-auto">Ikuti instruksi dan panduan yang disediakan untuk setiap teknik relaksasi.</p>
                </div>

                <!-- Step 3 -->
                <div class="relative text-center group">
                    <div class="w-16 h-16 mx-auto mb-5 rounded-2xl bg-linear-to-br from-purple-400 to-purple-500 flex items-center justify-center shadow-xl shadow-purple-500/20 group-hover:shadow-purple-500/30 group-hover:scale-105 transition-all duration-300 relative z-10">
                        <span class="text-white text-xl font-bold">3</span>
                    </div>
                    <h3 class="text-lg font-semibold text-stone-800 mb-2">Rasakan Manfaat</h3>
                    <p class="text-stone-500 text-sm max-w-xs mx-auto">Nikmati ketenangan dan rasakan perubahan positif pada kesehatan mental Anda.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== BENEFITS SECTION ==================== -->
    <section id="benefits" class="py-20 relative">
        <!-- Background accent -->
        <div class="absolute inset-0 bg-linear-to-b from-sage-50/30 via-transparent to-sage-50/20 -z-10"></div>

        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">

                <!-- Benefits Content -->
                <div>
                    <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-sage-100/80 text-sage-700 text-sm font-medium mb-4">
                        <i class="fas fa-chart-line text-xs"></i>
                        Manfaat
                    </span>
                    <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-semibold text-stone-800 mb-5">
                        Rasakan <span class="text-gradient-sage">Perubahan</span> Positif
                    </h2>
                    <p class="text-stone-500 text-base sm:text-lg mb-8">
                        Penggunaan rutin teknik relaksasi dapat memberikan dampak signifikan pada kesejahteraan mental Anda.
                    </p>

                    <div class="space-y-4">
                        <!-- Benefit 1 -->
                        <div class="benefit-item group">
                            <div class="w-11 h-11 rounded-xl bg-linear-to-br from-sage-100 to-sage-50 flex items-center justify-center shrink-0 group-hover:scale-105 transition-transform">
                                <i class="fas fa-heart text-sage-500"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-stone-800 text-sm mb-0.5">Mengurangi Kecemasan</h4>
                                <p class="text-stone-400 text-xs">Meredakan perasaan gelisah dan kekhawatiran berlebih secara alami.</p>
                            </div>
                        </div>

                        <!-- Benefit 2 -->
                        <div class="benefit-item group">
                            <div class="w-11 h-11 rounded-xl bg-linear-to-br from-teal-100 to-teal-50 flex items-center justify-center shrink-0 group-hover:scale-105 transition-transform">
                                <i class="fas fa-lungs text-teal-500"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-stone-800 text-sm mb-0.5">Pernapasan Lebih Baik</h4>
                                <p class="text-stone-400 text-xs">Mengatur ritme pernapasan menjadi lebih teratur dan efektif.</p>
                            </div>
                        </div>

                        <!-- Benefit 3 -->
                        <div class="benefit-item group">
                            <div class="w-11 h-11 rounded-xl bg-linear-to-br from-purple-100 to-purple-50 flex items-center justify-center shrink-0 group-hover:scale-105 transition-transform">
                                <i class="fas fa-brain text-purple-500"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-stone-800 text-sm mb-0.5">Fokus Meningkat</h4>
                                <p class="text-stone-400 text-xs">Meningkatkan konsentrasi dan kesadaran pada saat ini.</p>
                            </div>
                        </div>

                        <!-- Benefit 4 -->
                        <div class="benefit-item group">
                            <div class="w-11 h-11 rounded-xl bg-linear-to-br from-amber-100 to-amber-50 flex items-center justify-center shrink-0 group-hover:scale-105 transition-transform">
                                <i class="fas fa-moon text-amber-500"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-stone-800 text-sm mb-0.5">Tidur Lebih Nyenyak</h4>
                                <p class="text-stone-400 text-xs">Membantu Anda tidur lebih cepat dan berkualitas.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stats Card -->
                <div class="glass-card-strong rounded-3xl p-6 sm:p-8 shadow-2xl shadow-sage-500/5 border border-white/50">
                    <h4 class="font-semibold text-stone-800 mb-6 flex items-center gap-2">
                        <i class="fas fa-chart-bar text-sage-500"></i>
                        Efektivitas Penggunaan Rutin
                    </h4>

                    <div class="space-y-5">
                        <!-- Progress 1 -->
                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="text-sm text-stone-600 font-medium">Ketenangan Mental</span>
                                <span class="text-sm font-bold text-sage-600">85%</span>
                            </div>
                            <div class="h-2.5 bg-stone-100 rounded-full overflow-hidden">
                                <div class="h-full bg-linear-to-r from-sage-400 to-sage-500 rounded-full progress-bar" style="width: 85%"></div>
                            </div>
                        </div>

                        <!-- Progress 2 -->
                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="text-sm text-stone-600 font-medium">Kontrol Pernapasan</span>
                                <span class="text-sm font-bold text-teal-600">90%</span>
                            </div>
                            <div class="h-2.5 bg-stone-100 rounded-full overflow-hidden">
                                <div class="h-full bg-linear-to-r from-teal-400 to-teal-500 rounded-full progress-bar" style="width: 90%"></div>
                            </div>
                        </div>

                        <!-- Progress 3 -->
                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="text-sm text-stone-600 font-medium">Fokus & Perhatian</span>
                                <span class="text-sm font-bold text-purple-600">75%</span>
                            </div>
                            <div class="h-2.5 bg-stone-100 rounded-full overflow-hidden">
                                <div class="h-full bg-linear-to-r from-purple-400 to-purple-500 rounded-full progress-bar" style="width: 75%"></div>
                            </div>
                        </div>

                        <!-- Progress 4 -->
                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="text-sm text-stone-600 font-medium">Kualitas Tidur</span>
                                <span class="text-sm font-bold text-amber-600">80%</span>
                            </div>
                            <div class="h-2.5 bg-stone-100 rounded-full overflow-hidden">
                                <div class="h-full bg-linear-to-r from-amber-400 to-amber-500 rounded-full progress-bar" style="width: 80%"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Tip Box -->
                    <div class="mt-6 p-4 rounded-xl bg-linear-to-r from-sage-50 to-cream-50 border border-sage-100">
                        <div class="flex items-start gap-3">
                            <div class="w-8 h-8 rounded-lg bg-sage-100 flex items-center justify-center shrink-0">
                                <i class="fas fa-lightbulb text-sage-500 text-sm"></i>
                            </div>
                            <div>
                                <h5 class="font-medium text-stone-700 text-sm mb-0.5">Tips Penggunaan</h5>
                                <p class="text-stone-500 text-xs leading-relaxed">Praktikkan 5-10 menit setiap hari untuk hasil optimal. Konsistensi lebih penting dari durasi.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== CTA SECTION ==================== -->
    <section class="py-20 relative overflow-hidden">
        <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">
            <div class="relative glass-card-strong rounded-3xl p-8 sm:p-12 text-center shadow-2xl shadow-sage-500/10 border border-white/50 overflow-hidden">
                <!-- Background decorations -->
                <div class="absolute top-0 right-0 w-40 h-40 bg-linear-to-bl from-sage-200/30 to-transparent rounded-full blur-2xl"></div>
                <div class="absolute bottom-0 left-0 w-40 h-40 bg-linear-to-tr from-teal-200/20 to-transparent rounded-full blur-2xl"></div>

                <div class="relative z-10">
                    <div class="w-16 h-16 mx-auto mb-6 rounded-2xl bg-linear-to-br from-sage-400 to-sage-500 flex items-center justify-center shadow-xl shadow-sage-500/20">
                        <i class="fas fa-spa text-white text-2xl"></i>
                    </div>

                    <h2 class="font-serif text-2xl sm:text-3xl lg:text-4xl font-semibold text-stone-800 mb-4">
                        Siap Menemukan <span class="text-gradient-sage">Ketenangan</span>?
                    </h2>
                    <p class="text-stone-500 text-base sm:text-lg mb-8 max-w-xl mx-auto">
                        Pilih salah satu teknik relaksasi dan mulai perjalanan menuju kesejahteraan mental yang lebih baik.
                    </p>

                    <div class="flex flex-col sm:flex-row justify-center gap-3">
                        <a href="#features" class="btn-primary shadow-xl shadow-sage-500/20">
                            <i class="fas fa-play-circle"></i>
                            Mulai Relaksasi
                        </a>
                        <a href="#about" class="btn-secondary">
                            <i class="fas fa-book-open"></i>
                            Pelajari Lebih Lanjut
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- ==================== FOOTER ==================== -->
<footer class="py-10 border-t border-sage-100 relative z-10 bg-linear-to-b from-transparent to-cream-50/50">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between items-center gap-6">
            <!-- Logo -->
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-linear-to-br from-sage-400 to-sage-600 flex items-center justify-center shadow-md">
                    <i class="fas fa-leaf text-white"></i>
                </div>
                <div>
                    <p class="font-semibold text-stone-700">Anxiety Relief Tool</p>
                    <p class="text-xs text-stone-400">Platform Wellness Terpercaya</p>
                </div>
            </div>

            <!-- Copyright -->
            <p class="text-stone-400 text-sm text-center">
                © 2024 Anxiety Relief Tool. Dikembangkan untuk tujuan edukasi.
            </p>

            <!-- Social Links -->
            <div class="flex items-center gap-3">
                <a href="#" class="w-9 h-9 rounded-full bg-stone-100 flex items-center justify-center text-stone-400 hover:bg-sage-100 hover:text-sage-600 transition-all duration-300 hover:scale-105">
                    <i class="fab fa-instagram text-sm"></i>
                </a>
                <a href="#" class="w-9 h-9 rounded-full bg-stone-100 flex items-center justify-center text-stone-400 hover:bg-sage-100 hover:text-sage-600 transition-all duration-300 hover:scale-105">
                    <i class="fab fa-twitter text-sm"></i>
                </a>
                <a href="#" class="w-9 h-9 rounded-full bg-stone-100 flex items-center justify-center text-stone-400 hover:bg-sage-100 hover:text-sage-600 transition-all duration-300 hover:scale-105">
                    <i class="fab fa-github text-sm"></i>
                </a>
            </div>
        </div>
    </div>
</footer>

<!-- Mobile Menu Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileMenu = document.getElementById('mobileMenu');

    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
            const icon = mobileMenuBtn.querySelector('i');
            icon.classList.toggle('fa-bars');
            icon.classList.toggle('fa-times');
        });
    }

    document.querySelectorAll('#mobileMenu a').forEach(link => {
        link.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
            const icon = mobileMenuBtn.querySelector('i');
            icon.classList.add('fa-bars');
            icon.classList.remove('fa-times');
        });
    });

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });

});
</script>

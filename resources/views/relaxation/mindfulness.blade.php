@extends('layouts.app')

@section('title', 'Mindfulness Singkat')

@section('content')
<!-- Floating Decorative Elements -->
<div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
    <div class="absolute top-20 left-10 w-72 h-72 bg-linear-to-br from-purple-200/30 to-transparent rounded-full blur-3xl animate-pulse-soft"></div>
    <div class="absolute bottom-40 right-10 w-96 h-96 bg-linear-to-tl from-purple-100/40 to-transparent rounded-full blur-3xl animate-pulse-soft"></div>
</div>

<!-- Back Navigation -->
<nav class="fixed top-0 left-0 right-0 z-50 pt-4">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="glass-card rounded-2xl px-6 py-4 shadow-soft">
            <div class="flex justify-between items-center">
                <a href="{{ url('/') }}" class="flex items-center gap-3 group">
                    <div class="w-11 h-11 rounded-xl bg-linear-to-br from-sage-400 to-sage-600 flex items-center justify-center shadow-soft group-hover:shadow-glow-sage transition-all duration-300">
                        <i class="fas fa-leaf text-white text-lg"></i>
                    </div>
                    <div>
                        <h1 class="text-lg font-semibold text-stone-800">Anxiety Relief</h1>
                        <p class="text-xs text-stone-400 -mt-0.5">Mindful Wellness</p>
                    </div>
                </a>
                <a href="{{ url('/') }}" class="btn-secondary text-sm py-2.5 px-5">
                    <i class="fas fa-arrow-left"></i>
                    Kembali
                </a>
            </div>
        </div>
    </div>
</nav>

<!-- Main Content -->
<main class="relative z-10 min-h-screen flex items-center pt-32 pb-20">
    <div class="mx-auto max-w-4xl px-6 lg:px-8 w-full">
        <div class="glass-card rounded-3xl p-8 md:p-12 shadow-elevated animate-fade-in-up">
            <!-- Icon -->
            <div class="w-20 h-20 rounded-2xl bg-linear-to-br from-purple-400 to-purple-600 flex items-center justify-center mx-auto mb-8 shadow-soft">
                <i class="fas fa-brain text-white text-3xl"></i>
            </div>

            <!-- Title -->
            <h1 class="font-serif text-4xl md:text-5xl font-semibold text-stone-800 text-center mb-3">
                {{ $pageData->title ?? 'Mindfulness Singkat' }}
            </h1>
            <p class="text-purple-600 font-medium text-center mb-6">{{ $pageData->subtitle ?? 'Panduan Premium 1-3 Menit' }}</p>

            <!-- Description -->
            <p class="text-stone-500 text-center mb-8 max-w-2xl mx-auto leading-relaxed">
                {!! $pageData->description ?? '<span class="font-semibold text-stone-700">Mindfulness</span> adalah latihan kesadaran penuh pada saat ini, membantu mengurangi kecemasan, meningkatkan fokus, dan menumbuhkan rasa syukur. Praktik singkat ini cocok dilakukan kapan saja Anda butuh jeda.' !!}
            </p>

            <!-- Quote -->
            @if($pageData && $pageData->quote)
            <blockquote class="text-stone-500 italic text-center border-l-4 border-purple-300 pl-4 mb-8 max-w-lg mx-auto bg-purple-50/50 py-3 pr-4 rounded-r-xl">
                "{{ $pageData->quote }}"
            </blockquote>
            @endif

            <!-- Benefits -->
            <div class="grid md:grid-cols-3 gap-4 mb-10">
                @if($pageData && $pageData->benefit_1)
                <div class="flex items-center gap-3 p-4 rounded-xl bg-purple-50/50 border border-purple-100">
                    <div class="w-10 h-10 rounded-lg bg-purple-100 flex items-center justify-center shrink-0">
                        <i class="fas fa-check-circle text-purple-600"></i>
                    </div>
                    <span class="text-stone-600 text-sm">{{ $pageData->benefit_1 }}</span>
                </div>
                @else
                <div class="flex items-center gap-3 p-4 rounded-xl bg-purple-50/50 border border-purple-100">
                    <div class="w-10 h-10 rounded-lg bg-purple-100 flex items-center justify-center shrink-0">
                        <i class="fas fa-check-circle text-purple-600"></i>
                    </div>
                    <span class="text-stone-600 text-sm">Mengurangi kekhawatiran</span>
                </div>
                @endif

                @if($pageData && $pageData->benefit_2)
                <div class="flex items-center gap-3 p-4 rounded-xl bg-purple-50/50 border border-purple-100">
                    <div class="w-10 h-10 rounded-lg bg-purple-100 flex items-center justify-center shrink-0">
                        <i class="fas fa-check-circle text-purple-600"></i>
                    </div>
                    <span class="text-stone-600 text-sm">{{ $pageData->benefit_2 }}</span>
                </div>
                @else
                <div class="flex items-center gap-3 p-4 rounded-xl bg-purple-50/50 border border-purple-100">
                    <div class="w-10 h-10 rounded-lg bg-purple-100 flex items-center justify-center shrink-0">
                        <i class="fas fa-check-circle text-purple-600"></i>
                    </div>
                    <span class="text-stone-600 text-sm">Meningkatkan fokus</span>
                </div>
                @endif

                @if($pageData && $pageData->benefit_3)
                <div class="flex items-center gap-3 p-4 rounded-xl bg-purple-50/50 border border-purple-100">
                    <div class="w-10 h-10 rounded-lg bg-purple-100 flex items-center justify-center shrink-0">
                        <i class="fas fa-check-circle text-purple-600"></i>
                    </div>
                    <span class="text-stone-600 text-sm">{{ $pageData->benefit_3 }}</span>
                </div>
                @else
                <div class="flex items-center gap-3 p-4 rounded-xl bg-purple-50/50 border border-purple-100">
                    <div class="w-10 h-10 rounded-lg bg-purple-100 flex items-center justify-center shrink-0">
                        <i class="fas fa-check-circle text-purple-600"></i>
                    </div>
                    <span class="text-stone-600 text-sm">Menumbuhkan kesadaran diri</span>
                </div>
                @endif
            </div>

            @if (!empty($youtubeUrl))
                <!-- YouTube Video -->
                <div class="bg-linear-to-br from-purple-50 to-cream-50 rounded-2xl p-6 border border-purple-100 mb-8">
                    <h3 class="font-semibold text-stone-800 mb-3 text-center">Video Panduan Mindfulness (YouTube)</h3>
                    <div class="aspect-video rounded-2xl overflow-hidden shadow-soft border border-purple-100 bg-black/80">
                        @php
                            $rawUrl = $youtubeUrl;
                            $embedUrl = $rawUrl;
                            if (str_contains($rawUrl, 'watch?v=')) {
                                $embedUrl = str_replace('watch?v=', 'embed/', $rawUrl);
                            } elseif (str_contains($rawUrl, 'youtu.be/')) {
                                $embedUrl = preg_replace('~https?://youtu\.be/([^?]+).*~', 'https://www.youtube.com/embed/$1', $rawUrl);
                            }
                        @endphp
                        <iframe src="{{ $embedUrl }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="w-full h-full"></iframe>
                    </div>
                    <p class="text-stone-400 text-xs mt-3 text-center">
                        Gunakan video ini sebagai panduan audio-visual untuk latihan mindfulness singkat.
                    </p>
                </div>
            @endif

            <!-- Mindfulness Guide -->
            <div class="bg-linear-to-br from-purple-50 to-cream-50 rounded-2xl p-8 border border-purple-100 mb-6">
                <h3 class="font-semibold text-stone-800 text-center mb-6">Panduan Mindfulness</h3>

                <div class="space-y-4">
                    <!-- Step 1 -->
                    <div class="flex items-start gap-4 p-4 rounded-xl bg-white/60">
                        <div class="w-10 h-10 rounded-full bg-purple-100 flex items-center justify-center shrink-0">
                            <span class="text-purple-600 font-semibold">1</span>
                        </div>
                        <div>
                            <h4 class="font-medium text-stone-800 mb-1">Duduk dengan Nyaman</h4>
                            <p class="text-stone-500 text-sm">Cari posisi duduk yang nyaman, tutup mata Anda, dan rilekskan bahu.</p>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="flex items-start gap-4 p-4 rounded-xl bg-white/60">
                        <div class="w-10 h-10 rounded-full bg-purple-100 flex items-center justify-center shrink-0">
                            <span class="text-purple-600 font-semibold">2</span>
                        </div>
                        <div>
                            <h4 class="font-medium text-stone-800 mb-1">Fokus pada Pernapasan</h4>
                            <p class="text-stone-500 text-sm">Perhatikan napas masuk dan keluar. Rasakan udara mengalir melalui hidung.</p>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="flex items-start gap-4 p-4 rounded-xl bg-white/60">
                        <div class="w-10 h-10 rounded-full bg-purple-100 flex items-center justify-center shrink-0">
                            <span class="text-purple-600 font-semibold">3</span>
                        </div>
                        <div>
                            <h4 class="font-medium text-stone-800 mb-1">Sadari Sensasi Tubuh</h4>
                            <p class="text-stone-500 text-sm">Perhatikan sensasi di seluruh tubuh, dari kepala hingga ujung kaki.</p>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="flex items-start gap-4 p-4 rounded-xl bg-white/60">
                        <div class="w-10 h-10 rounded-full bg-purple-100 flex items-center justify-center shrink-0">
                            <span class="text-purple-600 font-semibold">4</span>
                        </div>
                        <div>
                            <h4 class="font-medium text-stone-800 mb-1">Terima Pikiran yang Datang</h4>
                            <p class="text-stone-500 text-sm">Jika pikiran mengembara, akui tanpa menghakimi, lalu kembali ke napas.</p>
                        </div>
                    </div>
                </div>

                <!-- Timer Suggestion -->
                <div class="mt-6 p-4 rounded-xl bg-purple-100/50 text-center">
                    <p class="text-purple-700 text-sm">
                        <i class="fas fa-clock mr-2"></i>
                        Luangkan waktu 1-3 menit untuk praktik ini
                    </p>
                </div>
            </div>

            <!-- Action Button -->
            <div class="text-center">
                <a href="{{ url('/') }}" class="btn-primary inline-flex">
                    <i class="fas fa-home"></i>
                    Kembali ke Beranda
                </a>
            </div>
        </div>
    </div>
</main>
@endsection

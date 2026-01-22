@extends('layouts.app')

@section('title', 'Musik Relaksasi')

@section('content')
<!-- Floating Decorative Elements -->
<div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
    <div class="absolute top-20 left-10 w-72 h-72 bg-linear-to-br from-sage-200/30 to-transparent rounded-full blur-3xl animate-pulse-soft"></div>
    <div class="absolute bottom-40 right-10 w-96 h-96 bg-linear-to-tl from-sage-100/40 to-transparent rounded-full blur-3xl animate-pulse-soft"></div>
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
            <div class="w-20 h-20 rounded-2xl bg-linear-to-br from-sage-400 to-sage-600 flex items-center justify-center mx-auto mb-8 shadow-soft">
                <i class="fas fa-headphones text-white text-3xl"></i>
            </div>

            <!-- Title -->
            <h1 class="font-serif text-4xl md:text-5xl font-semibold text-stone-800 text-center mb-3">
                {{ $pageData->title ?? 'Musik Relaksasi' }}
            </h1>
            <p class="text-sage-600 font-medium text-center mb-6">{{ $pageData->subtitle ?? 'Premium Binaural & Nature Sound' }}</p>

            <!-- Description -->
            <p class="text-stone-500 text-center mb-8 max-w-2xl mx-auto leading-relaxed">
                {!! $pageData->description ?? '<span class="font-semibold text-stone-700">Musik relaksasi</span> adalah teknik terapi menggunakan alunan musik dengan frekuensi khusus yang terbukti secara ilmiah dapat menenangkan sistem saraf, menurunkan hormon stres, dan menciptakan suasana damai.' !!}
            </p>

            <!-- Quote -->
            @if($pageData && $pageData->quote)
            <blockquote class="text-stone-500 italic text-center border-l-4 border-sage-300 pl-4 mb-8 max-w-lg mx-auto bg-sage-50/50 py-3 pr-4 rounded-r-xl">
                "{{ $pageData->quote }}"
            </blockquote>
            @endif

            <!-- Benefits -->
            <div class="grid md:grid-cols-3 gap-4 mb-10">
                @if($pageData && $pageData->benefit_1)
                <div class="flex items-center gap-3 p-4 rounded-xl bg-sage-50/50 border border-sage-100">
                    <div class="w-10 h-10 rounded-lg bg-sage-100 flex items-center justify-center shrink-0">
                        <i class="fas fa-check-circle text-sage-600"></i>
                    </div>
                    <span class="text-stone-600 text-sm">{{ $pageData->benefit_1 }}</span>
                </div>
                @else
                <div class="flex items-center gap-3 p-4 rounded-xl bg-sage-50/50 border border-sage-100">
                    <div class="w-10 h-10 rounded-lg bg-sage-100 flex items-center justify-center shrink-0">
                        <i class="fas fa-check-circle text-sage-600"></i>
                    </div>
                    <span class="text-stone-600 text-sm">Mengurangi kecemasan</span>
                </div>
                @endif

                @if($pageData && $pageData->benefit_2)
                <div class="flex items-center gap-3 p-4 rounded-xl bg-sage-50/50 border border-sage-100">
                    <div class="w-10 h-10 rounded-lg bg-sage-100 flex items-center justify-center shrink-0">
                        <i class="fas fa-check-circle text-sage-600"></i>
                    </div>
                    <span class="text-stone-600 text-sm">{{ $pageData->benefit_2 }}</span>
                </div>
                @else
                <div class="flex items-center gap-3 p-4 rounded-xl bg-sage-50/50 border border-sage-100">
                    <div class="w-10 h-10 rounded-lg bg-sage-100 flex items-center justify-center shrink-0">
                        <i class="fas fa-check-circle text-sage-600"></i>
                    </div>
                    <span class="text-stone-600 text-sm">Meningkatkan kualitas tidur</span>
                </div>
                @endif

                @if($pageData && $pageData->benefit_3)
                <div class="flex items-center gap-3 p-4 rounded-xl bg-sage-50/50 border border-sage-100">
                    <div class="w-10 h-10 rounded-lg bg-sage-100 flex items-center justify-center shrink-0">
                        <i class="fas fa-check-circle text-sage-600"></i>
                    </div>
                    <span class="text-stone-600 text-sm">{{ $pageData->benefit_3 }}</span>
                </div>
                @else
                <div class="flex items-center gap-3 p-4 rounded-xl bg-sage-50/50 border border-sage-100">
                    <div class="w-10 h-10 rounded-lg bg-sage-100 flex items-center justify-center shrink-0">
                        <i class="fas fa-check-circle text-sage-600"></i>
                    </div>
                    <span class="text-stone-600 text-sm">Membantu fokus & produktivitas</span>
                </div>
                @endif
            </div>

            @if (!empty($youtubeUrl))
                <!-- YouTube Video -->
                <div class="bg-linear-to-br from-sage-50 to-cream-50 rounded-2xl p-6 border border-sage-100 mb-6 relax-video-fullwidth">
                    <h3 class="font-semibold text-stone-800 mb-3 text-center">Video Musik Relaksasi (YouTube)</h3>
                    <div class="aspect-video rounded-2xl overflow-hidden shadow-soft border border-sage-100 bg-black/80">
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
                        Anda dapat memutar video ini sebagai pendamping musik relaksasi.
                    </p>
                </div>
            @endif

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


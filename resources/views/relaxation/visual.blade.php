@extends('layouts.app')

@section('title', 'Visual Relaksasi')

@section('content')
<!-- Floating Decorative Elements -->
<div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
    <div class="absolute top-20 left-10 w-72 h-72 bg-linear-to-br from-amber-200/30 to-transparent rounded-full blur-3xl animate-pulse-soft"></div>
    <div class="absolute bottom-40 right-10 w-96 h-96 bg-linear-to-tl from-amber-100/40 to-transparent rounded-full blur-3xl animate-pulse-soft"></div>
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
            <div class="w-20 h-20 rounded-2xl bg-linear-to-br from-amber-400 to-amber-600 flex items-center justify-center mx-auto mb-8 shadow-soft">
                <i class="fas fa-mountain-sun text-white text-3xl"></i>
            </div>

            <!-- Title -->
            <h1 class="font-serif text-4xl md:text-5xl font-semibold text-stone-800 text-center mb-3">
                {{ $pageData->title ?? 'Visual Relaksasi' }}
            </h1>
            <p class="text-amber-600 font-medium text-center mb-6">{{ $pageData->subtitle ?? 'Premium Nature & Calming Visuals' }}</p>

            <!-- Description -->
            <p class="text-stone-500 text-center mb-8 max-w-2xl mx-auto leading-relaxed">
                {!! $pageData->description ?? '<span class="font-semibold text-stone-700">Visual relaksasi</span> adalah teknik menenangkan pikiran dengan memperhatikan visualisasi alam atau gerakan lembut di layar. Cara ini efektif untuk mengurangi stres dan meningkatkan rasa tenang secara alami.' !!}
            </p>

            <!-- Quote -->
            @if($pageData && $pageData->quote)
            <blockquote class="text-stone-500 italic text-center border-l-4 border-amber-300 pl-4 mb-8 max-w-lg mx-auto bg-amber-50/50 py-3 pr-4 rounded-r-xl">
                "{{ $pageData->quote }}"
            </blockquote>
            @endif

            <!-- Benefits -->
            <div class="grid md:grid-cols-3 gap-4 mb-10">
                @if($pageData && $pageData->benefit_1)
                <div class="flex items-center gap-3 p-4 rounded-xl bg-amber-50/50 border border-amber-100">
                    <div class="w-10 h-10 rounded-lg bg-amber-100 flex items-center justify-center shrink-0">
                        <i class="fas fa-check-circle text-amber-600"></i>
                    </div>
                    <span class="text-stone-600 text-sm">{{ $pageData->benefit_1 }}</span>
                </div>
                @else
                <div class="flex items-center gap-3 p-4 rounded-xl bg-amber-50/50 border border-amber-100">
                    <div class="w-10 h-10 rounded-lg bg-amber-100 flex items-center justify-center shrink-0">
                        <i class="fas fa-check-circle text-amber-600"></i>
                    </div>
                    <span class="text-stone-600 text-sm">Mengurangi stres visual</span>
                </div>
                @endif

                @if($pageData && $pageData->benefit_2)
                <div class="flex items-center gap-3 p-4 rounded-xl bg-amber-50/50 border border-amber-100">
                    <div class="w-10 h-10 rounded-lg bg-amber-100 flex items-center justify-center shrink-0">
                        <i class="fas fa-check-circle text-amber-600"></i>
                    </div>
                    <span class="text-stone-600 text-sm">{{ $pageData->benefit_2 }}</span>
                </div>
                @else
                <div class="flex items-center gap-3 p-4 rounded-xl bg-amber-50/50 border border-amber-100">
                    <div class="w-10 h-10 rounded-lg bg-amber-100 flex items-center justify-center shrink-0">
                        <i class="fas fa-check-circle text-amber-600"></i>
                    </div>
                    <span class="text-stone-600 text-sm">Menenangkan pikiran</span>
                </div>
                @endif

                @if($pageData && $pageData->benefit_3)
                <div class="flex items-center gap-3 p-4 rounded-xl bg-amber-50/50 border border-amber-100">
                    <div class="w-10 h-10 rounded-lg bg-amber-100 flex items-center justify-center shrink-0">
                        <i class="fas fa-check-circle text-amber-600"></i>
                    </div>
                    <span class="text-stone-600 text-sm">{{ $pageData->benefit_3 }}</span>
                </div>
                @else
                <div class="flex items-center gap-3 p-4 rounded-xl bg-amber-50/50 border border-amber-100">
                    <div class="w-10 h-10 rounded-lg bg-amber-100 flex items-center justify-center shrink-0">
                        <i class="fas fa-check-circle text-amber-600"></i>
                    </div>
                    <span class="text-stone-600 text-sm">Relaksasi alami</span>
                </div>
                @endif
            </div>

            @if (!empty($youtubeUrl))
                <!-- YouTube Video -->
                <div class="bg-linear-to-br from-amber-50 to-cream-50 rounded-2xl p-6 border border-amber-100 mb-8">
                    <h3 class="font-semibold text-stone-800 mb-3 text-center">Video Visual Relaksasi (YouTube)</h3>
                    <div class="aspect-video rounded-2xl overflow-hidden shadow-soft border border-amber-100 bg-black/80">
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
                        Alihkan fokus ke video ini untuk membantu menenangkan pikiran.
                    </p>
                </div>
            @endif

            <!-- Visual Display -->
            <div class="bg-linear-to-br from-amber-50 to-cream-50 rounded-2xl p-6 border border-amber-100 mb-6">
                <div class="relative aspect-video rounded-xl overflow-hidden bg-linear-to-br from-amber-100 via-sage-50 to-teal-100 flex items-center justify-center">
                    <!-- Animated Nature Scene -->
                    <div class="absolute inset-0 flex items-center justify-center">
                        <!-- Sun -->
                        <div class="absolute top-8 right-12 w-16 h-16 rounded-full bg-amber-300 animate-pulse-soft shadow-lg" style="box-shadow: 0 0 60px rgba(251, 191, 36, 0.6);"></div>

                        <!-- Mountains -->
                        <div class="absolute bottom-0 left-0 right-0">
                            <svg viewBox="0 0 400 100" class="w-full h-32">
                                <path d="M0,100 L80,40 L140,70 L200,20 L280,60 L340,30 L400,70 L400,100 Z" fill="#a7c4a0" opacity="0.8"/>
                                <path d="M0,100 L60,60 L120,80 L180,50 L240,75 L320,45 L400,80 L400,100 Z" fill="#7d9567" opacity="0.9"/>
                            </svg>
                        </div>

                        <!-- Floating Clouds -->
                        <div class="absolute top-12 left-12 w-20 h-8 bg-white/60 rounded-full animate-float blur-sm"></div>
                        <div class="absolute top-16 left-32 w-24 h-10 bg-white/50 rounded-full animate-float" style="animation-delay: 1s;"></div>
                        <div class="absolute top-8 right-40 w-16 h-6 bg-white/40 rounded-full animate-float" style="animation-delay: 2s;"></div>

                        <!-- Birds -->
                        <div class="absolute top-20 left-1/4 text-stone-400/50 animate-float" style="animation-delay: 0.5s;">
                            <i class="fas fa-dove text-lg"></i>
                        </div>
                        <div class="absolute top-16 left-1/3 text-stone-400/40 animate-float" style="animation-delay: 1.5s;">
                            <i class="fas fa-dove text-sm"></i>
                        </div>
                    </div>

                    <!-- Center Icon -->
                    <div class="relative z-10 text-center">
                        <i class="fas fa-mountain-sun text-amber-400/80 text-6xl animate-float"></i>
                    </div>
                </div>

                <p class="text-stone-400 text-xs mt-4 text-center">
                    <i class="fas fa-eye mr-1"></i>
                    Fokus pada visual di layar dan rasakan ketenangan
                </p>
            </div>

            <!-- Tips -->
            <div class="grid md:grid-cols-2 gap-4 mb-8">
                <div class="p-4 rounded-xl bg-amber-50/50 border border-amber-100">
                    <div class="flex items-start gap-3">
                        <i class="fas fa-lightbulb text-amber-500 mt-1"></i>
                        <div>
                            <h4 class="font-medium text-stone-800 text-sm mb-1">Tips Penggunaan</h4>
                            <p class="text-stone-500 text-xs">Atur pencahayaan ruangan menjadi redup dan fokus pada gerakan di layar.</p>
                        </div>
                    </div>
                </div>
                <div class="p-4 rounded-xl bg-amber-50/50 border border-amber-100">
                    <div class="flex items-start gap-3">
                        <i class="fas fa-clock text-amber-500 mt-1"></i>
                        <div>
                            <h4 class="font-medium text-stone-800 text-sm mb-1">Durasi</h4>
                            <p class="text-stone-500 text-xs">Nikmati visual selama 2-5 menit untuk hasil optimal.</p>
                        </div>
                    </div>
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

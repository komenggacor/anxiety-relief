@extends('layouts.app')

@section('title', 'Pernapasan 4-7-8')

@section('content')
<!-- Floating Decorative Elements -->
<div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
    <div class="absolute top-20 left-10 w-72 h-72 bg-linear-to-br from-teal-200/30 to-transparent rounded-full blur-3xl animate-pulse-soft"></div>
    <div class="absolute bottom-40 right-10 w-96 h-96 bg-linear-to-tl from-teal-100/40 to-transparent rounded-full blur-3xl animate-pulse-soft"></div>
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
            <div class="w-20 h-20 rounded-2xl bg-linear-to-br from-teal-400 to-teal-600 flex items-center justify-center mx-auto mb-8 shadow-soft">
                <i class="fas fa-wind text-white text-3xl"></i>
            </div>

            <!-- Title -->
            <h1 class="font-serif text-4xl md:text-5xl font-semibold text-stone-800 text-center mb-3">
                Pernapasan 4-7-8
            </h1>
            <p class="text-teal-600 font-medium text-center mb-6">Teknik Relaksasi Pernapasan</p>

            <!-- Description -->
            <p class="text-stone-500 text-center mb-8 max-w-2xl mx-auto leading-relaxed">
                <span class="font-semibold text-stone-700">Pernapasan 4-7-8</span> adalah teknik pernapasan terstruktur yang membantu menenangkan sistem saraf, mengurangi ketegangan, dan meningkatkan fokus. Cocok dilakukan saat merasa cemas atau ingin menenangkan pikiran.
            </p>

            <!-- Quote -->
            <blockquote class="text-stone-500 italic text-center border-l-4 border-teal-300 pl-4 mb-8 max-w-lg mx-auto bg-teal-50/50 py-3 pr-4 rounded-r-xl">
                "Tarik napas 4 detik, tahan 7 detik, hembuskan 8 detik."
            </blockquote>

            <!-- Benefits -->
            <div class="grid md:grid-cols-3 gap-4 mb-10">
                <div class="flex items-center gap-3 p-4 rounded-xl bg-teal-50/50 border border-teal-100">
                    <div class="w-10 h-10 rounded-lg bg-teal-100 flex items-center justify-center shrink-0">
                        <i class="fas fa-check-circle text-teal-600"></i>
                    </div>
                    <span class="text-stone-600 text-sm">Menenangkan sistem saraf</span>
                </div>
                <div class="flex items-center gap-3 p-4 rounded-xl bg-teal-50/50 border border-teal-100">
                    <div class="w-10 h-10 rounded-lg bg-teal-100 flex items-center justify-center shrink-0">
                        <i class="fas fa-check-circle text-teal-600"></i>
                    </div>
                    <span class="text-stone-600 text-sm">Mengurangi ketegangan</span>
                </div>
                <div class="flex items-center gap-3 p-4 rounded-xl bg-teal-50/50 border border-teal-100">
                    <div class="w-10 h-10 rounded-lg bg-teal-100 flex items-center justify-center shrink-0">
                        <i class="fas fa-check-circle text-teal-600"></i>
                    </div>
                    <span class="text-stone-600 text-sm">Meningkatkan fokus</span>
                </div>
            </div>

            <!-- Breathing Animation -->
            <div class="bg-linear-to-br from-teal-50 to-cream-50 rounded-2xl p-8 border border-teal-100 mb-6">
                <div class="relative w-64 h-64 mx-auto flex items-center justify-center">
                    <!-- Breathing Circles -->
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="w-56 h-56 rounded-full bg-teal-200/40 animate-breathe"></div>
                    </div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="w-40 h-40 rounded-full bg-teal-300/30 animate-breathe" style="animation-delay: 0.3s;"></div>
                    </div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="w-24 h-24 rounded-full bg-teal-400/20 animate-breathe" style="animation-delay: 0.6s;"></div>
                    </div>
                    <div class="relative z-10 text-center">
                        <i class="fas fa-wind text-teal-500 text-4xl mb-2"></i>
                        <p class="text-teal-700 font-semibold" id="breatheText">Tarik Napas</p>
                        <p class="text-teal-500 text-3xl font-serif font-bold" id="breatheCounter">4</p>
                    </div>
                </div>

                <!-- Instructions -->
                <div class="mt-6 grid grid-cols-3 gap-4 text-center">
                    <div class="p-3 rounded-xl bg-white/50">
                        <div class="text-2xl font-serif font-bold text-teal-600">4</div>
                        <div class="text-xs text-stone-500">detik tarik</div>
                    </div>
                    <div class="p-3 rounded-xl bg-white/50">
                        <div class="text-2xl font-serif font-bold text-teal-600">7</div>
                        <div class="text-xs text-stone-500">detik tahan</div>
                    </div>
                    <div class="p-3 rounded-xl bg-white/50">
                        <div class="text-2xl font-serif font-bold text-teal-600">8</div>
                        <div class="text-xs text-stone-500">detik buang</div>
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

<!-- Breathing Animation Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const breatheText = document.getElementById('breatheText');
    const breatheCounter = document.getElementById('breatheCounter');

    const phases = [
        { text: 'Tarik Napas', duration: 4 },
        { text: 'Tahan', duration: 7 },
        { text: 'Hembuskan', duration: 8 }
    ];

    let phaseIndex = 0;
    let count = phases[0].duration;

    // Voice guidance using browser Speech Synthesis (jika tersedia)
    const canSpeak = 'speechSynthesis' in window;

    function speak(text) {
        if (!canSpeak) return;
        try {
            window.speechSynthesis.cancel();
            const utterance = new SpeechSynthesisUtterance(text);
            utterance.lang = 'id-ID';
            // Sedikit diperlambat agar lebih jelas dan halus
            utterance.rate = 0.8;
            utterance.pitch = 1.0;
            window.speechSynthesis.speak(utterance);
        } catch (e) {
            // Jika terjadi error, cukup diam (fallback ke tampilan visual saja)
        }
    }

    function announcePhase(phase) {
        const map = {
            'Tarik Napas': 'Tarik napas selama ' + phase.duration + ' detik',
            'Tahan': 'Tahan napas selama ' + phase.duration + ' detik',
            'Hembuskan': 'Hembuskan napas selama ' + phase.duration + ' detik'
        };
        speak(map[phase.text] || (phase.text + ' ' + phase.duration + ' detik'));
    }

    function updateBreathing() {
        if (count > 0) {
            breatheCounter.textContent = count;
            count--;
        } else {
            phaseIndex = (phaseIndex + 1) % phases.length;
            const phase = phases[phaseIndex];
            breatheText.textContent = phase.text;
            count = phase.duration;
            breatheCounter.textContent = count;
            // Umumkan pergantian fase
            announcePhase(phase);
        }
    }

    // Pengumuman awal fase pertama
    announcePhase(phases[0]);

    setInterval(updateBreathing, 1000);
});
</script>
@endsection

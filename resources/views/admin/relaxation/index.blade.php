@extends('layouts.admin')

@section('title', 'Admin - Halaman Relaksasi')

@section('page-title', 'Admin Halaman Relaksasi')
@section('page-subtitle', 'Kelola dan edit konten halaman relaksasi')

@section('content')
<!-- Welcome Banner -->
<div class="bg-linear-to-r from-blue-500 to-indigo-600 rounded-2xl shadow-lg p-8 mb-8 text-white">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-bold mb-2">Selamat Datang, Administrator 👋</h1>
            <p class="text-blue-100 text-sm max-w-2xl">
                Kelola konten halaman relaksasi dengan mudah. Pilih salah satu card di bawah untuk mulai mengedit konten.
            </p>
        </div>
        <div class="hidden lg:block">
            <div class="w-24 h-24 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center">
                <i class="fas fa-spa text-5xl text-white"></i>
            </div>
        </div>
    </div>
</div>

<!-- Stats Cards (Optional) -->
<div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
    <div class="bg-white rounded-xl shadow-md p-6 border border-gray-100">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-xs font-medium text-gray-500 uppercase tracking-wider mb-1">Total Halaman</p>
                <p class="text-2xl font-bold text-gray-800">{{ count($pages) }}</p>
            </div>
            <div class="w-12 h-12 rounded-lg bg-blue-100 flex items-center justify-center">
                <i class="fas fa-file-alt text-blue-600 text-xl"></i>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow-md p-6 border border-gray-100">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-xs font-medium text-gray-500 uppercase tracking-wider mb-1">Musik</p>
                <p class="text-2xl font-bold text-gray-800">1</p>
            </div>
            <div class="w-12 h-12 rounded-lg bg-purple-100 flex items-center justify-center">
                <i class="fas fa-music text-purple-600 text-xl"></i>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow-md p-6 border border-gray-100">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-xs font-medium text-gray-500 uppercase tracking-wider mb-1">Latihan</p>
                <p class="text-2xl font-bold text-gray-800">2</p>
            </div>
            <div class="w-12 h-12 rounded-lg bg-teal-100 flex items-center justify-center">
                <i class="fas fa-dumbbell text-teal-600 text-xl"></i>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow-md p-6 border border-gray-100">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-xs font-medium text-gray-500 uppercase tracking-wider mb-1">Visual</p>
                <p class="text-2xl font-bold text-gray-800">1</p>
            </div>
            <div class="w-12 h-12 rounded-lg bg-green-100 flex items-center justify-center">
                <i class="fas fa-eye text-green-600 text-xl"></i>
            </div>
        </div>
    </div>
</div>

<!-- Page Management Section -->
<div class="mb-6">
    <h2 class="text-xl font-bold text-gray-800 mb-2">Kelola Halaman Relaksasi</h2>
    <p class="text-sm text-gray-500">
        Klik pada card untuk mengedit konten halaman. Perubahan akan langsung tampil di sisi pasien setelah disimpan.
    </p>
</div>

<!-- Page Cards Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6">
    @php
        $icons = [
            'musik' => ['icon' => 'fa-music', 'gradient' => 'gradient-blue', 'bg' => 'bg-blue-50', 'text' => 'text-blue-600', 'desc' => 'Kelola video musik relaksasi untuk membantu pasien menenangkan pikiran'],
            'pernapasan' => ['icon' => 'fa-wind', 'gradient' => 'gradient-teal', 'bg' => 'bg-teal-50', 'text' => 'text-teal-600', 'desc' => 'Halaman latihan pernapasan untuk mengurangi kecemasan'],
            'mindfulness' => ['icon' => 'fa-brain', 'gradient' => 'gradient-purple', 'bg' => 'bg-purple-50', 'text' => 'text-purple-600', 'desc' => 'Kelola konten latihan mindfulness dan meditasi'],
            'visual' => ['icon' => 'fa-eye', 'gradient' => 'gradient-green', 'bg' => 'bg-green-50', 'text' => 'text-green-600', 'desc' => 'Video visual menenangkan untuk relaksasi mata dan pikiran']
        ];
    @endphp

    @foreach($pages as $slug => $page)
        @php
            $cardData = $icons[$slug] ?? ['icon' => 'fa-file', 'gradient' => 'gradient-blue', 'bg' => 'bg-gray-50', 'text' => 'text-gray-600', 'desc' => 'Kelola konten halaman'];
        @endphp

        <a href="{{ route('admin.relaxation.edit', $slug) }}" class="card group bg-white rounded-2xl shadow-md hover:shadow-xl border border-gray-100 overflow-hidden block">
            <!-- Card Header with Gradient -->
            <div class="{{ $cardData['gradient'] }} px-6 py-8 relative overflow-hidden">
                <div class="absolute top-0 right-0 opacity-10">
                    <i class="fas {{ $cardData['icon'] }} text-white" style="font-size: 120px;"></i>
                </div>
                <div class="relative z-10">
                    <div class="flex items-center gap-4 mb-3">
                        <div class="w-14 h-14 rounded-xl bg-white/20 backdrop-blur-sm flex items-center justify-center shadow-lg">
                            <i class="fas {{ $cardData['icon'] }} text-white text-2xl"></i>
                        </div>
                        <div class="flex-1">
                            <p class="text-xs font-medium text-white/80 uppercase tracking-wider mb-1">Halaman</p>
                            <h3 class="text-xl font-bold text-white">{{ $page['label'] }}</h3>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card Body -->
            <div class="px-6 py-5">
                <p class="text-sm text-gray-600 mb-4 line-clamp-2">
                    {{ $cardData['desc'] }}
                </p>

                <div class="flex items-center justify-between gap-4">
                    <div class="flex items-center gap-2 text-xs text-gray-400">
                        <i class="fas fa-link"></i>
                        <span class="font-mono">{{ $page['url'] }}</span>
                    </div>

                    <div class="flex items-center gap-2 px-4 py-2 rounded-lg {{ $cardData['bg'] }} {{ $cardData['text'] }} font-medium text-sm group-hover:shadow-md transition-all">
                        <span>Kelola</span>
                        <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                    </div>
                </div>
            </div>
        </a>
    @endforeach
</div>

<!-- Info Footer -->
<div class="mt-8 bg-blue-50 border border-blue-100 rounded-xl p-6">
    <div class="flex items-start gap-4">
        <div class="w-10 h-10 rounded-lg bg-blue-500 flex items-center justify-center shrink-0">
            <i class="fas fa-info-circle text-white text-lg"></i>
        </div>
        <div>
            <h4 class="font-semibold text-gray-800 mb-1">Informasi Penting</h4>
            <p class="text-sm text-gray-600">
                Semua perubahan yang Anda simpan akan langsung aktif dan terlihat oleh pasien.
                Pastikan untuk memeriksa kembali konten sebelum menyimpan.
            </p>
        </div>
    </div>
</div>
@endsection

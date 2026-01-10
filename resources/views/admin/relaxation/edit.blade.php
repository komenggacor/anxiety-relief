@extends('layouts.admin')

@section('title', 'Edit Halaman: ' . $page['label'])

@section('page-title', 'Edit ' . $page['label'])
@section('page-subtitle', 'Kelola konten video dan media')

@section('content')
<!-- Breadcrumb -->
<div class="mb-6">
    <nav class="flex items-center gap-2 text-sm text-gray-500">
        <a href="{{ route('admin.relaxation.index') }}" class="hover:text-blue-600 transition-colors">
            <i class="fas fa-home"></i>
        </a>
        <i class="fas fa-chevron-right text-xs text-gray-400"></i>
        <span class="text-gray-700 font-medium">{{ $page['label'] }}</span>
    </nav>
</div>

@if (session('status'))
    <div class="mb-6 rounded-xl border border-green-200 bg-green-50 px-6 py-4 flex items-start gap-4 shadow-sm animate-fade-in">
        <div class="w-10 h-10 rounded-lg bg-green-500 flex items-center justify-center flex-shrink-0">
            <i class="fas fa-check-circle text-white text-lg"></i>
        </div>
        <div class="flex-1">
            <h4 class="font-semibold text-green-800 mb-1">Berhasil!</h4>
            <p class="text-sm text-green-700">{{ session('status') }}</p>
        </div>
    </div>
@endif

<!-- Page Info Card -->
<div class="bg-gradient-to-r from-blue-500 to-indigo-600 rounded-2xl shadow-lg p-6 mb-8 text-white">
    <div class="flex items-center justify-between">
        <div>
            <p class="text-xs font-medium text-blue-100 uppercase tracking-wider mb-2">Edit Halaman</p>
            <h1 class="text-3xl font-bold mb-2">{{ $page['label'] }}</h1>
            <div class="flex items-center gap-4 text-sm text-blue-100">
                <span class="flex items-center gap-2">
                    <i class="fas fa-link"></i>
                    <span class="font-mono">{{ $slug }}</span>
                </span>
                @if (!empty($page['url']))
                    <span>•</span>
                    <a href="{{ url($page['url']) }}" target="_blank" class="inline-flex items-center gap-2 hover:text-white transition-colors">
                        <i class="fas fa-external-link-alt"></i>
                        <span>Lihat halaman pasien</span>
                    </a>
                @endif
            </div>
        </div>
        <div class="hidden lg:block">
            <div class="w-20 h-20 rounded-2xl bg-white/20 backdrop-blur-sm flex items-center justify-center shadow-lg">
                @php
                    $icons = [
                        'musik' => 'fa-music',
                        'pernapasan' => 'fa-wind',
                        'mindfulness' => 'fa-brain',
                        'visual' => 'fa-eye'
                    ];
                    $icon = $icons[$slug] ?? 'fa-file';
                @endphp
                <i class="fas {{ $icon }} text-white text-4xl"></i>
            </div>
        </div>
    </div>
</div>

@if ($slug !== 'pernapasan')
    <!-- Edit Form -->
    <div class="bg-white rounded-2xl shadow-md border border-gray-100 overflow-hidden">
        <form action="{{ route('admin.relaxation.update', $slug) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Form Header -->
            <div class="bg-gray-50 px-6 py-4 border-b border-gray-200">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-lg bg-blue-100 flex items-center justify-center">
                        <i class="fas fa-edit text-blue-600 text-lg"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-800">Edit Konten Halaman</h3>
                        <p class="text-xs text-gray-500">Kelola semua konten teks dan media untuk halaman ini</p>
                    </div>
                </div>
            </div>

            <!-- Form Body -->
            <div class="p-6 space-y-8">
                <!-- Section: Content Text -->
                <div class="border-b border-gray-200 pb-6">
                    <h4 class="text-base font-semibold text-gray-800 mb-4 flex items-center gap-2">
                        <i class="fas fa-text-height text-gray-400"></i>
                        <span>Konten Teks</span>
                    </h4>

                    <div class="space-y-5">
                        <!-- Title -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">
                                Judul Halaman
                            </label>
                            <input
                                type="text"
                                name="title"
                                value="{{ old('title', $pageData->title ?? '') }}"
                                placeholder="Contoh: Musik Relaksasi"
                                class="w-full px-4 py-3 rounded-xl border border-gray-300 bg-white text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                            >
                            <p class="mt-1.5 text-xs text-gray-500">Judul utama yang akan ditampilkan di bagian atas halaman</p>
                        </div>

                        <!-- Subtitle -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">
                                Subjudul
                            </label>
                            <input
                                type="text"
                                name="subtitle"
                                value="{{ old('subtitle', $pageData->subtitle ?? '') }}"
                                placeholder="Contoh: Premium Binaural & Nature Sound"
                                class="w-full px-4 py-3 rounded-xl border border-gray-300 bg-white text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                            >
                            <p class="mt-1.5 text-xs text-gray-500">Subjudul atau tagline pendek</p>
                        </div>

                        <!-- Description -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">
                                Deskripsi
                            </label>
                            <textarea
                                name="description"
                                rows="4"
                                placeholder="Deskripsi lengkap tentang halaman ini..."
                                class="w-full px-4 py-3 rounded-xl border border-gray-300 bg-white text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all resize-none"
                            >{{ old('description', $pageData->description ?? '') }}</textarea>
                            <p class="mt-1.5 text-xs text-gray-500">Deskripsi detail yang menjelaskan manfaat dan tujuan halaman</p>
                        </div>

                        <!-- Quote -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">
                                Kutipan Inspiratif
                                <span class="text-gray-400 font-normal">(opsional)</span>
                            </label>
                            <textarea
                                name="quote"
                                rows="2"
                                placeholder="Contoh: Musik adalah bahasa universal yang mampu menenangkan hati dan pikiran."
                                class="w-full px-4 py-3 rounded-xl border border-gray-300 bg-white text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all resize-none"
                            >{{ old('quote', $pageData->quote ?? '') }}</textarea>
                            <p class="mt-1.5 text-xs text-gray-500">Kutipan atau quote yang relevan dengan tema halaman</p>
                        </div>
                    </div>
                </div>

                <!-- Section: Benefits -->
                <div class="border-b border-gray-200 pb-6">
                    <h4 class="text-base font-semibold text-gray-800 mb-4 flex items-center gap-2">
                        <i class="fas fa-star text-gray-400"></i>
                        <span>Manfaat / Benefit Points</span>
                    </h4>

                    <div class="space-y-4">
                        <!-- Benefit 1 -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Manfaat #1
                            </label>
                            <input
                                type="text"
                                name="benefit_1"
                                value="{{ old('benefit_1', $pageData->benefit_1 ?? '') }}"
                                placeholder="Contoh: Mengurangi kecemasan"
                                class="w-full px-4 py-2.5 rounded-xl border border-gray-300 bg-white text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                            >
                        </div>

                        <!-- Benefit 2 -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Manfaat #2
                            </label>
                            <input
                                type="text"
                                name="benefit_2"
                                value="{{ old('benefit_2', $pageData->benefit_2 ?? '') }}"
                                placeholder="Contoh: Meningkatkan kualitas tidur"
                                class="w-full px-4 py-2.5 rounded-xl border border-gray-300 bg-white text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                            >
                        </div>

                        <!-- Benefit 3 -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Manfaat #3
                            </label>
                            <input
                                type="text"
                                name="benefit_3"
                                value="{{ old('benefit_3', $pageData->benefit_3 ?? '') }}"
                                placeholder="Contoh: Membantu fokus & produktivitas"
                                class="w-full px-4 py-2.5 rounded-xl border border-gray-300 bg-white text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                            >
                        </div>
                    </div>
                </div>

                <!-- Section: Media -->
                <div>
                    <h4 class="text-base font-semibold text-gray-800 mb-4 flex items-center gap-2">
                        <i class="fas fa-video text-gray-400"></i>
                        <span>Media Video</span>
                    </h4>

                    <!-- YouTube URL Input -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            Link Video YouTube
                            <span class="text-gray-400 font-normal">(opsional)</span>
                        </label>

                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="fab fa-youtube text-red-500 text-xl"></i>
                            </div>
                            <input
                                type="url"
                                name="youtube_url"
                                value="{{ old('youtube_url', $pageData->youtube_url ?? '') }}"
                                placeholder="https://www.youtube.com/watch?v=..."
                                class="w-full pl-12 pr-4 py-3.5 rounded-xl border border-gray-300 bg-white text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                            >
                        </div>

                        <!-- Help Text -->
                        <div class="mt-3 bg-blue-50 border border-blue-100 rounded-lg p-4">
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-info-circle text-white text-sm"></i>
                                </div>
                                <div class="flex-1">
                                    <h5 class="text-sm font-semibold text-blue-800 mb-1">Panduan Input Video</h5>
                                    <ul class="text-xs text-blue-700 space-y-1">
                                        <li class="flex items-start gap-2">
                                            <i class="fas fa-check-circle mt-0.5 text-blue-500"></i>
                                            <span>Tempel link dari YouTube (format: watch atau youtu.be)</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <i class="fas fa-check-circle mt-0.5 text-blue-500"></i>
                                            <span>Video akan otomatis tampil di halaman pasien setelah disimpan</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <i class="fas fa-check-circle mt-0.5 text-blue-500"></i>
                                            <span>Kosongkan untuk menghapus video dari halaman</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Preview Section (if URL exists) -->
                    @if($pageData && $pageData->youtube_url)
                        <div class="mt-6 border-t border-gray-200 pt-6">
                            <h4 class="text-sm font-semibold text-gray-700 mb-3 flex items-center gap-2">
                                <i class="fas fa-eye text-gray-400"></i>
                                <span>Preview Video Saat Ini</span>
                            </h4>
                            <div class="bg-gray-100 rounded-xl p-4">
                                <div class="flex items-start gap-4">
                                    <div class="w-12 h-12 rounded-lg bg-red-500 flex items-center justify-center flex-shrink-0">
                                        <i class="fab fa-youtube text-white text-2xl"></i>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-xs font-medium text-gray-500 mb-1">URL Video Aktif</p>
                                        <p class="text-sm text-gray-800 font-mono truncate">{{ $pageData->youtube_url }}</p>
                                        <a href="{{ $pageData->youtube_url }}" target="_blank" class="inline-flex items-center gap-1 mt-2 text-xs text-blue-600 hover:text-blue-700 font-medium">
                                            <span>Buka di YouTube</span>
                                            <i class="fas fa-external-link-alt"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>

            <!-- Form Footer / Actions -->
            <div class="bg-gray-50 px-6 py-4 border-t border-gray-200 flex items-center justify-between gap-4">
                <div class="flex items-center gap-2 text-xs text-gray-500">
                    <i class="fas fa-sync-alt"></i>
                    <span>Perubahan akan langsung aktif setelah disimpan</span>
                </div>

                <div class="flex items-center gap-3">
                    <a href="{{ route('admin.relaxation.index') }}" class="px-5 py-2.5 rounded-lg border border-gray-300 text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 transition-colors">
                        <i class="fas fa-times mr-2"></i>
                        Batal
                    </a>
                    <button type="submit" class="btn px-6 py-2.5 rounded-lg text-sm font-semibold text-white bg-gradient-to-r from-blue-500 to-indigo-600 hover:from-blue-600 hover:to-indigo-700 shadow-md hover:shadow-lg transition-all">
                        <i class="fas fa-save mr-2"></i>
                        Simpan Perubahan
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- Additional Info -->
    <div class="mt-6 grid md:grid-cols-2 gap-6">
        <div class="bg-purple-50 border border-purple-100 rounded-xl p-5">
            <div class="flex items-start gap-3">
                <div class="w-10 h-10 rounded-lg bg-purple-500 flex items-center justify-center flex-shrink-0">
                    <i class="fas fa-lightbulb text-white text-lg"></i>
                </div>
                <div>
                    <h4 class="font-semibold text-purple-800 mb-1 text-sm">Tips</h4>
                    <p class="text-xs text-purple-700">
                        Pilih video dengan durasi 10-30 menit untuk hasil relaksasi optimal.
                        Pastikan konten sesuai dengan tema halaman.
                    </p>
                </div>
            </div>
        </div>

        <div class="bg-orange-50 border border-orange-100 rounded-xl p-5">
            <div class="flex items-start gap-3">
                <div class="w-10 h-10 rounded-lg bg-orange-500 flex items-center justify-center flex-shrink-0">
                    <i class="fas fa-shield-alt text-white text-lg"></i>
                </div>
                <div>
                    <h4 class="font-semibold text-orange-800 mb-1 text-sm">Keamanan</h4>
                    <p class="text-xs text-orange-700">
                        Semua perubahan tercatat dalam sistem. Pastikan konten yang Anda upload sesuai dengan kebijakan privasi.
                    </p>
                </div>
            </div>
        </div>
    </div>

@else
    <!-- Locked Page Message -->
    <div class="bg-white rounded-2xl shadow-md border border-gray-100 p-12 text-center">
        <div class="max-w-md mx-auto">
            <div class="w-20 h-20 rounded-full bg-gray-100 flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-lock text-gray-400 text-3xl"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-800 mb-2">Halaman Tidak Dapat Diedit</h3>
            <p class="text-sm text-gray-600 mb-6">
                Halaman "{{ $page['label'] }}" tidak memiliki pengaturan media yang dapat dikelola melalui admin panel.
            </p>
            <a href="{{ route('admin.relaxation.index') }}" class="inline-flex items-center gap-2 px-6 py-3 rounded-lg bg-gradient-to-r from-blue-500 to-indigo-600 text-white font-medium shadow-md hover:shadow-lg transition-all">
                <i class="fas fa-arrow-left"></i>
                <span>Kembali ke Dashboard</span>
            </a>
        </div>
    </div>
@endif
@endsection

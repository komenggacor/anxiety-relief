@extends('layouts.app')

@section('title', 'Login Admin')

@section('content')
<div class="max-w-md mx-auto py-16 px-4 sm:px-6">
    <div class="glass-card-strong rounded-2xl border border-stone-200/80 bg-white/95 shadow-soft p-6 md:p-8">
        <h1 class="text-2xl font-display font-semibold text-stone-900 mb-2">Login Admin</h1>
        <p class="text-sm text-stone-500 mb-6">Masuk untuk mengelola konten halaman relaksasi.</p>

        @if (session('status'))
            <div class="mb-4 rounded-lg border border-emerald-200 bg-emerald-50 px-4 py-3 text-xs text-emerald-800">
                {{ session('status') }}
            </div>
        @endif

        @if (session('error'))
            <div class="mb-4 rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-xs text-red-700">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('admin.login.submit') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label class="block text-xs font-medium text-stone-600 mb-1">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" required
                       class="w-full rounded-lg border border-stone-300/80 bg-stone-50/80 px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-sage-600/40 focus:border-sage-600/60">
                @error('email')
                    <p class="mt-1 text-[11px] text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-xs font-medium text-stone-600 mb-1">Password</label>
                <input type="password" name="password" required
                       class="w-full rounded-lg border border-stone-300/80 bg-stone-50/80 px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-sage-600/40 focus:border-sage-600/60">
                @error('password')
                    <p class="mt-1 text-[11px] text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="pt-2 flex items-center justify-between gap-3">
                <a href="{{ url('/') }}" class="text-[11px] text-stone-400 hover:text-stone-600">&larr; Kembali ke beranda</a>
                <button type="submit" class="btn-primary inline-flex text-xs">
                    <i class="fas fa-sign-in-alt"></i>
                    Masuk
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminRelaxationController;
use App\Http\Controllers\AdminAuthController;
use App\Models\RelaxationPage;

Route::get('/', function () {
    return view('index');
});

Route::get('/musik', function () {
    $pageData = RelaxationPage::where('slug', 'musik')->first();
    $youtubeUrl = $pageData->youtube_url ?? null;

    return view('relaxation.musik', compact('pageData', 'youtubeUrl'));
});

Route::get('/pernapasan', function () {
    return view('relaxation.pernapasan');
});

Route::get('/mindfulness', function () {
    $pageData = RelaxationPage::where('slug', 'mindfulness')->first();
    $youtubeUrl = $pageData->youtube_url ?? null;

    return view('relaxation.mindfulness', compact('pageData', 'youtubeUrl'));
});

Route::get('/visual', function () {
    $pageData = RelaxationPage::where('slug', 'visual')->first();
    $youtubeUrl = $pageData->youtube_url ?? null;

    return view('relaxation.visual', compact('pageData', 'youtubeUrl'));
});

// Admin - autentikasi & pengelolaan halaman relaxation
Route::prefix('admin')->group(function () {
    // Login admin
    Route::get('login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
    Route::post('logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

    // Halaman admin yang dilindungi
    Route::middleware('admin.auth')->name('admin.relaxation.')->group(function () {
        Route::get('/', [AdminRelaxationController::class, 'index'])->name('index');
        Route::get('{slug}', [AdminRelaxationController::class, 'edit'])->name('edit');
        Route::put('{slug}', [AdminRelaxationController::class, 'update'])->name('update');
    });
});

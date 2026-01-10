<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\RelaxationPage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Admin default untuk mengelola laman relaxation
        User::updateOrCreate(
            ['email' => env('ADMIN_EMAIL', 'admin@gmail.com')],
            [
                'name' => 'Admin',
                'password' => env('ADMIN_PASSWORD', 'admin123'), // akan di-hash otomatis oleh cast model User
            ]
        );

        // Halaman relaxation default untuk konfigurasi media (YouTube)
        foreach (['musik', 'mindfulness', 'visual'] as $slug) {
            RelaxationPage::updateOrCreate(
                ['slug' => $slug],
                ['youtube_url' => null]
            );
        }
    }
}

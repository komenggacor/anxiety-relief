<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Ensure generated URLs use HTTPS in production (prevents Mixed Content on Vercel).
        if (app()->environment('production')) {
            URL::forceScheme('https');
        }
    }
}

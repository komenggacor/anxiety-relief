<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Contracts\Console\Kernel as ConsoleKernel;

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

// Vercel uses ephemeral filesystem. Ensure the SQLite database exists and
// migrations are applied so pages relying on DB-backed content work.
if ((bool)($_ENV['VERCEL'] ?? getenv('VERCEL') ?? false)) {
    $dbPath = $_ENV['DB_DATABASE'] ?? getenv('DB_DATABASE') ?? null;

    if (is_string($dbPath) && str_starts_with($dbPath, '/tmp/')) {
        if (! file_exists($dbPath)) {
            @touch($dbPath);
        }

        $migratedFlag = '/tmp/.laravel_migrated';
        $lockPath = '/tmp/.laravel_migrate_lock';

        if (! file_exists($migratedFlag)) {
            $lockHandle = @fopen($lockPath, 'c');
            if ($lockHandle !== false && @flock($lockHandle, LOCK_EX)) {
                try {
                    if (! file_exists($migratedFlag)) {
                        /** @var ConsoleKernel $artisan */
                        $artisan = $app->make(ConsoleKernel::class);
                        $artisan->call('migrate', ['--force' => true]);
                        $artisan->call('db:seed', ['--force' => true]);
                        @file_put_contents($migratedFlag, '1');
                    }
                } finally {
                    @flock($lockHandle, LOCK_UN);
                    @fclose($lockHandle);
                }
            }
        }
    }
}

$app->handleRequest(Request::capture());

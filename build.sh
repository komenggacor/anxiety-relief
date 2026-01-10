#!/bin/bash

# Vercel Build Script for Laravel
echo "Installing Composer dependencies..."
composer install --no-dev --optimize-autoloader --no-interaction

echo "Installing NPM dependencies..."
npm ci

echo "Building assets..."
npm run build

echo "Creating SQLite database..."
touch database/database.sqlite

echo "Running migrations..."
php artisan migrate --force --no-interaction

echo "Optimizing Laravel..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "Build completed!"

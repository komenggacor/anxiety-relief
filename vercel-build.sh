#!/bin/bash
# Optimized build for Vercel with size constraints

echo "🚀 Starting optimized Vercel build..."

# Install production dependencies only, optimize autoloader
echo "📦 Installing Composer dependencies (production only)..."
composer install \
  --no-dev \
  --no-interaction \
  --prefer-dist \
  --optimize-autoloader \
  --no-progress \
  --no-suggest \
  --classmap-authoritative

# Remove unnecessary vendor files
echo "🧹 Cleaning vendor directory..."
rm -rf vendor/bin
rm -rf vendor/*/tests
rm -rf vendor/*/test
rm -rf vendor/*/*/tests
rm -rf vendor/*/*/test
rm -rf vendor/*/.git
rm -rf vendor/*/*/.git
find vendor -name "*.md" -type f -delete
find vendor -name "*.txt" -type f -delete
find vendor -name "phpunit.xml*" -type f -delete
find vendor -name ".travis.yml" -type f -delete
find vendor -name ".github" -type d -exec rm -rf {} + 2>/dev/null || true

# Install NPM and build assets
echo "📦 Installing NPM dependencies..."
npm ci --production=false

echo "🎨 Building assets..."
npm run build

# Create SQLite database
echo "💾 Creating SQLite database..."
touch database/database.sqlite
chmod 664 database/database.sqlite

# Cache Laravel configuration (optional, may cause issues with serverless)
echo "⚡ Optimizing Laravel..."
# Skip caching as it may conflict with serverless environment
# php artisan config:cache
# php artisan route:cache
# php artisan view:cache

echo "✅ Build completed successfully!"
echo "📊 Function size check..."
du -sh vendor 2>/dev/null || echo "Vendor size calculation skipped"

# PowerShell Deployment Script for Windows
Write-Host "🚀 Starting deployment preparation..." -ForegroundColor Green

# Check if git is initialized
if (-Not (Test-Path .git)) {
    Write-Host "📦 Initializing git repository..." -ForegroundColor Yellow
    git init
}

# Build assets
Write-Host "🎨 Building assets..." -ForegroundColor Cyan
npm run build

# Check if .env exists
if (-Not (Test-Path .env)) {
    Write-Host "⚠️  Creating .env from .env.example..." -ForegroundColor Yellow
    Copy-Item .env.example .env
    php artisan key:generate
}

# Add all files
Write-Host "📝 Adding files to git..." -ForegroundColor Cyan
git add .

# Commit
$commitMsg = Read-Host "Enter commit message"
Write-Host "💾 Committing changes..." -ForegroundColor Cyan
git commit -m "$commitMsg"

# Push
Write-Host "☁️  Pushing to GitHub..." -ForegroundColor Cyan
git push

Write-Host "✅ Deployment preparation complete!" -ForegroundColor Green
Write-Host "Now go to Vercel dashboard to deploy." -ForegroundColor Yellow

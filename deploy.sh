#!/bin/bash
# Quick deployment script

echo "🚀 Starting deployment preparation..."

# Check if git is initialized
if [ ! -d .git ]; then
    echo "📦 Initializing git repository..."
    git init
fi

# Build assets
echo "🎨 Building assets..."
npm run build

# Check if .env exists
if [ ! -f .env ]; then
    echo "⚠️  Creating .env from .env.example..."
    cp .env.example .env
    php artisan key:generate
fi

# Add all files
echo "📝 Adding files to git..."
git add .

# Commit
echo "💾 Committing changes..."
read -p "Enter commit message: " commit_msg
git commit -m "$commit_msg"

# Push
echo "☁️  Pushing to GitHub..."
git push

echo "✅ Deployment preparation complete!"
echo "Now go to Vercel dashboard to deploy."

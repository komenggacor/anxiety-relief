$filePath = "C:\laragon\www\anxiety-relief-tool\laravel-app\resources\views\partials\home.blade.php"
$content = Get-Content -Path $filePath -Raw

# Replace bg-gradient-to- dengan bg-linear-to-
$content = $content -replace 'bg-gradient-to-', 'bg-linear-to-'

# Replace flex-shrink-0 dengan shrink-0
$content = $content -replace 'flex-shrink-0', 'shrink-0'

# Replace aspect-[4/3] dengan aspect-4/3 (jika ada)
$content = $content -replace 'aspect-\[4/3\]', 'aspect-4/3'

# Save the file
Set-Content -Path $filePath -Value $content -NoNewline

Write-Host "✓ Fixed Tailwind CSS v4 classes in home.blade.php" -ForegroundColor Green

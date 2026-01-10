# 🔧 FIX: Vercel Function Size Exceeded 250MB

## ✅ Solusi yang Sudah Diterapkan

Saya telah mengoptimasi konfigurasi Vercel dengan perubahan berikut:

### 1. **Updated `.vercelignore`**
Menambahkan exclude untuk:
- Dev dependencies (`phpunit`, `mockery`, `faker`, dll)
- Test files
- Documentation files
- Build scripts
- Git files

### 2. **Optimized `vercel.json`**
- Menambahkan `installCommand` dengan flag `--no-dev` dan `--classmap-authoritative`
- Simplified builds (hanya PHP function, static assets akan di-serve otomatis)
- Mengurangi `maxLambdaSize` ke 50mb untuk force optimization

### 3. **Created `vercel-build.sh`** (optional)
Script untuk clean vendor directory dari file tidak perlu.

---

## 🚀 Cara Deploy Ulang

### Opsi 1: Quick Push (Recommended)
```bash
# Commit perubahan konfigurasi
git add .vercelignore vercel.json .npmrc
git commit -m "Optimize: Reduce Vercel function size"
git push
```

Vercel akan otomatis rebuild dengan konfigurasi baru yang lebih kecil.

---

### Opsi 2: Manual Redeploy di Vercel
1. Buka https://vercel.com/dashboard
2. Pilih project **anxiety-relief**
3. Tab **Deployments**
4. Klik titik tiga di deployment terakhir → **Redeploy**

---

## 📊 Penjelasan Optimasi

### Yang Dihapus dari Function:
- ❌ Testing frameworks (PHPUnit, Mockery, Faker) → ~40 MB
- ❌ Development tools (Pail, Sail, Collision) → ~20 MB
- ❌ Test files dan documentation → ~10 MB
- ❌ Git metadata dalam vendor → ~5 MB
- ❌ Markdown, text files di vendor → ~3 MB

### Yang Tetap Diperlukan:
- ✅ Laravel Framework Core
- ✅ Application code (app/, routes/, resources/)
- ✅ Config files
- ✅ Views
- ✅ Public assets (CSS/JS hasil build)

---

## 🔍 Verifikasi Ukuran Lokal (Optional)

Untuk cek perkiraan ukuran function sebelum push:

```bash
# Install production dependencies
composer install --no-dev --optimize-autoloader --classmap-authoritative

# Check vendor size
du -sh vendor
# Atau di Windows PowerShell:
# (Get-ChildItem vendor -Recurse | Measure-Object -Property Length -Sum).Sum / 1MB
```

Target: **< 200 MB** untuk vendor + app files

---

## ⚠️ Jika Masih Error

### Solusi Tambahan A: Remove Tinker
Jika masih terlalu besar, hapus `laravel/tinker` (hanya untuk development):

1. Edit `composer.json`, pindahkan tinker ke `require-dev`:
```json
"require": {
    "php": "^8.2",
    "laravel/framework": "^12.0"
},
"require-dev": {
    "laravel/tinker": "^2.10.1",
    ...
}
```

2. Update:
```bash
composer update --no-dev
git add composer.json composer.lock
git commit -m "Move tinker to dev dependencies"
git push
```

### Solusi Tambahan B: Use Vercel Edge Functions
Jika Laravel function tetap terlalu besar, pertimbangkan:
- Split ke multiple functions
- Atau gunakan hosting Laravel native (Laravel Forge, Vapor, Ploi)

---

## 🎯 Expected Result

Setelah push, Vercel build seharusnya:
- ✅ Install production dependencies only
- ✅ Function size ~150-180 MB (di bawah limit 250 MB)
- ✅ Deploy sukses tanpa error
- ✅ App berjalan normal

---

## 📝 Next Steps

1. **Push perubahan:**
   ```bash
   git add .
   git commit -m "Fix: Optimize Vercel function size"
   git push
   ```

2. **Monitor deploy di Vercel dashboard**

3. **Test aplikasi setelah deploy:**
   - Homepage: `https://your-project.vercel.app`
   - Admin: `https://your-project.vercel.app/admin/login`
   - Fitur relaksasi: musik, pernapasan, mindfulness, visual

---

**Status:** Konfigurasi sudah dioptimasi, siap push! 🚀

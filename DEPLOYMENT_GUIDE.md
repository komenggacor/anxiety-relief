# 🚀 Panduan Deploy Anxiety Relief Tool ke Vercel

## 📦 Persiapan yang Sudah Dilakukan

File-file berikut sudah dibuat untuk deployment:
- ✅ `vercel.json` - Konfigurasi Vercel
- ✅ `api/index.php` - Entry point untuk Vercel
- ✅ `.vercelignore` - File yang diabaikan saat deploy
- ✅ `build.sh` - Script build otomatis

---

## 🔧 LANGKAH 1: Setup GitHub Repository

### 1.1 Inisialisasi Git (jika belum)
```bash
cd C:\laragon\www\anxiety-relief-tool\laravel-app
git init
```

### 1.2 Buat file .gitignore (sudah ada, pastikan lengkap)
File `.gitignore` sudah ada dan mencakup:
- `/vendor`
- `/node_modules`
- `.env`
- `/public/build`
- dll.

### 1.3 Buat repository di GitHub
1. Buka https://github.com/new
2. Nama repository: **anxiety-relief-tool** (atau nama lain)
3. Pilih **Private** atau **Public**
4. Jangan centang "Add README" (karena sudah ada lokal)
5. Klik **Create repository**

### 1.4 Push ke GitHub
```bash
# Tambahkan semua file
git add .

# Commit pertama
git commit -m "Initial commit: Anxiety Relief Tool Laravel app"

# Tambahkan remote GitHub (ganti USERNAME dan REPO)
git remote add origin https://github.com/USERNAME/anxiety-relief-tool.git

# Push ke GitHub
git branch -M main
git push -u origin main
```

---

## ☁️ LANGKAH 2: Deploy ke Vercel

### 2.1 Daftar/Login ke Vercel
1. Buka https://vercel.com
2. Klik **Sign Up** atau **Login**
3. Pilih **Continue with GitHub**
4. Authorize Vercel untuk akses GitHub

### 2.2 Import Project
1. Di dashboard Vercel, klik **Add New** → **Project**
2. Pilih repository **anxiety-relief-tool**
3. Klik **Import**

### 2.3 Konfigurasi Project
**Framework Preset:** Other  
**Root Directory:** `./` (default)  
**Build Command:** (kosongkan, sudah ada di vercel.json)  
**Output Directory:** `public`

### 2.4 Environment Variables
Klik **Environment Variables**, tambahkan:

| Key | Value |
|-----|-------|
| `APP_NAME` | `Anxiety Relief Tool` |
| `APP_ENV` | `production` |
| `APP_KEY` | `base64:...` (generate dulu, lihat bawah) |
| `APP_DEBUG` | `false` |
| `APP_URL` | `https://your-project.vercel.app` |
| `DB_CONNECTION` | `sqlite` |
| `DB_DATABASE` | `/tmp/database.sqlite` |
| `SESSION_DRIVER` | `cookie` |
| `CACHE_DRIVER` | `array` |
| `LOG_CHANNEL` | `stderr` |

**🔑 Generate APP_KEY:**
```bash
# Di terminal lokal
php artisan key:generate --show
```
Copy output base64:... dan paste ke Vercel.

### 2.5 Deploy!
1. Klik **Deploy**
2. Tunggu 2-5 menit proses build
3. Jika sukses, akan muncul confetti 🎉

---

## 🔒 LANGKAH 3: Setup Database & Admin

### 3.1 Akses Domain Vercel
Setelah deploy sukses, buka URL: `https://your-project.vercel.app`

### 3.2 Jalankan Migration (otomatis via build.sh)
Migration akan otomatis berjalan saat build. Jika perlu manual:

Vercel tidak support SSH, tapi bisa pakai workaround:
1. Buat route `/migrate` di `routes/web.php` (untuk testing saja):
```php
Route::get('/migrate', function() {
    if (app()->environment('production')) {
        Artisan::call('migrate', ['--force' => true]);
        return 'Migrations completed';
    }
    return 'Not allowed';
});
```

2. Akses `https://your-project.vercel.app/migrate`
3. **PENTING:** Hapus route ini setelah selesai!

### 3.3 Buat Admin User (via Seeder)
Tambahkan di `database/seeders/DatabaseSeeder.php`:
```php
use App\Models\User;
use Illuminate\Support\Facades\Hash;

public function run(): void
{
    User::create([
        'name' => 'Admin',
        'email' => 'admin@anxiety-relief.app',
        'password' => Hash::make('password123'), // Ganti password!
        'is_admin' => true,
    ]);
}
```

Jalankan seeder via route `/seed` (sama seperti migrate).

---

## 🎨 LANGKAH 4: Build Assets (CSS/JS)

### 4.1 Pastikan build.sh executable
```bash
chmod +x build.sh
```

### 4.2 Test build lokal
```bash
npm run build
```

### 4.3 Commit hasil build
Jika ada perubahan di `public/build/*`, commit:
```bash
git add public/build
git commit -m "Update built assets"
git push
```

Vercel akan otomatis re-deploy.

---

## ⚙️ LANGKAH 5: Troubleshooting

### Issue: 500 Internal Server Error
**Solusi:**
1. Cek logs di Vercel Dashboard → Project → Functions
2. Pastikan APP_KEY sudah di-set
3. Pastikan semua file di `storage/` dan `bootstrap/cache/` writable

### Issue: Assets tidak load (CSS/JS)
**Solusi:**
1. Pastikan `npm run build` sukses
2. Cek `public/build/manifest.json` ada
3. Update `vercel.json` routes jika perlu

### Issue: Database error
**Solusi:**
1. Vercel menggunakan serverless, setiap request baru = environment baru
2. SQLite di `/tmp/` akan hilang setelah cold start
3. **Rekomendasi:** Gunakan database eksternal (PlanetScale, Supabase, Neon)

### Issue: Session tidak persist
**Solusi:**
1. Gunakan `SESSION_DRIVER=cookie` (sudah di-set)
2. Atau gunakan database session dengan MySQL eksternal

---

## 🔄 LANGKAH 6: Auto-Deploy (CI/CD)

Setelah setup awal, setiap push ke GitHub akan otomatis deploy:

```bash
# Edit file lokal
# Commit changes
git add .
git commit -m "Update feature X"

# Push ke GitHub
git push

# Vercel otomatis detect & deploy! 🚀
```

---

## 📊 LANGKAH 7: Monitoring & Domain Custom

### 7.1 Monitoring
- Dashboard Vercel → Analytics
- Lihat traffic, performance, errors

### 7.2 Custom Domain (opsional)
1. Di Vercel Dashboard → Settings → Domains
2. Tambahkan domain (contoh: `anxiety-relief.com`)
3. Update DNS records sesuai instruksi Vercel

---

## ✅ Checklist Deployment

- [ ] Repository GitHub dibuat dan pushed
- [ ] Vercel project created
- [ ] Environment variables di-set (terutama APP_KEY)
- [ ] Deploy pertama sukses
- [ ] Database migration berjalan
- [ ] Admin user dibuat
- [ ] Login admin berhasil di `/admin/login`
- [ ] Public pages (musik, pernapasan, dll) load dengan baik
- [ ] Assets (CSS/JS/images) load
- [ ] Mobile responsive works

---

## 🆘 Bantuan Lebih Lanjut

**Dokumentasi:**
- Vercel + Laravel: https://vercel.com/guides/deploying-laravel-to-vercel
- Laravel Deployment: https://laravel.com/docs/deployment

**Kontak:**
Jika ada masalah saat deploy, tanyakan di sini!

---

**Selamat! Proyek Anxiety Relief Tool siap online! 🎉**

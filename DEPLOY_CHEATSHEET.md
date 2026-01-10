# 🚀 Quick Deploy Cheatsheet

## Pertama Kali Deploy

### 1. Setup GitHub
```bash
git init
git add .
git commit -m "Initial commit"
git remote add origin https://github.com/USERNAME/REPO.git
git push -u origin main
```

### 2. Setup Vercel
1. Login ke https://vercel.com
2. Import project dari GitHub
3. Set Environment Variables:
   - `APP_KEY` → run: `php artisan key:generate --show`
   - `APP_ENV` → `production`
   - `APP_DEBUG` → `false`
4. Deploy!

### 3. Setelah Deploy
- Akses: `https://your-project.vercel.app`
- Admin: `https://your-project.vercel.app/admin/login`

---

## Update Setelah Edit

### Quick Update (Windows)
```powershell
.\deploy.ps1
```

### Manual Update
```bash
# Build assets
npm run build

# Commit & push
git add .
git commit -m "Update: description"
git push
```

Vercel akan otomatis deploy! ✨

---

## Environment Variables yang Wajib

| Variable | Value |
|----------|-------|
| APP_KEY | base64:... (dari `php artisan key:generate --show`) |
| APP_ENV | production |
| APP_DEBUG | false |
| DB_CONNECTION | sqlite |
| DB_DATABASE | /tmp/database.sqlite |
| SESSION_DRIVER | cookie |
| CACHE_DRIVER | array |

---

## Troubleshooting Cepat

**500 Error:** Cek APP_KEY sudah diset di Vercel  
**Assets tidak load:** Run `npm run build` lalu push  
**Database hilang:** SQLite di /tmp tidak persistent, gunakan database eksternal  

---

## File Penting untuk Deploy

✅ `vercel.json` - Konfigurasi Vercel  
✅ `api/index.php` - Entry point  
✅ `build.sh` - Build script  
✅ `.vercelignore` - Ignore files  
✅ `.gitignore` - Git ignore  

---

📚 Baca: [DEPLOYMENT_GUIDE.md](DEPLOYMENT_GUIDE.md) untuk panduan lengkap

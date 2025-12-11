# 🚀 CARA: UPLOAD KE GITHUB → INSTALL LANGSUNG KE VPS

## 📋 WORKFLOW LENGKAP

1. **Upload ke GitHub** (dari komputer lokal)
2. **Clone/Download dari GitHub** (di VPS)
3. **Install ke Panel Pterodactyl** (di VPS)

---

## 🔵 LANGKAH 1: UPLOAD KE GITHUB

### A. Via GitHub Desktop (Termudah)

1. **Download GitHub Desktop**
   - https://desktop.github.com/
   - Install dan login

2. **Buka Folder Project**
   - File → Add Local Repository
   - Pilih: `C:\Users\LENOVO\Music\pterodactyl-lang`

3. **Buat Repository Baru**
   - File → New Repository
   - Name: `pterodactyl-lang`
   - Pilih folder yang sama
   - Klik **Create Repository**

4. **Commit & Publish**
   - Isi commit message: "Add Indonesian and Malay Malaysia language support"
   - Klik **Commit to main**
   - Klik **Publish repository**
   - Pilih: **Public** atau **Private**

5. **Copy URL Repository**
   - Setelah publish, copy URL repository
   - Contoh: `https://github.com/USERNAME/pterodactyl-lang.git`

---

### B. Via Command Line

```bash
# Di komputer lokal (PowerShell/Git Bash)
cd C:\Users\LENOVO\Music\pterodactyl-lang

# Inisialisasi Git
git init

# Tambahkan semua file
git add .

# Commit
git commit -m "Add Indonesian and Malay Malaysia language support"

# Buat repository di GitHub dulu, lalu:
git remote add origin https://github.com/USERNAME/pterodactyl-lang.git
git branch -M main
git push -u origin main
```

---

## 🟢 LANGKAH 2: INSTALL DARI GITHUB KE VPS

### **CARA 1: Clone Langsung ke Panel (Recommended)**

#### 1. Login ke VPS via SSH
```bash
ssh user@your-vps-ip
# atau
ssh root@your-vps-ip
```

#### 2. Navigate ke Panel Directory
```bash
cd /var/www/pterodactyl
# atau lokasi panel Anda
```

#### 3. Backup Folder Lang yang Sudah Ada
```bash
# Backup dulu (PENTING!)
cp -r resources/lang resources/lang.backup.$(date +%Y%m%d)
```

#### 4. Clone Repository (Temporary)
```bash
# Clone ke folder temporary
cd /tmp
git clone https://github.com/USERNAME/pterodactyl-lang.git temp-lang-pack

# Copy file language ke panel
cp -r temp-lang-pack/resources/lang/* /var/www/pterodactyl/resources/lang/

# Copy Polish language (jika ada)
if [ -d "temp-lang-pack/lang/pl" ]; then
    mkdir -p /var/www/pterodactyl/lang
    cp -r temp-lang-pack/lang/pl /var/www/pterodactyl/lang/
fi

# Hapus folder temporary
rm -rf temp-lang-pack
```

#### 5. Set Permission
```bash
cd /var/www/pterodactyl
chmod -R 755 resources/lang
find resources/lang -type f -exec chmod 644 {} \;
```

#### 6. Clear Cache
```bash
php artisan cache:clear
php artisan config:clear
php artisan view:clear
```

---

### **CARA 2: Download ZIP dari GitHub**

#### 1. Download ZIP di VPS
```bash
# Download dari GitHub
cd /tmp
wget https://github.com/USERNAME/pterodactyl-lang/archive/refs/heads/main.zip

# Atau jika menggunakan curl
curl -L https://github.com/USERNAME/pterodactyl-lang/archive/refs/heads/main.zip -o lang-pack.zip

# Extract
unzip main.zip
# atau
unzip lang-pack.zip
```

#### 2. Copy File ke Panel
```bash
# Backup dulu
cd /var/www/pterodactyl
cp -r resources/lang resources/lang.backup.$(date +%Y%m%d)

# Copy file language
cp -r /tmp/pterodactyl-lang-main/resources/lang/* resources/lang/

# Copy Polish (jika ada)
if [ -d "/tmp/pterodactyl-lang-main/lang/pl" ]; then
    mkdir -p lang
    cp -r /tmp/pterodactyl-lang-main/lang/pl lang/
fi

# Hapus file temporary
rm -rf /tmp/pterodactyl-lang-main /tmp/main.zip
```

#### 3. Set Permission & Clear Cache
```bash
chmod -R 755 resources/lang
find resources/lang -type f -exec chmod 644 {} \;
php artisan cache:clear
php artisan config:clear
```

---

### **CARA 3: Script Otomatis (Paling Mudah)**

#### Buat Script Install di VPS:

```bash
# Buat file install script
nano /usr/local/bin/install-ptero-lang.sh
```

**Isi script:**
```bash
#!/bin/bash

# Pterodactyl Language Pack Installer from GitHub
# Usage: install-ptero-lang.sh [github-url]

GITHUB_URL=${1:-"https://github.com/USERNAME/pterodactyl-lang.git"}
PANEL_DIR="/var/www/pterodactyl"

echo "=========================================="
echo "Installing Pterodactyl Language Pack"
echo "=========================================="

# Backup
echo "Creating backup..."
cd "$PANEL_DIR"
cp -r resources/lang resources/lang.backup.$(date +%Y%m%d_%H%M%S)

# Clone to temp
echo "Downloading from GitHub..."
cd /tmp
rm -rf temp-lang-pack
git clone "$GITHUB_URL" temp-lang-pack

# Copy files
echo "Installing language files..."
cp -r temp-lang-pack/resources/lang/* "$PANEL_DIR/resources/lang/"

if [ -d "temp-lang-pack/lang/pl" ]; then
    mkdir -p "$PANEL_DIR/lang"
    cp -r temp-lang-pack/lang/pl "$PANEL_DIR/lang/"
fi

# Set permissions
echo "Setting permissions..."
chmod -R 755 "$PANEL_DIR/resources/lang"
find "$PANEL_DIR/resources/lang" -type f -exec chmod 644 {} \;

# Clear cache
echo "Clearing cache..."
cd "$PANEL_DIR"
php artisan cache:clear
php artisan config:clear
php artisan view:clear

# Cleanup
rm -rf /tmp/temp-lang-pack

echo "=========================================="
echo "Installation Complete!"
echo "=========================================="
echo ""
echo "Next: Edit .env and set APP_LOCALE=id or APP_LOCALE=ms"
echo "Then: php artisan config:clear"
```

**Set permission script:**
```bash
chmod +x /usr/local/bin/install-ptero-lang.sh
```

**Jalankan script:**
```bash
# Install dari GitHub
install-ptero-lang.sh https://github.com/USERNAME/pterodactyl-lang.git
```

---

## ⚙️ LANGKAH 3: KONFIGURASI BAHASA

### 1. Edit File .env
```bash
nano /var/www/pterodactyl/.env
```

**Cari dan ubah:**
```
APP_LOCALE=en
```

**Menjadi:**
```
APP_LOCALE=id    # Untuk Bahasa Indonesia
# atau
APP_LOCALE=ms    # Untuk Bahasa Melayu Malaysia
```

### 2. Clear Cache
```bash
cd /var/www/pterodactyl
php artisan config:clear
php artisan cache:clear
```

### 3. Restart Web Server (Jika Perlu)
```bash
# Nginx
systemctl restart nginx

# Apache
systemctl restart apache2
```

### 4. Test di Browser
- Buka panel Pterodactyl
- Hard refresh: `Ctrl + F5`
- Panel akan menampilkan bahasa yang dipilih

---

## 🔄 UPDATE LANGUAGE PACK (Jika Ada Perubahan)

### Via Script Otomatis:
```bash
# Jalankan script lagi (akan update otomatis)
install-ptero-lang.sh https://github.com/USERNAME/pterodactyl-lang.git
```

### Manual:
```bash
cd /tmp
rm -rf temp-lang-pack
git clone https://github.com/USERNAME/pterodactyl-lang.git temp-lang-pack
cp -r temp-lang-pack/resources/lang/* /var/www/pterodactyl/resources/lang/
cd /var/www/pterodactyl
php artisan cache:clear
rm -rf /tmp/temp-lang-pack
```

---

## 📝 SCRIPT LENGKAP (Copy-Paste Ready)

### Install Script untuk VPS:

```bash
#!/bin/bash
# Save as: install-lang.sh

GITHUB_REPO="https://github.com/USERNAME/pterodactyl-lang.git"
PANEL_DIR="/var/www/pterodactyl"

echo "Installing Pterodactyl Language Pack..."

# Backup
cd "$PANEL_DIR"
cp -r resources/lang resources/lang.backup.$(date +%Y%m%d_%H%M%S)

# Download & Install
cd /tmp
git clone "$GITHUB_REPO" temp-lang 2>/dev/null || {
    echo "Error: Cannot clone repository. Check GitHub URL and internet connection."
    exit 1
}

cp -r temp-lang/resources/lang/* "$PANEL_DIR/resources/lang/"
[ -d "temp-lang/lang/pl" ] && cp -r temp-lang/lang/pl "$PANEL_DIR/lang/" 2>/dev/null

# Permissions
chmod -R 755 "$PANEL_DIR/resources/lang"
find "$PANEL_DIR/resources/lang" -type f -exec chmod 644 {} \;

# Cache
cd "$PANEL_DIR"
php artisan cache:clear 2>/dev/null
php artisan config:clear 2>/dev/null

# Cleanup
rm -rf /tmp/temp-lang

echo "Done! Edit .env and set APP_LOCALE=id or APP_LOCALE=ms"
```

**Cara pakai:**
```bash
# 1. Buat file
nano install-lang.sh
# Paste script di atas, ganti USERNAME dengan username GitHub Anda

# 2. Set permission
chmod +x install-lang.sh

# 3. Jalankan
./install-lang.sh
```

---

## ✅ CHECKLIST LENGKAP

### Di Komputer Lokal:
- [ ] Upload ke GitHub (via Desktop atau CLI)
- [ ] Repository sudah Public (atau Private dengan akses)
- [ ] Copy URL repository

### Di VPS:
- [ ] Login via SSH
- [ ] Backup folder `resources/lang/`
- [ ] Clone/download dari GitHub
- [ ] Copy file ke panel
- [ ] Set permission (755 folder, 644 file)
- [ ] Clear cache
- [ ] Edit `.env`: `APP_LOCALE=id` atau `APP_LOCALE=ms`
- [ ] Clear config cache
- [ ] Test di browser

---

## 🆘 TROUBLESHOOTING

### Error: "git: command not found"
```bash
# Install Git di VPS
# Ubuntu/Debian:
sudo apt update
sudo apt install git -y

# CentOS/RHEL:
sudo yum install git -y
```

### Error: "Cannot clone repository"
- Pastikan repository Public, atau
- Gunakan Personal Access Token:
```bash
git clone https://TOKEN@github.com/USERNAME/pterodactyl-lang.git
```

### Error: "Permission denied"
```bash
# Set ownership
sudo chown -R www-data:www-data /var/www/pterodactyl/resources/lang

# Set permission
sudo chmod -R 755 /var/www/pterodactyl/resources/lang
```

### Error: "wget/curl not found"
```bash
# Install wget
sudo apt install wget -y
# atau
sudo apt install curl -y
```

---

## 🎉 WORKFLOW SINGKAT

```bash
# 1. Di VPS, jalankan satu perintah ini:
cd /var/www/pterodactyl && \
cp -r resources/lang resources/lang.backup && \
cd /tmp && \
git clone https://github.com/USERNAME/pterodactyl-lang.git temp-lang && \
cp -r temp-lang/resources/lang/* /var/www/pterodactyl/resources/lang/ && \
chmod -R 755 /var/www/pterodactyl/resources/lang && \
cd /var/www/pterodactyl && \
php artisan cache:clear && \
rm -rf /tmp/temp-lang && \
echo "Done! Now edit .env: APP_LOCALE=id"
```

**Selesai!** 🚀

---

**Panduan lengkap untuk workflow: GitHub → VPS → Panel Pterodactyl**


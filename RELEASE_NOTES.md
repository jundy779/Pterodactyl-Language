# 🚀 Pterodactyl Language Pack v2.0.0

## 📦 Release Information

**Version:** 2.0.0  
**Release Date:** $(Get-Date -Format "yyyy-MM-dd")  
**Repository:** https://github.com/jundy779/Pterodactyl-Language

---

## ✨ What's New

### 🆕 New Languages Added

#### 🇮🇩 Indonesian (id)
- Complete language pack with 14 files
- All translations for Pterodactyl Panel
- Ready to use immediately

#### 🇲🇾 Malay Malaysia (ms)
- Complete language pack with 14 files
- All translations for Pterodactyl Panel
- Ready to use immediately

### 🔧 Improvements

#### 🇵🇱 Polish (pl)
- Fixed missing keys in `command/messages.php`
- Added `environment.database` section (10 keys)
- Added `environment.app` section (16 keys)
- Now fully complete and consistent

### 📝 Documentation

- Updated README.md with new languages
- Added installation guide (CARA_GITHUB_KE_VPS.md)
- Added .gitignore file

---

## 📊 Statistics

- **Total Languages:** 8 languages
- **New Files Added:** 32 files
- **Lines of Code:** 1,723+ new lines
- **Files per Language:** 14 files (standard)

---

## 🌍 Available Languages

| Language | Code | Status | Files |
|----------|------|--------|-------|
| English | `en` | ✅ Complete | 14 |
| German | `de` | ✅ Complete | 14 |
| Dutch | `nl` | ✅ Complete | 14 |
| Norwegian | `no` | ✅ Complete | 14 |
| Russian | `ru` | ✅ Complete | 14 |
| Polish | `pl` | ✅ Complete | 15 |
| **Indonesian** | `id` | ✅ **NEW** | 14 |
| **Malay Malaysia** | `ms` | ✅ **NEW** | 14 |

---

## 📁 File Structure

Each language contains:
- `admin/nests.php` - Nest management translations
- `admin/node.php` - Node management translations
- `admin/server.php` - Server management translations
- `admin/user.php` - User management translations
- `auth.php` - Authentication translations
- `command/messages.php` - Command line messages
- `dashboard/account.php` - Account dashboard
- `dashboard/index.php` - Main dashboard
- `exceptions.php` - Error/exception messages
- `pagination.php` - Pagination translations
- `passwords.php` - Password reset translations
- `server/users.php` - Server user permissions
- `strings.php` - General strings
- `validation.php` - Validation messages

---

## 🚀 Installation

### Quick Install from GitHub

```bash
# Clone repository
git clone https://github.com/jundy779/Pterodactyl-Language.git

# Copy language files to panel
cp -r Pterodactyl-Language/resources/lang/* /var/www/pterodactyl/resources/lang/

# Set permissions
chmod -R 755 /var/www/pterodactyl/resources/lang
find /var/www/pterodactyl/resources/lang -type f -exec chmod 644 {} \;

# Clear cache
cd /var/www/pterodactyl
php artisan cache:clear
php artisan config:clear
```

### Set Language in Panel

Edit `.env` file:
```env
APP_LOCALE=id    # For Indonesian
# or
APP_LOCALE=ms    # For Malay Malaysia
```

Then clear cache:
```bash
php artisan config:clear
php artisan cache:clear
```

---

## 📖 Usage

1. **Download** the latest release
2. **Extract** to your panel directory
3. **Copy** `resources/lang/` folder to your panel
4. **Set** `APP_LOCALE` in `.env` file
5. **Clear** cache and refresh browser

For detailed installation guide, see `CARA_GITHUB_KE_VPS.md`

---

## 🔒 Security

- ✅ All files syntax validated
- ✅ No executable code
- ✅ Only translation arrays
- ✅ Safe to use in production
- ✅ Backward compatible

---

## 🐛 Bug Fixes

- Fixed missing `environment.database` keys in Polish language
- Fixed missing `environment.app` keys in Polish language
- All languages now have consistent structure

---

## 📝 Changelog

### v2.0.0 (Current)
- ✨ Added Indonesian language support
- ✨ Added Malay Malaysia language support
- 🔧 Fixed Polish language missing keys
- 📝 Updated documentation
- 📦 Added installation guides

### v1.0.0 (Previous)
- Initial release with 6 languages (en, de, nl, no, ru, pl)

---

## 🤝 Contributing

Contributions are welcome! Please:
1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Submit a pull request

---

## 📄 License

This project is open source and available for the Pterodactyl community.

---

## 🙏 Credits

- Original project: [Pterodactyl](https://pterodactyl.io)
- Community contributors
- Translation contributors

---

## 📞 Support

For issues, questions, or contributions:
- Open an issue on GitHub
- Check the installation guide
- Review the documentation

---

**Thank you for using Pterodactyl Language Pack!** 🎉


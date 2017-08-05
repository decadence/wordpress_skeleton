# WordPress Blank Theme
WordPress тема с некоторыми заготовками для разработки с Git и Composer.

## Общие сведения:
- `DOCUMENT_ROOT` в папке `/public`
- `wp-config.php` находится в `vendor/wordpress`.
- Запретить прямое обращение к любым php файлам кроме `index.php`.
- Git-репозиторий должен иметь настройку `core.symlink = true`, так как основная идея в том, что `/public/wp` это симлинк на `vendor/wordpress/wordpress`.




<?
define('WP_CACHE', true);

/**
 * Файловый путь к корню сайта
 */
define('ROOT', $_SERVER["DOCUMENT_ROOT"]);

/**
 * Путь к корню проекта
 */
define("BASE", ROOT . "/../");

/**
 * Просматриваем ли мы сайт с локального компьютера
 */
define("LOCALHOST", $_SERVER["REMOTE_ADDR"] == "127.0.0.1");

/**
 * Продуктовая среда
 */
define("PRODUCTION", !LOCALHOST);

/**
 * Режим отладки
 */
define("WP_DEBUG", LOCALHOST);

// отключение вывода ошибок
ini_set("display_errors", LOCALHOST ? "On" : "Off");

// путь к логу
ini_set("error_log", BASE . "/error.log");

// задаём новые пути
define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp');
define('WP_HOME', 'http://' . $_SERVER['SERVER_NAME']);
define('WP_CONTENT_DIR', ROOT . '/content');
define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/content');


define('WP_DEFAULT_THEME', 'main');
define('WPLANG', 'ru_RU');

define('DB_NAME', 'wordpress');
define('DB_USER', 'root');
define('DB_PASSWORD', '12345678');
define('DB_HOST', 'localhost:3307');
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', '');

// TODO сменить на уникальные строки для вашего сайта
define('AUTH_KEY', '#SET_UNIQUE_STRING#');
define('SECURE_AUTH_KEY', '#SET_UNIQUE_STRING#');
define('LOGGED_IN_KEY', '#SET_UNIQUE_STRING#');
define('NONCE_KEY', '#SET_UNIQUE_STRING#');
define('AUTH_SALT', '#SET_UNIQUE_STRING#');
define('SECURE_AUTH_SALT', '#SET_UNIQUE_STRING#');
define('LOGGED_IN_SALT', '#SET_UNIQUE_STRING#');
define('NONCE_SALT', '#SET_UNIQUE_STRING#');

$table_prefix = 'wp_';

if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

require_once(ABSPATH . 'wp-settings.php');


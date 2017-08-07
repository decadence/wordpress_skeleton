<?
define("WP_CACHE", false);
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

define("WHOOPS", LOCALHOST);

if (!WHOOPS) {
    // не нужно при использовании Whoops, так как он не записывает логи

    // отображение ошибок
    define("WP_DEBUG_DISPLAY", LOCALHOST);

    // запись ошибок в content/debug.log
    define("WP_DEBUG_LOG", LOCALHOST);

    // произвольный путь к логу
    // ini_set("error_log", BASE . "/error.log");
}


/**
 * Сохранение запросов
 */
define("SAVEQUERIES", LOCALHOST);

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


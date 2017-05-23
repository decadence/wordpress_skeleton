<?
define('WP_DEFAULT_THEME', 'main');
define('WPLANG', 'ru_RU');

// просматриваем ли мы сайт с локального компьютера
define("LOCALHOST", $_SERVER["REMOTE_ADDR"] == "127.0.0.1");
define("WP_DEBUG", LOCALHOST);

// активируем MySQLi
define("WP_USE_EXT_MYSQL", false);

// отключение автоматического обновления ядра, мы делаем это через Git
define("WP_AUTO_UPDATE_CORE", false);

/**
 * Путь к корню проекта
 */
define("ROOT", __DIR__);




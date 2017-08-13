<?php
define('WP_USE_THEMES', true);
$wordpressHeader = __DIR__ . '/wp/wp-blog-header.php';

// проверяем наличие главного файла на случай,
// если мы в процессе обновления через Composer
if (file_exists($wordpressHeader)) {
    require($wordpressHeader);
} else {
    require(__DIR__ . "/content/maintenance.php");
}

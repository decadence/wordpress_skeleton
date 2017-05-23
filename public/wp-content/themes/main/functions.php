<?
/*
 * полный URL к теме
*/
define('THEME_PATH', get_template_directory_uri() . '/');

/*
 * полный путь к папке темы
*/
define('THEME_FULL_PATH', get_template_directory_uri() . '/');

/*
 * файловый путь к корню сайта
*/
define('DOCROOT', $_SERVER["DOCUMENT_ROOT"]);

/*
 * email администратора
*/
define('ADMIN_EMAIL', '');

/*
 * email, на который идёт отправка писем обратной связи
*/
define('TARGET_EMAIL', '');


// отключение визуального редактора, чтобы избежать засорения контента при редактировании постов
add_filter('user_can_richedit', '__return_false');

/*
 * Отключение редактора файлов из админки
*/
define('DISALLOW_FILE_EDIT', true);


// отключение ненужных фильтров и действий
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_filter('the_content', 'wpautop');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);

// регистрация одного меню
register_nav_menus(array(
    'header-menu' => 'Верхнее меню'
));

// прячем пункты меню админки на проде
add_action("admin_head", function () {
    if (LOCALHOST) {
        return;
    }

    echo '<link href="' . THEME_PATH . '"./css/admin.css" rel="stylesheet" />';
});

// логирование входов на сайт
add_action("wp_login", function ($login, $user) {

    // отключаем по умолчанию
    return;

    if (LOCALHOST) {
        return;
    }

    $message = "Пользователь {$login} зашёл на сайт {$_SERVER['SERVER_NAME']} с IP: {$_SERVER['REMOTE_ADDR']}";

    wp_mail(ADMIN_EMAIL, "Вход на сайт", $message);
}, 10, 2);

/**
 * Подключение шаблона с параметрами, как в MVC.
 * Чтобы не держать код с разметкой в функциях
 * @param $params array
 * Массив с параметрами
 * @param $name string
 * Имя шаблона без расширения
 * @param $return bool
 * Возвращать результат или печатать (false, по умолчанию)
 * @return bool Успешно ли подключен шаблон
 *
 * использование
 * $data = array(
 *        "string" => "Hello",
 *        "array" => array(1,2,3),
 *        "object" => $wp_query
 * );
 *
 * include_template($data, "test");
 */
function include_template($params, $name, $return = false)
{
    // извлекаем параметры, создавая локальные для этой функции переменные
    extract($params);

    // пытаемся найти шаблон
    $template = locate_template("{$name}.php");

    // шаблон найден
    if ($template) {
        ob_start();

        // делаем include вручную, чтобы не уходить ещё глубже (подключение через get_template_part будет внутри ещё одной функции, мы не увидим переменные оттуда)
        include($template);

        $result = ob_get_clean();

        if ($return) {
            return $result;
        }

        // по умолчанию просто распечатываем результат и возвращаем true
        echo $result;
        return true;
    }

    // иначе терпим неудачу
    return false;
}

/**
 * Безопасное получение значения из массива или возврат стандартного значения
 * @param $array
 * @param $key
 * @param null $default
 * @return null
 */
function array_get($array, $key, $default = null)
{
    if (isset($array[$key])) {
        return $array[$key];
    }

    return $default;
}

/**
 * Подключение меню
 * @param string $menu_id
 * @param string $template
 */
function include_menu($menu_id = "header-menu", $template = "templates/menu.php")
{
    $locations = get_nav_menu_locations();
    $menu_id = $locations[$menu_id];
    $items = wp_get_nav_menu_items($menu_id);

    include_template(array(
        "items" => $items
    ), $template);
}

/**
 * Правильное склонение окончаний для разных чисел
 * @param int $number Номер для склонения
 * @param array $endingArray Массив вариантов для склонения: именительный, родительный, родительный множественный.
 * Например, array("белый кролик", "белых кролика", "белых кроликов")
 * @return mixed
 */
function getNumEnding($number, $endingArray)
{
    $number = $number % 100;

    if ($number >= 11 && $number <= 19) {
        return $endingArray[2];
    }

    $i = $number % 10;

    switch ($i) {

        case 1:
            $ending = $endingArray[0];
            break;

        case 2:
        case 3:
        case 4:
            $ending = $endingArray[1];
            break;

        default:
            $ending = $endingArray[2];
            break;
    }

    return $ending;
}

/**
 * Отсылает ответ клиенту и завершает работу скрипта
 * @param $result
 */
function json($result)
{
    header("Content-Type: application/json");
    echo json_encode($result);
    exit;
}











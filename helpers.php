<?
/**
 * Подключение шаблона с параметрами, как в MVC.
 * Чтобы не держать код с разметкой в функциях.
 * @param $params array Массив с параметрами
 * @param $name string Имя шаблона без расширения
 * @param $return bool Возвращать результат или печатать (false, по умолчанию)
 * @return bool Успешно ли подключен шаблон
 *
 * Использование
 * $data = [
 *        "string" => "Hello",
 *        "array" => array(1,2,3),
 *        "object" => $wp_query
 * ];
 *
 * include_template($data, "test");
 */
function include_template($params, $name, $return = false)
{
    // извлекаем параметры, создавая локальные для этой функции переменные
    extract($params);

    // пытаемся найти шаблон
    $template = locate_template("{$name}.php");

    // шаблон не найден
    if (!$template) {
        return false;
    }

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

/**
 * Включение Whoops
 */
function enable_whoops()
{
    $whoops = new \Whoops\Run;
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();
}

/**
 * Получение значения из кеша
 * @param string $key Ключ
 * @param int $expire Количество минут
 * @param callable $callback Функция для получения значения
 * @param string $group Группа кеша
 * @return bool|mixed
 */
function remember($key, $expire, $callback, $group = "")
{
    $value = wp_cache_get($key);

    if ($value !== false) {
        return $value;
    }

    $value = $callback();
    wp_cache_set($key, $value, $group, $expire * 60);
    return $value;
}


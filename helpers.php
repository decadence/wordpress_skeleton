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
 *		"string" => "Hello",
 *		"array" => array(1,2,3),
 *		"object" => $wp_query
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

	// шаблон найден
	if($template){
		ob_start();
		
		// делаем include вручную, чтобы не уходить ещё глубже (подключение через get_template_part будет внутри ещё одной функции, мы не увидим переменные оттуда)
		include($template);

		$result = ob_get_clean();

		if($return){
			return $result;
		}

		// по умолчанию просто распечатываем результат и возвращаем true
		echo $result;
		return true;
	}

	// иначе терпим неудачу
	return false;
}

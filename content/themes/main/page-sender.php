<?
/**
 * Отправка почты
*/

if(!defined("ABSPATH")){
	exit;
}

if(!$_POST){
	exit;
}

header("Content-Type: application/json");

$status = 202;
$message = "Ошибка при отправке сообщения";

$user_message = "Письмо от {$_POST["u_email"]}:
{$_POST["u_message"]}
";

if (wp_mail(TARGET_EMAIL, $_POST["u_theme"], $user_message)){
	$status = 200;
	$message = "Успешно отправлено";
}

end_request(array(
	"status" => $status,
	"message" => $message
));


/**
 * Пишет ответ и завершает работу скрипта
 * @param $result
 */
function end_request($result)
{
	echo json_encode($result);
	exit;
}




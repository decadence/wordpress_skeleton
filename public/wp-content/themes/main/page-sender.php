<?
/**
 * Отправка почты
 */
if (!$_POST) {
    exit;
}

$status = 202;
$message = "Ошибка при отправке сообщения";

$user_message = "Письмо от {$_POST["u_email"]}: {$_POST["u_message"]}";

if (wp_mail(TARGET_EMAIL, $_POST["u_theme"], $user_message)) {
    $status = 200;
    $message = "Успешно отправлено";
}

json(array(
    "status" => $status,
    "message" => $message
));






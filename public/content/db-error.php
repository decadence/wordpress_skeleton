<?
// отдаём ошибочный статус для нормального мониторинга
// при включенных ошибках не сработает, так как заголовки уже будут отправлены
header("HTTP/1.1 503 Service Unavailable");
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ошибка</title>
</head>
<body>
<h1>
    Приносим свои извинения, сайт недоступен
</h1>

<p>
    Вы можете связаться с
    <a href="mailto:brahman63@mail.ru">администратором</a>
    сайта и сообщить ему о проблеме.
</p>

</body>
</html>



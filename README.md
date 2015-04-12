# WordPress Blank Theme
Чистая WordPress тема для разработки с Git.

## Общие сведения:
+ WordPress должен быть подключен как подмодуль в подпапку /wp.
+ Перенести файл wp-config.php в корень сайти и добавить в него строки из wp-config-add.php

## Серверные настройки
### Apache + Nginx
+ Отдача картинки по умолчанию  

		try_files $uri /placeholder.jpg;




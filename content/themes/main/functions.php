<?
if(!defined("ABSPATH")){
	exit;
}

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
define('ROOT', $_SERVER["DOCUMENT_ROOT"]);

/*
 * email администратора
*/
define('ADMIN_EMAIL', 'brahman63@mail.ru');


// отключение визуального редактора, чтобы избежать засорения контента при редактировании постов
add_filter('user_can_richedit', '__return_false');

/*
 * Отключение редактора файлов из админки
*/
define('DISALLOW_FILE_EDIT', true);


// отключение ненужных фильтров и действий
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action( 'wp_head', 'rel_canonical');
remove_filter( 'the_content', 'wpautop');
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );



register_nav_menus(array(
	'header-menu' => 'Верхнее меню'
));


// прячем пункты меню админки на проде
add_action("admin_head", function(){
	if(LOCALHOST){
		return;
	}
?>
	<link href="<?=THEME_PATH?>/css/admin.css" rel="stylesheet" />
<?
});

// логирование входов на сайт
add_action("wp_login", function($login, $user){

	// отключаем по умолчанию
	return;

	if(LOCALHOST){
		return;
	}

	$message = "Пользователь {$login} зашёл на сайт {$_SERVER['SERVER_NAME']} с IP: {$_SERVER['REMOTE_ADDR']}";

	wp_mail(ADMIN_EMAIL, "Вход на сайт", $message);
}, 10, 2);







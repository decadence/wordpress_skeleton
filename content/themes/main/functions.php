<?
if(!defined("ABSPATH"))
{
	exit;
}

// полный URL к теме
define('THEME_PATH', get_template_directory_uri() . '/');




// отключение визуального редактора, чтобы избежать засорения контента при редактировании постов
add_filter('user_can_richedit', '__return_false');


// отключение ненужных фильтров и действий
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action('wp_head', 'rel_canonical');
remove_filter('the_content', 'wpautop');
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



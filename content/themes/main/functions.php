<?
if(!defined("ABSPATH"))
{
	exit;
}

// полный URL к теме
define('THEME_PATH', get_template_directory_uri() . '/');





add_filter('user_can_richedit', '__return_false');




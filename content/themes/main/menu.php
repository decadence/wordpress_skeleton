<?
/*
 * Вывод верхнего меню
 */

if(!defined("ABSPATH")){
	exit;
}

$locations = get_nav_menu_locations();
$menu_id = $locations["header-menu"];
$items = wp_get_nav_menu_items($menu_id);

?>


<ul class="main-menu">
	<? foreach($items as $item){?>
		<li>
			<a href="<?=$item->url?>">
				<?=$item->title?>
			</a>			
		</li>
	<?}?>
</ul>





<?
/**
 * Шаблон вывода меню
*/
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


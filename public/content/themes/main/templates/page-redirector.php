<?
/*
Template Name: Redirector
Шаблон страницы, которая перенаправляет на своего первого ребёнка или на главную, если детей нет.
*/

$page_id = get_queried_object_id();

$children = get_pages(array(
    'parent' => $page_id,
    'hierarchical' => false,
    'sort_column' => 'menu_order',
    'sort_order' => 'ASC'
));

$redirect_url = $children ? get_permalink($children[0]->ID) : '/';
wp_redirect($redirect_url);
exit;





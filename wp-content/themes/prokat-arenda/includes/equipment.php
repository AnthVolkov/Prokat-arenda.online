<?php
if (!defined('ABSPATH')) exit;

function prokat_register_equipment(){

register_post_type('equipment', [
'labels'=>[
'name'=>'Оборудование',
'singular_name'=>'Оборудование'
],
'public'=>true,
'menu_icon'=>'dashicons-hammer',
'supports'=>[
'title',
'editor',
'thumbnail'
],
'rewrite'=>[
'slug'=>'equipment'
]
]);

register_taxonomy('equipment_category','equipment',[
'label'=>'Категории оборудования',
'hierarchical'=>true,
'rewrite'=>[
'slug'=>'equipment-category'
]
]);

}

add_action('init','prokat_register_equipment');

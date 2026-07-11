<?php
if (!defined('ABSPATH')) exit;

function prokat_register_booking(){

register_post_type('booking',[
'labels'=>[
'name'=>'Заявки',
'singular_name'=>'Заявка'
],
'public'=>false,
'show_ui'=>true,
'menu_icon'=>'dashicons-email',
'supports'=>['title']
]);

}

add_action('init','prokat_register_booking');

function prokat_handle_booking(){

if(isset($_POST['client_name']) && isset($_POST['client_phone'])){

$name=sanitize_text_field($_POST['client_name']);
$phone=sanitize_text_field($_POST['client_phone']);
$equipment=sanitize_text_field($_POST['equipment_name'] ?? '');

wp_insert_post([
'post_type'=>'booking',
'post_title'=>$name.' - '.$equipment,
'post_status'=>'publish',
'meta_input'=>[
'client_phone'=>$phone,
'equipment'=>$equipment
]
]);

}

}

add_action('init','prokat_handle_booking');

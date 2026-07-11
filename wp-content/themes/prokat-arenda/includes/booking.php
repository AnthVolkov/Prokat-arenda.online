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

if(isset($_POST['client_name']) && isset($_POST['client_phone']) && isset($_POST['prokat_booking_nonce']) && wp_verify_nonce($_POST['prokat_booking_nonce'],'prokat_booking_action')){

$name=sanitize_text_field($_POST['client_name']);
$phone=sanitize_text_field($_POST['client_phone']);
$equipment=sanitize_text_field($_POST['equipment_name'] ?? '');
$date=sanitize_text_field($_POST['rent_date'] ?? '');
$period=sanitize_text_field($_POST['rent_period'] ?? '');
$comment=sanitize_textarea_field($_POST['client_comment'] ?? '');

wp_insert_post([
'post_type'=>'booking',
'post_title'=>$name.' - '.$equipment,
'post_status'=>'publish',
'meta_input'=>[
'client_phone'=>$phone,
'equipment'=>$equipment,
'rent_date'=>$date,
'rent_period'=>$period,
'comment'=>$comment
]
]);

$message="Новая заявка Prokat-arenda.online\n\nИмя: $name\nТелефон: $phone\nОборудование: $equipment\nДата: $date\nСрок: $period\nКомментарий: $comment";

wp_mail(get_option('admin_email'),'Новая заявка на аренду',$message);

}
}

add_action('init','prokat_handle_booking');

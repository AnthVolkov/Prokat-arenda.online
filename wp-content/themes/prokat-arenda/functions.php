<?php
if (!defined('ABSPATH')) exit;

function prokat_setup(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');

    register_nav_menus([
        'main_menu' => 'Главное меню'
    ]);
}
add_action('after_setup_theme','prokat_setup');

function prokat_styles(){
    wp_enqueue_style('prokat-style', get_stylesheet_uri(), [], '1.0');

    wp_enqueue_style(
        'prokat-main',
        get_template_directory_uri().'/assets/css/main.css',
        [],
        '1.0'
    );

    wp_enqueue_script(
        'prokat-main-js',
        get_template_directory_uri().'/assets/js/main.js',
        [],
        '1.0',
        true
    );
}
add_action('wp_enqueue_scripts','prokat_styles');

if (file_exists(get_template_directory().'/includes/equipment.php')) {
    require_once get_template_directory().'/includes/equipment.php';
}

if (file_exists(get_template_directory().'/includes/booking.php')) {
    require_once get_template_directory().'/includes/booking.php';
}

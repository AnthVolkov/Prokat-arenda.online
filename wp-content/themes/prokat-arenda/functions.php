<?php
if (!defined('ABSPATH')) exit;

function prokat_arenda_setup(){
 add_theme_support('title-tag');
 add_theme_support('post-thumbnails');
 add_theme_support('custom-logo');
 register_nav_menus(['primary'=>'Primary Menu']);
}
add_action('after_setup_theme','prokat_arenda_setup');

function prokat_arenda_assets(){
 wp_enqueue_style('prokat-style', get_stylesheet_uri(), [], '0.1.0');
}
add_action('wp_enqueue_scripts','prokat_arenda_assets');

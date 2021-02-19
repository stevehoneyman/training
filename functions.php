<?php
// add stylesheet(s)
function set_theme_styles() {
  // wp_enqueue_style( 'style', get_stylesheet_uri() ); this isn't required as WP loads by default
  wp_enqueue_style( 'main_stylesheet' , get_template_directory_uri() . '/css/app.css?v=' .time() );
}
add_action('wp_enqueue_scripts', 'set_theme_styles');

// add scripts
function set_theme_scripts() {
	wp_enqueue_script( 'main_script', get_template_directory_uri() . '/js/scripts.js', array('jquery') , '' , true);
}
add_action('wp_enqueue_scripts' , 'set_theme_scripts');

// enable menus in dashboard
add_theme_support('menus');

// enable featured images
add_theme_support('post-thumbnails');

// enable excerpts
add_post_type_support( 'page', 'excerpt' );

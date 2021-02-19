<?php
// add stylesheet(s)
function set_theme_styles() {
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

/*
  function register_theme_menus() {
  	register_nav_menus(
  		array(
  			'primary_nav_pages' => __('Primary Nav Pages'),
        'primary_nav_cta' => __('Primary Nav CTA'),
  			'primary_nav_sub' => __('Primaty Nav Sub'),
  	    )
  		);
  	}
  add_action('init', 'register_theme_menus');
*/

// enable featured images
add_theme_support('post-thumbnails');

// enable excerpts
add_post_type_support( 'page', 'excerpt' );

if ( function_exists('acf_add_options_page') ) {
  acf_add_options_page();
}

// show toolbar when logged out
// show_admin_bar( true );

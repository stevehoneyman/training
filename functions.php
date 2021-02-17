<?php
// add stylesheet(s)
wp_enqueue_style( 'style', get_stylesheet_uri() );
wp_enqueue_style( 'app', get_template_directory_uri() . '/css/app.css',false,'1.1','all');

// add scripts
wp_enqueue_script( 'main_script', get_template_directory_uri() . '/js/scripts.js', array('jquery') , '' , true);


// add featured image
add_theme_support('post-thumbnails');

// add excerpts
add_post_type_support( 'page', 'excerpt' );

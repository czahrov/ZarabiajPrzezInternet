<?php
add_theme_support('post-thumbnails');

if( !is_admin() ){
	wp_enqueue_style( "boostrap", get_template_directory_uri() . "/css/bootstrap.min.css", array() );
	wp_enqueue_style( "fonts", get_template_directory_uri() . "/css/fonts.css", array() );
	wp_enqueue_style( "fontello", get_template_directory_uri() . "/css/fontello.css", array() );
	wp_enqueue_style( "blog", get_template_directory_uri() . "/css/blog.css", array() );
	wp_enqueue_style( "font-awesome", get_template_directory_uri() . "/css/font-awesome.min.css", array() );
	
	wp_enqueue_style( "style", get_template_directory_uri() . "/style.css", array() );
	
	wp_enqueue_script( "jQ", get_template_directory_uri() . "/js/jquery-1.12.4.min.js" );
	wp_enqueue_script( "boostrap", get_template_directory_uri() . "/js/bootstrap.min.js" );
	wp_enqueue_script( "main", get_template_directory_uri() . "/js/main.js" );
}
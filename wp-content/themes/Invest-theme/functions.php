<?php

// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', 'invest_theme_styles' );
add_action( 'wp_footer', 'invest_theme_styles_footer' );
add_action( 'wp_enqueue_scripts', 'jquery_lib' );
function jquery_lib(){
	wp_deregister_script( 'jquery-core' );
	wp_register_script( 'jquery-core', '//code.jquery.com/jquery-1.12.4.min.js');
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'slick', get_template_directory_uri() .'/assets/slick/slick.js', array('jquery'), null, true);
	wp_enqueue_script( 'main', get_template_directory_uri() .'/assets/js/main.js', array('jquery'), null, true);
}

function invest_theme_styles() {
	wp_enqueue_style( 'main', get_stylesheet_uri() );
	wp_enqueue_style( 'Bootstrap', get_template_directory_uri() . '/assets/css/bootstrap-grid.min.css');
}function invest_theme_styles_footer() {
	wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/assets/slick/slick-theme.css');
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/slick/slick.css');
}

	
		function powerange() {
			if (is_page(17)) {
			wp_enqueue_style( 'powerange-css', get_template_directory_uri() .'/assets/css/powerange.min.css');
			wp_enqueue_script( 'powerange', get_template_directory_uri() .'/assets/js/powerange.min.js');
		}
	}
		
add_action( 'wp_enqueue_scripts', 'powerange' );
add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails');
add_image_size( 'object-preview', 371, 141, true );
add_image_size( 'directions-preview', 371, 170, true );
add_image_size( 'saidebar-preview', 350, 200, true );
<?php

function themealex_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'themealex_add_woocommerce_support' );

add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );


function az_style() {
	wp_enqueue_style( 'az-style', get_stylesheet_uri() );

	wp_enqueue_style( 'az-bootstrap-css', get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.css');

	wp_enqueue_script( 'az-bootstrap-js', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.js',
	array(), '20151215', true );


}

add_action( 'wp_enqueue_scripts', 'az_style' );



// permet d'ajouter un extrait a une page
add_post_type_support( 'page', 'excerpt' );



// NAV MENU dans wordpress
function register_my_menu() {
	register_nav_menu('new-menu',__( 'New Menu' ));
  }
  add_action( 'init', 'register_my_menu' );
 ?>

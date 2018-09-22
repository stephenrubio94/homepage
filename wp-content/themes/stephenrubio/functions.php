<?php 
add_theme_support( 'menus' );

function styles() {
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css' );
}

add_action( 'wp_enqueue_scripts', 'styles' );

function register_my_menu() {
    register_nav_menu('navigation',__( 'Navigation' ));
  }
  add_action( 'init', 'register_my_menu' );
?>
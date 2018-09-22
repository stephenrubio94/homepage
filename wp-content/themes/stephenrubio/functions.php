<?php 
// creates portfolio post type
add_theme_support( 'menus' );

//adds main stylesheet
function styles() {
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css' );
}
add_action( 'wp_enqueue_scripts', 'styles' );

// creates portfolio post type
function create_post_type() {
  register_post_type( 'portfolio',
    array(
      'labels' => array(
        'name' => __( 'Portfolio' ),
        'singular_name' => __( 'Portfolio' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
}
add_action( 'init', 'create_post_type' );


// registers main navigation menu
function register_main_nav() {
    register_nav_menu('navigation',__( 'Navigation' ));
  }
  add_action( 'init', 'register_main_nav' );
?>
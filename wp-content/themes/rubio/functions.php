<?php 
    // gets the main stylesheet
    wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css' );

    // adds support for menus
    add_theme_support( 'menus' );
?>

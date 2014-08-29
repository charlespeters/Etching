<?php
    function etching_styles()
    {
        wp_enqueue_style( 'style', get_stylesheet_uri() );
        wp_enqueue_style( 'etching_generated', get_template_directory_uri().'/build/css/main.prefixed.css' );
    }
    add_action( 'wp_enqueue_scripts', 'etching_styles' );

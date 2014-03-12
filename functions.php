<?php
	
	// Add RSS links to <head> section
	add_theme_support( 'automatic-feed-links' );
	// Load jQuery
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("http://code.jquery.com/jquery-latest.min.js"), false);
	   wp_enqueue_script('jquery');
	}
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
    // featured images
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 500, 500, true ); // 50 pixels wide by 50 pixels tall, resize mode

	// Primary Navigation
	if (function_exists('register_nav_menu')) {
		register_nav_menu( array(
			'primary' => 'Primary Menu',
		));
	}
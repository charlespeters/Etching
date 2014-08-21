<?php
	require_once('inc/enqueue_scripts.php');
	require_once('inc/enqueue_styles.php');
	require_once('inc/clean_head.php');
	require_once('inc/theme_support.php');
	require_once('inc/nav_menus.php');
	require_once('inc/widgets.php');
	require_once('inc/customizer.php');

	// Enqueue Livereload for Development
	if (in_array($_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1'))) {
		wp_register_script('livereload', 'http://localhost:35729/livereload.js?snipver=1', null, false, true);
		wp_enqueue_script('livereload');
}


?>

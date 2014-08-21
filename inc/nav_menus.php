<?php
    // Primary Navigation
    if (function_exists('register_nav_menu')) {
        register_nav_menus( array(
            'primary' => 'Primary Menu',
            'footer' => 'Footer Menu'
        ));
    }

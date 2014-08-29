<?php
    // Load jQuery
    if ( !is_admin() ) {
       wp_deregister_script('jquery');
       wp_register_script('jquery', ('//code.jquery.com/jquery-latest.min.js'), false);
       wp_register_script('modernizr', ('//cdnjs.cloudflare.com/ajax/libs/modernizr/2.7.1/modernizr.min.js'), false);
       wp_enqueue_script('jquery');
       wp_enqueue_script('modernizr');
    }

<?php
    get_header(); 
    echo '<section class="wrapper">';
    get_template_part('partials/loop', 'single');
    get_sidebar();
    echo '</section>';
    get_footer();
?>
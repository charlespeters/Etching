<?php
    $args = array(
            'theme_location'  => 'footer',
            'container'       => 'nav',
            'container_class' => 'nav',
            'menu_class'      => 'menu',
            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    );
    wp_nav_menu($args);
?>

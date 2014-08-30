<?php
/**
 * @package Etching
 * @subpackage Index
 */
 get_header(); ?>
    <section class="container--small">
        <section class="content--main">
            <?php get_template_part('partials/loop', 'index'); ?>
        </section>
        <?php get_sidebar(); ?>
    </section>
<?php get_footer(); ?>

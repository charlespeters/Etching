<?php
/**
 * @package Etching
 * @subpackage Index
 */
 get_header(); ?>
    <section class="container--small">
        <section class="main--content">
            <?php get_template_part('partials/loop', 'index'); ?>
        </section>
        <?php get_sidebar(); ?>
    </section>
<?php get_footer(); ?>

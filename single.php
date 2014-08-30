<?php
/**
 * @package Etching
 * @subpackage Single Post
 */
    get_header();
?>
<section class="container--small">
    <section class="content--main">
        <?php get_template_part('partials/loop', 'single'); ?>
    </section>
    <?php get_sidebar(); ?>
</section>
<?php get_footer(); ?>

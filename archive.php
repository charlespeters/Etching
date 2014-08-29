<?php
    /**
     * @package Etching
     * @subpackage Archive
     */
    get_header();
?>
<section class="archivelist">
<?php if ( have_posts() ) : ?>
    <header>
        <h1><?php get_template_part('partials/archived')?></h1>
        <?php
            // Show an optional term description.
            $term_description = term_description();
            if ( ! empty( $term_description ) ) :
				printf( '<div class="taxonomy-description">%s</div>', $term_description );
            endif;
        ?>
    </header>
    <section>
        <?php get_template_part('partials/loop', 'index'); ?>
    </section>
    <?php else : ?>
        Not Found
    <?php endif; ?>
</section>

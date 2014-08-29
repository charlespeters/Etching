<?php while ( have_posts() ) : the_post(); ?>
<article class="post container--small">
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php get_template_part('partials/meta'); ?>
	</header>

	<section class="entry-content">
						<?php the_content(); ?>
				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
				<?php the_tags( 'Tags: ', ', ', ''); ?>
				<?php edit_post_link('Edit this entry','','.'); ?>
	</section><!-- .entry-content -->
	<footer class="entry-footer">
		<?php comments_template(); ?>
	</footer>
</article><!-- #post-## -->
<?php endwhile; ?>

<?php
/**
 * @package Etching
 * @subpackage Comments
 */

// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p>This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}
?>

<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>
	<h3 id="comments"><?php comments_number('No Responses', 'One Response', '% Responses' );?> to “<?php the_title(); ?>”</h3>

	<ol>
		<?php wp_list_comments('type=comment&callback=advanced_comment'); //this is the important part that ensures we call our custom comment layout defined above
                ?>
	</ol>
	<div>
		<div><?php previous_comments_link() ?></div>
		<div><?php next_comments_link() ?></div>
	</div>
 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ( comments_open() ) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments">Comments are closed.</p>

	<?php endif; ?>
<?php endif; ?>

<?php if ( comments_open() ) : ?>


<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
<p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
<?php else : ?>


<?php if ( is_user_logged_in() ) : ?>



<?php comment_form(); ?>

<?php endif; ?>

<?php endif; // If registration required and not logged in ?>
</div>

<?php endif; // if you delete this the sky will fall on your head ?>

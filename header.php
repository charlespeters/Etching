<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" />
	<?php } ?>
    <title>
    <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; | '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive | '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' | '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' | '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' | page '. $paged; }
    ?>
    </title>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>
    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
</head>
<body  <?php body_class(); ?>>
<header class="header">
	<div class="container--small">
		<div class="header--logo">
			<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
		</div>
		<?php get_template_part('partials/menu', 'primary'); ?>
	</div>
</header>
<main id="main" class="site-main" role="main">

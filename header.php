<!doctype html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <title>Document</title>
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.min.css" type="text/css"/>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>
</head>
<body>
<header class="header">
    <h1><?php bloginfo('name'); ?></h1>
    <?php get_template_part('partials/menu', 'primary'); ?>
</header>
<main id="main" class="site-main" role="main">
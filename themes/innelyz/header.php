<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div id="page">

	<header class="site-header">
		<div class="site-branding">
			<?php the_custom_logo(); ?>
		</div>

		<nav id="site-navigation" class="main-navigation">
			<?php wp_nav_menu( ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div class="site-content">
		<div class="container">

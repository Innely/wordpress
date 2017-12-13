<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package innelyz
 */

get_header(); ?>

<div class="row">
<div class="col-sm-8">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			/*
			 * Include the post format-specific template for the content. If you want to
			 * use this in a child theme, then include a file called content-___.php
			 * (where ___ is the post format) and that will be used instead.
			 */
			get_template_part( 'template-parts/content-page');

		// End the loop.
		endwhile;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>

<div class="col-sm-4">
	<?php get_sidebar();?>
</div>

</div><!-- row -->
   <?php get_footer(); ?>

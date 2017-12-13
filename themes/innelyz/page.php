<?php
/**
 * The template for displaying all pages
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package innelyz
 */

get_header(); ?>

<div class="row">
<div class="col-sm-12">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<?php
			while ( have_posts() ) : the_post();
				
				get_template_part( 'template-parts/content-single' );

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>


</div><!-- row -->
   <?php get_footer(); ?>

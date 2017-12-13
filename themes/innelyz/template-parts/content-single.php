<?php
/**
 * The template used for displaying single page content
 *
 * @package innelyz
 */
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
      		<?php the_content(); ?>
		<?php the_meta(); ?>
	</div>

</article>

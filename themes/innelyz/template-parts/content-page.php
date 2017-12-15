<?php
/**
 * The template used for displaying page content
 *
 * @package innelyz
 */
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<?php echo(types_render_field( 'photo',  array("resize"=>"crop", "width"=>"200", "height"=>"200") ));?> 
		
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<div><?php echo(types_render_field( 'age' ));?> </div>
		<p><?php echo(types_render_field( 'company' ));?> </p>
		

      		<?php the_content(); ?>
	</div>

</article>


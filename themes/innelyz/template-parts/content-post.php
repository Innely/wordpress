<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package innelyz
 */

?>

<article class="col-sm-6">
	<div class="entry-content">
	  <div class="row">
	    <div class="col-sm-6">
	      <?php echo(types_render_field( 'photo',  array("resize"=>"crop", "width"=>"200", "height"=>"200") ));?>
	    </div>
	    <div class="col-sm-6">
	      <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
	      
	      <div><?php echo(types_render_field( 'age' ));?></div>
	      <p><?php echo(types_render_field( 'company' ));?></p>

	      <?php the_excerpt(); ?>
	      <?php the_shortlink( 'Читать статью полностью' ); ?>
	    </div>
	  </div>
	</div>
</article>

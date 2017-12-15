<?php
/**
 * Footer
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package innelyz
 */
?>

		</div><!-- #content -->
	</div><!-- #page -->

	<footer class="site-footer">
	<div class="container">

            <div class="footer-contat-form">
		<?php echo do_shortcode( '[contact-form-7 id="66" title="Horizontal"]' ); ?>
	    </div>

            <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'innelyz' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'innelyz' ), 'WordPress' );
			?></a>.
	
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'innelyz' ), 'innelyz', 'Inna Lazarenko' );
			?>
		</div>
	</footer><!-- .site-footer -->

<?php wp_footer(); ?>

</body>
</html>

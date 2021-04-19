<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vintage-catalogue
 */

?>

	<footer class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'vintage-catalogue' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Powered by %s', 'vintage-catalogue' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				&copy; 2021 Sue's Garden
		</div><!-- .site-info -->
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

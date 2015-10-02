<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ann_Adores
 */

?>
	</main>

	<footer id="colophon" class="site-footer footer-hoofd">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'ann-adores' ) ); ?>"><?php printf( esc_html__( 'Mogelijk gemaakt door %s', 'ann-adores' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Thema door %2$s', 'ann-adores' ), 'ann-adores', '<a href="http://marcelvanderhoek.nl">Marcel van der Hoek</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div>

<?php wp_footer(); ?>

</body>
</html>
<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package lightdesignsystems
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'lightdesignsystems' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'lightdesignsystems' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'lightdesignsystems' ), 'lightdesignsystems', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<script type='text/javascript' src='/wp-content/themes/lightdesignsystems/js/vendor/respond.js'></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/wp-content/themes/lightdesignsystems/js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

<?php wp_footer(); ?>

</body>
</html>

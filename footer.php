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
		<div class="container">
			<div class="row">
				<div class="wrapper col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="top-row row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

							<nav id="site-navigation" class="main-navigation" role="navigation">
								<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php _e( 'Primary Menu', 'lightdesignsystems' ); ?></button>
								<?php wp_nav_menu( array( 'menu' => 25, 'menu_id' => 'footer-menu' ) ); ?>
							</nav>
						</div>
					</div>		

					<div class="bottom-row row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<p class="site-info">
								Copyright <?php bloginfo('name');?> <?php echo date('Y'); ?>
							</p><!-- .site-info -->
						</div>
					</div>		
				</div>
			</div>		
		</div>	
	</footer><!-- #colophon -->
</div><!-- #page -->

<script type='text/javascript' src='/wp-content/themes/lightdesignsystems/js/vendor/respond.js'></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/wp-content/themes/lightdesignsystems/js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

<?php wp_footer(); ?>

</body>
</html>

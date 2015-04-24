<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package lightdesignsystems
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
<!--[if lte IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'lightdesignsystems' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php echo get_template_directory_uri();?>/img/logo.jpg" alt="<?php bloginfo('name');?>"/>
					</a>
				</div>

				<div class="wrapper col-lg-10 col-md-10 col-sm-12 col-xs-12">
					<div class="top-row row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<h1><?php bloginfo('name');?></h1>
							<div class="contact">
								<div class="lds-phone">
									<span>Call Us Toll Free!</span><br/>
									<?php the_field('toll-free_number', 'option'); ?>
								</div>	
								<div class="lds-email">
									<span>Or Email Us At</span><br/>
									<?php the_field('email', 'option'); ?>
								</div>	
							</div>	
						</div>
					</div>
					<div class="bottom-row row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							
							<nav id="site-navigation" class="main-navigation" role="navigation">
								<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php _e( 'Primary Menu', 'lightdesignsystems' ); ?></button>
								<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
							</nav>

						</div>
					</div>
				</div>
			</div>

		</div>	
	</header><!-- #masthead -->

	<div id="content" class="site-content">

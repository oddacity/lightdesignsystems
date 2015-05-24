<?php
/**
 * Template Name: Sitemap
 *
 *
 * @package lightdesignsystems
 */

get_header();
the_post(); ?>

<div class="sitemap">

	<div class="container fluid-xl">
		<div class="row">
			<div class="col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
				<h1><?php the_title();?></h1>
			</div>	
		</div>

		<div class="row">
			<div class="left-col col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
				<h2>Products</h2>
				<?php 
					$args = array(
					  'taxonomy'     => 'product-categories',
					  'orderby'      => 'name',
					  'hierarchical' => 1,
					  'title_li'     => '',
					  'hide_empty' 	 => false,
					); 
				?>

				<ul>
					<?php wp_list_categories( $args ); ?>
				</ul>
			</div>
			<div class="right-col col-lg-5 col-lg-offset-0 col-md-5 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
				<h2>Pages</h2>
				<?php 
					$args = array(
					  'orderby'      => 'name',
					  'hierarchical' => 1,
					  'title_li'     => '',
					); 
				?>

				<ul>
					<?php wp_list_pages( $args );?>
				</ul>
			</div>
		</div>
	</div>		

</div>

<?php get_footer(); ?>

<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package lightdesignsystems
 */

get_header(); ?>

<div class="default-page">
	<div class="container fluid-xl">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-sm-offset-0 col-xs-10 col-xs-offset-1">

				<?php while ( have_posts() ) : the_post(); ?>

					<h1><?php the_title();?></h1>
					<?php the_content();?>

				<?php endwhile; // end of the loop. ?>
			
			</div>
		</div>
	</div>	
</div><!-- #primary -->

<?php get_footer(); ?>

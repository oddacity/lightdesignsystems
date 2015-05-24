<?php
/**
 * Template Name: Support & FAQ's
 *
 *
 * @package lightdesignsystems
 */

get_header();
the_post(); ?>

<div class="support">
	<div class="container fluid-xl">

		<div class="row">
			<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-sm-offset-0 col-xs-10 col-xs-offset-1">
				<h1><?php the_title();?></h1>
			</div>	
		</div>

		<div class="row">
			<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-sm-offset-0 col-xs-10 col-xs-offset-1">
				
			<?php if(have_rows('faqs')) : 
				while(have_rows('faqs')) : the_row(); ?>

				<div class="question">
					<h3><?php echo the_sub_field('question');?></h3>
					<p><?php echo the_sub_field('answer');?></p>
				</div>	

			<?php endwhile; 
			endif;?>	

			</div>	
		</div>

	</div>	
</div>

<?php get_footer(); ?>

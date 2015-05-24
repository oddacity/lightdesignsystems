<?php
/**
 * Template Name: Purchase
 *
 *
 * @package lightdesignsystems
 */

get_header();
the_post(); ?>

<div class="contact-us">

	<div class="container-fluid">

		<div class="row">
			<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
				<h1><?php the_title();?></h1>
			</div>	
		</div>

		<div class="row">
			<div class="form-wrapper col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
				<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 7 ); } ?>
			</div>	

			<div class="faq-wrapper col-lg-6 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">	
				<div class="faq-inner">
					<?php if(have_rows('faqs',75)) : 
						while(have_rows('faqs',75)) : the_row(); ?>

						<div class="question">
							<h3><?php echo the_sub_field('question');?></h3>
							<p><?php echo the_sub_field('answer');?></p>
						</div>	

					<?php endwhile; 
					endif;?>
				</div>
			</div>
		</div>

		<div class="row">
			<?php echo get_template_part('template-modules/cta');?>	
		</div>

	</div>
</div>

<?php get_footer(); ?>

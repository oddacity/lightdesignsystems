<?php
/**
 * Single Product
 *
 *
 * @package lightdesignsystems
 */

get_header();
the_post(); ?>

<div class="single-product">
	<div class="container">
		
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
				<h1>
					<?php

						$terms = wp_get_post_terms($post->ID, 'product-categories', array("fields" => "names","order" => "DESC"));
						
							echo "<span class='small'>" . $terms[0] . "</span>";
							echo $terms[1];

					?>
					<span class="title"><?php the_title();?></span>
				</h1>
			</div>	
		</div>

		<div class="row">
			<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
				<img src="<?php echo the_field('product_image');?>" alt="<?php the_title();?>"/>
			</div>
		</div>

		<div class="row">
			<div class="product-details">
				<div class="column col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 col-sm-6 col-xs-12">
					<span class="price"><?php echo the_field('price');?></span>
					<div class="btn-wrap">
						<a href="/purchase" class="btn btn-blue">Purchase Kit ></a>
						<a href="/contact" class="btn btn-blue">Contact Us ></a>
					</div>	
				</div>
				<div class="column col-lg-2 col-md-2 col-sm-6 col-xs-12">
					<a class="download" href="<?php echo the_field('presentational_image_pdf');?>" target="_blank">Presentational Image<br/>Click here for full PDF</a>
					<a class="image" href="<?php echo the_field('presentational_image');?>" target="_blank"><img src='<?php echo the_field('presentational_image');?>' alt='<?php the_title(); ?>'/><span class="overlay">Click Here For<br/>Full Size Image</span></a>
				</div>
				<div class="column col-lg-2 col-md-2 col-sm-6 col-xs-12">
					<a class="download" href="<?php echo the_field('parts_list_image_pdf');?>" target="_blank">Product Parts List<br/>Click here for full PDF</a>
					<a class="image" href="<?php echo the_field('parts_list_image');?>" target="_blank"><img src='<?php echo the_field('parts_list_image');?>' alt='<?php the_title(); ?>'/><span class="overlay">Click Here For<br/>Full Size Image</span></a>
				</div>
				<div class="column col-lg-2 col-md-2 col-sm-6 col-xs-12">
					<a class="download" href="<?php echo the_field('dimensional_top_view_image_pdf');?>" target="_blank">Dimensional Top View<br/>Click here for full PDF</a>
					<a class="image" href="<?php echo the_field('dimensional_top_view_image');?>" target="_blank"><img src='<?php echo the_field('dimensional_top_view_image');?>' alt='<?php the_title(); ?>'/><span class="overlay">Click Here For<br/>Full Size Image</span></a>
				</div>
				<div class="column col-lg-2 col-md-2 col-sm-6 col-xs-12">
					<a class="download" href="<?php echo the_field('dimensional_side_view_image_pdf');?>" target="_blank">Dimensional Side View<br/>Click here for full PDF</a>
					<a class="image" href="<?php echo the_field('dimensional_side_view_image');?>" target="_blank"><img src='<?php echo the_field('dimensional_side_view_image');?>' alt='<?php the_title(); ?>'/><span class="overlay">Click Here For<br/>Full Size Image</span></a>
				</div>
			</div>	
		</div>

	</div>

	<div class="product-specs">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-lg-offset-1 col-md-6 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
					<h2 class="center">Exploded Animation & Walk Around</h2>
					<?php echo the_field('video_embed');?>
				</div>
				<div class="specifications col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
					
					<b><?php echo the_field('specifications_title');?></b>
					<?php if (have_rows('parts_list')) : ?>
						<br/><br/>
						<b>Parts List</b><br/>
						<ul>
							<?php while (have_rows('parts_list')) : the_row(); 
								
								echo "<li>";
								echo the_sub_field('part');
								echo "</li>";

							endwhile; ?>
						</ul>	
					<?php endif;?>	

					<?php if (have_rows('optional_accessories')) : ?>
						<br/>
						<b>Optional Accessories</b><br/>
						<ul>
							<?php while (have_rows('optional_accessories')) : the_row(); 
								
								echo "<li>";
								echo the_sub_field('accessory');
								echo "</li>";

							endwhile; ?>
						</ul>	
					<?php endif;?>	

					<?php if (have_rows('similar_designs')) : ?>
						<br/>
						<b>Similar Designs</b><br/>
						<span class="similar">
							<?php while (have_rows('similar_designs')) : the_row();

								$product = get_sub_field('product_link');

								echo "<a href='". get_permalink($product->ID) ."'>> ". $product->post_title ."</a>";

							endwhile; ?>
						</span>	
					<?php endif;?>	

				</div>
			</div>
			
			<div class="row">
				<div class="summary col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
					<p class="center"><?php echo the_field('summary');?></p>
				</div>
			</div>	

		</div>

		<div class="container-fluid">
			<div class="row">
				<h2 class="truss"><span>Recently Viewed Items</span></h2>
			</div>

			<div class="row">
				<?php echo get_template_part('template-modules/cta');?>	
			</div>
		</div>
	</div>

</div>

<?php get_footer(); ?>

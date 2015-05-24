<?php
/**
 * Single Product
 *
 *
 * @package lightdesignsystems
 */

get_header();
the_post(); 
if (get_post_type( $post->ID ) == 'products' ) :
	update_post_meta( $post->ID, '_last_viewed', current_time('mysql') );
endif;
?>

<div class="single-product">
	<div class="container fluid-xl">
		
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-sm-offset-0 col-xs-10 col-xs-offset-1">
				<h1>
					<?php

						$terms = wp_get_post_terms($post->ID, 'product-categories', array("fields" => "names","order" => "DESC"));
						
							echo "<span class='small'>" . $terms[0] . "</span>";
							echo $terms[1];

					?>
					<span id="kit-title" class="title"><?php the_title();?></span>
				</h1>
				<?php if(get_field('product_intro')) : ?>
					<p><?php echo the_field('product_intro');?></p>
				<?php endif;?>	
			</div>	
		</div>

		<div class="row">
			<div class="product-image col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-sm-offset-0 col-xs-10 col-xs-offset-1">
				<?php if(get_field('4k_product_image')) : ?>
					<div class="ribbon"><a href="<?php echo the_field('4k_product_image');?>" target="_blank">Download 4K Image</a></div>
				<?php endif;?>
				<img src="<?php echo the_field('product_image');?>" alt="<?php the_title();?>"/>
			</div>
		</div>

		<div class="row">
			<div class="product-details">
				<div class="column col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 col-sm-12 col-sm-offset-0 col-xs-10 col-xs-offset-1">
					<span class="price"><?php echo the_field('price');?></span>
					<div class="btn-wrap">
						<a id="purchase-btn" href="#" class="btn btn-blue">Purchase Kit <i class="fa fa-chevron-right"></i></a>
						<a href="/contact" class="btn btn-blue">Contact Us <i class="fa fa-chevron-right"></i></a>
					</div>	
				</div>
				<div class="column col-lg-2 col-lg-offset-0 col-md-2 col-md-offset-0 col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1">
					<a class="download" href="<?php echo the_field('presentational_image_pdf');?>" target="_blank">Presentational Image<br/>Click here for PDF</a>
					<a class="image lazy" href="<?php echo the_field('presentational_image');?>" target="_blank" data-original="<?php echo the_field('presentational_image');?>"><span class="overlay">Click Here For Full Size Image</span></a>
				</div>
				<div class="column col-lg-2 col-lg-offset-0 col-md-2 col-md-offset-0 col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1">
					<a class="download" href="<?php echo the_field('parts_list_image_pdf');?>" target="_blank">Product Parts List<br/>Click here for PDF</a>
					<a class="image lazy" href="<?php echo the_field('parts_list_image');?>" target="_blank" data-original="<?php echo the_field('parts_list_image');?>"><span class="overlay">Click Here For Full Size Image</span></a>
				</div>
				<div class="column col-lg-2 col-lg-offset-0 col-md-2 col-md-offset-0 col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1">
					<a class="download" href="<?php echo the_field('dimensional_top_view_image_pdf');?>" target="_blank">Dimensional Top View<br/>Click here for PDF</a>
					<a class="image lazy" href="<?php echo the_field('dimensional_top_view_image');?>" target="_blank" data-original="<?php echo the_field('dimensional_top_view_image');?>"><span class="overlay">Click Here For Full Size Image</span></a>
				</div>
				<div class="column col-lg-2 col-lg-offset-0 col-md-2 col-md-offset-0 col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1">
					<a class="download" href="<?php echo the_field('dimensional_side_view_image_pdf');?>" target="_blank">Dimensional Side View<br/>Click here for PDF</a>
					<a class="image lazy" href="<?php echo the_field('dimensional_side_view_image');?>" target="_blank" data-original="<?php echo the_field('dimensional_side_view_image');?>"><span class="overlay">Click Here For Full Size Image</span></a>
				</div>
			</div>	
		</div>

	</div>

	<div class="product-specs">
		<div class="container fluid-xl">
			<div class="row">
				<div class="col-lg-6 col-lg-offset-1 col-md-6 col-md-offset-1 col-sm-12 col-sm-offset-0 col-xs-10 col-xs-offset-1">
					<h2 class="center">Exploded Animation & Walk Around</h2>
					<?php echo the_field('video_embed');?>
				</div>
				<div class="specifications col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-10 col-xs-offset-1">
					
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
				<div class="summary col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-sm-offset-0 col-xs-10 col-xs-offset-1">
					<p class="center"><?php echo the_field('summary');?></p>
				</div>
			</div>	

		</div>

		<div class="container-fluid">
			<div class="row">
				<h2 class="truss"><span>Recently Viewed</span></h2>
				<div class="col-lg-10 col-lg-offset-1 col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
					<?php
					$args = array(
					    'post_type' => 'products',
					    'posts_per_page' => 5,
					    'meta_key' => '_last_viewed',
					    'orderby' => 'meta_value',
					    'order' => 'DESC'
					);
					$items = get_posts( $args ); ?>

					<?php foreach($items as $item) :

						$item_id = $item->ID;
						$item_title = $item->post_title;
						$item_image = get_field('product_image', $item);
						$item_permalink = get_permalink($item_id);

						get_template_part( 'template-modules/product-item' );

					endforeach;?>	
				</div>
			</div>

			<div class="row">
				<?php echo get_template_part('template-modules/cta');?>	
			</div>
		</div>
	</div>

</div>

<?php get_footer(); ?>

<?php
/**
 * Template Name: Photo Gallery
 *
 *
 * @package lightdesignsystems
 */

get_header();
the_post(); ?>

<div class="photo-gallery">

	<div class="container-fluid">

		<div class="row">
			<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
				<h1><?php the_title();?></h1>
			</div>	
		</div>

		<div class="row">
			<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
				<?php 

				if( get_query_var('page') ) {
				  $page = get_query_var( 'page' );
				} else {
				  $page = 1;
				}

				$row              = 0;
				$images_per_page  = 12; // How many images to display on each page
				$images           = get_field( 'gallery_item' );
				$total            = count( $images );
				$pages            = ceil( $total / $images_per_page );
				$min              = ( ( $page * $images_per_page ) - $images_per_page ) + 1;
				$max              = ( $min + $images_per_page ) - 1;

				if( have_rows( 'gallery_item' ) ) : ?>
					<div class="row">
						
						<?php while( have_rows( 'gallery_item' ) ): the_row();

							$row++;

							// Ignore this image if $row is lower than $min
							if($row < $min) { continue; }

							// Stop loop completely if $row is higher than $max
							if($row > $max) { break; } ?>                     

							<?php $img_obj = get_sub_field( 'photo' ); ?>
							<div class="gallery-img-wrapper col-lg-3 col-md-3 col-sm-4 col-xs-6">	
								<a href="<?php echo $img_obj['url']; ?>" data-lightbox="lds-photo-gallery" data-title="<?php echo the_sub_field('caption');?>">
								  <img class="gallery-img" src="<?php echo $img_obj['sizes']['thumbnail']; ?>" alt="<?php echo the_sub_field('caption');?>">
								</a>
							</div>	

						<?php endwhile; ?>

						<div class="pagination">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<?php
							// Pagination
							echo paginate_links( array(
								'base' => get_permalink() . '%#%' . '/',
								'format' => '?page=%#%',
								'current' => $page,
								'total' => $pages,
								'prev_text' => __('<i class="fa fa-chevron-left"></i> Previous'),
								'next_text' => __('Next <i class="fa fa-chevron-right"></i>'),
							) ); ?>
							</div>
						</div>	

					</div>	
				<?php endif; ?>
			</div>	
		</div>

	</div>
</div>

<?php get_footer(); ?>

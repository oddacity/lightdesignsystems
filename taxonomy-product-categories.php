<?php
/**
 * The template for displaying Product Category archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package lightdesignsystems
 */

$categoryName = get_queried_object()->name;
$categorySlug = get_queried_object()->slug;
$categoryID = get_queried_object()->term_id; 

get_header(); 

$children = get_terms( 'product-categories', array(
	'parent'    => $categoryID,
	'hide_empty' => false,
	'orderby' => 'ID',
));

?>

	<div class="product-category">
		<div class="container">
			<div class="row">

				<h1><?php echo $categoryName;?></h1>

				<?php 

					if($children) {
					    
					    foreach ($children as $term) : 

			            	$section = $term->name;
			            	$sectionID = $term->term_id;
			            	$section_link = get_term_link($term);
			            	$image = get_field('product_image', $term);

			            	get_template_part( 'template-modules/product-section' );

			        	endforeach;     

					} else {
						$args = array(
							 'posts_per_page' => -1,
							 'post_type' => 'products',
							 'product-categories' => $categorySlug,
							 'post_status' => 'publish'
						);

						$items = get_posts($args);

						foreach ( $items as $item ) {

							$item_id = $item->ID;
							$item_title = $item->post_title;
							$item_image = get_field('product_image', $item);
							$item_permalink = get_permalink($item_id);

							get_template_part( 'template-modules/product-item' );
						}

					}        

				?>
			</div>
		</div>	
	</div>

	<div class="container-fluid">
		<div class="row">
			<?php echo get_template_part('template-modules/cta');?>	
		</div>
	</div>

<?php get_footer(); ?>

<?php
/**
 * Template Name: Homepage
 *
 *
 * @package lightdesignsystems
 */

get_header();
the_post(); ?>

<div class="homepage">
	<div class="container-fluid">
		<div class="row">
			<?php echo get_template_part('template-modules/hero');?>	
		</div>

		<div class="row">
			<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
				<h3 class="center"><?php echo the_field('page_subtitle');?></h3>
				<p class="center"><?php echo $post->post_content;?></p>
			</div>
		</div>

		<div class="row">
			<h2 class="truss"><span>Truss Display Kits</span></h2>
			<div class="category col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
				<div class="row">
					<?php
						foreach ( get_terms('product-categories', array( 'child_of' => 3, 'order' => 'ASC', 'orderby' => 'ID', ) ) as $term) : 
		            	
			            	$section = $term->name;
			            	$sectionID = $term->term_id;

			            	echo "<div class='category-thumb col-lg-2 col-md-3 col-sm-4 col-xs-6'>";
			            	echo "<div class='inner'>";
			            	echo "<h4 class='center'><a href=''>" . $section . "</a></h4>";
			            	echo "<img src='" . get_field('product_image',$term) . "' alt='" . $section . "'/>";
			            	echo "<a href='" . get_term_link($term) . "' class='btn btn-blue'><span>More </span>Info <i class='fa fa-chevron-right'></i></a>";
			            	echo "</div>";
			            	echo "</div>";

		        		endforeach; 
		        	?>
		        	<br/>
		        	<p><?php echo term_description('3','product-categories');?></p>
		        </div>	
			</div>
		</div>

		<div class="row">
			<h2 class="truss"><span>Aluminum Truss</span></h2>
			<div class="category col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
				<div class="row">
					<?php
						foreach ( get_terms('product-categories', array( 'child_of' => 2, 'order' => 'ASC', 'orderby' => 'ID', ) ) as $term) : 
		            	
			            	$section = $term->name;
			            	$sectionID = $term->term_id;

			            	echo "<div class='category-thumb col-lg-2 col-md-3 col-sm-4 col-xs-6'>";
			            	echo "<div class='inner'>";
			            	echo "<h4 class='center'><a href=''>" . $section . "</a></h4>";
			            	echo "<img src='" . get_field('product_image',$term) . "' alt='" . $section . "'/>";
			            	echo "<a href='" . get_term_link($term) . "' class='btn btn-blue'><span>More </span>Info <i class='fa fa-chevron-right'></i></a>";
			            	echo "</div>";
			            	echo "</div>";

		        		endforeach; 
		        	?>
		        	<br/>
		        	<p><?php echo term_description('2','product-categories');?></p>
		        </div>	
			</div>
		</div>

		<div class="row">
			<h2 class="truss"><span>Accessories & Hardware</span></h2>
			<div class="category col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
				<div class="row">
					<?php
						foreach ( get_terms('product-categories', array( 'child_of' => 4, 'order' => 'ASC', 'orderby' => 'ID', ) ) as $term) : 
		            	
			            	$section = $term->name;
			            	$sectionID = $term->term_id;

			            	echo "<div class='category-thumb col-lg-2 col-md-3 col-sm-4 col-xs-6'>";
			            	echo "<div class='inner'>";
			            	echo "<h4 class='center'><a href=''>" . $section . "</a></h4>";
			            	echo "<img src='" . get_field('product_image',$term) . "' alt='" . $section . "'/>";
			            	echo "<a href='" . get_term_link($term) . "' class='btn btn-blue'><span>More </span>Info <i class='fa fa-chevron-right'></i></a>";
			            	echo "</div>";
			            	echo "</div>";

		        		endforeach; 
		        	?>
		        	<br/>
		        	<p><?php echo term_description('4','product-categories');?></p>
		        </div>	
			</div>
		</div>
		
		<div class="row">
			<span class="divider-truss"></span>
			<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
				<h2 class="center">The Right Stuff</h2>
				<p class="center"><?php echo the_field('the_right_stuff');?></p>
			</div>
		</div>

		<div class="row">
			<?php echo get_template_part('template-modules/cta');?>	
		</div>
	</div>	
</div>

<?php get_footer(); ?>

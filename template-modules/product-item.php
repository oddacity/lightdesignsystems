<?php
/**
 *
 * Module: Product Item
 *
 */
global $item_title;
global $item_image;
global $item_permalink;

?>

<div class="category-thumb col-lg-2 col-md-2 col-sm-4 col-xs-6">
	<div class="inner">
		<h4 class="center"><a href=""><?php echo $item_title; ?></a></h4>
		<img src='<?php echo $item_image; ?>' alt="<?php echo $item_title; ?>"/>
		<a href="<?php echo $item_permalink;?>" class="btn btn-blue"><span>More </span>Info <i class='fa fa-chevron-right'></i></a>
	</div>
</div>	
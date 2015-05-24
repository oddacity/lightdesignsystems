<?php
/**
 *
 * Module: Product Section
 *
 */
global $section;
global $sectionID;
global $section_link;
global $image;

?>

<div class="category-thumb col-lg-2 col-md-2 col-sm-4 col-xs-6">
	<div class="inner">
		<h4 class="center"><a href=""><?php echo $section; ?></a></h4>
		<img src='<?php echo $image; ?>' alt="<?php echo $section; ?>"/>
		<a href="<?php echo $section_link;?>" class="btn btn-blue"><span>More </span>Info <i class='fa fa-chevron-right'></i></a>
	</div>
</div>	
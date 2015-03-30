<?php if(has_post_thumbnail()): ?>
	<?php list($src,$w,$h) = wp_get_attachment_image_src(get_post_thumbnail_id(),'thumbnail'); ?>
<?php
else: 
$src = get_template_directory_uri().'/images/no-image.jpg';
endif;
?>
<li class="small-12 medium-3 large-12 columns">
		<div class="row">
		<div class="small-4 medium-12 large-4 columns hide-for-large-only"><figure><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><img src="<?php echo $src ?>" /></a></figure></div>
		<div class="small-8 medium-12 xlarge-8 columns"><h5><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h5><p><?php echo get_excerpt($post,100) ?></p></div></div>
	</li>
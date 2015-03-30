<article class="small-6 medium-3 large-6 columns">
		<?php if(has_post_thumbnail()): ?>
	<?php list($src,$w,$h) = wp_get_attachment_image_src(get_post_thumbnail_id(),'thumbnail'); ?>
<?php
else: 
$src = get_template_directory_uri().'/images/no-image.jpg';
endif;
?>
	<a href="<?php the_permalink() ?>">
<figure><img src="<?php echo $src; ?>" /></figure>
<h5><a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_title() ?></a></h5>
</a>
</article>
<div class="small-12 medium-4 columns">
	<?php if(has_post_thumbnail()): ?>
	<?php list($src,$w,$h) = wp_get_attachment_image_src(get_post_thumbnail_id(),'thumbnail'); ?>
<?php
else: 
$src = get_template_directory_uri().'/images/no-image.jpg';
endif;
?>
<article class="post" role="article"><figure><a href="<?php the_permalink() ?>"><img src="<?php echo $src ?>" /></a></figure><header><p class="category"><small><?php the_tags('',', ') ?></small></p><h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3><p class="author">By <?php the_author_link( get_the_author_meta( 'ID' )) ?></p></header><?php the_excerpt() ?><footer><time datetime="<?php the_time('Y-m-j') ?>"><?php the_time(__( 'F j, Y, H:i A e' )) ?></time></footer></article>
</div>
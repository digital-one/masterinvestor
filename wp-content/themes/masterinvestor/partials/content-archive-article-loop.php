<article <?php post_class(); ?> role="article">
<div class="row">
	<?php if(has_post_thumbnail()): ?>
	<?php list($src,$w,$h) = wp_get_attachment_image_src(get_post_thumbnail_id(),'thumbnail'); ?>
<?php
else: 
$src = get_template_directory_uri().'/images/no-image.jpg';
endif;
?>
<div class="medium-3 columns"><figure><a href="<?php the_permalink() ?>"><img src="<?php echo $src ?>" /></a></figure></div>
<div class="medium-9 columns"><header><h2><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title() ?></a></h2>
	<p><span class="author">By <?php the_author_link( get_the_author_meta( 'ID' )) ?></span></p>
</header>
<?php the_excerpt(); ?>
<footer><time datetime="<?php the_time('Y-m-j') ?>"><?php the_time(__( 'F j, Y, H:i A e' )) ?></time></footer>
</div>
</div>
</article>
<?php //if($count!=$num_posts): ?>
<div class="division"></div>
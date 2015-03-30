<!--slide-->
<?php if(has_post_thumbnail()): ?>
	<?php list($src,$w,$h) = wp_get_attachment_image_src(get_post_thumbnail_id(),'image'); ?>
<?php
else: 
$src = get_template_directory_uri().'/images/no-image-bg.jpg';
endif;
?>
<div class="slide">
  <div class="row">
    <div class="small-12 large-6 xlarge-4 columns">
    	<header class="section-header">
<h2 class="sub-head">Feature</h2>
</header>
<h3><a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_title() ?></a></h3>
<p class="author">By <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' )); ?>"><?php the_author_link( get_the_author_meta( 'ID' )) ?></a></p>
<?php the_excerpt() ?>
</div>
<div class="small-12  large-6 xlarge-8 columns"><figure><a href="<?php the_permalink() ?>" class="image-wrap" style="background-image:url('<?php echo $src ?>');"></a></figure></div>
</div>
</div>
<!--/slide-->
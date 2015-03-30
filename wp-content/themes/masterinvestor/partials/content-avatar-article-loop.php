<div class="small-12 medium-6 large-4 columns">
	<?php
	$id = get_the_author_meta( 'user_profile_image');
	list($avatar,$w,$h) = wp_get_attachment_image_src($id,'profile_image')
	?>
<article class="post" role="article"><header class="avatar-header"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' )); ?>" class="avatar"><img src="<?php echo $avatar ?>" /></a><h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3><p class="author">By <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' )); ?>"><?php the_author_link( get_the_author_meta( 'ID' )) ?></a></p></header><?php the_excerpt() ?><footer><time datetime="<?php the_time('Y-m-j') ?>"><?php the_time(__( 'F j, Y, H:i A e' )) ?></time></footer></article>
</div>
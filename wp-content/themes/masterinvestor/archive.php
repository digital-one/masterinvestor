<?php get_header() ?>
<main id="main" class="category">
<div class="row">
	<div class="large-9 columns">
	<?php if (is_category()): ?>
	<h1><?php single_cat_title(); ?></h1>
<?php elseif (is_tag()): ?>
	<h1><?php single_tag_title(); ?></h1>
<?php elseif (is_day()): ?>
	<h1><?php the_time('l, F j, Y'); ?></h1>
<?php elseif (is_month()): ?>	
	<h1><?php the_time('F Y'); ?></h1>
<?php elseif (is_year()): ?>
	<h1><?php the_time('Y'); ?></h1>
<?php endif ?>
		<?php if (have_posts()) :
					$count=1;
					$num_posts = count($posts);
				while (have_posts()):
					the_post(); ?>
			
<article <?php post_class(); ?> role="article">
<div class="row">
	<?php if(has_post_thumbnail()): ?>
	<?php list($src,$w,$h) = wp_get_attachment_image_src(get_post_thumbnail_id(),'thumbnail'); ?>
<?php
else: 
$src = get_template_directory_uri().'/images/no-image.jpg';
endif;
?>
<div class="large-3 columns"><figure><a href="<?php the_permalink() ?>"><img src="<?php echo $src ?>" /></a></figure></div>
<div class="large-9 columns"><header><h2><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title() ?></a></h2>
	<p><span class="author">By <?php the_author_link( get_the_author_meta( 'ID' )) ?></span></p>
</header>
<?php the_excerpt(); ?>
<footer><time datetime="<?php the_time('Y-m-j') ?>"><?php the_time(__( 'F j, Y, H:i A e' )) ?></time></footer>
</div>
</div>
</article>
<?php if($count!=$num_posts): ?>
<div class="division"></div>
<?php endif ?>
<?php $count++ ?>
<?php endwhile ?>
<?php else: ?>
	<article role="article">
<div class="row">
	<div class="large-12 columns">
<header><h2><?php _e( 'Nothing Found!' ); ?></header>
	</div>
</div>
	</article>
<?php endif ?>


<footer></footer>
</div>
<aside class="large-3 columns">
	<nav class="social"><div><span>FOLLOW US</span><ul><li><a href="" class="twitter">Twitter</a></li><li><a href="">Facebook</a></li><li><a href="" class="linkedin">Linkedin</a></li><li><a href="" class="vimeo">Vimeo</a></li></ul></div></nav>
<section class="latest-edition">
	<a href="">
<header><h3>View the Latest Edition out now!</h3></header>
<main><div class="flash">Available to view on all mobile devices</div><img src="<?php echo get_template_directory_uri(); ?>/images/devices.png" /></main>
</a>
</section>
<section class="archive-menu tint">
	<div class="large-12 columns">
<nav class="equities">
<header><h4>Equities</h4></header>
<ul>
	<li class="row"><div class="large-4 columns"><figure class="ratio-16-9"><a href="">image</a></figure></div><div class="large-8 columns"><h5><a href="">Dealing with a social media storm</a></h5><p>There is no definitive answer as to whether two or four screens are needed or that a laptop or a tablet is all you need to have.</p></div></li>
	<li class="row"><div class="large-4 columns"><figure class="ratio-16-9"><a href="">image</a></figure></div><div class="large-8 columns"><h5><a href="">Dealing with a social media storm</a></h5><p>There is no definitive answer as to whether two or four screens are needed or that a laptop or a tablet is all you need to have.</p></div></li>
</ul>
<footer><a href="">More Equities</a></footer>
</nav>
<nav class="evil-diaries">
<header><h4>The Evil Diaries</h4></header>
<ul>
	<li class="row"><div class="large-4 columns"><figure class="ratio-16-9"><a href="">image</a></figure></div><div class="large-8 columns"><h5><a href="">Dealing with a social media storm</a></h5><p>There is no definitive answer as to whether two or four screens are needed or that a laptop or a tablet is all you need to have.</p></div></li>
	<li class="row"><div class="large-4 columns"><figure class="ratio-16-9"><a href="">image</a></figure></div><div class="large-8 columns"><h5><a href="">Dealing with a social media storm</a></h5><p>There is no definitive answer as to whether two or four screens are needed or that a laptop or a tablet is all you need to have.</p></div></li>
</ul>
<footer><a href="">More Equities</a></footer>
</nav>
</div>
</section>

</aside>
</div>
</main>
<?php get_footer() ?> 
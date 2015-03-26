<?php get_header() ?>
<main id="main" class="category">

<div class="row">
<div class="large-9 columns">
<?php get_template_part( 'partials/content', 'breadcrumb' ); ?>

<article <?php post_class(); ?> role="article">
	<?php while (have_posts()) : the_post(); ?>
<header>
<h1><?php the_title() ?></h1>
<p><span class="author">By <?php the_author_link( get_the_author_meta( 'ID' )) ?></span> <time datetime="<?php the_time('Y-m-j') ?>"><?php the_time(__( 'F j, Y, H:i A e' )) ?></time></p>
</header>
<?php if(has_post_thumbnail()): ?>
	<?php list($src,$w,$h) = wp_get_attachment_image_src(get_post_thumbnail_id(),'image'); ?>
	<figure>
		<img src="<?php echo $src ?>" />
	</figure>
<?php endif ?>
<?php the_content(); ?>

<?php endwhile ?>
<footer><!-- Go to www.addthis.com/dashboard to customize your tools -->
<div class="addthis_native_toolbox"></div></footer>
</article>


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
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
<?php get_sidebar() ?>
</div>
</main>
<?php get_footer() ?> 
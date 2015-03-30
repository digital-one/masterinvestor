<?php get_header() ?>
<main id="main" class="category">
<div class="row">
	<div class="large-9 columns">
	<h1>Search Results</h1>
		<?php if (have_posts()) :
					$count=1;
					$num_posts = count($posts);
				while (have_posts()):
					the_post(); ?>
	<?php get_template_part('partials/content','archive-article-loop' ); ?>
<?php $count++ ?>
<?php endwhile ?>
<?php else: ?>
	<article role="article">
<div class="row">
	<div class="large-12 columns">
<header><h2><?php _e( 'No articles found. Try searching again.' ); ?></header>
	</div>
</div>
	</article>
<?php endif ?>
<footer></footer>
</div>
<?php get_sidebar() ?>
</div>
</main>
<?php get_footer() ?> 
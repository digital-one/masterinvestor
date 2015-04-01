<?php get_header() ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<main id="main">
<div class="row">
	<div class="small-12 large-8 xlarge-9 columns">
		<div class="inner-wrap">
	<?php the_content() ?>
</div>
	</div>
<?php get_sidebar('contact') ?>
</div>
</main>
<?php endwhile ?>
<?php endif ?>
<?php get_footer() ?>
<?php /* Template Name: Contact */ ?>
<?php get_header() ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<main id="main">
<div class="row">
	<div class="small-12 large-8 xlarge-9 columns">
		<h1>Get in touch</h1>
		<p>If you would like to contact us about any aspect of Master Investor Magazine, 
please complete the form below or call us on the number to the right.</p>
<p>We welcome feedback on our publication.</p>
<?php gravity_form(2, false, false, false, '', true, 1);  ?>
	</div>
<?php get_sidebar('contact') ?>
</div>
<div id="map">
	map
</div>
</main>
<?php endwhile ?>
<?php endif ?>
<?php get_footer() ?>
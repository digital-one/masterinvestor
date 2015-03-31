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
<aside class="small-12 large-4 xlarge-3 columns">
<section class="contacts">
	<h2>Contact Us</h2>
<p class="address">
Burnbrae Media<br />
4th Floor<br />
101 Finsbury Pavement<br />
London, EC2A 1RS<br />
<a href="">Get Directions</a>
</p>
<p class="email"><a href="mailto:info@masterinvestormagazine.com">info@masterinvestormagazine.com</a></p>
<p class="phone"><a href="tel:">+44 (0) 113 242 0131</a></p>
</section>
<section class="subscribe">
	<h2>Subscribe for free</h2>
<?php gravity_form(3, false, false, false, '', true, 1);  ?>

	</section>
</aside>
</div>
<div id="map">
	map
</div>
</main>
<?php endwhile ?>
<?php endif ?>
<?php get_footer() ?>
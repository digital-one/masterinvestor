<footer id="footer">
<div class="row">
	<a href="#" class="anchor-up">Up</a>
<div class="small-12 large-4 columns">
	<section id="most-popular">
	<div class="column-inner">
<h4>Most Popular</h4>
<div class="row">
<article class="small-6 medium-3 large-6 columns">
	<a href="#">
<figure class="ratio-16-9"></figure>
<h5>How BuzzFeed is Taking Over the World</h5>
</a>
</article>
<article class="small-6 medium-3 large-6 columns">
	<a href="#">
<figure class="ratio-16-9"></figure>
<h5>How BuzzFeed is Taking Over the World</h5>
</a>
</article>
<article class="small-6 medium-3 large-6 columns">
	<a href="#">
<figure class="ratio-16-9"></figure>
<h5>How BuzzFeed is Taking Over the World</h5>
</a>
</article>
<article class="small-6 medium-3 large-6 columns">
	<a href="#">
<figure class="ratio-16-9"></figure>
<h5>How BuzzFeed is Taking Over the World</h5>
</a>
</article>
	</div>
</div>
</section>
</div>
<div class="medium-3 large-2 columns">
	<div class="column-inner">
		<section id="sections">
<h4>Sections</h4>
<nav id="footer-menu">
	<?php
  wp_nav_menu( array(
        'menu'=>'Footer Menu',
        'container' => false, 
        'fallback_cb' => 'wp_page_menu'//,
        //'walker' => new subMenu()
        //'menu_class' => 'inline',
        //'link_after' => '<span></span>'
        )
    );
    ?></nav>
</section>
</div>
	</div>
	<div class="medium-3 columns">
		<div class="column-inner">
			<section id="social">
<h4>Social</h4>
<nav class="social"><ul><li><a href="" class="twitter">Twitter</a></li><li><a href="" class="facebook">Facebook</a></li><li><a href="" class="linkedin">Linkedin</a></li><li><a href="" class="vimeo">Vimeo</a></li></ul></nav>
</section>
<section id="legal">
<h4>Legal</h4>
<ul><li><a href="">Terms and Conditions</a></li>
<li><a href="">Privacy Policy</a></li></ul>
<p>&copy; 2015 MASTER INVESTOR.<br />
 All rights reserved.</p>
</section>
</div>
	</div>
	<div class="medium-6 large-3 columns">
<h4>Subscribe</h4>

<?php gravity_form(1, false, false, false, '', true, 1);  ?>
	</div>

</div>
</footer>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5513089e28128351" async="async"></script>
<?php wp_footer() ?>
</body>
</html>
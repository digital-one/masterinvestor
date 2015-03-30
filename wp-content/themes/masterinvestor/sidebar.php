<aside class="small-12 large-3 columns">
	<nav class="social"><div><span>FOLLOW US</span><ul><li><a href="" class="twitter">Twitter</a></li><li><a href="">Facebook</a></li><li><a href="" class="linkedin">Linkedin</a></li><li><a href="" class="vimeo">Vimeo</a></li></ul></div></nav>
	
<section class="latest-edition show-for-large-up">
	<a href="">
<header><h3>View the Latest Edition out now!</h3></header>
<main><div class="flash">Available to view on all mobile devices</div><img src="<?php echo get_template_directory_uri(); ?>/images/devices.png" /></main>
</a>
</section>

<section class="archive-menu tint">
	<div class="medium-12 columns">

		<?php
			//get all categories not current page

		$args = array(
			'orderby'  => 'menu_order', 
    		'order'    => 'ASC'
    		);
		if (is_category()): 
			$category_id = get_query_var('cat');
			$args['exclude'] = $category_id;
		endif;

		//$terms = get_terms('category', $args); 
		if($terms = get_terms('category', $args)):
			foreach($terms as $term):

	$args=array(
		'post_type' => 'post',
		'post_status' => 'publish',
		'posts_per_page' => 3,
		'tax_query' => array(
            array(
            	'taxonomy' =>'category',
            	'field' => 'slug',
            	'terms' =>  $term->slug
            	)
            ),
		'orderby' => 'date',
		'order' => 'DESC'
		);
	query_posts($args);

		if(have_posts()):
			?>
<nav class="equities">
<header><h4><?php echo $term->name ?></h4></header>
<div class="row">
<ul>
	<?php
			while (have_posts() ) : the_post(); 
			get_template_part('partials/content','sidebar-archive-loop' );
			endwhile;
			?>
</ul>
</div>
<footer><a href="<?php echo get_term_link( $term->slug, 'category' ) ?>">More <?php echo $term->name ?></a></footer>
</nav>
<?php endif ?>
<?php wp_reset_query(); ?>
<?php endforeach ?>
<?php endif ?>
<?php 
/*
<nav class="evil-diaries">
<header><h4>The Evil Diaries</h4></header>
<div class="row">
<ul>
	<li class="small-12 medium-3 large-12 columns">
		<div class="row">
		<div class="small-4 medium-12 large-4 columns hide-for-large-only"><figure class="ratio-16-9"><a href="">image</a></figure></div>
		<div class="small-8 medium-12 xlarge-8 columns"><h5><a href="">Dealing with a social media storm</a></h5><p>There is no definitive answer as to whether two or four screens are needed or that a laptop or a tablet is all you need to have.</p></div></div>
	</li>

	<li class="small-12 medium-3 large-12 columns">
		<div class="row">
		<div class="small-4 medium-12 large-4 columns hide-for-large-only"><figure class="ratio-16-9"><a href="">image</a></figure></div>
		<div class="small-8 medium-12 xlarge-8 columns"><h5><a href="">Dealing with a social media storm</a></h5><p>There is no definitive answer as to whether two or four screens are needed or that a laptop or a tablet is all you need to have.</p></div></div>
	</li>
	<li class="small-12 medium-3 large-12 columns">
		<div class="row">
		<div class="small-4 medium-12 large-4 columns hide-for-large-only"><figure class="ratio-16-9"><a href="">image</a></figure></div>
		<div class="small-8 medium-12 xlarge-8 columns"><h5><a href="">Dealing with a social media storm</a></h5><p>There is no definitive answer as to whether two or four screens are needed or that a laptop or a tablet is all you need to have.</p></div></div>
	</li>
	<li class="small-12 medium-3 large-12 columns">
		<div class="row">
		<div class="small-4 medium-12 large-4 columns hide-for-large-only"><figure class="ratio-16-9"><a href="">image</a></figure></div>
		<div class="small-8 medium-12 xlarge-8 columns"><h5><a href="">Dealing with a social media storm</a></h5><p>There is no definitive answer as to whether two or four screens are needed or that a laptop or a tablet is all you need to have.</p></div></div>
	</li>
</ul>
</div>
<footer><a href="">More Equities</a></footer>
</nav>
*/
?>
</div>
</section>

</aside>
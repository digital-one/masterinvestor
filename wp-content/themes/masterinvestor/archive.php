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
<div class="posts">
	<?php
	$paged = (get_query_var('page')) ? get_query_var('page') : 1;
	
	//$paged = max( 1, get_query_var('paged'));
	$args = array(
             'paged' => $paged,
             'post_status' => 'publish',
             'posts_per_page' => 10,
             'post_type' => 'post',
             'orderby'=>'date',
             'order'=>'DESC'
     );

	if(is_category()):
		$term_id = get_query_var('cat');
		$paging_permalink = get_category_link( $term_id );

		$args = array(
		'paged' => $paged,
        'posts_per_page' => 10,
        'post_status' => 'publish',
        'post_type' => 'post',
        'orderby'=>'date',
        'order'=>'DESC',
		'tax_query' => array(
            array(
            	'taxonomy' =>'category',
            	'field' => 'id',
            	'terms' =>  $term_id
            	)
            )
		);
	
		endif;

	if(is_tag()):
		$tag       = get_queried_object();
    $tag_slug  = $tag->slug;
	$paging_permalink = get_tag_link( $tag_id );
	$args = array(
		'paged' => $paged,
        'posts_per_page' => 10,
        'post_status' => 'publish',
        'post_type' => 'post',
        'tag' => $tag_slug,
        'orderby'=>'date',
        'order'=>'DESC',
		);
	endif;

	query_posts($args);
                ?>
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
<div class="medium-3 columns"><figure><a href="<?php the_permalink() ?>"><img src="<?php echo $src ?>" /></a></figure></div>
<div class="medium-9 columns"><header><h2><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title() ?></a></h2>
	<p><span class="author">By <?php the_author_link( get_the_author_meta( 'ID' )) ?></span></p>
</header>
<?php the_excerpt(); ?>
<footer><time datetime="<?php the_time('Y-m-j') ?>"><?php the_time(__( 'F j, Y, H:i A e' )) ?></time></footer>
</div>
</div>
</article>
<?php //if($count!=$num_posts): ?>
<div class="division"></div>
<?php //endif ?>
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
</div>
<?php
global $wp_query;
$num_pages = $wp_query->max_num_pages;
$next_page = $paged+1;
?>
<footer class="posts-footer"><a href="<?php echo $paging_permalink?>?page=<?php echo $next_page ?>" class="load-posts<?php if($next_page > $num_pages): ?> end<?php endif ?>">Loading</a></footer>
</div>
<?php get_sidebar() ?>
</div>
</main>
<?php get_footer() ?> 
<?php

// Add custom functions
require_once( 'includes/custom-functions.php' ); 


// Add theme support post thumbnails
add_theme_support('post-thumbnails');

// WP menus
add_theme_support( 'menus' );


// Add image sizes
add_image_size( 'thumbnail', 200, 200, true );
add_image_size( 'image', 700, 350, true );


// Change default excerpt
function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'your-text-domain') . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );


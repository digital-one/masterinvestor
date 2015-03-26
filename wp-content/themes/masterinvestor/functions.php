<?php

// Add custom functions
require_once( 'includes/custom-functions.php' ); 


// Add theme support post thumbnails
add_theme_support('post-thumbnails');

// WP menus
add_theme_support( 'menus' );


// Add image sizes
add_image_size( 'thumbnail', 320, 190, true );
add_image_size( 'image', 1200, 1200, false );


// Change default excerpt
function new_excerpt_more( $more ) {
	//return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'your-text-domain') . '</a>';
	return '&hellip;';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

add_filter("gform_confirmation_anchor", create_function("","return false;"));
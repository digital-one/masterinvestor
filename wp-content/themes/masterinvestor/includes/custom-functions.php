<?php

function scripts_and_styles() {
   //only effect front-end of your website
	if (!is_admin() && $_SERVER['SCRIPT_NAME'] != '/wp-login.php') {
	
		
		// respond
		//wp_register_script( 'respondjs', get_stylesheet_directory_uri() . '/library/js/libs/min/respond.min.js', array('jquery'), null, false );
		//wp_enqueue_script( 'respondjs' );
		
		
		// modernizr (without media query polyfill)
		wp_register_script( 'modernizr', get_stylesheet_directory_uri() . '/js/modernizr.js', array(), '2.5.3', false );
		wp_enqueue_script( 'modernizr' );

		
		// register main stylesheet
		wp_register_style( 'stylesheet', get_stylesheet_directory_uri() . '/css/style.css', array(), '', 'all' );
		wp_enqueue_style( 'stylesheet' );
		
		
		//register styles for our theme
		//wp_register_style( 'respgrid', get_template_directory_uri() . '/css/foundation-grid.css', array(), 'all' );
		//wp_enqueue_style( 'respgrid' );
		
		//register selectbox
		//wp_register_script( 'selectbox', get_stylesheet_directory_uri() . '/library/js/libs/jquery.selectBox.js', array(), null, true );
		//wp_enqueue_script( 'selectbox' );	

		
		//register all scripts
		wp_register_script( 'allscripts', get_stylesheet_directory_uri() . '/js/scripts.js', array(), null, true );
		wp_enqueue_script( 'allscripts' );	
		
		
	}
}

// enqueue base scripts and styles
add_action('wp_enqueue_scripts', 'scripts_and_styles', 999);



// enqueue google fonts
function google_fonts() {
  wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Merriweather:400,500,700');
  wp_enqueue_style( 'googleFonts');
}

add_action('wp_print_styles', 'google_fonts');




//Hide Admin Bar
show_admin_bar( false );


/** Register Navigation Menus
 **/

function register_menus() {
	  register_nav_menus(
	    array( 	'main-menu'	   => __( 'Main Menu' ),
	            'footer-menu' => __( 'Footer Menu' )
	   	)
	  );
	}
	
add_action( 'init', 'register_menus' );



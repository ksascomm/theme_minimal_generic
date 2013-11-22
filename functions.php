<?php
function academic_minimalist_theme_support() {
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 125, 125, true );   // default thumb size
	add_theme_support( 'automatic-feed-links' ); // rss thingy
	add_theme_support( 'menus' );            
	register_nav_menus(                      
		array( 
			'main_nav' => 'The Main Menu', 
		)
	);	
}

// Initiate Theme Support
add_action('after_setup_theme','academic_minimalist_theme_support');

?>

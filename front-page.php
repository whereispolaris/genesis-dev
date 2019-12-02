<?php

add_action( 'genesis_meta', 'my_homepage_setup' );
// Add widget support for homepage
function my_homepage_setup() {

	if ( is_active_sidebar( 'front-page-1' ) )  {
		 // Add front page 1 widget
		add_action( 'genesis_after_header', 'display_front_page_1_widget' );

	}
}

// Display front page widgets.
function display_front_page_1_widget() {

	genesis_widget_area( 'front-page-1', array(
		'before' => '<div class="front-page-1-widget"><div class="wrap">',
		'after'  => '</div></div>',
	) );
}

// Remove the custom loop in the homepage
remove_action('genesis_loop', 'my_custom_loop');

// Add a custom loop showing only posts from a single category
add_action('genesis_loop', 'homepage_loop');
function homepage_loop() {

	$args = array(
		'cat' => 2,
	);

	genesis_custom_loop($args);
}

// Load the genesis framework
genesis();


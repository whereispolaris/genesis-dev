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

// Load the genesis framework
genesis();


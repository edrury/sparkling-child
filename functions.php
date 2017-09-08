<?php
//* Code goes here

add_action( 'after_setup_theme', 'sparkling_child_setup', 20 );

function sparkling_child_setup() {
	remove_action( 'wp_head', 'get_sparkling_theme_options', 10 );
}

function sparkling_main_content_bootstrap_classes() {
	if ( is_page_template( 'page-fullwidth.php' ) ) {
		return 'col-sm-12 col-md-12';
	}
	if ( is_page_template( 'simple-page.php' ) ) {
		return 'col-sm-12 col-md-12';
	}
	return 'col-sm-12 col-md-8';
}

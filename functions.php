<?php
//* Code goes here

add_action( 'after_setup_theme', 'sparkling_child_setup', 20 );

function sparkling_child_setup() {
	remove_action( 'wp_head', 'get_sparkling_theme_options', 10 );
}

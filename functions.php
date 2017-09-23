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

function disable_media_comment( $open, $post_id ) {
	if( get_post_type( $post_id ) == 'attachment' ) {
		return false;
	}
	return $open;
}
add_filter( 'comments_open', 'disable_media_comment', 10 , 2 );

function fix_mystickymenu_admin_head() {
	echo '<style>#SnS_styles-tab > .style {display: block;}</style>';
}
add_action( 'admin_head', 'fix_mystickymenu_admin_head' );

file_exists(__DIR__ . '/inc/woocommerce.php') AND require_once( __DIR__ . '/inc/woocommerce.php');
<?php

/**
 * Function Name: Hide admin bar
 * Description: Hide admin bar for non admin users
**/
function hide_admin_bar( $show ) {
	if ( ! current_user_can( 'administrator' ) && ! current_user_can( 'editor' ) ) {
		return false;
	}
	return $show;
}
add_filter( 'show_admin_bar', 'hide_admin_bar' );

/**
 * Function Name: Block WP admin
 * Description: Block WP admin pages for non admin users
**/
function block_wp_admin() {
	if ( is_admin() && ! current_user_can( 'administrator' ) && ! ( defined( 'DOING_AJAX' ) && DOING_AJAX ) && ! current_user_can( 'editor' ) ) {
		wp_safe_redirect( home_url() );
		exit;
	}
}
add_action( 'admin_init', 'block_wp_admin' );
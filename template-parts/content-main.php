<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package generaliceska
 */

	if( !is_front_page() || !is_home() ) {
		generaliceska_post_thumbnail(); 
 	}

	the_content();
?>


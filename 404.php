<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package generaliceska
 */

// show error
get_header();
?>

	<div class="site-content__section grid-col--center">

		<h1 class="heading heading-primary"><?php esc_html_e( 'Error 404', 'generaliceska' ); ?></h1>
		<br>
		<br>
		<br>
		<br>
		<h1 class="heading heading-primary"><?php esc_html_e( 'Stránka nenalezena.', 'generaliceska' ); ?></h1>

	</div><!-- #main -->

<?php
get_footer();
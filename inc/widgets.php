<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function generaliceska_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'generaliceska' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'generaliceska' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s col-md-4">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'generaliceska_widgets_init' );
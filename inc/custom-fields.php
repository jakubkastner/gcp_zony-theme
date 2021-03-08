<?php
/**
 * Add custom  field to general settings
 */

function my_general_section() {
	add_settings_section(
		'my_settings_section', // Section ID
		'Other settings', // Section Title
		'my_section_options_callback', // Callback function
		'general' // Show up on the General Settings Page
	);

	add_settings_field( 'home_heading', 'Homepage heading', 'my_textbox_callback', 'general', 'my_settings_section', array('home_heading' ) );

	register_setting('general','home_heading', 'esc_attr');
}
add_action('admin_init', 'my_general_section');

function my_section_options_callback() { // Section Callback
//echo '<p>Footer Setting</p>';
}

function my_textbox_callback($args) { // Textbox Callback
	$option = get_option($args[0]);
	echo '<input type="text" id="'. $args[0] .'" name="'. $args[0] .'" value="' .      $option . '" class="regular-text"/>';
}

function my_textarea_callback($args) { // Textarea Callback
	$option = get_option($args[0]);
	echo '<textarea id="'. $args[0] .'" name="'. $args[0] .'">' . $option . '</textarea>';
}

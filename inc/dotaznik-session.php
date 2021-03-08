<?php

function register_session() {
	if ( !session_id() ) {
		session_start();
	}
}
add_action('init', 'register_session');


function destroy_session() {
	session_destroy();
}
add_action('wp_logout', 'destroy_session');
add_action('wp_login', 'destroy_session');
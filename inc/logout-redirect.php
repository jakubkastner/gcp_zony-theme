<?php

/**
 * Function Name: auto_redirect_after_logout
 * Description: This redirects log out to home page
**/

function auto_redirect_after_logout() {
    wp_safe_redirect( home_url() );
    exit;
}

add_action('wp_logout','auto_redirect_after_logout');

/**
 * Function Name: front_end_login_fail.
 * Description: This redirects the failed login to the custom login page instead of default login page with a modified url
**/
function front_end_login_fail( $username ) {

    // Getting URL of the login page
    $referrer = $_SERVER['HTTP_REFERER'];    

    // if there's a valid referrer, and it's not the default log-in screen
    if( !empty( $referrer ) && !strstr( $referrer,'wp-login' ) && !strstr( $referrer,'wp-admin' ) ) {
        wp_redirect( get_permalink( 2 ) . "?login=failed" ); 
        exit;
    }
}

add_action( 'wp_login_failed', 'front_end_login_fail' );


/**
 * Function Name: check_username_password.
 * Description: This redirects to the custom login page if user name or password is   empty with a modified url
**/
function check_username_password( $login, $username, $password ) {

    // Getting URL of the login page
    $referrer = $_SERVER['HTTP_REFERER'];

    // if there's a valid referrer, and it's not the default log-in screen
    if( !empty( $referrer ) && !strstr( $referrer,'wp-login' ) && !strstr( $referrer,'wp-admin' ) ) { 
        if( $username == "" || $password == "" ){
            wp_redirect( get_permalink( 2 ) . "?login=empty" );
            exit;
        }
    }
}

add_action( 'authenticate', 'check_username_password', 1, 3);


/**
 * Function Name: hide_default_login_page
 * Description: This redirects to the custom login page if visitor try to access wp-login.php or wp-admin.php
**/
function hide_default_login_page() {
    
    global $pagenow;
    if( $pagenow == "wp-login.php" && $_SERVER['REQUEST_METHOD'] == 'GET') {
        wp_safe_redirect( home_url() );
        exit;
    }
}
   
if( !is_user_logged_in() ){
    add_action('init','hide_default_login_page');
}

/**
 * Function Name: Redirect after login
 * Description: Redirect to homepage and if logged in suer is admin - redirect him to admin page
**/

function remove_parameter_after_login($redirect_to, $request, $user ) {
    
    // Is it an administrator?
    if ( in_array( 'administrator', $user->roles ) )
        return admin_url();
    else 
        return home_url();
}

add_filter('login_redirect', 'remove_parameter_after_login', 10, 3);
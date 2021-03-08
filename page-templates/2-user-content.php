<?php
/**
 * Template name: 2 user content
 * 
 * Display different cotnent for different users
 */

get_header();
?>

<sectio class="site-content__section grid-col--center">

    <?php
        $current_user = wp_get_current_user();
        $currentUserRoles = $current_user->roles;
        foreach ($currentUserRoles as $role) {

            switch ($role) {
                case 'administrator':
                    print( get_field('hpp') );
                    break 2;
                case 'gcp-hpp':
                    print( get_field('hpp') );
                    break 2;
                case 'gcp-dpp':
                    print( get_field('dpp') );
                    break 2;
                case 'gcd-hpp':
                    print( get_field('hpp') );
                    break 2;
                case 'gcd-dpp':
                    print( get_field('dpp') );
                    break 2;
            } 
        }
    ?>

</sectio>

<?php 
get_footer();
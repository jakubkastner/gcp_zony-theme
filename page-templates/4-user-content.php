<?php
/**
 * Template name: 4 user content (spolecnost a uvazek)
 */

get_header();
?>

<section class="site-content__section site-content__section__page grid-col--center">

    <?php
        $current_user = wp_get_current_user();
        $currentUserRoles = $current_user->roles;
        foreach ($currentUserRoles as $role) {

            switch ($role) {
                case 'administrator':
                    print( get_field('gcp-hpp') );
                    break 2;
                case 'gcp-hpp':
                    print( get_field('gcp-hpp') );
                    break 2;
                case 'gcp-dpp':
                    print( get_field('gcp-dpp') );
                    break 2;
                case 'gcd-hpp':
                    print( get_field('gcd-hpp') );
                    break 2;
            }
        }
    ?>

</section>

<?php
get_footer();
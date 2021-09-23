<?php
/**
 * Template name: Rozdělení dle úvazku
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
                    echo '<h1 class="heading heading-primary heading-preview mb-md">NÁHLED: všechny společnosti - HPP</h1>';
                    print( get_field('hpp') );
                    echo '<h1 class="heading heading-primary heading-preview mb-md">NÁHLED: všechny společnosti - DPP</h1>';
                    print( get_field('dpp') );
                    break 2;
                case 'editor':
                    echo '<h1 class="heading heading-primary heading-preview mb-md">NÁHLED: všechny společnosti - HPP</h1>';
                    print( get_field('hpp') );
                    echo '<h1 class="heading heading-primary heading-preview mb-md">NÁHLED: všechny společnosti - DPP</h1>';
                    print( get_field('dpp') );
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

</section>

<?php
get_footer();
<?php
/**
 * Template name: Rozdělení dle společnosti a úvazku
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
                    echo '<h1 class="heading heading-primary heading-preview mb-md">NÁHLED: Generali Česká pojišťovna - HPP</h1>';
                    print( get_field('gcp-hpp') );
                    echo '<h1 class="heading heading-primary heading-preview mb-md">NÁHLED: Generali Česká pojišťovna - DPP</h1>';
                    print( get_field('gcp-dpp') );
                    echo '<h1 class="heading heading-primary heading-preview mb-md">NÁHLED: Generali Česká Distribuce - HPP</h1>';
                    print( get_field('gcd-hpp') );
                    echo '<h1 class="heading heading-primary heading-preview mb-md">NÁHLED: Generali Česká Distribuce - DPP</h1>';
                    print( get_field('gcd-dpp') );
                    break 2;
                case 'editor':
                    echo '<h1 class="heading heading-primary heading-preview mb-md">NÁHLED: Generali Česká pojišťovna - HPP</h1>';
                    print( get_field('gcp-hpp') );
                    echo '<h1 class="heading heading-primary heading-preview mb-md">NÁHLED: Generali Česká pojišťovna - DPP</h1>';
                    print( get_field('gcp-dpp') );
                    echo '<h1 class="heading heading-primary heading-preview mb-md">NÁHLED: Generali Česká Distribuce - HPP</h1>';
                    print( get_field('gcd-hpp') );
                    echo '<h1 class="heading heading-primary heading-preview mb-md">NÁHLED: Generali Česká Distribuce - DPP</h1>';
                    print( get_field('gcd-dpp') );
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
                case 'gcd-dpp':
                    print( get_field('gcd-dpp') );
                    break 2;
            }
        }
    ?>

</section>

<?php
get_footer();
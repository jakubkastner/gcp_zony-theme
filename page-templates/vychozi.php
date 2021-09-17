<?php
/**
 * Template name: Vychozi
 */

get_header();
?>

<section class="site-content__section site-content__section__page grid-col--center">
    <?php
    get_template_part( 'template-parts/content', 'page' );
    ?>
</section>

<?php
get_footer();
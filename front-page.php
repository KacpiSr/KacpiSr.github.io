<?php
/*
*
* Template Name: Strona glowna
*
*/
?>
<?php get_header(); ?>


<?php get_template_part('template-page/home-page/hero') ?>

<div class="bg-change-work-wrap">
    <?php get_template_part('template-page/home-page/logo-swiper')   ?>
    <?php get_template_part('template-page/home-page/work') ?>
</div>

<?php get_template_part('template-page/home-page/sec-services') ?>

<div class="bg-change-clients-wrap">
    <?php get_template_part('template-page/home-page/clients') ?>
    <?php get_template_part('template-page/home-page/clients-brands') ?>
    <?php get_template_part('template-page/home-page/about-us') ?>
    <?php get_template_part('template-page/home-page/awards') ?>
</div>

<?php get_template_part('template-page/home-page/blog') ?>
<?php get_template_part('template-page/home-page/sec-accordion') ?>



<?php
get_footer();

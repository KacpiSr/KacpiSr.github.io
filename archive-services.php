<?php
/*
*
* Template Name: Services
*
*/
?>
<?php get_header(); ?>

<?php $fields_from_services_page = '1631'; ?>
<?php get_template_part('template-page/services/hero', $fields_from_services_page) ?>
<?php get_template_part('template-page/services/categories') ?>
<?php get_template_part('template-page/services/cta') ?>

<?php
get_footer();
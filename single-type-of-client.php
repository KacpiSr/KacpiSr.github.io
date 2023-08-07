<?php

/**
 * Template Name: Type of Clients
 * Template Post Type: case-studies
 */

get_header();

?>

<div class="case-studies case-studies--type-of-client">
<?php get_template_part('template-page/case-studies/hero') ?>
<section class="case-studies-categories">
    <div class="container case-studies-categories__container">
        <ul class="case-studies-categories__items">
            <li class="case-studies-categories__item">
                <a href="/case-studies/">Type Of Work</a>
            </li>
            <li class="case-studies-categories__item case-studies-categories__item--active">
                <a href="/case-studies/type-of-client">Type Of Client</a>
            </li>
            <li class="case-studies-categories__item">
                <a href="/case-studies/all-projects">All Projects</a>
            </li>
        </ul>
    </div>
</section>
<?php get_template_part('template-page/case-studies/slider-type-of-client') ?>
<?php get_template_part('template-page/case-studies/cta-questions') ?>
</div>


<?php
get_footer();
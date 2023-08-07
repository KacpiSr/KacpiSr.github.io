<?php global $fields_from_services_page; ?>

<section class="services-hero">
    <div class="container">
        <div class="row">
            <div class="col-md-8 services-hero__column--left">
                <h1 class="services-hero__heading"><?php the_field('services_hero_heading', $fields_from_services_page); ?>
                </h1>
                <p class="services-hero__description services-hero__description--lead">
                    <?php the_field('services_hero_lead_text', $fields_from_services_page); ?>
                </p>
                <div class="services-hero__description">
                    <?php the_field('services_hero_text', $fields_from_services_page); ?>
                </div>
            </div>
            <div class="col-md-4 services-hero__column--right">
                <?php if (have_rows('services_hero_logos', $fields_from_services_page)) : ?>
                    <?php while (have_rows('services_hero_logos', $fields_from_services_page)) : the_row(); ?>
                        <?php $services_hero_logo = get_sub_field('services_hero_logo', $fields_from_services_page); ?>
                        <?php if ($services_hero_logo) { ?>
                            <div class="services-hero__logos">
                                <img src="<?php echo $services_hero_logo['url']; ?>" alt="<?php echo $services_hero_logo['alt']; ?>" />
                            </div>
                        <?php } ?>
                    <?php endwhile; ?>
                <?php else : ?>
                    <?php // no rows found 
                    ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="services-hero-categories">
                    <h4 class="services-hero-categories__heading">
                        <?php the_field('services_hero_heading2', $fields_from_services_page); ?>
                    </h4>
                    <?php if (have_rows('services_hero_columns', $fields_from_services_page)) : ?>
                        <div class="row">
                            <?php while (have_rows('services_hero_columns', $fields_from_services_page)) : the_row(); ?>
                                <div class="col">
                                    <svg width="120" height="120" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.62939e-06 120L-2.86134e-06 2.86134e-06L120 -7.62939e-06L7.62939e-06 120Z" fill=" <?php the_sub_field('services_hero_column_rectangle_color', $fields_from_services_page); ?>" />
                                    </svg>
                                    <h4 class="services-hero-categories-column__heading">
                                        <?php the_sub_field('services_hero_column_heading', $fields_from_services_page); ?>
                                    </h4>
                                    <h5 class="services-hero-categories-column__name">
                                        <?php the_sub_field('services_hero_column_name', $fields_from_services_page); ?>
                                    </h5>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php else : ?>
                        <?php // no rows found 
                        ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="services-hero__triangle"></div>
</section>
<?php
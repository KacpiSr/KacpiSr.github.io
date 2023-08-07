<?php global $fields_from_services_page; ?>

<section class="services-categories">
    <?php if (have_rows('services_categories', $fields_from_services_page)) : ?>
        <?php while (have_rows('services_categories', $fields_from_services_page)) : the_row(); ?>
            <div class="service-category" style="background-color:<?php the_sub_field('services_categories_bg_color', $fields_from_services_page); ?>">
                <div class="container service-category__container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="service-category__heading">
                                <?php the_sub_field('services_categories_heading', $fields_from_services_page); ?>
                            </h2>
                            <p class="service-category__text">
                                <?php the_sub_field('services_categories_text', $fields_from_services_page); ?>
                            </p>

                            <div class="service-category-list">
                                <h4 class="service-category-list__name">
                                    <?php the_sub_field('services_categories_list_name', $fields_from_services_page); ?>
                                </h4>
                                <?php if (have_rows('services_categories_list', $fields_from_services_page)) : ?>
                                    <?php while (have_rows('services_categories_list', $fields_from_services_page)) : the_row(); ?>
                                        <?php if (get_sub_field('services_categories_list_if_heading', $fields_from_services_page) == 1) { ?>
                                            <h3 class="service-category-list__heading">
                                                <?php the_sub_field('services_categories_list_heading', $fields_from_services_page); ?>
                                                <?php if (get_sub_field('services_categories_if_arrow', $fields_from_services_page) == 1) { ?>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/dist/img/arrow-big--black.svg" alt="arrow" alt="">
                                                <?php
                                                } ?>
                                            </h3>
                                            <?php if (have_rows('services_categories_links', $fields_from_services_page)) : ?>
                                                <ul class="service-category-list__links service-category-list__links--style-1">
                                                    <?php while (have_rows('services_categories_links', $fields_from_services_page)) : the_row(); ?>
                                                        <?php $link = get_sub_field('services_categories_link', $fields_from_services_page); ?>
                                                        <li class="service-category-list__link-item">
                                                            <a class="service-category-list__link" href="<?php echo $link['url']; ?>">
                                                                <?php echo $link['title']; ?>
                                                            </a>
                                                        </li>
                                                    <?php endwhile; ?>
                                                </ul>
                                            <?php endif;
                                        } else {
                                            ?>
                                            <ul class="service-category-list__links service-category-list__links--style-2">
                                                <?php while (have_rows('services_categories_links', $fields_from_services_page)) : the_row(); ?>
                                                    <?php $link = get_sub_field('services_categories_link', $fields_from_services_page); ?>
                                                    <li class="service-category-list__link-item">
                                                        <a class="service-category-list__link" href="<?php echo $link['url']; ?>">
                                                            <?php echo $link['title']; ?>
                                                        </a>
                                                    </li>
                                                <?php endwhile; ?>
                                            </ul>
                                        <?php
                                        } ?> <?php endwhile; ?> <?php endif; ?>
                                <div class="service-category-buttons">
                                    <?php $services_categories_button_1 = get_sub_field('services_categories_button_1', $fields_from_services_page); ?>
                                    <?php if ($services_categories_button_1) { ?>
                                        <a class="btn btn__black" href="<?php echo $services_categories_button_1['url']; ?>" target="<?php echo $services_categories_button_1['target']; ?>"><?php echo $services_categories_button_1['title']; ?></a>
                                    <?php } ?>
                                    <?php $services_categories_button_2 = get_sub_field('services_categories_button_2', $fields_from_services_page); ?>
                                    <?php if ($services_categories_button_2) { ?>
                                        <a class="btn btn__black--transparent" href="<?php echo $services_categories_button_2['url']; ?>" target="<?php echo $services_categories_button_2['target']; ?>"><?php echo $services_categories_button_2['title']; ?></a>
                                    <?php } ?>
                                </div>
                                <?php if (get_sub_field('services_if_section_right', $fields_from_services_page) == 1) { ?>
                                    <div class="services-categories-right">
                                        <?php $services_categories_graphic = get_sub_field('services_categories_graphic', $fields_from_services_page); ?>
                                        <?php if ($services_categories_graphic) { ?>
                                            <img src="<?php echo $services_categories_graphic['url']; ?>" alt="<?php echo $services_categories_graphic['alt']; ?>" />
                                        <?php } ?>
                                        <?php $services_categories_button_3 = get_sub_field('services_categories_button_3', $fields_from_services_page); ?>
                                        <?php if ($services_categories_button_3) { ?>
                                            <a class="btn btn__white btn__white--transparent services-categories-right__btn" href="<?php echo $services_categories_button_3['url']; ?>" target="<?php echo $services_categories_button_3['target']; ?>"><?php echo $services_categories_button_3['title']; ?></a>
                                    </div>
                            <?php }
                                    } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>
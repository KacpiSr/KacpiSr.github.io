<?php $fields_from_type_of_work = '346'; ?>

<?php if (have_rows('category_section', $fields_from_type_of_work)) : ?>
    <?php $nr_slider = 0; ?>
    <?php while (have_rows('category_section', $fields_from_type_of_work)) : the_row(); ?>
        <section class="case-studies-slider-arrows">
            <div class="container case-studies-slider-arrows__container">
                <div class="arrow-buttons case-studies-slider-arrows__buttons">
                    <div class="arrows arrow-previous swiper-button-prev case-studies-slider-arrows__button-prev case-studies-slider-arrows__button-prev--<?php echo $nr_slider; ?> ">
                        <div class="button-content-prev">
                            <svg width="25" height="16" viewBox="0 0 25 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.292893 8.70711C-0.0976314 8.31658 -0.0976315 7.68342 0.292892 7.2929L6.65685 0.928934C7.04738 0.538409 7.68054 0.538409 8.07107 0.928934C8.46159 1.31946 8.46159 1.95262 8.07107 2.34315L2.41421 8L8.07107 13.6569C8.46159 14.0474 8.46159 14.6805 8.07107 15.0711C7.68054 15.4616 7.04738 15.4616 6.65686 15.0711L0.292893 8.70711ZM25 9L1 9L1 7L25 7L25 9Z" />
                            </svg>
                        </div>
                        <div class="custom-arrow-element-white case-studies-slider-arrows__button--dark">
                            <span>Prev</span>
                            <svg width="25" height="16" viewBox="0 0 25 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.292893 8.70711C-0.0976314 8.31658 -0.0976315 7.68342 0.292892 7.2929L6.65685 0.928934C7.04738 0.538409 7.68054 0.538409 8.07107 0.928934C8.46159 1.31946 8.46159 1.95262 8.07107 2.34315L2.41421 8L8.07107 13.6569C8.46159 14.0474 8.46159 14.6805 8.07107 15.0711C7.68054 15.4616 7.04738 15.4616 6.65686 15.0711L0.292893 8.70711ZM25 9L1 9L1 7L25 7L25 9Z" />
                            </svg>
                        </div>
                    </div>

                    <div class="arrows arrow-next swiper-button-next case-studies-slider-arrows__button-next case-studies-slider-arrows__button-next--<?php echo $nr_slider; ?>">
                        <div class="button-content-next">
                            <svg width="25" height="16" viewBox="0 0 25 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M24.7071 8.70711C25.0976 8.31658 25.0976 7.68342 24.7071 7.2929L18.3431 0.928934C17.9526 0.538409 17.3195 0.538409 16.9289 0.928934C16.5384 1.31946 16.5384 1.95262 16.9289 2.34315L22.5858 8L16.9289 13.6569C16.5384 14.0474 16.5384 14.6805 16.9289 15.0711C17.3195 15.4616 17.9526 15.4616 18.3431 15.0711L24.7071 8.70711ZM-8.74229e-08 9L24 9L24 7L8.74229e-08 7L-8.74229e-08 9Z" />
                            </svg>
                        </div>
                        <div class="custom-arrow-element-white case-studies-slider-arrows__button--dark">
                            <span>Next</span>
                            <svg width="25" height="16" viewBox="0 0 25 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M24.7071 8.70711C25.0976 8.31658 25.0976 7.68342 24.7071 7.2929L18.3431 0.928934C17.9526 0.538409 17.3195 0.538409 16.9289 0.928934C16.5384 1.31946 16.5384 1.95262 16.9289 2.34315L22.5858 8L16.9289 13.6569C16.5384 14.0474 16.5384 14.6805 16.9289 15.0711C17.3195 15.4616 17.9526 15.4616 18.3431 15.0711L24.7071 8.70711ZM-8.74229e-08 9L24 9L24 7L8.74229e-08 7L-8.74229e-08 9Z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="case-studies-item">
            <div class="container case-studies-item__container">
                <div class="case-studies-item__wrapper">
                    <div class="row">
                        <div class="col-md-4 case-studies-item__column">
                            <div class="case-studies-item__image">
                                <?php $category_name_term = get_sub_field('category_name', $fields_from_type_of_work); ?>
                                <?php $taxonomy_icon = get_field('icon',  $category_name_term->taxonomy . '_' . $category_name_term->term_id); ?>
                                <?php if ($category_name_term) : ?>
                                    <img src="<?php echo $taxonomy_icon['url'] ?>" alt="<?php echo $taxonomy_icon['title'] ?>">
                                <?php endif; ?>
                            </div>
                            <h2 class="case-studies-item__heading">
                                <?php echo $category_name_term->name; ?>
                            </h2>
                            <a class="case-studies-item__link" href="../case-studies/type-of-work/<?php echo $category_name_term->slug; ?>">View all cases</a>
                        </div>

                        <div class="col-md-8">
                            <div class="case-studies-slider">
                                <div class="swiper swiper--<?php echo $nr_slider; ?>">
                                    <div class="swiper-wrapper">
                                        <?php if (have_rows('projects', $fields_from_type_of_work)) : ?>
                                            <?php while (have_rows('projects', $fields_from_type_of_work)) : the_row(); ?>
                                                <?php $post_object = get_sub_field('project', $fields_from_type_of_work); ?>
                                                <?php if ($post_object) : ?>
                                                    <?php $post = $post_object; ?>
                                                    <?php setup_postdata($post); ?>
                                                    <div class="swiper-slide">
                                                        <a class="case-studies-slider__link" href="<?php the_permalink(); ?>">
                                                            <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($category_name_term->ID), 'single-post-thumbnail'); ?>


                                                            <div class="case-studies-slider__item ">
                                                                <img class="case-studies-slider__image" src="<?php echo $image[0]; ?>" alt="">

                                                                <?php if (have_rows('description', $category_name_term->ID)) : ?>
                                                                    <h3 class="case-studies-slider__heading">
                                                                        <?php the_title(); ?>
                                                                    </h3>

                                                                    <ul class="case-studies-slider__description">
                                                                        <?php while (have_rows('description', $category_name_term->ID)) : the_row(); ?>
                                                                            <li>
                                                                                <?php the_sub_field('description', $category_name_term->ID); ?>
                                                                            </li>
                                                                        <?php endwhile; ?>
                                                                    </ul>
                                                                <?php else : ?>
                                                                    <?php // no rows found 
                                                                    ?>
                                                                <?php endif; ?>
                                                            </div>

                                                        </a>
                                                    </div>
                                                    <?php wp_reset_postdata(); ?>
                                                <?php endif; ?>
                                            <?php endwhile; ?>
                                        <?php else : ?>
                                            <?php // no rows found 
                                            ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php $nr_slider++; ?>
    <?php endwhile; ?>
<?php else : ?>
    <?php // no rows found 
    ?>
<?php endif; ?>
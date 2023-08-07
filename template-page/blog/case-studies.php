<section class="blok-case-studies">
    <!-- <div class="blok-case-studies__new-project">
        <div class="container">
            <div class="row">
                <div class="col-md-5 offset-md-1">
                    <div class="blok-case-studies__new-project-title">
                        New project
                        or questions?
                    </div>
                </div>
                <div class="col-md-4 offset-md-1 blok-case-studies__new-project-link-box">
                    <div class="blok-case-studies__new-project-items">
                        <div class="blok-case-studies__new-project-content">
                            Umówimy się na darmową konsultację i porozmawiajmy o tym, jak możemy Ci pomóc.
                        </div>
                        <a class="btn btn__black" href="">Book consultation</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="container">
        <div class="row">
            <div class="offset-md-3 col-md-8 ">
                <div class="blok-case-studies__top">
                    <h3 class="f-h3"><?php echo get_field('blog_case_studies_title', '391'); ?></h3>
                    <div class="blok-ebooks__top__border"></div>
                </div>
                <div class="blok-case-studies__border-right"></div>
                <div class="swiper swiper-studies">
                    <div class="swiper-wrapper">

                        <?php if (have_rows('blog_case_studies_entry', '391')) : ?>
                            <?php while (have_rows('blog_case_studies_entry', '391')) :
                                the_row(); ?>
                                <div class="swiper-slide">




                                    <?php
                                    $link = get_sub_field('blog_case_studies_link', '391');
                                    if ($link) :
                                        $link_url = $link['url'];
                                        $link_title = $link['title'];
                                        $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>

                                        <?php
                                        $blog_case_studies_entry_img = get_sub_field('blog_case_studies_entry_img', '391');
                                        if ($blog_case_studies_entry_img) : ?>
                                            <a class="button" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?>
                                                <img src="<?php echo esc_url($blog_case_studies_entry_img['url']); ?>" alt="<?php echo esc_attr($blog_case_studies_entry_img['alt']); ?>" />
                                            </a>

                                        <?php endif; ?>
                                        <?php if ($blog_case_studies_entry_name = get_sub_field('blog_case_studies_entry_name', '391')) : ?>
                                            <a class="button" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?>
                                                <h4 class="f-h4"><?php echo $blog_case_studies_entry_name; ?></h4>
                                            </a>

                                        <?php endif; ?>


                                    <?php endif; ?>














                                    <?php if ($blog_case_studies_entry_area = get_sub_field('blog_case_studies_entry_area', '391')) : ?>
                                        <p class="text-main"><?php echo $blog_case_studies_entry_area; ?></p>
                                    <?php endif; ?>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="offset-md-1 col-md-10">
                <div class="blok-case-studies__border-bottom">
                    <div class="arrow-buttons">
                        <div class="arrows arrow-previous swiper-button-prev">
                            <div class="button-content-prev">
                                <svg width="25" height="16" viewBox="0 0 25 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.292893 8.70711C-0.0976314 8.31658 -0.0976315 7.68342 0.292892 7.2929L6.65685 0.928934C7.04738 0.538409 7.68054 0.538409 8.07107 0.928934C8.46159 1.31946 8.46159 1.95262 8.07107 2.34315L2.41421 8L8.07107 13.6569C8.46159 14.0474 8.46159 14.6805 8.07107 15.0711C7.68054 15.4616 7.04738 15.4616 6.65686 15.0711L0.292893 8.70711ZM25 9L1 9L1 7L25 7L25 9Z" />
                                </svg>
                            </div>
                            <div class="custom-arrow-element">
                                <span>Prev</span>
                                <svg width="25" height="16" viewBox="0 0 25 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.292893 8.70711C-0.0976314 8.31658 -0.0976315 7.68342 0.292892 7.2929L6.65685 0.928934C7.04738 0.538409 7.68054 0.538409 8.07107 0.928934C8.46159 1.31946 8.46159 1.95262 8.07107 2.34315L2.41421 8L8.07107 13.6569C8.46159 14.0474 8.46159 14.6805 8.07107 15.0711C7.68054 15.4616 7.04738 15.4616 6.65686 15.0711L0.292893 8.70711ZM25 9L1 9L1 7L25 7L25 9Z" />
                                </svg>
                            </div>
                        </div>

                        <div class="arrows arrow-next swiper-button-next">
                            <div class="button-content-next">
                                <svg width="25" height="16" viewBox="0 0 25 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M24.7071 8.70711C25.0976 8.31658 25.0976 7.68342 24.7071 7.2929L18.3431 0.928934C17.9526 0.538409 17.3195 0.538409 16.9289 0.928934C16.5384 1.31946 16.5384 1.95262 16.9289 2.34315L22.5858 8L16.9289 13.6569C16.5384 14.0474 16.5384 14.6805 16.9289 15.0711C17.3195 15.4616 17.9526 15.4616 18.3431 15.0711L24.7071 8.70711ZM-8.74229e-08 9L24 9L24 7L8.74229e-08 7L-8.74229e-08 9Z" />
                                </svg>
                            </div>
                            <div class="custom-arrow-element">
                                <span>Next</span>
                                <svg width="25" height="16" viewBox="0 0 25 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M24.7071 8.70711C25.0976 8.31658 25.0976 7.68342 24.7071 7.2929L18.3431 0.928934C17.9526 0.538409 17.3195 0.538409 16.9289 0.928934C16.5384 1.31946 16.5384 1.95262 16.9289 2.34315L22.5858 8L16.9289 13.6569C16.5384 14.0474 16.5384 14.6805 16.9289 15.0711C17.3195 15.4616 17.9526 15.4616 18.3431 15.0711L24.7071 8.70711ZM-8.74229e-08 9L24 9L24 7L8.74229e-08 7L-8.74229e-08 9Z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
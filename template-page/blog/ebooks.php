<section class="blok-ebooks">
    <div class="container">
        <div class="row">
            <div class="offset-md-3 col-md-8">
                <div class="blok-ebooks__top">
                    <h3 class="f-h3"><?php echo get_field('blog_ebooks_title', '391'); ?></h3>
                    <div class="blok-ebooks__top__border"></div>
                </div>
                <div class="swiper swiper-ebook">
                    <div class="swiper-wrapper">
                        <?php if (have_rows('blog_ebooks_entry', '391')) : ?>
                            <?php while (have_rows('blog_ebooks_entry', '391')) :
                                the_row(); ?>
                                <div class="swiper-slide">
                                    <?php
                                    $blog_ebooks_entry_img = get_sub_field('blog_ebooks_entry_img', '391');
                                    if ($blog_ebooks_entry_img) : ?>
                                        <img src="<?php echo esc_url($blog_ebooks_entry_img['url']); ?>" alt="<?php echo esc_attr($blog_ebooks_entry_img['alt']); ?>" />
                                    <?php endif; ?>
                                    <!-- <img srcset="<?php bloginfo('template_url', '391'); ?>/dist/img/ebook_UX.png 1x, <?php bloginfo('template_url', '391'); ?>/dist/img/ebook_UX@2x.png 2x"> -->
                                    <div class="swiper-content">

                                        <?php if ($blog_ebooks_entry_text = get_sub_field('blog_ebooks_entry_text', '391')) : ?>
                                            <h4 class="f-h4"><?php echo $blog_ebooks_entry_text; ?></h4>
                                        <?php endif; ?>
                                        <?php
                                        $link = get_sub_field('blog_ebooks_entry_link', '391');
                                        if ($link) :
                                            $link_url = $link['url'];
                                            $link_title = $link['title'];
                                            $link_target = $link['target'] ? $link['target'] : '_self';
                                        ?>
                                            <a class="link link__black link__black--underline" target="_blank" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="offset-md-1 col-md-10">
                <div class="blok-ebooks__border-bottom">
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
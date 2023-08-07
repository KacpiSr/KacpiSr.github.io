<section class="hp-logo-swiper">
    <div class="container">
        <div class="row">
            <?php if ($hpls_slider_header = get_field('hpls_slider_header')) : ?>
                <div class="col-md-8 offset-md-1">
                    <p class="swiper-topic fw--500 text-main--f18 split-lines-words">
                        <?php echo esc_html($hpls_slider_header); ?>
                    </p>
                </div>
            <?php endif; ?>
            <div class="col-md-2 d-none d-md-block">
                <div class="swiper-header">
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
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="swiper logo-swiper">
                    <div class="swiper-wrapper">




                        <?php
                        /*
                            require_once $_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/funktional/function-catalog/geo.php';
                            $geoplugin = new geoPlugin();
                            $geoplugin->locate();

                            // echo "Country Code: {$geoplugin->countryCode} <br />\n";

                            if ($geoplugin->countryCode == "PL") {
                                $hpls_swiper = 'hpls_swiper';
                            } else if ($geoplugin->countryCode == "USA") {
                                $hpls_swiper = 'hpls_swiper_en';
                            } else if ($geoplugin->countryCode !== "USA" || "PL") {
                                $hpls_swiper = 'hpls_swiper_rest';
                            }
*/
                        ?>
                        <?php $hpls_swiper = 'hpls_swiper' ?>
                        <?php if (have_rows($hpls_swiper)) : ?>
                            <?php while (have_rows($hpls_swiper)) :
                                the_row(); ?>
                                <div class="swiper-slide " data-speed="1.1">
                                    <div class="swiper-slide__item ">
                                        <?php
                                        $hpls_logo = get_sub_field('hpls_logo');
                                        if ($hpls_logo) : ?>
                                            <img class="src="<?php echo esc_url($hpls_logo['url']); ?>" alt="<?php echo esc_attr($hpls_logo['alt']); ?>" />
                                        <?php endif; ?>
                                        <?php if ($hpls_topic = get_sub_field('hpls_topic')) : ?>
                                            <div class="logo-swiper__heading "><?php echo esc_html($hpls_topic); ?></div>
                                        <?php endif; ?>
                                        <?php if ($hpls_content = get_sub_field('hpls_content')) : ?>
                                            <div class="logo-swiper__content "><?php echo $hpls_content; ?></div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif;
                        ?>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
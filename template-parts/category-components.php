<section class="category-components">
    <div class="container">
        <div class="row">
            <div class="col-md-5 offset-md-1 category-components__elements">
                <?php if ($ctb_side_title = get_field('ctb_side_title')) : ?>
                    <p class="category-components__side-text">
                        <span><?php echo esc_html($ctb_side_title); ?></span>
                    <?php endif; ?>
                    </p>
                    <div class="category-components__box">
                        <div class="category-components__items">
                            <div class="category-components__title fw--600 title-big">
                                <div class="category-components__title-big">
                                    <span>
                                        Branding
                                    </span>
                                </div>
                                <img class="category-components__geo" src="<?php echo get_template_directory_uri(); ?>/dist/img/blue-geo.png">
                            </div>
                            <div class="category-components__content">
                                <ul class="fw--400 text-main--f20">
                                    <?php if (have_rows('ctb_links')) : ?>
                                        <?php while (have_rows('ctb_links')) :
                                            the_row(); ?>
                                            <?php
                                            $link = get_sub_field('ctb_ul_link');
                                            if ($link) :
                                                $link_url = $link['url'];
                                                $link_title = $link['title'];
                                                $link_target = $link['target'] ? $link['target'] : '_self';
                                            ?>
                                                <li><a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><span>/</span>
                                                        <div><?php echo esc_html($link_title); ?></div>
                                                    </a></li>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </ul>
                            </div>
                            <?php
                            $link = get_field('ctb_main_href');
                            if ($link) :
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                                <a class="btn btn__white--transparent case-btn" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                                    <div><?php echo esc_html($link_title); ?></div>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
            </div>
            <div class="col-md-5 offset-md-1 category-components__elements">
                <?php if ($ctb_side_title_purple = get_field('ctb_side_title_purple')) : ?>
                    <p class="category-components__side-text">
                        <span><?php echo esc_html($ctb_side_title_purple); ?></span>
                    <?php endif; ?>
                    </p>
                    <div class="category-components__box">
                        <div class="category-components__items">
                            <div class="category-components__title fw--600">
                                <div class="category-components__title-long">
                                    <span>Digital</span>
                                    <span>Experiences</span>
                                    <span>& Ecommerce</span>
                                </div>
                                <img class="category-components__geo" src="<?php echo get_template_directory_uri(); ?>/dist/img/purple-geo.png">
                            </div>
                            <div class="category-components__content">
                                <ul class="fw--400 text-main--f20">
                                    <?php if (have_rows('ctb_links_purple')) : ?>
                                        <?php while (have_rows('ctb_links_purple')) :
                                            the_row(); ?>
                                            <?php
                                            $link = get_sub_field('ctb_ul_link');
                                            if ($link) :
                                                $link_url = $link['url'];
                                                $link_title = $link['title'];
                                                $link_target = $link['target'] ? $link['target'] : '_self';
                                            ?>
                                                <li><a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><span>/</span>
                                                        <div>
                                                            <div><?php echo esc_html($link_title); ?></div>
                                                        </div>
                                                    </a></li>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </ul>
                            </div>
                            <?php
                            $link = get_field('ctb_main_href_purple');
                            if ($link) :
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                                <a class="btn btn__white--transparent case-btn" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                                    <div><?php echo esc_html($link_title); ?></div>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
            </div>
            <div class="col-md-5 offset-md-1 category-components__elements">
                <?php if ($ctb_side_title_green = get_field('ctb_side_title_green')) : ?>
                    <p class="category-components__side-text">
                        <span><?php echo esc_html($ctb_side_title_green); ?></span>
                    <?php endif; ?>
                    </p>
                    <div class="category-components__box">
                        <div class="category-components__items">
                            <div class="category-components__title fw--600">
                                <div class="category-components__title-long">
                                    <span>Content</span>
                                    <span>& Creative</span>
                                    <span>Production</span>
                                </div>
                                <img class="category-components__geo" src="<?php echo get_template_directory_uri(); ?>/dist/img/green-geo.png">
                            </div>
                            <div class="category-components__content">
                                <ul class="fw--400 text-main--f20">
                                    <?php if (have_rows('ctb_links_green')) : ?>
                                        <?php while (have_rows('ctb_links_green')) :
                                            the_row(); ?>
                                            <?php
                                            $link = get_sub_field('ctb_ul_link');
                                            if ($link) :
                                                $link_url = $link['url'];
                                                $link_title = $link['title'];
                                                $link_target = $link['target'] ? $link['target'] : '_self';
                                            ?>
                                                <li><a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><span>/</span>
                                                        <div><?php echo esc_html($link_title); ?></div>
                                                    </a></li>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </ul>
                            </div>
                            <?php
                            $link = get_field('ctb_main_href_green');
                            if ($link) :
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                                <a class="btn btn__white--transparent case-btn" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                                    <div><?php echo esc_html($link_title); ?></div>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
            </div>
            <div class="col-md-5 offset-md-1 category-components__elements">
                <?php if ($ctb_side_title_yellow = get_field('ctb_side_title_yellow')) : ?>
                    <p class="category-components__side-text">
                        <span><?php echo esc_html($ctb_side_title_yellow); ?></span>
                    <?php endif; ?>
                    </p>
                    <div class="category-components__box">
                        <div class="category-components__items">
                            <div class="category-components__title fw--600">
                                <div class="category-components__title-medium">
                                    <span>Brand</span>
                                    <span>Growth</span>
                                </div>
                                <img class="category-components__geo" src="<?php echo get_template_directory_uri(); ?>/dist/img/yellow-geo.png">
                            </div>
                            <div class="category-components__content">
                                <ul class="fw--400 text-main--f20">
                                    <?php if (have_rows('ctb_links_yellow')) : ?>
                                        <?php while (have_rows('ctb_links_yellow')) :
                                            the_row(); ?>
                                            <?php
                                            $link = get_sub_field('ctb_ul_link');
                                            if ($link) :
                                                $link_url = $link['url'];
                                                $link_title = $link['title'];
                                                $link_target = $link['target'] ? $link['target'] : '_self';
                                            ?>
                                                <li><a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><span>/</span>
                                                        <div><?php echo esc_html($link_title); ?></div>
                                                    </a></li>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </ul>
                            </div>
                            <?php
                            $link = get_field('ctb_main_href_yellow');
                            if ($link) :
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                                <a class="btn btn__white--transparent case-btn" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                                    <div><?php echo esc_html($link_title); ?></div>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
            </div>
            <div class="col-md-5 offset-md-1 category-components__elements">
                <?php if ($ctb_side_title_gray = get_field('ctb_side_title_gray')) : ?>
                    <p class="category-components__side-text">
                        <span><?php echo esc_html($ctb_side_title_gray); ?></span>
                    <?php endif; ?>
                    </p>
                    <div class="category-components__box">
                        <div class="category-components__items">
                            <div class="category-components__title fw--600">
                                <div class="category-components__title-big">
                                    <span>
                                        Strategy
                                    </span>
                                </div>
                                <img class="category-components__geo" src="<?php echo get_template_directory_uri(); ?>/dist/img/gray-geo.png">
                            </div>
                            <div class="category-components__content">
                                <ul class="fw--400 text-main--f20">
                                    <?php if (have_rows('ctb_links_gray')) : ?>
                                        <?php while (have_rows('ctb_links_gray')) :
                                            the_row(); ?>
                                            <?php
                                            $link = get_sub_field('ctb_ul_link');
                                            if ($link) :
                                                $link_url = $link['url'];
                                                $link_title = $link['title'];
                                                $link_target = $link['target'] ? $link['target'] : '_self';
                                            ?>
                                                <li><a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><span>/</span>
                                                        <div><?php echo esc_html($link_title); ?></div>
                                                    </a></li>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </ul>
                            </div>
                            <?php
                            $link = get_field('ctb_main_href_gray');
                            if ($link) :
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                                <a class="btn btn__white--transparent case-btn" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                                    <div><?php echo esc_html($link_title); ?></div>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>
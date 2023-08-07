<?php
get_header();
?>
<section class="blog-single">

    <div class="progress-header">
        <div class="progress-container">
            <div class="progress-bar" id="progressBar"></div>
        </div>
    </div>
    <section class="top-content">
        <div class="top-content__blog-block">
            <div class="container">
                <div class="row" id="photo-dest">
                    <div class="col-md-10 offset-md-1">
                        <div class="top-content__breadcrumbs">
                            <?php funktional_breadcrumbs('', '', '', true); ?>
                        </div>
                        <h1 class="top-content__hero fw--600">
                            <?php the_title(); ?>
                        </h1>
                        <div class="top-content__under-topic text-main fw--500">
                            <?php
                            $cat_terms = get_the_terms($post->ID, 'categoryblog');
                            if ($cat_terms) :
                                foreach ($cat_terms as  $cat_term) : ?>
                                    <a href="<?php echo get_term_link($cat_term); ?>" class="new-entries-item-content__category"><?php echo $cat_term->name; ?></a>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="top-content__blog-post-photo">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1 top-content__element" id="photo-element">
                        <div class="">
                            <?php
                            $sbl_hero_photo = get_field('sbl_hero_photo');
                            if ($sbl_hero_photo) : ?>
                                <img src="<?php echo esc_url($sbl_hero_photo['url']); ?>" alt="<?php echo esc_attr($sbl_hero_photo['alt']); ?>" />
                            <?php endif; ?>
                            <div class="top-content__under-photo-elements fw--500">
                                <?php if ($sbl_blog_time = get_field('sbl_blog_time')) : ?>
                                    <div><?php echo esc_html($sbl_blog_time); ?></div>
                                <?php endif; ?>
                                <div><?php echo get_the_date('Y-m-d'); ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="blog-post-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-2 ">
                    <div class="blog-post-content__contnet">

                        <?php the_content(); ?>
                        <div class="blog-post-content__content-contact-info">
                            <?php if ($sbl_email_text = get_field('sbl_email_text')) : ?>
                                <p><?php echo esc_html($sbl_email_text); ?>
                                    <?php if ($sbl_email = get_field('sbl_email')) : ?>
                                        <a class="button" href="mailto:<?php echo $sbl_email; ?>"><span><?php echo $sbl_email; ?></span></a>
                                    <?php endif; ?>
                                </p>
                            <?php endif; ?>
                            <?php if ($sbl_phone_text = get_field('sbl_phone_text')) : ?>
                                <p><?php echo esc_html($sbl_phone_text); ?>
                                    <?php if ($sbl_phone = get_field('sbl_phone')) : ?>
                                        <a href="tel:<?php echo esc_html($sbl_phone); ?>"><b><?php echo esc_html($sbl_phone); ?></b></a>
                                    <?php endif; ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
                <div class="col-md-2 offset-md-1 blog-post-content__sticky-menu fixed-sidebar-holder">
                    <div class="blog-post-content__moving-tile fixed-sidebar">

                        <div class="blog-post-content__title">Share</div>

                        <div class="blog-post-content__share-buttons">
                            <?php
                            $site_url  = get_permalink();
                            $site_title  = get_the_title();
                            ?>

                            <a class="button share-btn" href="http://www.facebook.com/sharer.php?u=<?= $site_url ?>" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/dist/img/facebook.svg" alt="facebook">
                            </a>

                            <a class="button share-btn" href="https://twitter.com/share?url=<?= $site_url ?>&amp;text=Simple%20Share%20Buttons&amp;hashtags=simplesharebuttons" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/dist/img/twitter.svg" alt="twitter">
                            </a>

                            <a class="button share-btn" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?= $site_url ?>" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/dist/img/linkdt.svg" alt="linkedin">
                            </a>

                        </div>

                        <div class="blog-post-content__title">Topics</div>

                        <div class="blog-post-content__href-items">
                            <?php
                            $tag_terms = get_the_terms($post->ID, 'tagsblog');
                            if ($tag_terms) :
                                foreach ($tag_terms as  $tag_term) : ?>
                                    <a href="<?php echo get_term_link($tag_term); ?>" target="_blank"><?php echo $tag_term->name; ?></a>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>

                        <a class="button" href="" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/dist/img/zajawka.png" width="" height="" alt="" />
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php get_template_part('template-page/blog/article-view-autor') ?>

    <section class="blog-last-posts">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="blog-last-posts__topic">
                        Podobne wpisy
                    </div>
                    <div class="blog-last-posts__blog-items">
                        <div class="blog-last-posts__content">
                            <?php
                            $currentID = get_the_ID();
                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                            $blogall_args = array(
                                'post_type' => 'blog',
                                'posts_per_page' => 3,
                                'post_status' => 'publish',
                                'paged' => $paged,
                                'post__not_in' => array($currentID),
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'awardedblog',
                                        'operator' => 'NOT EXISTS'
                                    ),
                                ),
                            );
                            $blogall = new WP_Query($blogall_args);
                            while ($blogall->have_posts()) : $blogall->the_post(); ?>
                                <div class="awarded__item-wrap">
                                    <div class="awarded__item-wrap__elements">
                                        <div class="awarded-photo">
                                            <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail'); ?>
                                            <a class="awarded-photo__link" href="<?php the_permalink() ?>">
                                                <img class="awarded-photo__picture" src="<?php echo $url ?>">
                                            </a>
                                            <div class="awarded-photo__flags">
                                                <?php
                                                $flags_terms = get_the_terms($post->ID, 'flagblog');
                                                if ($flags_terms) :
                                                    foreach ($flags_terms as $flags_term) : ?>
                                                        <div class="awarded-photo__flags__text"><?php echo $flags_term->name; ?></div>
                                                        <div class="awarded-photo__flags__text-transparent"><?php echo $flags_term->name; ?></div>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="awarded-item-content">
                                            <a href="<?php the_permalink() ?>" class="awarded-title"><?php the_title(); ?>&nbsp;<span class="awarded-title__arrow">-></span></a>
                                            <div class="awarded-item">
                                                <div class="awarded-item__type">
                                                    <?php if (has_term('news', 'typeblog', $post->ID)) : ?>
                                                        NEWS <span class="news-dot">&#x2022;</span>
                                                    <?php endif; ?>
                                                </div>
                                                <?php
                                                $cat_terms = get_the_terms($post->ID, 'categoryblog');
                                                if ($cat_terms) :
                                                    foreach ($cat_terms as  $cat_term) : ?>
                                                        <a href="<?php echo get_term_link($cat_term); ?>" class="awarded-item__category"><?php echo $cat_term->name; ?></a>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                            </div>
                                            <div class="awarded-excerpt">
                                                <?php echo excerpt(30); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php wp_reset_postdata(); ?>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('template-parts/sec-newsletter') ?>

</section>


<?php
get_footer();

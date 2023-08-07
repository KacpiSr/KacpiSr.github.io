<?php

/**
 * Template Name: single-author
 */

get_header();
?>
<?php

get_header();
global $post;
$user_id = $post->post_author;
$user_name = get_field('article_view_name', 'user_' .  $user_id);
$current_id = $wp_query->get_queried_object_id();
$category = get_queried_object();
?>
<div class="blog blog-category">
    <!-- HERO -->
    <div class="blog-hero">
        <div class="container">
            <div class="row">
                <div class="offset-md-1 col-md-10">
                    <div>
                        <ul class="bread-crumbs-author">
                            <li class="breadcrumb-author-home"><a href="//localhost:3000/funktional_site"><svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g opacity="0.3">
                                            <path d="M0 0.484375V3.80051H4.0601H13V0.484375H0Z" fill="white"></path>
                                            <path d="M0 10.1682V13.4843L3.53498 10.1682H4.0601H13V6.85205H0V10.1682Z" fill="white"></path>
                                        </g>
                                    </svg>
                                </a></li>
                            <li>/</li>
                            <a href="./blog"><li>Blog</li></a>
                            <li>/</li>
                            <li>autor</li>
                            <li>/</li>
                            <li><?php the_author(); ?></li>
                        </ul>
                    </div>


                </div>
                <div class="offset-md-1 col-md-10">
                    <div class="blog-hero__title-cat">Autor</div>
                </div>
                <div class="offset-md-1 col-md-10">
                    <div class="blog-hero__info blog-hero__info-category">
                        <div class="blog-hero__info__title"><?php the_author(); ?></div>
                        <!-- <div class="blog-hero__info__title"><?php the_author(); ?><Sup class="blog-category__category-view__info__number"><?php echo $category->count; ?></Sup></div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CATEGORY -->
    <div class="category-blog">
        <div class="container">
            <div class="rows">
                <div class="category-blog__triangle"></div>
                <div class="offset-md-1 col-md-10 form-mobile padding-mobile">
                    <div class="category-blog__content">


                        <?php
                        $categories = get_terms(array(
                            'taxonomy' => 'categoryblog',
                            'hide_empty' => true,
                        )); ?>


                        <div class="category-blog__content__items">
                            <div class="category-blog__content__items__box">
                                <div class="category-blog__content__items__item">
                                    <a href="<?php echo get_home_url(); ?>/blog">ALL ARTICLES</a>
                                </div>
                                <?php foreach ($categories as $category) : ?>
                                    <div class="category-blog__content__items__item">
                                        <a class="<?php if ($current_id == $category->term_id) : ?> active-cat <?php endif; ?> categories--<?php echo $category->term_id; ?>" href="<?php echo get_term_link($category->term_id, 'categoryblog'); ?>">
                                            <?php echo $category->name; ?>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="category-blog__content__items__right-element">
                                <div class="category-blog__content__items__more">
                                    <div class="category-blog__content__items__more__button">Więcej</div>
                                    <svg class="category-blog__content__items__more__arrow" width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.00564 0.991968L7.00586 6.99219L13.0061 0.991969" stroke="#989898" stroke-width="1.44608" />
                                    </svg>
                                </div>
                                <form action="<?php echo get_home_url(); ?>" method="get">
                                    <button type="submit"><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2 9.5C2 13.6421 5.35786 17 9.5 17C11.2316 17 12.8262 16.4131 14.0957 15.4275C14.1435 15.5286 14.2092 15.6234 14.2929 15.7071L20.2929 21.7071C20.6834 22.0976 21.3166 22.0976 21.7071 21.7071C22.0976 21.3166 22.0976 20.6834 21.7071 20.2929L15.7071 14.2929C15.6234 14.2092 15.5286 14.1435 15.4275 14.0957C16.4131 12.8262 17 11.2316 17 9.5C17 5.35786 13.6421 2 9.5 2C5.35786 2 2 5.35786 2 9.5ZM4 9.5C4 6.46243 6.46243 4 9.5 4C12.5376 4 15 6.46243 15 9.5C15 12.5376 12.5376 15 9.5 15C6.46243 15 4 12.5376 4 9.5Z" fill="#989898" />
                                        </svg></button>
                                    <input placeholder="Search" type="text" name="s" value="<?php the_search_query(); ?>" />
                                    <input type="hidden" name="page" value="1">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-line-category-blog"></div>
        </div>
    </div>

    <?php
    $author_args = array(
        'post_type' => 'blog',
        'posts_per_page' => -1,
        'post_status' => 'publish',
        'author' => $user_id
    );
    $author_all = new WP_Query($author_args); ?>

    <div class="blog-tags__entries">
        <div class="container">
            <div class="row">
                <div class="offset-md-1 col-md-10">
                    <div class="blog-tags__entries__container">
                        <?php while ($author_all->have_posts()) : $author_all->the_post(); ?>
                            <div class="blog-tags__entries__container__post-item">
                                <div class="blog-category-photo">
                                    <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail'); ?>
                                    <a class="blog-category-photo__link" href="<?php the_permalink() ?>">
                                        <img class="blog-category-photo__link__picture" src="<?php echo $url ?>">
                                    </a>
                                    <div class="blog-category-photo__flags">
                                        <?php
                                        $flags_terms = get_the_terms($post->ID, 'flagblog');
                                        if ($flags_terms) :
                                            foreach ($flags_terms as $flags_term) : ?>
                                                <div class="blog-category-photo__flags__text"><?php echo $flags_term->name; ?></div>
                                                <div class="blog-category-photo__flags__text-transparent"><?php echo $flags_term->name; ?></div>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="blog-category-box">
                                    <a href="<?php the_permalink() ?>" class="blog-category-title"><?php the_title(); ?>&nbsp;<span class="blog-category-title__arrow"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.1911 17.9276L11.0405 16.7898L15.0355 12.7947H5V11.1328H15.0355L11.0405 7.14418L12.1911 6L18.1548 11.9638L12.1911 17.9276Z" fill="#1A1A1A" />
                                            </svg></span></a>
                                    <div class="blog-category-item-content">
                                        <div class="blog-category-item-content__type">
                                            <?php if (has_term('news', 'typeblog', $post->ID)) : ?>
                                                NEWS <span class="news-dot">&#x2022;</span>
                                            <?php endif; ?>
                                        </div>
                                        <?php
                                        $cat_terms = get_the_terms($post->ID, 'categoryblog');
                                        if ($cat_terms) :
                                            foreach ($cat_terms as  $cat_term) : ?>
                                                <a href="<?php echo get_term_link($cat_term); ?>" class="blog-category-item-content__category"><?php echo $cat_term->name; ?></a>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </div>
                                    <div class="blog-category-item-excerpt">
                                        <?php echo excerpt(50); ?>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <?php wp_reset_query(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php get_template_part('template-parts/sec-newsletter') ?>


    <h2 style="color:red">Social media</h2>
    <?php get_template_part('template-page/home-page/sec-newsletter') ?>
</div>

<?php
get_footer();

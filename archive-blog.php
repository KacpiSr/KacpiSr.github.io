<?php
/*
Template Name: Blog page
*/

get_header();
$current_id = $wp_query->get_queried_object_id(); ?>


<!-- All post loop -->
<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$blogall_args = array(
    'post_type' => 'blog',
    'posts_per_page' => 16,
    'post_status' => 'publish',
    'paged' => $paged,
    'tax_query' => array(
        array(
            'taxonomy' => 'awardedblog',
            'operator' => 'NOT EXISTS'
        ),
    ),
);
$blogall = new WP_Query($blogall_args); ?>

<!-- Latest post loop -->
<?php
$awarded_blog_args = array(
    'post_type' => 'blog',
    'posts_per_page' => 4,
    'tax_query' => array(
        array(
            'taxonomy' => 'awardedblog',
            'field'    => 'slug',
            'terms'    => 'awardedtrue',
        ),
    ),
);
$awarded_blog = new WP_Query($awarded_blog_args); ?>
<?php wp_reset_query();?>


<div class="blog">
    <!-- HERO -->
    <div class="blog-hero">
        <div class="container">
            <div class="row">
                <div class="offset-md-1 col-md-10">
                <?php funktional_breadcrumbs('', '', '', true); ?>
                </div>
                <div class="offset-md-1 col-md-10">
                    <div class="blog-hero__info">
                        <div class="blog-hero__info__title">Blog</div>
                        <div class="blog-hero__info__number">
                            <?php $count_publish_posts = wp_count_posts('blog')->publish; ?>
                            <?php echo $count_publish_posts; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="awarded ">
            <div class="container">
                <div class="row-line-awarded"></div>
                <div class="row">
                    <div class="offset-md-1 col-md-10 ">
                        <div class="awarded__top-text ">
                            Polecamy
                        </div>
                        <div class="awarded__item-wrap">
                            
                            <?php if ($awarded_blog->have_posts()) : while ($awarded_blog->have_posts()) : $awarded_blog->the_post(); ?>
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
                                    
                            <?php endwhile;endif; ?>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CATEGORY -->
    <div class="category-blog">
        <div class="container">

            <div class="row ">
                <div class="category-blog__triangle"></div>
                <div class="offset-md-1 col-md-10 form-mobile">
                    <div class="category-blog__content">
                        <?php
                        $categories = get_terms(array(
                            'taxonomy' => 'categoryblog',
                            'hide_empty' => true,
                        )); ?>
                        <div class="category-blog__content__items">
                            <div class="category-blog__content__items__box">
                                <div class="category-blog__content__items__item">
                                    <a href="<?php echo get_home_url();?>/blog" class="active-cat">ALL ARTICLES</a>
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


    <div class="new-entries">
        <div class="container">
            <div class="row">
                <div class="offset-md-1 col-md-10">
                    <div class="new-entries__title">
                        <h3 class="f-h3">Najnowsze wpisy</h3>
                    </div>
                    <div class="new-entries__container">

                        <?php if ($blogall->have_posts()) : while ($blogall->have_posts()) : $blogall->the_post(); ?>

                                <div class="new-entries__container__post-item">
                                    <div class="new-entries-photo">
                                        <!-- do kazdej fotki dorobic clippath  -->
                                        <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail'); ?>
                                        <a class="new-entries-photo__link" href="<?php the_permalink() ?>">
                                            <img class="new-entries-photo__picture" src="<?php echo $url ?>">
                                        </a>
                                        <div class="new-entries-photo__flags">
                                            <?php
                                            $flags_terms = get_the_terms($post->ID, 'flagblog');
                                            if ($flags_terms) :
                                                foreach ($flags_terms as $flags_term) : ?>
                                                    <div class="new-entries-photo__flags__text"><?php echo $flags_term->name; ?></div>
                                                    <div class="new-entries-photo__flags__text-transparent"><?php echo $flags_term->name; ?></div>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="new-entries-box">
                                        <a href="<?php the_permalink() ?>" class="new-entries-title"><?php the_title(); ?>&nbsp;<span class="new-entries-title-arrow"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.1911 17.9276L11.0405 16.7898L15.0355 12.7947H5V11.1328H15.0355L11.0405 7.14418L12.1911 6L18.1548 11.9638L12.1911 17.9276Z" fill="#1A1A1A" />
                                                </svg></span></a>
                                        <div class="new-entries-item-content">
                                            <div class="new-entries-item-content__type">
                                                <?php if (has_term('news', 'typeblog', $post->ID)) : ?>NEWS &#x2022;<?php endif; ?>
                                            </div>
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
                        <?php wp_reset_postdata();
                            endwhile;
                        endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php get_template_part('template-page/blog/ebooks') ?>
    <?php get_template_part('template-page/blog/case-studies') ?>


    <div class="blog-paginate">
        <div class="container"><Samp></Samp>
            <div class="row">
                <div class="offset-md-1 col-md-10">
                    <div class="blog-paginate__box">

                        <?php
                        $big = 999999999;
                        echo paginate_links(array(
                            'base' => str_replace($big, '%#%', get_pagenum_link($big)),
                            'format' => 'page/%#%',
                            'current' => max(1, get_query_var('paged')),
                            'total' => $blogall->max_num_pages,
                            'prev_text' => 'Previous',
                            'next_text' => 'Next',
                            'end_size' => 0,
                            'mid_size' => 1,
                        ));

                        ?>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <?php get_template_part('template-parts/sec-newsletter') ?>


    <h2 style="color:red">Social media</h2>
</div>

<?php
get_footer(); ?>
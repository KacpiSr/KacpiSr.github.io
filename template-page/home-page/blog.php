<section class="hp-blog">
    <div class="container visible--mobile">
        <div class="row">
            <div class="col">
                <h2 class="f-h2--f-200 hp-blog__heading " >
                    <?php the_field('hp_blog_heading'); ?>
                </h2>
            </div>
        </div>
    </div>
    <div class="container hp-blog__container">
        <div class="offset-1 col-10">
            <div class="row visible--desktop">
                <h2 class="f-h2--f-200 hp-blog__heading split-chars split-chars--lh-12" data-speed="1.1">
                    <?php the_field('hp_blog_heading'); ?>
                </h2>
            </div>
            <div class="row hp-blog-posts__row">
                <div class="hp-blog-posts">
                    <?php if (have_rows('hp_blog_posts')) : ?>
                        <div class="row">
                            <?php while (have_rows('hp_blog_posts')) : the_row(); ?>
                                <div class="col hp-blog-posts__post">
                                    <?php $hp_blog_post_image = get_sub_field('hp_blog_post_image'); ?>
                                    <?php if ($hp_blog_post_image) { ?>
                                        <a  class="hp-blog-posts__imagehref" href="<?php the_sub_field('hp_blog_post_link'); ?>">
                                            <img class="hp-blog-posts__image" src="<?php echo $hp_blog_post_image['url']; ?>" alt="<?php echo $hp_blog_post_image['alt']; ?>" />
                                        </a>
                                    <?php } ?>
                                    <a class="hp-blog__btn" href="<?php the_sub_field('hp_blog_post_link'); ?>">
                                        <h5  class="hp-blog-posts__heading"><?php the_sub_field('hp_blog_post_heading'); ?>
                                            <span class="hp-blog-posts__heading-arrow">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.1911 17.9276L11.0405 16.7898L15.0355 12.7947H5V11.1328H15.0355L11.0405 7.14418L12.1911 6L18.1548 11.9638L12.1911 17.9276Z" fill="#1A1A1A" />
                                                </svg>
                                            </span>
                                        </h5>
                                    </a>
                                    <p class="hp-blog-posts__category" >
                                        <?php the_sub_field('hp_blog_post_category'); ?>
                                    </p>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php else : ?>
                        <?php // no rows found 
                        ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row hp-blog__btn--wrapper">
                <div class="col-lg">
                    <a href="<?php the_field('hp_blog_button_link'); ?>" class="btn btn__white hp-blog__btn" data-speed="1.1">
                        <?php the_field('hp_blog_button_text'); ?>
                    </a>
                </div>
            </div>
        </div>
        <div class="hp-blog__rectangle visible--mobile">
            <svg width="1920" height="960" viewBox="0 0 1920 960" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.000201567 -6.10352e-05L960 -5.22992e-05L960 960L0.000201567 -6.10352e-05Z" fill="white" />
                <path d="M1920 0L960 8.73599e-06L960 960L1920 0Z" fill="white" />
            </svg>

        </div>
    </div>
    <div class="hp-blog__rectangle visible--desktop">
        <svg width="1920" preserveAspectRatio="none" height="960" viewBox="0 0 1920 960" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0.000201567 -6.10352e-05L960 -5.22992e-05L960 960L0.000201567 -6.10352e-05Z" fill="white" />
            <path d="M1920 0L960 8.73599e-06L960 960L1920 0Z" fill="white" />
        </svg>

    </div>
</section>
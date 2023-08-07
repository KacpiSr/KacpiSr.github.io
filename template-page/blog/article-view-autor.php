<?php
global $post;
$user_id  = $post->post_author;
$user_name = get_field('article_view_name', 'user_' .  $user_id);
$user_image = get_field('article_view_photo', 'user_' .  $user_id);
$user_description = get_field('article_view_position', 'user_' .  $user_id);
$user_block_title =  get_field('article_view_title', 'user_' .  $user_id);
?>

<section class="article-view-autor">
    <div class="container">
        <div class="row">
            <div class="offset-lg-3 col-lg-8 ">
                <div class="article-view-autor__top">
                    <h3 class="f-h3"><?php echo $user_block_title; ?> </h3>
                    <div class="article-view-autor__top__border"></div>
                </div>
                <div class="article-view-autor__border-right"></div>
                <div class="article-view-autor__box">
                    <?php if ($user_image) : ?>
                        <img src="<?php echo esc_url($user_image['url']); ?>" alt="<?php echo esc_attr($user_image['alt']); ?>" />
                    <?php endif; ?>
                    <div class="article-view-autor__box__right">
                        <div class="article-view-autor__box__right__content">
                            <h5 class="name-autor"><?php echo $user_name; ?></h5>
                            <p class="text-main text-main--f20 "><?php echo $user_description; ?>
                            </p>
                        </div>

                        <a class="link link__black " target="_blank" href="<?php echo get_author_posts_url($user_id); ?>" target="_blank">Więcej artykułów tego eksperta</a>

                    </div>
                </div>
            </div>
            <div class="offset-lg-1 col-lg-10">
                <div class="article-view-autor__border-bottom">
                </div>
            </div>
        </div>
    </div>
</section>
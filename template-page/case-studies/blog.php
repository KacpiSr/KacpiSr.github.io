<section class="case-studies-blog">
    <div class="container">
        <div class="row">
            <div class="offset-md-3 col-md-8">
                <div class="case-studies-blog__top">
                    <h3 class="f-h3">Blog</h3>
                    <div class="case-studies-blog__top__border"></div>
                </div>
                <div class="case-studies-blog-content">
                    <div class="row">
                    <?php
    $recent_posts = wp_get_recent_posts(array('post_type'=>'blog'));
    foreach( $recent_posts as $recent ){
       
        ?>

                            <div class="col-md-6 case-studies-blog-content__column">
                       
                            <img src="<?php echo get_template_directory_uri(); ?>/dist/img/blog-post.jpg" width="" height="" alt="" />

                    <a href="<?php echo get_permalink($recent["ID"]) ?>">
                        <h4 class="case-studies-blog-content__heading">
                            <?php echo esc_attr($recent["post_title"]) ?>
                        </h4>
                        <div class="case-studies-blog-content__categories">
                            DESIGN
                        </div>
                    </a>
                    </div>



        <?php
    }
?>


                    </div>
                </div>
            </div>
            <div class="offset-md-1 col-md-10">
                <div class="case-studies-blog__border-bottom">
                </div>
            </div>
        </div>
    </div>
</section>
<?
if (isset($block['data']['preview_image_help'])) :    /* rendering in inserter preview  */

    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else :
?>
    <section class="case-studies-image-full">
        <?php if (get_field('photo_video_case')) : ?>


            <?php $image = get_field('image'); ?>
            <?php if ($image) { ?>
                <?php if (get_field('photo_with_background_case')) : ?>
                    <?php if ($background_color_case_photo = get_field('background_color_case_photo')) : ?>
                        <img style="background-color: <?php echo esc_html($background_color_case_photo); ?>" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>
                <?php else : ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                <?php endif; ?>
            <?php } ?>


        <?php else : ?>


            <?php if (get_field('vide_from_link_csso')) : ?>

                <?php
                $link = get_field('link_video_csso');
                if ($link) : ?>



                    <?php if (get_field('video_with_background_case')) : ?>
                        <?php if ($background_color_case_video = get_field('background_color_case_video')) : ?>
                            <div class="video-block" style="background-color:<?php echo esc_html($background_color_case_video); ?>">
                                <div class="embed-container">
                                    <?php the_field('link_video_csso'); ?>
                                </div>
                            </div>
                        <?php endif; ?>


                    <?php else : ?>


                        <div class="video-block">
                            <div class="embed-container">
                                <?php the_field('link_video_csso'); ?>
                            </div>
                        </div>
                    <?php endif; ?>

                <?php endif; ?>



            <?php else : ?>

                <?php
                $video_case = get_field('video_case');
                if ($video_case) : ?>
                    <?php if (get_field('video_with_background_case')) : ?>
                        <?php if ($background_color_case_video = get_field('background_color_case_video')) : ?>
                            <div class="video-block" style="background-color:<?php echo esc_html($background_color_case_video); ?>">
                                <video loop playsinline poster autoplay muted class="tm-mb-40">
                                    <source src="<?php echo esc_url($video_case['url']); ?>" <?php echo esc_html($video_case['filename']); ?> type="video/mp4">
                                </video>
                            </div>
                        <?php endif; ?>
                    <?php else : ?>
                        <div class="video-block-none">
                            <video loop playsinline poster autoplay muted class="tm-mb-40">
                                <source src="<?php echo esc_url($video_case['url']); ?>" <?php echo esc_html($video_case['filename']); ?> type="video/mp4">
                            </video>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>

            <?php endif; ?>








        <?php endif; ?>
    </section>
<?php
endif;

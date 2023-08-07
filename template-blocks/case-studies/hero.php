<?
if (isset($block['data']['preview_image_help'])) :    /* rendering in inserter preview  */

    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else :
?>
    <?php $image = get_field('image'); ?>
    <section class="case-studies-hero" style="background-image:url(<?php echo $image['url']; ?>);">
        <div class="case-studies-hero__wrapper">
            <div class="container case-studies-hero__container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="case-studies-hero__heading"><?php the_field('heading'); ?></h1>
                        <?php if (have_rows('categories')) : ?>
                            <ul class="case-studies-hero__categories">
                                <?php while (have_rows('categories')) : the_row(); ?>
                                    <li class="case-studies-hero__category">
                                        <?php the_sub_field('category'); ?>
                                    </li>
                                <?php endwhile; ?>
                            <?php else : ?>
                                <?php // no rows found 
                                ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <a href="<?php the_field('przycik_-_link'); ?>" class="case-studies-hero__btn circle-btn circle-btn--light">
                            Visit Website
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="case-studies-hero__rectangles container"></div>
    </section>
<?php
endif;

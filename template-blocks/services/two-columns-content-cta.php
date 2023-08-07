<?
if (isset($block['data']['preview_image_help'])) :    /* rendering in inserter preview  */

    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else :
?>
    <section id="<?php the_field('section_id'); ?>" class="services-block-two-columns-content-cta">
        <div class="container services-block-two-columns-content-cta__container">
            <div class="row">
                <div class="col-lg-6 services-block-two-columns-content-cta__column services-block-two-columns-content-cta__column--left">
                    <?php $icon = get_field('icon'); ?>
                    <?php if ($icon) { ?>
                        <img class="services-block-two-columns-content-cta__icon" src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
                    <?php } ?>
                    <div class="services-block-two-columns-content-cta__content">
                        <h3 class="services-block-two-columns-content-cta__heading"><?php the_field('heading'); ?></h3>
                        <div class="services-block-two-columns-content-cta__description"><?php the_field('description'); ?></div>
                        <?php $link = get_field('link'); ?>
                        <?php if ($link) { ?>
                            <a class="services-block-two-columns-content-cta__link link link__black link__black--small" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?>
                                <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.7287 17L9.30682 15.5966L15.1605 9.74294H0V7.71169H15.1605L9.30682 1.87646L10.7287 0.45459L19.0014 8.72732L10.7287 17Z" />
                                </svg></a>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-lg-6 services-block-cta services-block-two-columns-content-cta__column services-block-two-columns-content-cta__column--right">
                    <h3 class="services-block-cta__heading">
                        <?php the_field('cta_heading'); ?>
                    </h3>
                    <p class="services-block-cta__description">
                        <?php the_field('cta_description'); ?>
                    </p>
                    <?php $link = get_field('cta_link'); ?>
                    <a href="<?php echo $link['url']; ?>" class="btn btn__white btn__white--transparent services-block-cta__btn"><?php echo $link['title']; ?></a>
                    <div class="services-block-cta__image">
                        <?php $image = get_field('cta_image'); ?>
                        <?php if ($image) { ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
endif;

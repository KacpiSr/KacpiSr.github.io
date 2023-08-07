<?
if (isset($block['data']['preview_image_help'])) :    /* rendering in inserter preview  */

    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else :
?>
    <?php the_field('elements_color'); ?>
    <section id="<?php the_field('section_id'); ?>" class="services-block-two-columns-content-testimonial">
        <div class="container services-block-two-columns-content-testimonial__container">
            <div class="row">
                <div class="col-lg-6 services-block-two-columns-content-testimonial__column services-block-two-columns-content-testimonial__column--left">
                    <?php $icon = get_field('icon'); ?>
                    <?php if ($icon) { ?>
                        <img class="services-block-two-columns-content-testimonial__icon" src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
                    <?php } ?>
                    <div class="services-block-two-columns-content-testimonial__content">
                        <h3 class="services-block-two-columns-content-testimonial__heading"><?php the_field('heading'); ?></h3>
                        <div class="services-block-two-columns-content-testimonial__description"><?php the_field('text'); ?></div>
                        <?php $link = get_field('link'); ?>
                        <?php if ($link) { ?>
                            <a class="services-block-two-columns-content-testimonial__link link link__black link__black--small" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?>
                                <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.7287 17L9.30682 15.5966L15.1605 9.74294H0V7.71169H15.1605L9.30682 1.87646L10.7287 0.45459L19.0014 8.72732L10.7287 17Z" />
                                </svg></a>
                        <?php } ?>
                    </div>
                </div>
                <?php $elementColor = get_field('elements_color'); ?>
                <div class="col-lg-6 services-block-two-columns-content-testimonial__column services-block-two-columns-content-testimonial__column--right colored-element-bg">
                    <div class="row">
                        <div class="col-md-4">
                            <?php $foto = get_field('testimonial_foto'); ?>
                            <?php if ($foto) { ?>
                                <img class="services-block-two-columns-content-testimonial__foto" src="<?php echo $foto['url']; ?>" alt="<?php echo $foto['alt']; ?>" />
                            <?php } ?>
                        </div>
                        <div class="col-md-8">
                            <div class="services-block-two-columns-content-testimonial__person-info">
                                <p class="services-block-two-columns-content-testimonial__name"><?php the_field('testimonial_name'); ?></p>
                                <p class="services-block-two-columns-content-testimonial__position"><?php the_field('testimonial_position'); ?></p>
                            </div>
                            <?php $link = get_field('testimonial_link'); ?>
                            <?php if ($link) { ?>
                                <a class="btn btn__black services-block-two-columns-content-testimonial__btn" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                        <p class="services-block-two-columns-content-testimonial__text"><?php the_field('testimonial_description'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
endif;

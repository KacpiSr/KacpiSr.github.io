<?
if (isset($block['data']['preview_image_help'])) :    /* rendering in inserter preview  */

    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else :
?>
<section id="<?php the_field('section_id'); ?>" class="services-block-two-columns-content-project">
    <div class="container services-block-two-columns-content-project__container">
        <div class="row">
            <div class="col-lg-6 services-block-two-columns-content-project__column services-block-two-columns-content-project__column--left">
                <?php $icon = get_field('icon'); ?>
                <?php if ($icon) { ?>
                    <img class="services-block-two-columns-content-project__icon" src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
                <?php } ?>
                <div class="services-block-two-columns-content-project__content">
                    <h3 class="services-block-two-columns-content-project__heading"><?php the_field('heading'); ?></h3>
                    <div class="services-block-two-columns-content-project__description"><?php the_field('description'); ?></div>
                    <?php $link = get_field('link'); ?>
                    <?php if ($link) { ?>
                        <a class="services-block-two-columns-content-project__link link link__black link__black--small" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?>
                            <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.7287 17L9.30682 15.5966L15.1605 9.74294H0V7.71169H15.1605L9.30682 1.87646L10.7287 0.45459L19.0014 8.72732L10.7287 17Z" />
                            </svg></a>
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-6 services-block-two-columns-content-project__column services-block-two-columns-content-project__column--right">
                <?php $project_link = get_field('project_link'); ?>
                <?php if ($project_link) { ?>
                    <a class="services-block-two-columns-content-project__anchor" href="<?php echo $project_link['url']; ?>" target="<?php echo $project_link['target']; ?>">
                        <?php $project_image = get_field('project_image'); ?>
                        <?php if ($project_image) { ?>
                            <img class="services-block-two-columns-content-project__image" src="<?php echo $project_image['url']; ?>" alt="<?php echo $project_image['alt']; ?>" />
                        <?php } ?>
                        <div class="services-block-two-columns-content-project__title">
                            <?php the_field('project_name'); ?>
                        </div>
                        <div class="services-block-two-columns-content-project__category">
                            <?php the_field('project_category'); ?>
                        </div>
                    </a>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<?php
endif;
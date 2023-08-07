<?
if (isset($block['data']['preview_image_help'])) :    /* rendering in inserter preview  */

    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else :
?>
<section class="case-studies-heading-icon-content">
    <div class="container case-studies-heading-icon-content__container">
        <div class="row">
            <div class="col-12">
                <h1 class="case-studies-heading-icon-content__heading">
                    <?php the_field('heading'); ?>
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="case-studies-heading-icon-content__icon">
                    <?php $icon = get_field('icon'); ?>
                    <?php if ($icon) { ?>
                        <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
                    <?php } ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="case-studies-heading-icon-content__content">
                    <?php the_field('content'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
endif;
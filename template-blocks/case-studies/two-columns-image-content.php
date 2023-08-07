<?
if (isset($block['data']['preview_image_help'])) :    /* rendering in inserter preview  */

    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else :
?>
<section class="case-studies-two-columns-image-content">
    <div class="container case-studies-two-columns-image-content__container">
        <div class="row">
            <div class="col-md-6">
                <div class="case-studies-two-columns-image-content__image">
                    <?php $image = get_field('image'); ?>
                    <?php if ($image) { ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $mage['alt']; ?>" />
                    <?php } ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="case-studies-two-columns-image-content__content">
                    <?php the_field('content'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
endif;
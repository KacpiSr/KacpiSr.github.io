<?
if (isset($block['data']['preview_image_help'])) :    /* rendering in inserter preview  */

    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else :
?>
<section class="case-studies-two-columns-heading-content">
    <div class="container case-studies-two-columns-heading-content__container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="case-studies-two-columns-heading-content__heading">
                    <?php the_field('heading'); ?>
                </h3>
            </div>
            <div class="col-md-6">
                <div class="case-studies-two-columns-heading-content__description">
                    <?php the_field('description'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
endif;
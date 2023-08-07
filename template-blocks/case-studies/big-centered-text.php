<?
if (isset($block['data']['preview_image_help'])) :    /* rendering in inserter preview  */

    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else :
?>
<section class="case-studies-big-centered-text">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="case-studies-big-centered-text__heading">
                    <?php the_field('heading'); ?>
                </h1>
            </div>
        </div>
    </div>
</section>
<?php
endif;

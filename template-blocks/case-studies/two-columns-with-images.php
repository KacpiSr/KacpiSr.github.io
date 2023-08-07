<?
if (isset($block['data']['preview_image_help'])) :    /* rendering in inserter preview  */

    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else :
?>
<section class="case-studies-two-columns-with-images <?php if ( get_field( 'in_container' ) == 1 ) { ?>
    container<?php 
} else { 
 // echo 'false'; 
} ?>">
        <div class="row">
            <?php if (have_rows('images')) : ?>
                <?php while (have_rows('images')) : the_row(); ?>
                    <div class="col-md-6 case-studies-two-columns-with-images__column <?php if ( get_field( 'disable_margins' ) == 1 ) { ?>no-margin<?php } else { } ?>">
                        <?php $image = get_sub_field('image'); ?>
                        <?php if ($image) { ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php } ?>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <?php // no rows found 
                ?>
            <?php endif; ?>
        </div>
</section>
<?php
endif;
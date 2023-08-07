<?
if (isset($block['data']['preview_image_help'])) :    /* rendering in inserter preview  */

    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else :
?>
<section class="case-studies-heading-with-three-columns">
    <div class="container case-studies-heading-with-three-columns__container">
        <div class="row">
            <div class="col-12">
                <h1 class="case-studies-heading-with-three-columns__heading">
                    <?php the_field('heading'); ?>
                </h1>
            </div>
        </div>

        <?php if (have_rows('Column')) : ?>       
                <div class="row">
                    <?php while (have_rows('Column')) : the_row(); ?>
                        <div class="col-md-4">
                        <div class="case-studies-heading-with-three-columns__content">
                        <?php if (get_sub_field('heading')) : ?>
                            <h4>
                                <span><?php the_sub_field('heading'); ?></span></h4>
                            <?php endif; ?>
                            <p><?php the_sub_field('content'); ?></p>  
                            </div>   
                            </div>                 
                    <?php endwhile; ?>
                <?php else : ?>
                    <?php // no rows found 
                    ?>      
            </div>
        <?php endif; ?>
    </div>
</section>
<?php
endif;
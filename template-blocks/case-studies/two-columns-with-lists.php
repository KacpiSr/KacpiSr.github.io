<?
if (isset($block['data']['preview_image_help'])) :    /* rendering in inserter preview  */

    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else :
?>
<section class="case-studies-two-columns-with-lists">
    <div class="container case-studies-two-columns-with-lists__container">
        <div class="row">
            <div class="col-md-6 case-studies-two-columns-with-lists--left">
                <h3 class="case-studies-two-columns-with-lists__heading">
                    <?php the_field('heading1'); ?>
                </h3>
                <div class="case-studies-two-columns-with-lists__list case-studies-two-columns-with-lists__list--1">
                    <?php if (have_rows('list1')) : ?>
                        <ol>
                        <?php while (have_rows('list1')) : the_row(); ?>
                            <li><?php the_sub_field('list1_element'); ?></li>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <?php // no rows found 
                        ?>
                        </ol>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-6 case-studies-two-columns-with-lists--right">
                <h3 class="case-studies-two-columns-with-lists__heading">
                    <?php the_field('heading2'); ?>
                </h3>
                <div class="case-studies-two-columns-with-lists__list case-studies-two-columns-with-lists__list--2">
                    <?php if (have_rows('list2')) : ?>
                        <ol>
                        <?php while (have_rows('list2')) : the_row(); ?>
                           <li><?php the_sub_field('list2_element'); ?></li>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <?php // no rows found 
                        ?>
                        </ol>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
endif;
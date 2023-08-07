<?
if (isset($block['data']['preview_image_help'])) :    /* rendering in inserter preview  */

    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else :
?>
<section class="case-studies-project-info">
    <div class="container case-studies-project-info__container">
        <div class="row">
            <div class="col-md-6">
                <div class="case-studies-project-info-details">
                    <h3 class="case-studies-project-info-details__heading">Client</h3>
                    <p class="case-studies-project-info-details__description"><?php the_field('client_name'); ?></p>

                    <h3 class="case-studies-project-info-details__heading">Industry</h3>
                    <p class="case-studies-project-info-details__description"><?php the_field('industry_name'); ?></p>

                    <h3 class="case-studies-project-info-details__heading">Year</h3>
                    <p class="case-studies-project-info-details__description"><?php the_field('year'); ?></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="case-studies-project-info-scope-of-work">
                <h3 class="case-studies-project-info-scope-of-work__heading">Scope of work</h3>
                    <?php if (have_rows('work_scope')) : ?>
                        <ul class="case-studies-project-info-scope-of-work__list">
                            <?php while (have_rows('work_scope')) : the_row(); ?>
                                <li class="case-studies-project-info-scope-of-work__item">
                                    <?php the_sub_field('category'); ?>
                                </li>
                            <?php endwhile; ?>
                        <?php else : ?>
                            <?php // no rows found 
                            ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
endif;
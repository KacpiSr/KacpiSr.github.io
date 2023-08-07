<?php $case_studies_id = '173'; ?>

<section class="brands">
    <div class="container brands__container">
        <div class="row">
            <div class="col-12">
                <h4 class="brands__heading">
                    <span><?php the_field('heading', $case_studies_id); ?></span>
                    <?php $heading_image = get_field('heading_image', $case_studies_id); ?>
                    <?php if ($heading_image) { ?>
                        <img class="brands__heading-image" src="<?php echo $heading_image['url']; ?>" alt="<?php echo $heading_image['alt']; ?>" />
                    <?php } ?>
                </h4>
            </div>
        </div>
        <div class="row brands__logos-wrapper">
            <div class="col-12">
                <?php if (have_rows('logos', $case_studies_id)) : ?>
                    <ul class="brands__logos">
                        <?php while (have_rows('logos', $case_studies_id)) : the_row(); ?>
                            <li class="brands__logo">
                                <?php $logo = get_sub_field('logo', $case_studies_id); ?>
                                <?php if ($logo) { ?>
                                    <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
                                <?php } ?>
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
</section>
<section class="services-block-cta">
    <div class="container">
        <div class="row">
            <div class="col-8 services-block-cta__column services-block-cta__column--left">
                <h3 class="services-block-cta__heading">
                    <?php the_field('heading'); ?>
                </h3>
                <p class="services-block-cta__description">
                    <?php the_field('description'); ?>
                </p>
                <?php $link = get_field('link'); ?>
                <a href="<?php echo $link['url']; ?>" class="btn btn__white btn__white--transparent services-block-cta__btn"><?php echo $link['title']; ?></a>
            </div>
            <div class="col-4 services-block-cta__column services-block-cta__column--right">
                <div class="services-block-cta__image">
                    <?php $image = get_field('image'); ?>
                    <?php if ($image) { ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
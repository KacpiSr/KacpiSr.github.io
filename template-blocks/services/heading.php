<section id="<?php the_field('id_section'); ?>" class="services-block-heading">
    <div class="container services-block-heading__container">
        <div class="row">
            <div class="col-12">
                <div class="services-block-heading__top">
                    <div class="colored-element-bg-pseudos services-block-heading__count">
                        <?php the_field('number'); ?>
                    </div>
                <h2 class="services-block-heading__title">
                    <?php the_field('heading'); ?>
                </h2>
                </div>
                <h4 class="services-block-heading__subtitle">
                    <?php the_field('sub_heading'); ?>
                </h4>
                <p class="services-block-heading__description">
                    <?php the_field('description'); ?>
                </p>
            </div>
        </div>
    </div>
</section>
<div class="services-block-other-services">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="services-block-other-services__heading">
                    <?php the_field('heading'); ?>
                </h2>
            </div>
        </div>
        <?php if (have_rows('boxes')) : ?>
            <div class="row services-block-other-services__row">
                <?php while (have_rows('boxes')) : the_row(); ?>
                    <div class="col-lg-3 services-block-other-services__column">
                        <svg class="services-block-other-services__element" width="120" height="120" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.62939e-06 120L-2.86134e-06 2.86134e-06L120 -7.62939e-06L7.62939e-06 120Z" fill="<?php the_sub_field('element_color'); ?>" />
                        </svg>
                        <h4 class="services-block-other-services__title">
                            <?php the_sub_field('heading'); ?>
                        </h4>
                        <?php if (have_rows('links')) : ?>
                            <div class="row">
                                <div class="col-12">
                                    <?php while (have_rows('links')) : the_row(); ?>

                                        <?php $link = get_sub_field('link'); ?>
                                        <?php if ($link) { ?>
                                            <a class="services-block-other-services__link" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
                                        <?php } ?>
                                    <?php endwhile; ?>
                                </div>
                            </div>
                        <?php else : ?>
                            <?php // no rows found 
                            ?>
                        <?php endif; ?>
                        <?php $link = get_sub_field('link'); ?>
                        <?php if ($link) { ?>
                            <a class="services-block-other-services__arrow" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>">
                                <svg width="51" height="30" viewBox="0 0 51 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g opacity="0.2">
                                        <line x1="1.31134e-07" y1="15.3711" x2="49" y2="15.3711" stroke="black" stroke-width="3" />
                                        <path d="M35.4361 28.8686L48.8711 15.4336L35.4361 1.99857" stroke="black" stroke-width="3" />
                                    </g>
                                </svg>

                            </a>
                        <?php } ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php else : ?>
            <?php // no rows found 
            ?>
        <?php endif; ?>

    </div>
</div>
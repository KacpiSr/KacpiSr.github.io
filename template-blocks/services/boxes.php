<section id="<?php the_field('section_id'); ?>" class="services-block-boxes">
    <div class="container services-block-boxes__container">
        <?php if (have_rows('boxes')) : ?>
            <div class="row">
                <?php while (have_rows('boxes')) : the_row(); ?>
                    <div class="col-lg-6 col-xl-4 services-block-boxes__column">
                        <?php $icon = get_sub_field('icon'); ?>
                        <?php if ($icon) { ?>
                            <img class="services-block-boxes__icon" src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
                        <?php } ?>
                        <div class="services-block-boxes__content">
                        <h3 class="services-block-boxes__heading"><?php the_sub_field('heading'); ?></h3>
                        <div class="services-block-boxes__description"><?php the_sub_field('description'); ?></div>
                        <?php $link = get_sub_field('link'); ?>
                        <?php if ($link) { ?>
                            <a class="services-block-boxes__link" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?> 
<svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M10.7287 17L9.30682 15.5966L15.1605 9.74294H0V7.71169H15.1605L9.30682 1.87646L10.7287 0.45459L19.0014 8.72732L10.7287 17Z"/>
</svg></a>
                        <?php } ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php else : ?>
            <?php // no rows found 
            ?>
        <?php endif; ?>
    </div>
</section>
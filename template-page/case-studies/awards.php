<section class="case-studies-awards">
    <div class="container">
        <div class="row">
            <div class="col-md-10 case-studies-awards__column case-studies-awards__column--left">
                <h2 class="f-h2--f-60 heading-flag heading-flag--small">
                    <span class="heading-flag__bg">
                        <?php the_field('hp_awards_heading_on_bg', 36); ?>
                    </span>
                    <span class="offset-md-4 heading-flag__text">
                        <?php the_field('hp_awards_heading', 36); ?>
                    </span>
                </h2>
            </div>
            <div class="offset-md-2 col-md-10 case-studies-awards__column case-studies-awards__column--right">
                <div class="case-studies-awards__logos">
                    <?php if (have_rows('hp_awards_logos',36)) : ?>
                        <?php while (have_rows('hp_awards_logos',36)) : the_row(); ?>
                            <?php $hp_awards_logo = get_sub_field('hp_awards_logo',36); ?>
                            <?php if ($hp_awards_logo) { ?>
                                <div class="case-studies-awards__logo">
                                    <img src="<?php echo $hp_awards_logo['url']; ?>" alt="<?php echo $hp_awards_logo['alt']; ?>" />
                                </div>
                            <?php } ?>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <?php // no rows found 
                        ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
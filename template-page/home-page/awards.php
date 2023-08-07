<section class="hp-awards">
    <div class="container">
        <div class="row">
            <div class="offset-md-1 col-md-10">
                <h2 class="f-h2--f-120 heading-flag">
                    <span class="heading-flag__bg" data-speed="0.85">
                        <!-- <span class="gsap-counts" data-number="<?php the_field('hp_awards_heading_on_bg'); ?>">0</span> -->
                        <span class="gsap-counts" data-number="20">0</span>
                    </span>
                    <span class="offset-md-4 offset-3 heading-flag__text">
                        <?php the_field('hp_awards_heading'); ?>
                    </span>
                </h2>
            </div>
            <div class="offset-md-4 col-md-7">
                <div class="hp-awards__logos">
                    <?php if (have_rows('hp_awards_logos')) : ?>
                        <?php while (have_rows('hp_awards_logos')) : the_row(); ?>
                            <?php $hp_awards_logo = get_sub_field('hp_awards_logo'); ?>
                            <?php if ($hp_awards_logo) { ?>
                                <div class="hp-awards__logo ">
                                    <img class="fadeInBatch" src="<?php echo $hp_awards_logo['url']; ?>" alt="<?php echo $hp_awards_logo['alt']; ?>" />
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
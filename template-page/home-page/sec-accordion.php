<section class="hp-accordions">
    <div class="container">
        <div class="row">
            <?php if ($hpan_accordtion_title = get_field('hpan_accordtion_title')) : ?>
                <div class="offset-md-1 col-md-10">
                    <h3 class="fw--700 split-lines-words"><?php echo esc_html($hpan_accordtion_title); ?></h3>
                </div>
            <?php endif; ?>
            <div class="offset-md-1 col-md-10">
                <div class="accordion">
                    <div class="accordion__wrap">
                        <?php if (have_rows('hpan_accordion')) : ?>
                            <?php while (have_rows('hpan_accordion')) :
                                the_row(); ?>
                                <div class="accordion__item fadeInBatch" >
                                    <div class="accordion__title">
                                        <div class="accordion__plusminus"></div>
                                        <?php if ($hpan_title = get_sub_field('hpan_title')) : ?>
                                            <h5><span><?php echo esc_html($hpan_title); ?></span></h5>
                                        <?php endif; ?>
                                    </div>
                                    <?php if ($hpan_content = get_sub_field('hpan_content')) : ?>
                                        <div class="accordion__content">
                                            <?php echo $hpan_content; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
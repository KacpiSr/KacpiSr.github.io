<section class="services-block-testimonial">
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <?php $foto = get_field('foto'); ?>
            <?php if ($foto) { ?>
                <img class="services-block-testimonial__foto" src="<?php echo $foto['url']; ?>" alt="<?php echo $foto['alt']; ?>" />
            <?php } ?>
        </div>
        <div class="col-md-9">
            <p class="services-block-testimonial__description"><?php the_field('text'); ?></p>
            <div class="services-block-testimonial__person-info">
            <p class=" services-block-testimonial__name"><?php the_field('name'); ?></p>
            <p class="services-block-testimonial__position"><?php the_field('stanowisko'); ?></p>
            </div>
            <?php $link = get_field('link'); ?>
            <?php if ($link) { ?>
                <a class="btn btn__black services-block-testimonial__btn" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
            <?php } ?>
        </div>
    </div>
</div>
</section>
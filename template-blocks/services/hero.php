<?
if (isset($block['data']['preview_image_help'])) :    /* rendering in inserter preview  */

    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else :
?>
    <section class="services-block-hero">
        <div class="container services-block-hero__container">
            <div class="row">
                <div class="col-12">
                    <div class="services-block-hero__breadcrumbs">
                        <?php funktional_breadcrumbs('', '', '', true); ?>
                    </div>
                    <h1 class="colored-element-bg-pseudos services-block-hero__heading <?php if (get_field('bigger_heading') == 1) { ?> services-block-hero__heading--big <?php } ?>">
                        <?php the_field('heading'); ?>
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <p class="services-block-hero__description">
                        <?php the_field('description'); ?>
                    </p>
                </div>
                <div class="col-lg-4">
                    <?php $btn = get_field('btn'); ?>
                    <?php if ($btn) { ?>
                        <a class="btn btn__white services-block-hero__btn" href="<?php echo $btn['url']; ?>"><?php echo $btn['title']; ?></a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
<?php
endif;

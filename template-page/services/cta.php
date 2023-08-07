<?php global $fields_from_services_page; ?>

<section class="services-cta">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="services-cta__heading">
                    <?php the_field('services_cta_text',$fields_from_services_page); ?>
                </h3>
                <?php $services_cta_link = get_field('services_cta_link',$fields_from_services_page); ?>
                <?php if ($services_cta_link) { ?>
                    <a class="btn btn__white services-cta__link" href="<?php echo $services_cta_link['url']; ?>" target="<?php echo $services_cta_link['target']; ?>"><?php echo $services_cta_link['title']; ?></a>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="services-cta__rectangle visible--desktop">
        <svg width="1920" preserveAspectRatio="none" height="960" viewBox="0 0 1920 960" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0.000201567 -6.10352e-05L960 -5.22992e-05L960 960L0.000201567 -6.10352e-05Z" fill="#1a1a1a" />
            <path d="M1920 0L960 8.73599e-06L960 960L1920 0Z" fill="#1a1a1a" />
        </svg>

    </div>
</section>
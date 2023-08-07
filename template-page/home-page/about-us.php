<section class="hp-about-us">
    <div class="container">
        <div class="row">
            <div class="offset-md-1 col-10">
                <div class="hp-about-us__top">
                    <h2 class="f-h2--f-150 hp-about-us__heading">
                        We are<br>Funktional
                    </h2>
                    <div class="hp-about-us__logo">
                        <?php echo file_get_contents(get_template_directory_uri() . '/src/img/funktional-logo-big.svg'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="offset-md-1 col-md-10">
                <div class="hp-about-us__video">
                    <video playsinline="" muted="" loop="" id="videoAboutUs" preload="none">
                        <source src="<?php echo get_template_directory_uri(); ?>/dist/video/about-us.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
        <div class="row hp-about-us__wrap-text">
            <div class="offset-md-6 col-md-5">
                <p class="text-lead text-lead--big hp-about-us__text "  data-speed="1.1">
                    Ssenectus duis ultrices a ullamcorper. Bibendum praesent risus dictum nec. Sapien tempor, elementum a habitant adipiscing lorem.
                </p>
            </div>
            <div class="col">
                <div class="hp-about-us__btn--wrapper">
                    <a class="btn btn__white btn__white--transparent hp-about-us__btn" href="#"  data-speed="1.15">
                        About us
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
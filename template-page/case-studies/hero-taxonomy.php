<section class="case-studies-hero">
    <div class="container">
        <div class="row">
            <div class="col-md-12 case-studies-hero__column--left">
                <div class="case-studies-hero__breadcrumbs">
                <?php funktional_breadcrumbs('', '', '', true); ?>
                </div>
                <h4 class="case-studies-hero__pre-heading">Case Studies</h4>
                <h1 class="case-studies-hero__heading case-studies-hero__heading--small"><?php
                $taxonomy = get_queried_object();
                echo  $taxonomy->name;
                ?><span><?php echo $taxonomy->count ?></span></h1>
            </div>
        </div>
    </div>
    <div class="case-studies-hero__triangle"></div>
</section>
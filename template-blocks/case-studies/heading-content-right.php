<?
if (isset($block['data']['preview_image_help'])) :    /* rendering in inserter preview  */

    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else :
?>
<section class="case-heading-content-right"
style ="background-color: <?php $background_question_array = get_field( 'background_question' );
if ( $background_question_array ):
	foreach ( $background_question_array as $background_question_item ):
        if ( $background_question_item == "Tak") {
            the_field( 'background' );
        }
	endforeach;
endif; ?>">
   
    <div class="container case-heading-content-right__container">
        <div class="row">
            <div class="offset-md-6 col-md-6">
            <?php if ( $heading_color_cssnit = get_field( 'heading_color_cssnit' ) ) : ?>
                <h3 style="color: <?php echo esc_html( $heading_color_cssnit ); ?>" class="case-heading-content-right__heading">
                    <?php the_field('heading'); ?>
                </h3>
            <?php endif; ?>
                <p>
                    <?php the_field('content'); ?>
                </p>
            </div>
        </div>
    </div>
</section>
<?php
endif;
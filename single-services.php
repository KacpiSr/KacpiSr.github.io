<?php

get_header();

$elements_color = get_field( 'elements_color' );

?>

<style>
 
 .colored-element {
    color: <?php echo $elements_color ?>;
}

.colored-element svg {
    fill: <?php echo $elements_color ?>;
}

.colored-element-bg {
    background: <?php echo $elements_color ?>;
}

.colored-element-bg-pseudos:after,
.colored-element-bg-pseudos:before {
    border-color: <?php echo $elements_color ?>;
}
.colored-element-gradient:after {
    background: linear-gradient(
          270deg,
          <?php echo $elements_color ?> 36.46%,
          rgba(73, 182, 84, 0) 100%
        );
}

</style>

<?php the_content() ?>
<?php
get_footer();

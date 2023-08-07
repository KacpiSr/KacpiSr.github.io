<?php
function funktional_remove_h1($args)
{
    // Just omit h1 from the list
    $args['block_formats'] = 'Paragraph=p;Heading 2=h2;Heading 3=h3;Heading 4=h4;Heading 5=h5;Heading 6=h6;Pre=pre';
    return $args;
}
add_filter('tiny_mce_before_init', 'funktional_remove_h1');

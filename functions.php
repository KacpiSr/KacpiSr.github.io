<?php

add_theme_support('title-tag');
add_theme_support('post-thumbnails');



/*****************************************************************************************************/
/* INCLUDE SCRIP & ASSETS */
get_template_part('function-catalog/include-script-styles');

/*****************************************************************************************************/
/* MENU REGISTER */
get_template_part('function-catalog/menu-register');

/*****************************************************************************************************/
/* ADMIN AVATAR */
// get_template_part('function-catalog/avatar-change');

/*****************************************************************************************************/
/* SVG TO CMS */
get_template_part('function-catalog/svg-upload');

/*****************************************************************************************************/
/* ACF BLOCKS */
get_template_part('function-catalog/acf-blocks');

/*****************************************************************************************************/
/* ACF STYLING */
// get_template_part('function-catalog/acf-styling');

/*****************************************************************************************************/
/* ACF OPTION PAGES */
get_template_part('function-catalog/acf-options-page');

/*****************************************************************************************************/
/* ACF OPTION PAGES */
get_template_part('function-catalog/breadcrumbs');

/*****************************************************************************************************/
/* WP GUTENBERG WIDTH */
get_template_part('function-catalog/gutenberg-width');

/*****************************************************************************************************/

/* CUSTOM POST TYPE & TAXONOMIES */
get_template_part('function-catalog/custom-post-type');

/*****************************************************************************************************/
/* REMOVE COMMENTS*/
get_template_part('function-catalog/remove-comments');

/*****************************************************************************************************/

/*  REMOVE H1 FROM TINY MCE */
// get_template_part('function-catalog/remove-tiny-h1');

/*****************************************************************************************************/



add_filter('acf/settings/save_json', 'my_acf_json_save_point');
function my_acf_json_save_point($paths)
{
    // update path
    $paths = get_stylesheet_directory() . '/json';
    // return
    return $paths;
    
}

add_filter('acf/settings/load_json', 'my_acf_json_load_point');
function my_acf_json_load_point( $paths ) {
    // remove original path (optional)
    unset($paths[0]);
    // append path
    $paths[] = get_stylesheet_directory() . '/json';
    // return
    return $paths;
}

function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);



// tn Limit Excerpt Length by number of Words
function excerpt($limit)
{
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt) >= $limit) {
        array_pop($excerpt);
        $excerpt = implode(" ", $excerpt) . '...';
    } else {
        $excerpt = implode(" ", $excerpt);
    }
    $excerpt = preg_replace('`[[^]]*]`', '', $excerpt);
    return $excerpt;
}
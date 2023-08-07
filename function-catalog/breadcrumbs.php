<?php

/*

first 2 are for display custom link after home in breadcrumbs
$link - url to page
$name - name of page 

$taxonomy - if you want to display taxonomy in bradcrumbs type slug

true/false - to hide archive link (true for display)

EXAMPLEs:
funktional_breadcrumbs('Knowledge', '/knowledge/', 'blog_cat', false);
funktional_breadcrumbs('Knowledge', '/knowledge/', 'blog_cat', true)
funktional_breadcrumbs('Knowledge', '/knowledge/', '', false);
funktional_breadcrumbs('Knowledge', '', 'blog_cat', true);
funktional_breadcrumbs('Knowledge', '', '', true);
funktional_breadcrumbs('','','', true);
funktional_breadcrumbs('','','', false);

DEFAULT USE: 
funktional_breadcrumbs('','','', true);
*/


// Breadcrumbs
function funktional_breadcrumbs($name, $link, $taxonomy, $show_archive)
{

    // Settings
    $separator = '/';

    // Get the query & post information
    global $post, $wp_query;

    // Do not display on the homepage
    if (!is_front_page()) {

        // Build the breadcrums
        echo '<ul class="breadcrumbs">';

        // Home page
        echo '<li class="breadcrumb__home"><a href="' . get_home_url() . '">' .  file_get_contents(get_template_directory() . '/dist/img/logo-breadcrumbs.svg') . '</a></li>';
        echo '<li class="breadcrumb__separator">' . $separator . '</li>';

        //args
        if (!empty($link) && !empty($name)) {
            echo '<li> <a href="' . get_home_url() . $link . '">' . $name . '</a></li>';
            echo '<li class="breadcrumb__separator">' . $separator . '</li>';
        } else if (empty($link) && !empty($name)) {
            echo '<li >' . $name . '</a></li>';
            echo '<li class="breadcrumb__separator">' . $separator . '</li>';
        }

        if (is_archive() && !is_tax() && !is_category() && !is_tag()) {

            echo '<li class="breadcrumb__current">' . post_type_archive_title($name, false) . '</li>';
        } else if (is_archive() && is_tax() && !is_category() && !is_tag()) {

            // If post is a custom post type
            $post_type = get_post_type();

            // If it is a custom post type display name and link
            if ($post_type != 'post' && $show_archive == true) {

                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);

                echo '<li class="breadcrumb__category"> <a href="' . $post_type_archive . '" >' . $post_type_object->labels->name . '</a></li>';
                echo '<li class="breadcrumb__separator">' . $separator . '</li>';
            }

            $custom_tax_name = get_queried_object()->name;
            echo '<li class="breadcrumb__current">' . $custom_tax_name . '</li>';
        } else if (is_single()) {

            if ($post->post_parent) {

                // If child page, get parents 
                $anc = get_post_ancestors($post->ID);

                // Get parents in the right order
                $anc = array_reverse($anc);

                // Parent page loop
                if (!isset($parents)) $parents = null;
                foreach ($anc as $ancestor) {
                    $parents .= '<li ><a href="' . get_permalink($ancestor) . '" >' . get_the_title($ancestor) . '</a></li>';
                    $parents .= '<li class="breadcrumb__separator">' . $separator . '</li>';
                }

                // Display parent pages
                echo $parents;
            }


            // If post is a custom post type
            $post_type = get_post_type();

            // If it is a custom post type display name and link
            if ($post_type != 'post' && $show_archive == true) {

                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);

                echo '<li class="breadcrumb__category"><a  href="' . $post_type_archive . '" >' . $post_type_object->labels->name . '</a></li>';
                echo '<li class="breadcrumb__separator">' . $separator . '</li>';
            }

            // If it's a custom post type within a custom taxonomy
            $taxonomy_exists = taxonomy_exists($taxonomy);
            if (empty($last_category) && !empty($taxonomy) && $taxonomy_exists) {

                $taxonomy_terms = get_the_terms($post->ID, $taxonomy);
                $cat_id         = $taxonomy_terms[0]->term_id;
                $cat_nicename   = $taxonomy_terms[0]->slug;
                $cat_link       = get_term_link($taxonomy_terms[0]->term_id, $taxonomy);
                $cat_name       = $taxonomy_terms[0]->name;
            }

            // Check if the post is in a category
            if (!empty($last_category)) {
                echo $cat_display;
                echo '<li >' . get_the_title() . '</li>';

                // Else if post is in a custom taxonomy
            } else if (!empty($cat_id)) {

                echo '<li ><a href="' . $cat_link . '" title="' . $cat_name . '">' . $cat_name . '</a></li>';
                echo '<li class="breadcrumb__separator">' . $separator . '</li>';
                echo '<li >' . get_the_title() . '</li>';
            } else {
                echo '<li class="breadcrumb__current">' . get_the_title() . '</li>';
            }
        } else if (is_page()) {

            // Standard page
            if ($post->post_parent) {

                // If child page, get parents 
                $anc = get_post_ancestors($post->ID);

                // Get parents in the right order
                $anc = array_reverse($anc);

                // Parent page loop
                if (!isset($parents)) $parents = null;
                foreach ($anc as $ancestor) {
                    $parents .= '<li><a href="' . get_permalink($ancestor) . '" >' . get_the_title($ancestor) . '</a></li>';
                    $parents .= '<li class="breadcrumb__separator">' . $separator . '</li>';
                }

                // Display parent pages
                echo $parents;

                // Current page
                echo '<li>' . get_the_title() . '</li>';
            } else {

                // Just display current page if not parents
                echo '<li>' . get_the_title() . '</li>';
            }
        } else if (get_query_var('paged')) {

            // Paginated archives
            echo '<li>' . __('Page') . ' ' . get_query_var('paged') . '</li>';
        } else if (is_search()) {

            // Search results page
            echo '<li>Search results</li>';
        } elseif (is_404()) {

            // 404 page
            echo '<li>' . 'Error 404' . '</li>';
        }

        echo '</ul>';
    }
}

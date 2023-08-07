<?php

// ******************
// DISABLE DEFAULT POST
// ******************

function remove_posts_menu()
{
    remove_menu_page('edit.php');
}
add_action('admin_menu', 'remove_posts_menu');



// ******************
// REGISTER CPT
// ******************

function funktional_custom_post_type()
{
    // BLOG CPT
    register_post_type(
        'blog',
        array(
            'labels' => array(
                'name' => __('Blog'),
                'singular_name' => __('Blog')
            ),
            'public' => true,
            'show_in_rest' => true,
            'taxonomies' => array('typeblog', 'categoryblog', 'tagsblog', 'awardedblog', 'flagblog'),
            'has_archive' => true,
            'supports' => array('title', 'editor', 'author', 'category', 'thumbnail', 'excerpt', 'page-attributes', 'post-formats'),
            'hierarchical' => false,
            // 'rewrite' => array('slug' => 'blog'),
        )

    );

    // CASE-STUDIES
    register_post_type(
        'case-studies',
        array(
            'labels' => array(
                'name' => __('Case Studies'),
                'singular_name' => __('Case Studies')
            ),
            'public' => true,
            'show_in_rest' => true,
            'taxonomies' => array('work', 'client'),
            'has_archive' => true,
            'supports' => array('title', 'editor', 'author', 'category', 'thumbnail', 'excerpt', 'page-attributes', 'post-formats'),
            'hierarchical' => false,
            // 'rewrite' => array('slug' => 'case-studies'),
        )

    );

        // SERVICES
        register_post_type(
            'services',
            array(
                'labels' => array(
                    'name' => __('Services'),
                    'singular_name' => __('Services')
                ),
                'public' => true,
                'show_in_rest' => true,
                'has_archive' => true,
                'supports' => array('title', 'editor', 'author', 'category', 'thumbnail', 'excerpt', 'page-attributes', 'post-formats'),
                'hierarchical' => false,
            )
    
        );
}
add_action('init', 'funktional_custom_post_type');



// ******************
// REGISTER TAXONOMIES
// ******************

function funktional_register_taxonomy()
{
    //Type blog
    $type_blog = array(
        'name' => _x('Typ', 'taxonomy general name'),
        'singular_name' => _x('Typ', 'taxonomy singular name'),
        'menu_name' => __('Typ wpisu'),
    );
    register_taxonomy('typeblog', array('funktional_custom_post_type'), array(
        'hierarchical' => true,
        'labels' =>  $type_blog,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'show_in_rest' => true,
        // 'rewrite' => array('slug' => 'blog/tag', 'with_front' => false),
    ));

    //Category blog
    $cat_blog = array(
        'name' => _x('Katergoria', 'taxonomy general name'),
        'singular_name' => _x('Katergoria', 'taxonomy singular name'),
        'menu_name' => __('Kategorie'),
    );
    register_taxonomy('categoryblog', array('funktional_custom_post_type'), array(
        'hierarchical' => true,
        'labels' =>  $cat_blog,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'show_in_rest' => true,
        'rewrite' => array('slug' => 'blog/kategoria', 'with_front' => false),
    ));


    //Tags blog
    $tags_blog = array(
        'name' => _x('Tagi', 'taxonomy general name'),
        'singular_name' => _x('Tag', 'taxonomy singular name'),
        'menu_name' => __('Tagi'),
    );
    register_taxonomy('tagsblog', array('custom_post_type'), array(
        'hierarchical' => true,
        'labels' =>   $tags_blog,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'show_in_rest' => true,
        'rewrite' => array('slug' => 'blog/tag', 'with_front' => false),
    ));

    //Awarded
    $awarded_blog = array(
        'name' => _x('Wyróżnione', 'taxonomy general name'),
        'singular_name' => _x('Wyróżnione', 'taxonomy singular name'),
        'menu_name' => __('Wyróżnione'),
    );
    register_taxonomy('awardedblog', array('custom_post_type'), array(
        'hierarchical' => true,
        'labels' =>   $awarded_blog,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'show_in_rest' => true,
        // 'rewrite' => array('slug' => 'blog/tag', 'with_front' => false),
    ));

    //Flag
    $flag_blog = array(
        'name' => _x('Flaga', 'taxonomy general name'),
        'singular_name' => _x('Flaga', 'taxonomy singular name'),
        'menu_name' => __('Flagi'),
    );
    register_taxonomy('flagblog', array('custom_post_type'), array(
        'hierarchical' => true,
        'labels' =>    $flag_blog,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'show_in_rest' => true,
        // 'rewrite' => array('slug' => 'blog/tag', 'with_front' => false),
    ));


    //Case work
    $work_case = array(
        'name' => _x('Works', 'taxonomy general name'),
        'singular_name' => _x('Work', 'taxonomy singular name'),
        'menu_name' => __('Work'),
    );
    register_taxonomy('work', array('custom_post_type'), array(
        'hierarchical' => true,
        'labels' =>    $work_case,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'show_in_rest' => true,
        'rewrite' => array('slug' => 'case-studies/type-of-work'),
    ));

    //Case client
    $client_case = array(
        'name' => _x('Clients', 'taxonomy general name'),
        'singular_name' => _x('Client', 'taxonomy singular name'),
        'menu_name' => __('Client'),
    );
    register_taxonomy('client', array('custom_post_type'), array(
        'hierarchical' => true,
        'labels' =>    $client_case,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'show_in_rest' => true,
        'rewrite' => array('slug' => 'case-studies/type-of-client'),
    ));
}
add_action('init', 'funktional_register_taxonomy', 0);
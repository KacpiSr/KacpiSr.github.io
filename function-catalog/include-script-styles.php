<?php
function include_my_scripts()
{
    /* STYLES */
    wp_enqueue_style('swiperStyle', get_template_directory_uri() . '/dist/vendors/swiper/swiper-bundle.min.css', array(), '8.4.4', 'all');
    wp_enqueue_style('fancyboxCss', get_template_directory_uri() . '/dist/vendors/fancybox/fancybox.css', array(), '3.5.7', 'all');
    wp_enqueue_style('loco', 'https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1.1/dist/locomotive-scroll.min.css', array(), '3.5.7', 'all');
    // Styles main
    wp_enqueue_style('style', get_template_directory_uri() . '/dist/css/main.css', array(), '1.04', 'all');

    /* SCRIPTS */
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.1.min.js', array(), '3.6.1', true);
    wp_enqueue_script('swiperJs',  get_template_directory_uri() . '/dist/vendors/swiper/swiper-bundle.min.js', array(), '8.4.4', true);
    wp_enqueue_script('fancyboxJs',  get_template_directory_uri() . '/dist/vendors/fancybox/fancybox.js', array(), '3.5.7', true);
    wp_enqueue_script('matchHeight',  get_template_directory_uri() . '/dist/vendors/jquery/mathHeight.js', array(), '0.7.2', true);

    wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js', array(), '3.10.4', true);
    wp_enqueue_script('gaspscroll', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js', array(), '3.10.4', true);


    wp_enqueue_script('gsapscrollSmooth',  get_template_directory_uri() . '/dist/vendors/gsap/ScrollSmoother.min.js', array(), '3.11.3', true);
    wp_enqueue_script('gsapsSplitText',  get_template_directory_uri() . '/dist/vendors/gsap/SplitText.min.js', array(), '3.11.3', true);
    // wp_enqueue_script('gsapsTextPlugin',  get_template_directory_uri() . '/dist/vendors/gsap/TextPlugin.min.js', array(), '3.11.3', true);
    // wp_enqueue_script('animation',  get_template_directory_uri() . '/src/animation/js/ico.js', array(), '1.04', true);
    // wp_enqueue_script('animation-trigger',  get_template_directory_uri() . '/src/animation/js/trigger.js', array(), '1.04', true);

    // Scripts main
    wp_enqueue_script('mainjs',  get_template_directory_uri() . '/dist/js/main.js', array(), '1.04', true);
}

add_action('wp_enqueue_scripts', 'include_my_scripts');;

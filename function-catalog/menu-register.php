<?php
function register_my_menus()
{
    register_nav_menus(array(
        'Main' => esc_html__('Primary')
    ));
    register_nav_menus(array(
        'Mobile' => esc_html__('Mobile')
    ));
    // register_nav_menus(array(
    //     'Main-right' => esc_html__('Secondary')
    // )); 
    // register_nav_menus(array(
    //     'Top' => esc_html__('Top')
    // ));
}
add_action('init', 'register_my_menus');

;?>
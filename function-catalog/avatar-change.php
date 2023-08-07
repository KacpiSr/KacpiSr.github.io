<?php 

function funktional_admin_avatar($args, $id_or_email)
{
    if ($id_or_email == 1) {
        $args['url'] = get_template_directory_uri() . '/dist/img/avatar.jpg';
    }
    if ($id_or_email == 2) {
        $args['url'] = get_template_directory_uri() . '/dist/img/avatar.jpg';
    }
    return $args;
}
add_filter('get_avatar_data', 'funktional_admin_avatar', 100, 2);

;?>
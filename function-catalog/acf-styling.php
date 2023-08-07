<?php
// STYLING ACF IN ADMIN PANEL
function my_acf_admin_head()
{
?>
    <style type="text/css">
        /* .block-library-block__reusable-block-container {
            background: #f0f0f0;
            pointer-events: none;
        } */
    </style>
<?php
}
add_action('acf/input/admin_head', 'my_acf_admin_head');

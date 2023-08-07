<?php

/* REGISTER CATEGORY*/
function example_block_category($categories, $post)
{
    /* ******************* */
    // SAMPLE /  GLOBAL
    /* ******************* */
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'global',
                'title' => 'Global'
            ),
        ),
    );
}
add_filter('block_categories', 'example_block_category', 10, 2);
/* END REGISTER CATEGORY*/



/* ADD BLOCK*/
function funktional_acf_blocks_register()
{
    if (function_exists('acf_register_block_type')) {

        /* ******************* */
        // CASE STUDIES
        /* ******************* */

        /* Case Studies - Heading with two columns */
        acf_register_block_type(array(
            'name'              => 'Case studies - Heading with two columns',
            'title'             => __('Heading with two columns'),
            'render_template'   => 'template-blocks/case-studies/heading-with-two-columns.php',
            'category'          => 'global',
            'icon'              => 'schedule',
            'keywords'          => array('2 columns', 'heading with two columns'),
            'mode'    => 'edit',
            'example'  => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                        'preview_image_help' => '../wp-content/themes/funktional/dist/img/blocks/block-heading-two-columns.jpg',
                    )
                )
            )
        ));

        /* Case Studies - Heading with three columns */
        acf_register_block_type(array(
            'name'              => 'Case studies - Heading with three columns',
            'title'             => __('Heading with three columns'),
            'render_template'   => 'template-blocks/case-studies/heading-with-three-columns.php',
            'category'          => 'global',
            'icon'              => 'schedule',
            'keywords'          => array('3 columns', 'heading with three columns'),
            'mode'    => 'edit',
            'example'  => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                        'preview_image_help' => '../wp-content/themes/funktional/dist/img/blocks/block-three-columns.jpg',
                    )
                )
            )
        ));

        /* Case Studies - Big scrolling text */
        acf_register_block_type(array(
            'name'              => 'Case studies - Big scrolling text',
            'title'             => __('Big scrolling text'),
            'render_template'   => 'template-blocks/case-studies/big-scrolling-text.php',
            'category'          => 'global',
            'icon'              => 'schedule',
            'keywords'          => array('Big text', 'scroll'),
            'mode'    => 'edit',
            'example'  => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                        'preview_image_help' => '../wp-content/themes/funktional/dist/img/blocks/block-big-scrolling-text.jpg',
                    )
                )
            )
        ));

        /* Case Studies - Big centered text */
        acf_register_block_type(array(
            'name'              => 'Case studies - Big centered text',
            'title'             => __('Big centered text'),
            'render_template'   => 'template-blocks/case-studies/big-centered-text.php',
            'category'          => 'global',
            'icon'              => 'schedule',
            'keywords'          => array('Big text', 'centered'),
            'mode'    => 'edit',
            'example'  => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                        'preview_image_help' => '../wp-content/themes/funktional/dist/img/blocks/block-big-centered-text.jpg',
                    )
                )
            )
        ));

        /* Case Studies - 2 columns image - content */
        acf_register_block_type(array(
            'name'              => 'Case studies - 2 columns with lists',
            'title'             => __('Two columns with lists'),
            'render_template'   => 'template-blocks/case-studies/two-columns-with-lists.php',
            'category'          => 'global',
            'icon'              => 'schedule',
            'keywords'          => array('two columns', 'lists', 'ul'),
            'mode'    => 'edit',
            'example'  => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                        'preview_image_help' => '../wp-content/themes/funktional/dist/img/blocks/block-two-columns-with-lists.jpg',
                    )
                )
            )
        ));

        /* Case Studies - 2 columns image - content */
        acf_register_block_type(array(
            'name'              => 'Case studies - 2 columns image content',
            'title'             => __('Two columns image content'),
            'render_template'   => 'template-blocks/case-studies/two-columns-image-content.php',
            'category'          => 'global',
            'icon'              => 'schedule',
            'keywords'          => array('two columns', 'image + content'),
            'mode'    => 'edit',
            'example'  => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                        'preview_image_help' => '../wp-content/themes/funktional/dist/img/blocks/block-two-columns-image-content.jpg',
                    )
                )
            )
        ));

        /* Case Studies - 2 columns content - image */
        acf_register_block_type(array(
            'name'              => 'Case studies - 2 columns content image',
            'title'             => __('Two columns content image'),
            'render_template'   => 'template-blocks/case-studies/two-columns-content-image.php',
            'category'          => 'global',
            'icon'              => 'schedule',
            'keywords'          => array('two columns', 'content + image'),
            'mode'    => 'edit',
            'example'  => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                        'preview_image_help' => '../wp-content/themes/funktional/dist/img/blocks/block-two-columns-content-image.jpg',
                    )
                )
            )
        ));

        /* Case Studies - 2 columns heading - content */
        acf_register_block_type(array(
            'name'              => 'Case studies - 2 columns heading content',
            'title'             => __('Two columns heading content'),
            'render_template'   => 'template-blocks/case-studies/two-columns-heading-content.php',
            'category'          => 'global',
            'icon'              => 'schedule',
            'keywords'          => array('two columns', 'heading + content'),
            'mode'    => 'edit',
            'example'  => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                        'preview_image_help' => '../wp-content/themes/funktional/dist/img/blocks/block-two-columns-heading-content.jpg',
                    )
                )
            )
        ));

        /* Case Studies - 2 columns with images */
        acf_register_block_type(array(
            'name'              => 'Case studies - 2 columns with images',
            'title'             => __('Two columns with images'),
            'render_template'   => 'template-blocks/case-studies/two-columns-with-images.php',
            'category'          => 'global',
            'icon'              => 'schedule',
            'keywords'          => array('images, two columns'),
            'mode'    => 'edit',
            'example'  => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                        'preview_image_help' => '../wp-content/themes/funktional/dist/img/blocks/block-two-columns-with-images.jpg',
                    )
                )
            )
        ));

        /* Case Studies - Hero */
        acf_register_block_type(array(
            'name'              => 'Case studies - hero',
            'title'             => __('Hero for Case Studies'),
            'render_template'   => 'template-blocks/case-studies/hero.php',
            'category'          => 'global',
            'icon'              => 'schedule',
            'keywords'          => array('case studies, hero'),
            'mode'    => 'edit',
            'example'  => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                        'preview_image_help' => '../wp-content/themes/funktional/dist/img/blocks/block-hero.jpg',
                    )
                )
            )
        ));

        /* Case Studies - Project info */
        acf_register_block_type(array(
            'name'              => 'Case studies - Project info',
            'title'             => __('Project info for Case Studies'),
            'render_template'   => 'template-blocks/case-studies/project-info.php',
            'category'          => 'global',
            'icon'              => 'schedule',
            'keywords'          => array('case studies, project info'),
            'mode'    => 'edit',
            'example'  => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                        'preview_image_help' => '../wp-content/themes/funktional/dist/img/blocks/block-project-info.jpg',
                    )
                )
            )
        ));

        /* Case Studies - Heading + image */
        acf_register_block_type(array(
            'name'              => 'Case studies - heading + image',
            'title'             => __('Image for Case Studies'),
            'render_template'   => 'template-blocks/case-studies/heading-image.php',
            'category'          => 'global',
            'icon'              => 'schedule',
            'keywords'          => array('case studies, heading + image'),
            'mode'    => 'edit',
            'example'  => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                        'preview_image_help' => '../wp-content/themes/funktional/dist/img/blocks/block-big-image.jpg',
                    )
                )
            )
        ));

        /* Case Studies - Heading + icon + content */
        acf_register_block_type(array(
            'name'              => 'Case studies - heading + icon + content',
            'title'             => __('Heading with icon and content for Case Studies'),
            'render_template'   => 'template-blocks/case-studies/heading-icon-content.php',
            'category'          => 'global',
            'icon'              => 'schedule',
            'keywords'          => array('case studies, heading with icon and content'),
            'mode'    => 'edit',
            'example'  => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                        'preview_image_help' => '../wp-content/themes/funktional/dist/img/blocks/block-heading-icon-content.jpg',
                    )
                )
            )
        ));

        /* Case Studies - Heading + content - right */
        acf_register_block_type(array(
            'name'              => 'Case studies - heading + content - right',
            'title'             => __('Heading with content on right column for Case Studies'),
            'render_template'   => 'template-blocks/case-studies/heading-content-right.php',
            'category'          => 'global',
            'icon'              => 'schedule',
            'keywords'          => array('case studies, heading with content on right side'),
            'mode'    => 'edit',
            'example'  => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                        'preview_image_help' => '../wp-content/themes/funktional/dist/img/blocks/block-heading-content-on-right-col.jpg',
                    )
                )
            )
        ));

        /* Case Studies - Photo-compare */
        acf_register_block_type(array(
            'name'              => 'Photo-compare',
            'title'             => __('Photo comparison'),
            'render_template'   => 'template-blocks/case-studies/photo-compare.php',
            'category'          => 'global',
            'icon'              => 'schedule',
            'keywords'          => array('photo, compare, comparison'),
            'mode'    => 'edit',
            'example'  => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                        'preview_image_help' => '../wp-content/themes/funktional/dist/img/blocks/services/hero.jpg',
                    )
                )
            )
        ));

        /* ******************* */
        // Services
        /* ******************* */

        /* Services - Hero */
        acf_register_block_type(array(
            'name'              => 'Services - Hero',
            'title'             => __('Hero for Services'),
            'render_template'   => 'template-blocks/services/hero.php',
            'category'          => 'services',
            'icon'              => 'schedule',
            'keywords'          => array('services', 'hero'),
            'mode'    => 'edit',
            'example'  => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                        'preview_image_help' => '../wp-content/themes/funktional/dist/img/blocks/services/hero.jpg',
                    )
                )
            )
        ));

        /* Services - Heading */
        acf_register_block_type(array(
            'name'              => 'Services - Heading',
            'title'             => __('Heading for Services'),
            'render_template'   => 'template-blocks/services/heading.php',
            'category'          => 'services',
            'icon'              => 'schedule',
            'keywords'          => array('services', 'heading'),
            'mode'    => 'edit',
            'example'  => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                        'preview_image_help' => '../wp-content/themes/funktional/dist/img/blocks/services/heading.jpg',
                    )
                )
            )
        ));

        /* Services - Categories */
        acf_register_block_type(array(
            'name'              => 'Services - Categories',
            'title'             => __('Categories for Services'),
            'render_template'   => 'template-blocks/services/categories.php',
            'category'          => 'services',
            'icon'              => 'schedule',
            'keywords'          => array('services', 'categories'),
            'mode'    => 'edit',
            'example'  => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                        'preview_image_help' => '../wp-content/themes/funktional/dist/img/blocks/services/categories.jpg',
                    )
                )
            )
        ));

        /* Services - Boxes */
        acf_register_block_type(array(
            'name'              => 'Services - Boxes',
            'title'             => __('Boxes for Services'),
            'render_template'   => 'template-blocks/services/boxes.php',
            'category'          => 'services',
            'icon'              => 'schedule',
            'keywords'          => array('services', 'boxes'),
            'mode'    => 'edit',
            'example'  => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                        'preview_image_help' => '../wp-content/themes/funktional/dist/img/blocks/services/categories.jpg',
                    )
                )
            )
        ));

        /* Services - CTA */
        acf_register_block_type(array(
            'name'              => 'Services - CTA',
            'title'             => __('CTA for Services'),
            'render_template'   => 'template-blocks/services/cta.php',
            'category'          => 'services',
            'icon'              => 'schedule',
            'keywords'          => array('services', 'cta'),
            'mode'    => 'edit',
            'example'  => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                        'preview_image_help' => '../wp-content/themes/funktional/dist/img/blocks/services/cta.jpg',
                    )
                )
            )
        ));

        /* Services - Testimonial */
        acf_register_block_type(array(
            'name'              => 'Services - Testimonial',
            'title'             => __('Testimonial for Services'),
            'render_template'   => 'template-blocks/services/testimonial.php',
            'category'          => 'services',
            'icon'              => 'schedule',
            'keywords'          => array('services', 'testimonial'),
            'mode'    => 'edit',
            'example'  => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                        'preview_image_help' => '../wp-content/themes/funktional/dist/img/blocks/services/testimonial.jpg',
                    )
                )
            )
        ));

        /* Services - Projects */
        acf_register_block_type(array(
            'name'              => 'Services - Projects',
            'title'             => __('Projects for Services'),
            'render_template'   => 'template-blocks/services/projects.php',
            'category'          => 'services',
            'icon'              => 'schedule',
            'keywords'          => array('services', 'projects'),
            'mode'    => 'edit',
            'example'  => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                        'preview_image_help' => '../wp-content/themes/funktional/dist/img/blocks/services/projects.jpg',
                    )
                )
            )
        ));

        /* Services - Other Services */
        acf_register_block_type(array(
            'name'              => 'Services - Other services',
            'title'             => __('Other services for services'),
            'render_template'   => 'template-blocks/services/other-services.php',
            'category'          => 'services',
            'icon'              => 'schedule',
            'keywords'          => array('services', 'other-services'),
            'mode'    => 'edit',
            'example'  => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                        'preview_image_help' => '../wp-content/themes/funktional/dist/img/blocks/services/other-services.jpg',
                    )
                )
            )
        ));

        /* Services - 2 columns - content - project */
        acf_register_block_type(array(
            'name'              => 'Services - 2 columns - content - project',
            'title'             => __('Services - 2 columns - content - project'),
            'render_template'   => 'template-blocks/services/two-columns-content-project.php',
            'category'          => 'services',
            'icon'              => 'schedule',
            'keywords'          => array('services', 'Services - 2 columns - content - project'),
            'mode'    => 'edit',
            'example'  => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                        'preview_image_help' => '../wp-content/themes/funktional/dist/img/blocks/services/services-2-columns-content-project.png',
                    )
                )
            )
        ));
        /* Services - 2 columns - content - testimonial */
        acf_register_block_type(array(
            'name'              => 'Services - 2 columns - content - testimonial',
            'title'             => __('Services - 2 columns - content - testimonial'),
            'render_template'   => 'template-blocks/services/two-columns-content-testimonial.php',
            'category'          => 'services',
            'icon'              => 'schedule',
            'keywords'          => array('services', 'Services - 2 columns - content - testimonial'),
            'mode'    => 'edit',
            'example'  => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                        'preview_image_help' => '../wp-content/themes/funktional/dist/img/blocks/services/services-2-columns-content-testimonial.png',
                    )
                )
            )
        ));
        /* Services - 2 columns - content - cta */
        acf_register_block_type(array(
            'name'              => 'Services - 2 columns - content - cta',
            'title'             => __('Services - 2 columns - content - cta'),
            'render_template'   => 'template-blocks/services/two-columns-content-cta.php',
            'category'          => 'services',
            'icon'              => 'schedule',
            'keywords'          => array('services', 'Services - 2 columns - content - cta'),
            'mode'    => 'edit',
            'example'  => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                        'preview_image_help' => '../wp-content/themes/funktional/dist/img/blocks/services/services-2-columns-content-cta.png',
                    )
                )
            )
        ));
    }
}
add_action('acf/init', 'funktional_acf_blocks_register');
/* END ADD BLOCK*/
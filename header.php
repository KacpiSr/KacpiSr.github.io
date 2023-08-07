<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- !!!!!!!!! remove bellow after migrate to correct domain !!!!!!!!!!!!!-->
    <meta name="robots" content="noindex, nofollow">
    <!-- !!!!!!!!! remove bellow after migrate to correct domain !!!!!!!!!!!!!-->

    <!-- Google -->
    <meta name="description" content="<?php bloginfo('description'); ?>" />
	<?php $acfTitle = get_field( 'services_hero_heading' ); ?>
	<?php if ( $acfTitle ) { ?>
	<title><?php echo $acfTitle ?></title>
	<?php } ?>
    <!-- Facebook -->
    <meta property="og:title" content="<?php the_title(); ?>">
    <meta property="og:site_name" content="<?php the_title(); ?>">
    <meta property="og:url" content="<?php echo get_home_url(); ?>">
    <meta property="og:description" content="<?php bloginfo('description'); ?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/dist/img/logo.svg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo get_home_url(); ?>">
    <meta property="twitter:title" content="<?php the_title(); ?>">
    <meta property="twitter:description" content="<?php bloginfo('description'); ?>">
    <meta property="twitter:image" content="<?php echo get_template_directory_uri(); ?>/dist/img/logo.svg">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script type="text/javascript">
        var templateUrl = '<?= get_bloginfo("template_url"); ?>';
    </script>
    <!-- styles and scripts in functions.php -->

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- custom-cursor -->
    <button class="custom-cursor"><span class="custom-cursor-text">See case</span></button>



    <header class="header">
        <div class="main-menu">
            <div class="container header__container">
                <div class="row main-menu__row">
                    <div class="col-xl-2 col-10 main-menu-logo__wrapper">
                        <a class="main-menu-logo" href="<?php echo get_home_url(); ?>">
                            <?php $header_logo_light = get_field('header_logo_light', 'option'); ?>
                            <?php if ($header_logo_light) { ?>
                                <img src="<?php echo $header_logo_light['url']; ?>" alt="<?php echo $header_logo_light['alt']; ?>" />
                            <?php } ?>
                        </a>
                    </div>
                    <nav id="main-menu" class="main-menu__nav col-md-8">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'Main',
                            'container' => 'ul'
                        ));
                        ?>
                    </nav>
                    <div class="col-2 burger-menu">
                        <div class="burger-menu__bar">
                            <img src="<?php echo get_template_directory_uri(); ?>/dist/img/burger-icon.svg" alt="">
                        </div>
                        <div class="burger-menu__close">
                            <img src="<?php echo get_template_directory_uri(); ?>/dist/img/icon-close.svg" alt="">
                        </div>
                    </div>

                    <div class="col-md-2 main-menu-link__wrapper">
                        <a class="main-menu-link" href="<?php the_field('header_link', 'option'); ?>">
                            <?php the_field('header_link_text', 'option'); ?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="container main-menu-mobile">
                <div class="main-menu-mobile__overlay"></div>
                <ul class="nav">
                    <li class="nav__item">
                        <a class="nav__link" href="#">Home</a>
                    </li>
                    <li class="nav__item main-menu-mobile__slide">
                        <span class="nav__link" href="#"><?php the_field('main_menu_name_1', 'option'); ?></span><a class="nav__link-to-page" href="#">See all</a>

                        <ul class="nav__sub main-menu-submenu-columns">
                            <li class="no-border"> <span class="nav__link nav__link--no-arrow" href="#"><?php the_field('main_menu_name_1', 'option'); ?></span><a class="nav__link-to-page" href="#">See all</a></li>
                            <li class="no-border">
                                <h4 class="main-menu__heading">
                                    <?php the_field('main_menu_heading', 'option'); ?>
                                </h4>
                            </li>
                            <?php if (have_rows('main_menu_columns', 'option')) : ?>
                                <?php while (have_rows('main_menu_columns', 'option')) : the_row(); ?>
                                    <li class="nav__item main-menu-submenu-column">
                                        <div class="main-menu-submenu-column__heading-wrapper">
                                            <svg width="120" height="120" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M7.62939e-06 120L-2.86134e-06 2.86134e-06L120 -7.62939e-06L7.62939e-06 120Z" fill="<?php the_sub_field('main_menu_column_rectangle_color'); ?>" />
                                            </svg>
                                            <h4 class="main-menu-submenu-column__heading">
                                                <?php the_sub_field('main_menu_column_heading'); ?>
                                            </h4>
                                            <h5 class="main-menu-submenu-column__menu-name"> <?php the_sub_field('main_menu_column_menu_name'); ?></h5>
                                        </div>
                                        <?php if (have_rows('main_menu_column_menu')) : ?>
                                            <ul class="main-menu-submenu-column__menu-list">
                                                <?php while (have_rows('main_menu_column_menu')) : the_row(); ?>
                                                    <li class="main-menu-submenu-column__menu-item"><a class="main-menu-submenu-column__menu-link" href="<?php the_sub_field('main_menu_column_menu_link'); ?>"><?php the_sub_field('main_menu_column_menu_link_text'); ?></a></li>
                                                <?php endwhile; ?>
                                            </ul>
                                        <?php else : ?>
                                            <?php // no rows found 
                                            ?>
                                        <?php endif; ?>
                                        <a href="<?php the_sub_field('main_menu_column_link'); ?>" class="link link__white main-menu-submenu-column__link">Learn more</a>
                                    </li>
                                <?php endwhile; ?>
                            <?php else : ?>
                                <?php // no rows found 
                                ?>
                            <?php endif; ?>
                        </ul>



                    </li>
                </ul>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'Mobile',
                    'menu_class' => 'nav',
                    'add_li_class'  => 'nav__item',
                ));
                ?>
            </div>
            <div class="container main-menu-submenu main-menu-submenu__services">
                <a class="main-menu-submenu__logo" href="<?php echo get_home_url(); ?>">
                    <?php $header_logo_dark = get_field('header_logo_dark', 'option'); ?>
                    <?php if ($header_logo_dark) { ?>
                        <img src="<?php echo $header_logo_dark['url']; ?>" alt="<?php echo $header_logo_dark['alt']; ?>" />
                    <?php } ?>
                </a>

                </a>
                <div class="row">
                    <div class="col-md-3 main-menu-submenu-column--left"></div>
                    <div class="col-md-9 main-menu-submenu-columns__wrapper main-menu-submenu-column--right">
                        <h4 class="main-menu__heading">
                            <?php the_field('main_menu_heading', 'option'); ?>
                        </h4>
                        <div class="main-menu-submenu-columns">
                            <?php if (have_rows('main_menu_columns', 'option')) : ?>
                                <?php while (have_rows('main_menu_columns', 'option')) : the_row(); ?>
                                    <div class="main-menu-submenu-column">
                                        <div class="main-menu-submenu-column__heading-wrapper">
                                            <svg width="120" height="120" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M7.62939e-06 120L-2.86134e-06 2.86134e-06L120 -7.62939e-06L7.62939e-06 120Z" fill="<?php the_sub_field('main_menu_column_rectangle_color'); ?>" />
                                            </svg>
                                            <h4 class="main-menu-submenu-column__heading">
                                                <?php the_sub_field('main_menu_column_heading'); ?>
                                            </h4>
                                        </div>
                                        <h5 class="main-menu-submenu-column__menu-name"> <?php the_sub_field('main_menu_column_menu_name'); ?></h5>
                                        <?php if (have_rows('main_menu_column_menu')) : ?>
                                            <ul class="main-menu-submenu-column__menu-list">
                                                <?php while (have_rows('main_menu_column_menu')) : the_row(); ?>
                                                    <li class="main-menu-submenu-column__menu-item"><a class="main-menu-submenu-column__menu-link" href="<?php the_sub_field('main_menu_column_menu_link'); ?>"><span>/</span><?php the_sub_field('main_menu_column_menu_link_text'); ?></a></li>
                                                <?php endwhile; ?>
                                            </ul>
                                        <?php else : ?>
                                            <?php // no rows found 
                                            ?>
                                        <?php endif; ?>
                                        <a href="<?php the_sub_field('main_menu_column_link'); ?>" class="link link__white main-menu-submenu-column__link">Learn more</a>
                                    </div>
                                <?php endwhile; ?>
                            <?php else : ?>
                                <?php // no rows found 
                                ?>
                            <?php endif; ?>
                        </div>
                        <a target="_blank" href="<?php the_field('main_menu_button_link', 'option'); ?>
" class="btn btn__white--transparent">
                            <?php the_field('main_menu_button_text', 'option'); ?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="container main-menu-submenu main-menu-submenu__knowledge">
                <a class="main-menu-submenu__logo" href="<?php echo get_home_url(); ?>">
                    <?php $header_logo_dark = get_field('header_logo_dark', 'option'); ?>
                    <?php if ($header_logo_dark) { ?>
                        <img src="<?php echo $header_logo_dark['url']; ?>" alt="<?php echo $header_logo_dark['alt']; ?>" />
                    <?php } ?>
                </a>

                </a>
                <div class="row main-menu-posts">
                    <div class="col-md-3 main-menu-posts--left"></div>
                    <div class="col-md-7 main-menu-posts__columns-wrapper main-menu-posts--center">
                        <h2 class="main-menu-posts__heading">
                            <?php the_field('main_menu_heading_1', 'option'); ?>
                        </h2>
                        <?php if (have_rows('main_menu_posts', 'option')) : ?>
                            <div class="row main-menu-posts__columns">
                                <?php while (have_rows('main_menu_posts', 'option')) : the_row(); ?>
                                    <div class="col-md-6 main-menu-posts__column">
                                        <?php $main_menu_post_img = get_sub_field('main_menu_post_img'); ?>
                                        <?php if ($main_menu_post_img) { ?>
                                            <img class="main-menu-posts__image" src="<?php echo $main_menu_post_img['url']; ?>" alt="<?php echo $main_menu_post_img['alt']; ?>" />
                                        <?php } ?>
                                        <h4 class="main-menu-posts__title"><?php the_sub_field('main_menu_post_heading'); ?></h4>
                                        <div class="main-menu-posts__categories">
                                            <?php if (have_rows('main_menu_post_categories')) : ?>
                                                <?php while (have_rows('main_menu_post_categories')) : the_row(); ?>
                                                    <div class="main-menu-posts__category"><?php the_sub_field('main_menu_post_category'); ?></div>
                                                <?php endwhile; ?>
                                            <?php else : ?>
                                                <?php // no rows found 
                                                ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        <?php else : ?>
                            <?php // no rows found 
                            ?>
                        <?php endif; ?>
                        <a target="_blank" href="<?php the_field('main_menu_button_link', 'option'); ?>
" class="btn btn__white--transparent">
                            <?php the_field('main_menu_button_text', 'option'); ?>
                        </a>
                    </div>
                    <div class="col-md-2 main-menu-ebook__wrapper main-menu-posts--right">
                        <div class="main-menu-ebook">
                            <h2 class="main-menu-posts__heading">
                                <?php the_field('main_menu_heading_2', 'option'); ?>
                            </h2>
                            <?php $main_menu_img = get_field('main_menu_img', 'option'); ?>
                            <?php if ($main_menu_img) { ?>
                                <img class="main-menu-posts__image" src="<?php echo $main_menu_img['url']; ?>" alt="<?php echo $main_menu_img['alt']; ?>" />
                            <?php } ?>
                            <h4 class="main-menu-posts__title"><?php the_field('main_menu_heading', 'option'); ?></h4>
                            <br>
                            <a target="_blank" href="<?php the_field('main_menu_button_2_link', 'option'); ?>
" class="btn btn__white--transparent">
                                <?php the_field('main_menu_button_2_text', 'option'); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="header__spacer"></div>

    <!-- PROGRES IN SINGLE PAGE BLOG -->
    <?php if (is_singular('blog')) : ?>
        <div class="progress-header">
            <div class="progress-container">
                <div class="progress-bar" id="progressBar"></div>
            </div>
        </div>
    <?php endif; ?>


    <!-- start gsap smooth -->
    <div id="smooth-wrapper">
        <div id="smooth-content">
            <!-- end start gsap smooth -->

            <div class="border-container">
                <div class="container">
                    <div class="test"></div>
                </div>
            </div>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    
    <?php wp_head(); ?>

    <!-- Theme specific styles -->
    <?php if (get_theme_mod('custom_favicon')): ?>
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo esc_url(get_theme_mod('custom_favicon')); ?>">
    <?php endif; ?>
</head>

<body <?php body_class(); ?> class="home-two">
   <div id="preloader">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
   </div>
 <?php wp_body_open(); ?>
 <header>
    <!-- Header Top Area -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <!-- Left Side -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="header-top-left">
                        <ul>
                            <li>
                                <a href="mailto:support@rstheme.com">
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i> support@rstheme.com
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Right Side -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="social-media-area">
                        <nav>
                            <ul>
                                <li><a href="#" class="active"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                             
                                
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Middle Area -->
    <div class="header-middle-area menu-sticky">
        <div class="container">
            <div class="row">
                <!-- Logo -->
                <div class="col-md-2 col-sm-12 col-xs-12 logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <?php if (get_theme_mod('custom_logo')): ?>
                            <img src="<?php echo esc_url(get_theme_mod('custom_logo')); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
                        <?php else: ?>
                            <img src="https://sportywin.net/wp-content/uploads/2025/07/cropped-utuyui-scaled-1.png" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
                        <?php endif; ?>
                    </a>
                </div>

                <!-- Main Menu -->
                <div class="col-md-10 col-sm-12 col-xs-12 mobile-menu">
                    <div class="main-menu">
                        <a class="rs-menu-toggle"><i class="fa fa-bars"></i>Menu</a>

                        <nav class="rs-menu">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'primary',
                                'menu_class' => 'nav-menu',
                                'container' => false,
                            ));
                            ?>
                        </nav>

                        <!-- Header Search -->
                        <div class="search">
                            <a class="rs-search" data-target=".search-modal" data-toggle="modal" href="#">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
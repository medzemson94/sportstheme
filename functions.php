<?php

/**
 * Theme Functions
 * Author: Menounga Medzeme Loic Evans
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

// ------------------------------
// 1. Load Theme Setup
// ------------------------------
require_once get_template_directory() . '/inc/setup.php';

// ------------------------------
// 2. Enqueue Styles and Scripts
// ------------------------------
require_once get_template_directory() . '/inc/enqueue.php';

// ------------------------------
// 3. Register Custom Post Types
// ------------------------------
require_once get_template_directory() . '/inc/custom-post-types.php';

// ------------------------------
// 4. Register ACF Field Groups (optional, for local PHP)
if (function_exists('acf_add_local_field_group')) {
    require_once get_template_directory() . '/inc/acf-fields.php';
}

function mytheme_enqueue_assets() {
    $template_uri = get_template_directory_uri();

    // CSS
    wp_enqueue_style('bootstrap-css', $template_uri . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome', $template_uri . '/assets/css/font-awesome.min.css');
    wp_enqueue_style('animate', $template_uri . '/assets/css/animate.css');
    wp_enqueue_style('rsmenu-main', $template_uri . '/assets/css/rsmenu-main.css');
    wp_enqueue_style('rsmenu-transitions', $template_uri . '/assets/css/rsmenu-transitions.css');
    wp_enqueue_style('hover', $template_uri . '/assets/css/hover-min.css');
    wp_enqueue_style('magnific-popup', $template_uri . '/assets/css/magnific-popup.css');
    wp_enqueue_style('owl-carousel', $template_uri . '/assets/css/owl.carousel.css');
    wp_enqueue_style('slick', $template_uri . '/assets/css/slick.css');
    wp_enqueue_style('responsive', $template_uri . '/assets/css/responsive.css');
    wp_enqueue_style('sportthemecss', $template_uri .'/assets/css/style.css', array(), '1.0.0', 'all');
    // JS
   
    wp_enqueue_script('jquery-ui', $template_uri . '/assets/js/jquery-ui.min.js', array('jquery'), null, true);
    wp_enqueue_script('bootstrap-js', $template_uri . '/assets/js/bootstrap.min.js', array('jquery'), null, true);
    wp_enqueue_script('rsmenu-main', $template_uri . '/assets/js/rsmenu-main.js', array('jquery'), null, true);
    wp_enqueue_script('meanmenu', $template_uri . '/assets/js/jquery.meanmenu.js', array('jquery'), null, true);
    wp_enqueue_script('wow', $template_uri . '/assets/js/wow.min.js', array('jquery'), null, true);
    wp_enqueue_script('slick', $template_uri . '/assets/js/slick.min.js', array('jquery'), null, true);
    wp_enqueue_script('masonry', $template_uri . '/assets/js/masonry.js', array('jquery'), null, true);
    wp_enqueue_script('owl-carousel', $template_uri . '/assets/js/owl.carousel.min.js', array('jquery'), null, true);
    wp_enqueue_script('magnific-popup', $template_uri . '/assets/js/jquery.magnific-popup.js', array('jquery'), null, true);
    wp_enqueue_script('main', $template_uri . '/assets/js/main.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_assets');
function yourtheme_setup() {
    // Enable theme menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'yourtheme'),
    ));
}
add_action('after_setup_theme', 'yourtheme_setup');

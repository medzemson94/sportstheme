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
add_theme_support('post-thumbnails');

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
// Register ACF Blocks
add_action('init', 'cm_sporty_register_acf_blocks');
function cm_sporty_register_acf_blocks() {
    if (function_exists('register_block_type')) {
        register_block_type(get_template_directory() . '/blocks/cm-sporty-bookmakers');
    }
}

// Add ACF Fields for the block
add_action('acf/init', 'cm_sporty_bookmaker_block_fields');
function cm_sporty_bookmaker_block_fields() {
    acf_add_local_field_group(array(
        'key' => 'group_cm_sporty_bookmaker',
        'title' => 'CM Sporty Bookmaker Block',
        'fields' => array(
            array(
                'key' => 'field_cm_sporty_block_title',
                'label' => 'Block Title',
                'name' => 'block_title',
                'type' => 'text',
                'default_value' => 'Meilleurs bookmakers',
            ),
            array(
                'key' => 'field_cm_sporty_disclaimer',
                'label' => 'Disclaimer Text',
                'name' => 'disclaimer_text',
                'type' => 'text',
                'default_value' => '18+ | Annonce publicitaire | Jouer comporte des risques',
            ),
            array(
                'key' => 'field_cm_sporty_bookmaker_rows',
                'label' => 'Bookmaker Rows',
                'name' => 'bookmaker_rows',
                'type' => 'repeater',
                'instructions' => 'Add multiple rows of bookmakers. Each row can contain multiple bookmakers.',
                'sub_fields' => array(
                    array(
                        'key' => 'field_cm_sporty_row_title',
                        'label' => 'Row Title',
                        'name' => 'row_title',
                        'type' => 'text',
                        'placeholder' => 'e.g., Top Bookmakers, New Bookmakers, etc.',
                    ),
                    array(
                        'key' => 'field_cm_sporty_bookmakers',
                        'label' => 'Bookmakers in this row',
                        'name' => 'bookmakers',
                        'type' => 'repeater',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_cm_sporty_bookmaker_name',
                                'label' => 'Bookmaker Name',
                                'name' => 'bookmaker_name',
                                'type' => 'text',
                                'required' => 1,
                            ),
                            array(
                                'key' => 'field_cm_sporty_logo',
                                'label' => 'Logo',
                                'name' => 'logo',
                                'type' => 'image',
                                'return_format' => 'array',
                                'preview_size' => 'thumbnail',
                                'library' => 'all',
                            ),
                            array(
                                'key' => 'field_cm_sporty_rating',
                                'label' => 'Rating',
                                'name' => 'rating_score',
                                'type' => 'number',
                                'min' => 0,
                                'max' => 10,
                                'step' => 0.1,
                                'default_value' => 9.0,
                            ),
                            array(
                                'key' => 'field_cm_sporty_bonus',
                                'label' => 'Bonus',
                                'name' => 'bonus_amount',
                                'type' => 'text',
                                'placeholder' => 'e.g., 100€',
                            ),
                            array(
                                'key' => 'field_cm_sporty_is_featured',
                                'label' => 'Featured',
                                'name' => 'is_featured',
                                'type' => 'true_false',
                                'default_value' => 0,
                            ),
                            array(
                                'key' => 'field_cm_sporty_features',
                                'label' => 'Features',
                                'name' => 'features',
                                'type' => 'textarea',
                                'instructions' => 'One feature per line',
                                'rows' => 3,
                            ),
                            array(
                                'key' => 'field_cm_sporty_promo_code',
                                'label' => 'Promo Code',
                                'name' => 'promo_code',
                                'type' => 'text',
                                'placeholder' => 'e.g., STYVIP',
                            ),
                            array(
                                'key' => 'field_cm_sporty_cta_link',
                                'label' => 'CTA Link',
                                'name' => 'cta_link',
                                'type' => 'url',
                                'placeholder' => 'https://bookmaker.com',
                            ),
                            array(
                                'key' => 'field_cm_sporty_review_link',
                                'label' => 'Review Link',
                                'name' => 'review_link',
                                'type' => 'url',
                                'placeholder' => '/avis-bookmaker',
                            ),
                        ),
                        'min' => 1,
                        'layout' => 'block',
                        'button_label' => 'Add Bookmaker',
                    ),
                ),
                'min' => 1,
                'layout' => 'block',
                'button_label' => 'Add Row',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/cm-sporty-bookmakers',
                ),
            ),
        ),
        'position' => 'normal',
        'style' => 'default',
    ));
}
<?php
define('ESHOP_DEV_MODE', true);

$path = get_theme_file_path();

// Enqueue Styles CSS & JS
include( $path.'/functions/enqueue.php');
add_action('wp_enqueue_scripts', 'eshop_enqueue_styles');

// Add Theme Support
include( $path.'/functions/support.php');
add_action('after_setup_theme', 'eshop_theme_support');

// Walker Nav Menu
include( $path.'/functions/primary_nav_walker.php');
include( $path.'/functions/front_categories_nav_walker.php');

// Load Posts Ajax on homepage
include( $path.'/functions/load_posts_on_homepage.php');
add_action('wp_ajax_eshop_load_posts_homepage', 'eshop_load_posts_on_homepage');

// Customizer API
include($path.'/customizer/settings/topbar_settings.php');
include($path.'/customizer/sections.php');
include($path.'/customizer/customizer.php');
add_action('customize_register','eshop_customize_register');


































// Woocommerce Breadcrumb
include( $path.'/functions/woo_functions.php');
add_filter( 'woocommerce_breadcrumb_defaults', 'my_change_breadcrumb_delimiter' );

// Woocommerce Remove Actions
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_output_all_notices', 10 );
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );

// Woocommerce Add Actions after Removing
add_action( 'eshop_add_to_cart_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
add_action( 'eshop_shop_notices', 'woocommerce_output_all_notices', 10 );

// Woocommerce Minicart contents Ajax
add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );
add_filter( 'woocommerce_add_to_cart_fragments', 'eshop_minicart_add_to_cart_fragment_ajax' );



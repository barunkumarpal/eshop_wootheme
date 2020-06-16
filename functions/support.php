<?php
function eshop_theme_support(){

    // Title Tag on head
    add_theme_support('title-tag');


    // Woocommerce
    add_theme_support('woocommerce');

    // Menu
    add_theme_support('menus');

        // Menu Locations
        register_nav_menus(
            [
                'primary' => __('Primary Menu', 'eshop'),
                'secondary' => __('Footer Menu', 'eshop'),
                'front_category' => __('Front Page Category Menu', 'eshop')
            ]
        );

    // Custom Logo
    add_theme_support('custom-logo');
}
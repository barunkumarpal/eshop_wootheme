<?php

function eshop_enqueue_styles(){ 
    $ver = ESHOP_DEV_MODE ? time(): false;  
    $src = get_theme_file_uri();
   
    // CSS
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'style_min', $src.'/css/style.min.css', [], $ver, $media = 'all' );

    // wp_enqueue_style( 'web_font', 'https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap', [], $ver, $media = 'all' );
    
    // wp_enqueue_style( 'bootstrap', $src.'/css/bootstrap.css', [], $ver, $media = 'all' );
    // wp_enqueue_style( 'magnific-popup', $src.'/css/magnific-popup.min.css', [], $ver, $media = 'all' );
    // wp_enqueue_style( 'font-awesome', $src.'/css/font-awesome.css', [], $ver, $media = 'all' );
    // wp_enqueue_style( 'jquery_fancybox', $src.'/css/jquery.fancybox.min.css', [], $ver, $media = 'all' );
    // wp_enqueue_style( 'themify-icons', $src.'/css/themify-icons.css', [], $ver, $media = 'all' );
    // wp_enqueue_style( 'niceselect', $src.'/css/niceselect.css', [], $ver, $media = 'all' );
    // wp_enqueue_style( 'animate', $src.'/css/animate.css', [], $ver, $media = 'all' );
    // wp_enqueue_style( 'flex-slider', $src.'/css/flex-slider.min.css', [], $ver, $media = 'all' );
    // wp_enqueue_style( 'owl-carousel', $src.'/css/owl-carousel.css', [], $ver, $media = 'all' );
    // wp_enqueue_style( 'slicknav', $src.'/css/slicknav.min.css', [], $ver, $media = 'all' );
   
    // wp_enqueue_style( 'main_style', $src.'/css/style.css', [], $ver, $media = 'all' );
    // wp_enqueue_style( 'reset', $src.'/css/reset.css', [], $ver, $media = 'all' );
    // wp_enqueue_style( 'responsive', $src.'/css/responsive.css', [], $ver, $media = 'all' );

    // JS
    wp_enqueue_script( 'jquery');

    // wp_enqueue_script( 'main_jquery', $src.'/js/jquery.min.js', [], $ver, true );

     


    // wp_enqueue_script( 'jquery-migrate', $src.'/js/jquery-migrate-3.0.0.js', [], $ver, true );
    // wp_enqueue_script( 'jquery-ui', $src.'/js/jquery-ui.min.js', [], $ver, true );
    // wp_enqueue_script( 'popper', $src.'/js/popper.min.js', [], $ver, true );
    // wp_enqueue_script( 'main_bootstrap', $src.'/js/bootstrap.min.js', [], $ver, true );
    // wp_enqueue_script( 'colors', $src.'/js/colors.js', [], $ver, true );
    // wp_enqueue_script( 'slicknav_min', $src.'/js/slicknav.min.js', [], $ver, true );
    // wp_enqueue_script( 'main_owl-carousel', $src.'/js/owl-carousel.js', [], $ver, true );
    // wp_enqueue_script( 'magnific-popup_js', $src.'/js/magnific-popup.js', [], $ver, true );
    // wp_enqueue_script( 'main_waypoints', $src.'/js/waypoints.min.js', [], $ver, true );
    // wp_enqueue_script( 'finalcountdown', $src.'/js/finalcountdown.min.js', [], $ver, true );
    // wp_enqueue_script( 'main_nicesellect', $src.'/js/nicesellect.js', [], $ver, true );
    // wp_enqueue_script( 'main_flex-slider', $src.'/js/flex-slider.js', [], $ver, true );
    // wp_enqueue_script( 'main_scrollup', $src.'/js/scrollup.js', [], $ver, true );
    // wp_enqueue_script( 'onepage-nav', $src.'/js/onepage-nav.min.js', [], $ver, true );
    // wp_enqueue_script( 'easing', $src.'/js/easing.js', [], $ver, true );
    // wp_enqueue_script( 'active', $src.'/js/active.js', [], $ver, true );

    wp_enqueue_script( 'all_min_js', $src.'/js/all.min.js', [], $ver, true );
    wp_enqueue_script( 'custom_js', $src.'/custom.js', ['jquery'], '1.0.0', true );


   // AJAX URL
   wp_localize_script('custom_js', 'eshop_wp_ajax_obj', [ 
    'ajax_url' => admin_url('admin-ajax.php'),
    'home_url' => home_url('/')
    ]);
    
}
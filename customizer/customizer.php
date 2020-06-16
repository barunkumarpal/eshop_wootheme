<?php

function eshop_customize_register($wp_customize){

    // Panel Theme Options
    $wp_customize->add_panel(
        'theme_options', 
        array(
            'title' => __( 'Theme Options', 'eshop' ),   
            'description' => '<p>Theme Options</p>',         
            'priority' => 160
          )
    );

    // Sections
    eshop_customize_sections($wp_customize);
  
    // Settings
    eshop_customize_settings($wp_customize);
}
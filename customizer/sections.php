<?php

function eshop_customize_sections($wp_customize){
    $wp_customize->add_section( 
        'eshop_contacts', 
        array(
            'title' => __( 'Contacts' ),            
            'panel' => 'theme_options',
            'priority' => 160,        
        ) );
}
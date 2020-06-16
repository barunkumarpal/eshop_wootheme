<?php
function eshop_customize_settings($wp_customize){
    // Setting
    $wp_customize->add_setting(
        'eshop_contact',
        []
    );

    // Control
    $wp_customize->add_control( 
        'setting_id', 
        array(
            'label' => __( 'Contact Number', 'eshop' ),
            'type' => 'text',            
            'section' => 'eshop_contacts',          
            'settings' => 'eshop_contact'
        )
    );
}
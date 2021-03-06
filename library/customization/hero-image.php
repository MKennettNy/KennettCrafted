<?php
$wp_customize->add_section('kc_hero', array(
        'title' => __('Hero image
        '), 
        'priority' => 30
    ));

$wp_customize->add_setting('kc_hero_image', array(
    'capability' => 'edit_theme_options', 
    'default-image' => get_template_directory_uri() . 'wp-content/themes/jewellery/src/assets/images/Kennett-home-1600x700.jpg',
));

// $wp_customize->add_control('ce_header_image_control', array(
//     'type' => 'image-picker',
//     'section' => 'upc_image',
//     'settings' => 'upc_image_front_page',
//     'label' => __('Hero image')
//     ));


$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'kc_hero',
        array(
            'label'      => __( 'change_hero', 'theme_name' ),
            'section'    => 'kc_hero',
            'settings'   => 'kc_hero_image',
            // 'context'    => 'your_setting_context' 
        )
    )
);
   
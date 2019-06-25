<?php
$wp_customize->add_section('kc_er', array(
        'title' => __('Engagement Rings Info
        '), 
        'priority' => 30
    ));

    $wp_customize->add_setting('kc_er_info', array(
        'capability' => 'edit_theme_options', 
        'default' => __('we\'d love to hear from you')
    ));

$wp_customize->add_control('kc_er_blurb_control', array(
    'type' => 'textarea',
    'section' => 'kc_er',
    'settings' => 'kc_er_info',
    'label' => __('Blurb')
    ));
   
<?php
$wp_customize->add_section('kc_wr', array(
        'title' => __('Wedding Rings Info
        '), 
        'priority' => 30
    ));

    $wp_customize->add_setting('kc_wr_info', array(
        'capability' => 'edit_theme_options', 
        'default' => __('we\'d love to hear from you')
    ));

$wp_customize->add_control('kc_wr_blurb_control', array(
    'type' => 'textarea',
    'section' => 'kc_wr',
    'settings' => 'kc_wr_info',
    'label' => __('Blurb')
    ));
   
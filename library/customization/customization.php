<?php
function ce_customize_register($wp_customize){
    
    require_once get_template_directory() . '/library/customization/hero-image.php';
    require_once get_template_directory() . '/library/customization/contact-background.php';
    
    
}

add_action('customize_register', 'ce_customize_register');
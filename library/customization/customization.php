<?php
function ce_customize_register($wp_customize){
    
    require_once get_template_directory() . '/library/customization/hero-image.php';
    require_once get_template_directory() . '/library/customization/wedding-rings-info.php';
    require_once get_template_directory() . '/Library/customization/engagement-rings-info.php';
    
    
}

add_action('customize_register', 'ce_customize_register');
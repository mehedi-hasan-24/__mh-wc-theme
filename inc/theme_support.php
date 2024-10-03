<?php

// This will manage the actions and support of default wp theme...
function __mh_wc_theme_add_theme_support(){
    
    add_theme_support('custom-logo', array(
        "height" => 90,
        "width" => 90,
        "flex_width" => true,
        "flex_height" => true,
    ));
    add_theme_support('post-thumbnails');
    add_theme_support( 'widgets' );
}

add_action("after_setup_theme", "__mh_wc_theme_add_theme_support");
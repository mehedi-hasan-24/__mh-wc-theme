<?php
/*
* My Theme Function
*/

function __mh_wc_theme_enqueue_styles(){
    wp_enqueue_style('__mh-wc-theme-style', get_template_directory_uri().'/style.css', array(), '1.0');
    wp_enqueue_style('__mh-wc-theme-tailwind-style', get_template_directory_uri().'/tw-output.css', array(), '1.0');
    wp_enqueue_style('__mh-wc-theme-bootstrap-style', get_template_directory_uri().'/assets/css/bootstrap', array(), '1.0');
    
}
add_action('wp_enqueue_scripts', "__mh_wc_theme_enqueue_styles");

	


<?php
/*
* My Theme Function
*/

function __mh_wc_theme_enqueue_styles(){
    // CSS
    wp_enqueue_style('__mh-wc-theme-style', get_template_directory_uri().'/style.css', array(), '1.0');
    wp_enqueue_style('__mh-wc-theme-tailwind-style', get_template_directory_uri().'/tw-output.css', array(), '1.0');
    // wp_enqueue_style('__mh-wc-theme-bootstrap-style', get_template_directory_uri().'/assets/css/bootstrap', array(), '1.0');
    wp_enqueue_style( '__mh-wc-theme-animatecss', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', array(), '4.1.1');
    wp_enqueue_style( '__mh-wc-theme-font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css' );
    
    // JS
    // if (!is_admin()) { // Ensures jQuery is not loaded in the admin panel
    //     wp_enqueue_script('jquery');
    // }
    wp_enqueue_script( '__mh-wc-theme-gsap-js',  get_template_directory_uri().'/assets/js/libs/gsap/gsap.min.js', array(), false, true );
    wp_enqueue_script( '__mh-wc-theme-gsap-st', get_template_directory_uri().'/assets/js/libs/gsap/ScrollTrigger.min.js', array('__mh-wc-theme-gsap-js'), false, true );
    wp_enqueue_script( '__mh-wc-theme-gsap-js2', get_template_directory_uri() . '/assets/js/utils/gsap_utils.js', array('__mh-wc-theme-gsap-js'), false, true );
    wp_enqueue_script( '__mh-wc-theme-fa', 'https://kit.fontawesome.com/801d645c84.js', array(), false, true );
    
    
}
add_action('wp_enqueue_scripts', "__mh_wc_theme_enqueue_styles");

	


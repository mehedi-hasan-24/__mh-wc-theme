<?php
/*
* Add woocommerce support to the theme
*/

//This File will add the necessary plugin related to the woocommerce
function __mh_wc_theme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' ); //  Activate the initial supports of woocommerce
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );

        
}

add_action( 'after_setup_theme', '__mh_wc_theme_add_woocommerce_support' );

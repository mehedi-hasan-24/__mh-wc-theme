<?php
/*
* My Theme Function
*/

function __mh_wc_theme_enqueue_styles()
{
    // CSS
    wp_enqueue_style('__mh-wc-theme-style', get_template_directory_uri() . '/style.css', array(), '1.0');
    wp_enqueue_style('__mh-wc-theme-tailwind-style', get_template_directory_uri() . '/tw-output.css', array(), '1.0');
    // wp_enqueue_style('__mh-wc-theme-bootstrap-style', get_template_directory_uri().'/assets/css/bootstrap', array(), '1.0');
    wp_enqueue_style('__mh-wc-theme-animatecss', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', array(), '4.1.1');
    wp_enqueue_style('__mh-wc-theme-font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css', array(), '6.0.0');
    wp_enqueue_style('__mh-wc-theme-swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '6.0.0');
    wp_enqueue_style('__mh-wc-theme-no-ui-slider', 'https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.8.1/nouislider.css', array(), '15.8.1');


    // JS
    if (!is_admin()) { // Ensures jQuery is not loaded in the admin panel
        wp_enqueue_script('jquery');
    }
    wp_enqueue_script('__mh-wc-theme-gsap-js', get_template_directory_uri() . '/assets/js/libs/gsap/gsap.min.js', array(), false, true);
    wp_enqueue_script('__mh-wc-theme-gsap-st', get_template_directory_uri() . '/assets/js/libs/gsap/ScrollTrigger.min.js', array('__mh-wc-theme-gsap-js'), false, true);
    wp_enqueue_script('__mh-wc-theme-gsap-js2', get_template_directory_uri() . '/assets/js/utils/gsap_utils.js', array('__mh-wc-theme-gsap-js'), false, true);
    wp_enqueue_script('__mh-wc-theme-fa', 'https://kit.fontawesome.com/801d645c84.js', array(), false, true);
    wp_enqueue_script('__mh-wc-theme-swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), false, true);
    wp_enqueue_script('__mh-wc-theme-swiper-js-utils', get_template_directory_uri() . '/assets/js/utils/swiper.js', array("__mh-wc-theme-swiper-js"), false, true);
    wp_enqueue_script('__mh-wc-theme-no-ui-slider', 'https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.8.1/nouislider.min.js', array("jquery"), false, true);
    wp_enqueue_script('__mh-wc-theme-price-range-slider', get_template_directory_uri() . '/assets/js/utils/price-slider.js', array("__mh-wc-theme-no-ui-slider"), false, true);


    if (class_exists('WooCommerce')) {
        global $wpdb;
        $currency_symbol = get_woocommerce_currency_symbol();
        // Get the maximum price of products
        $products = get_posts(array(
            'post_type' => 'product',
            'post_status' => 'publish',
            'orderby' => 'meta_value_num',
            'meta_key' => '_price',
            'posts_per_page' => -1,
        ));

        $highest = $products[array_key_first($products)];
        $lowest = $products[array_key_last($products)];

        $highest_price = get_post_meta($highest->ID, '_price', true);
        $lowest_price = get_post_meta($lowest->ID, '_price', true);

        $max_price = $wpdb->get_var("SELECT MAX(meta_value + 0) FROM {$wpdb->postmeta} WHERE meta_key='_price'");

        // Pass the max price to the custom JS file
        wp_localize_script('__mh-wc-theme-price-range-slider', 'productPriceData', array(
            'maxPrice' => $max_price,
            'currencySymbol' => $currency_symbol,
        ));
    }


}

add_action('wp_enqueue_scripts', "__mh_wc_theme_enqueue_styles");

	


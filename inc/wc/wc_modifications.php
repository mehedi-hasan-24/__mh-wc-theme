<?php



remove_action("woocommerce_sidebar", "woocommerce_get_sidebar");

function before_main_content_open_div(): void
{
    echo "<div class='before-main-content'>";
}
add_action("woocommerce_before_main_content", "before_main_content_open_div", 5);

function after_main_content_close_div(): void
{
    echo "</div>";
}
add_action("woocommerce_after_main_content", "after_main_content_close_div", 5);

add_filter('woocommerce_loop_add_to_cart_link', 'add_custom_class_to_cart_button', 10, 2);
function add_custom_class_to_cart_button($button, $product) {
    // Use a regular expression to match the class attribute
    if (preg_match('/class="([^"]*)"/', $button, $matches)) {
        // Extract the classes string
        $existing_classes = $matches[1];

        // Append your custom class to the existing classes
        $new_classes = $existing_classes . 'add-to-cart-button-shop-page';

        // Replace the old class attribute with the new one
        $button = str_replace($matches[1], $new_classes, $button);
    }


    return $button;
}

function custom_body_classes($classes) {
    // Add a custom class
    $classes[] = '__mh-wc-theme-body';

    // Add class based on specific conditions, e.g., if it's a WooCommerce page
    if (is_woocommerce()) {
        $classes[] = 'woocommerce-page';
    }

    return $classes;
}

add_filter('body_class', 'custom_body_classes');





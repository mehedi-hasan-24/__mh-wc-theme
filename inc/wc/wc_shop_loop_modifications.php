<?php
// Add opening div before the product list
add_action('woocommerce_before_shop_loop', 'wrap_product_list_start', 35);
function wrap_product_list_start() {
    echo '<div><div class="custom-product-wrapper grid grid-cols-[1fr_auto]">';
}

// Close the div after the product list (after the last product)
add_action('woocommerce_after_shop_loop', 'wrap_product_list_end', 5);
function wrap_product_list_end() {
    get_template_part("template-parts/shop-sidebar");
    echo '</div></div>';
}


// Add a wrapper div before result count and order catalog
add_action('woocommerce_before_shop_loop', 'wrap_result_count_and_ordering_start', 9);
function wrap_result_count_and_ordering_start() {
    echo '<div class="custom-result-order-wrapper flex">';
}

// Close the wrapper div after result count and order catalog
add_action('woocommerce_before_shop_loop', 'wrap_result_count_and_ordering_end', 31);
function wrap_result_count_and_ordering_end() {
    echo '</div>';
}


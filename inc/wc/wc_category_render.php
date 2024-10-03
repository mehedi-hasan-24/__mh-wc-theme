<?php
function get_all_woocommerce_product_categories() {
    $args = array(
        'taxonomy'   => 'product_cat',
        'orderby'    => 'name',
        'order'      => 'ASC',
        'hide_empty' => false, // Set to true to hide categories with no products
    );

    // Get all categories
    $product_categories = get_terms( $args );

    if ( !empty($product_categories) && !is_wp_error($product_categories) ) {
        echo '<ul class="product-categories">';
        foreach ( $product_categories as $category ) {
            // Category name and link
            echo '<li>';
            echo '<a href="' . get_term_link( $category ) . '" class="bg-amber-300">' . $category->name . '</a>';
            echo '</li>';
        }
        echo '</ul>';
    }
}
function display_categories_on_shop_page() {
    if ( is_shop() ) {
        echo '<div class="bg-blue-300">';
            get_all_woocommerce_product_categories();
        echo '</div>';
    }
}
//add_action( 'woocommerce_before_shop_loop', 'display_categories_on_shop_page', 1 );

<?php

function filter_products_by_price($query)
{
    // Check if we're on the main WooCommerce shop page
    if (!is_admin() && $query->is_main_query() && is_shop()) {
        // Get the min_price and max_price from the URL query parameters
        $min_price = isset($_GET['min_price']) ? floatval($_GET['min_price']) : '';
        $max_price = isset($_GET['max_price']) ? floatval($_GET['max_price']) : '';

        // Initialize the meta query
        $meta_query = $query->get('meta_query');

        // Add conditions for min_price and max_price
        if ($min_price !== '') {
            $meta_query[] = array(
                'key' => '_price',
                'value' => $min_price,
                'compare' => '>=',
                'type' => 'NUMERIC'
            );
        }

        if ($max_price !== '') {
            $meta_query[] = array(
                'key' => '_price',
                'value' => $max_price,
                'compare' => '<=',
                'type' => 'NUMERIC'
            );
        }

        // Set the modified meta query back to the main query
        $query->set('meta_query', $meta_query);
    }
}

add_action('pre_get_posts', 'filter_products_by_price');

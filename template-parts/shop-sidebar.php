<div class="custom-sibling-div px-4">
    <!--    Filter by price -->
    <div class="flex flex-col space-y-2">
        <!--        Slider -->
        <div>
            <h2 class="uppercase">Filter By price</h2>
            <div id="slider" class="w-[90%]"></div>
            <div id="slider-fit"></div>
            <div id="slider-no-overlap"></div>
            <div class="slider-styled" id="slider-round"></div>
            <div class="slider-styled" id="slider-square"></div>
            <!--    <p>Price : <span id="price-value"></span></p>-->

        </div>
        <!--        Button-->
        <button type="button" id="price-filter-btn" class="bg-primary text-color-third p-1  w-[50%]">Filter
        </button>
    </div>

    <!--Categories-->
    <div>
        <h2>Product Categories</h2>
        <ul class="category-list flex flex-col space-y-2">
            <?php
            // Get product categories
            $args = array(
                'taxonomy' => 'product_cat',
                'hide_empty' => true, // Set to false if you want to show empty categories
            );

            $categories = get_terms($args);

            // Check if categories exist
            if (!empty($categories) && !is_wp_error($categories)) {
                foreach ($categories as $category) {
                    // Get the product count for the category
                    $product_count = $category->count; // This gives the number of products in the category

                    // Output category link with product count
                    echo '<li class="bg-primary text-color-third p-2">';
                    echo '<a href="' . esc_url(get_term_link($category)) . '">' . esc_html($category->name);
                    echo '<span class="text-bold">(' . esc_html($product_count) . ')</span>';
                    echo '</a>';
                    echo '</li>';
                }
            } else {
                echo '<li>No categories found.</li>'; // Fallback message
            }
            ?>
        </ul>
    </div>


</div>

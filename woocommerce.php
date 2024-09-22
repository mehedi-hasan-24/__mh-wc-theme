<?php
/*
* The main template file
*/ 
get_header(); ?>
<div class="woocommerce">
    <?php 
        if ( function_exists( 'woocommerce_content' ) ) {
            woocommerce_content();
        } else {
            // You can add some HTML content here if needed
    ?>
            <div class="woocommerce-fallback">
                <h1>Shop Coming Soon</h1>
                <p>Our online store is under construction. Please check back later!</p>
            </div>
    <?php
        }
    ?>
</div>



<?php get_footer(); ?>

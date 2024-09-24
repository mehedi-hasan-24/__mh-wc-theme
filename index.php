<?php
/*
* The main template file
*/ 
get_header(); ?>

    <div class="woocommerce-fallback">
        This is BODDY! BRO... :D
        <p class="bg-primary">
            Primary <?php echo get_theme_mod('__mh-wc-theme-primary_color', '#ffffff'); ?>
        </p>
        <p class="bg-secondary">
            Secondary <?php echo get_theme_mod('__mh-wc-theme-secondary_color', '#ea1a70'); ?>
        </p>
       
    </div>

<?php get_footer(); ?>

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
        
        <!-- <div class="w-48 h-48 bg-lime-400 shadow-lg animate__animated animate__bounce absolute"></div> -->
        <i class="fa-solid fa-thumbs-up fa-5x"></i>

            
    </div>

<?php get_footer(); ?>

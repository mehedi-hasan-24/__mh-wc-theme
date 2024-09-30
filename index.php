<?php
/*
* The main template file
*/ 
get_header(); ?>

    <div class="woocommerce-fallback">
        This is BODDY! BRO... :D
        <p class="bg-primary">
            Primary
        </p>
        <p class="bg-secondary">
            Secondary 
        </p>
        <p class="bg-third">
            Third
        </p>
        <p class="bg-fourth">
            fourth
        </p>



        <div class="swiper h-[600px] w-[600px] bg-red-300">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide bg-indigo-300">Slide 1</div>
                <div class="swiper-slide bg-indigo-300">Slide 2</div>
                <div class="swiper-slide bg-indigo-300">Slide 3</div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
        </div>

        
        <!-- <div class="w-48 h-48 bg-lime-400 shadow-lg animate__animated animate__bounce absolute"></div> -->
        <i class="fa-solid fa-thumbs-up fa-5x"></i>

            
    </div>

<?php get_footer(); ?>

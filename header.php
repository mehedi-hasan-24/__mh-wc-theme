<?php
/*
* This template for displaying the header
*/
?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">
<head>
  <meta charset="<?php bloginfo('charset') ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
  <?php wp_head(); ?>
</head>
<main class="grid grid-cols-1 grid-rows-[auto_1fr_auto] min-h-screen relative">
    <header id="header_area" class="overflow-hidden " >

    <div class="grid grid-cols-[2fr_3fr] px-4 pc:px-8">
        <div>
            <a href="<?php echo home_url(); ?>">
                <?php 
                    if(has_custom_logo()){
                        the_custom_logo();
                    }else{
                        echo bloginfo("title");
                    }
                ?>
            </a>      
        </div>
        <div class="grid grid-cols-3">
            <div class="flex space-x-2 items-center">
                <div class="h-8 w-8 bg-secondary rounded-full flex items-center justify-center">
                    <i class="fa-solid fa-location-dot text-color-primary"></i>
                </div>
                <div class="flex flex-col space-y-1">
                    <span>Our Location</span>
                    <span>22 Madi Ave, New York</span>
                </div>
            </div>
            <div class="flex space-x-2 items-center">
                <div class="h-8 w-8 bg-secondary rounded-full flex items-center justify-center">
                    <i class="fa-regular fa-envelope text-color-primary"></i>
                </div>
                <div class="flex flex-col space-y-1">
                    <span>Send Us Mail</span>
                    <a href="mailto:<?php echo get_option('admin_email'); ?>">
                        <span><?php echo get_option('admin_email'); ?></span>
                    </a>
                </div>
            </div>
            <div class="items-center flex">
                <button class="bg-primary w-[50%] px-4 py-2 flex items-center space-x-2 text-color-third">
                    <span>Get a quote</span>
                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- PC -->
        <div class="hidden pc:flex pc:flex-row pc:justify-between pc:items-center w-full bg-secondary">
            <div class="text-color-third flex justify-between">
                <a href="<?php echo home_url(); ?>">
                    <?php 
                        if(has_custom_logo()){
                            the_custom_logo();
                        }else{
                            echo bloginfo("title");
                        }
                    ?>
                </a>      
            </div>
           
            <div class="hidden pc:w-auto pc:block bg-secondary text-color-third pc:h-auto" id="pc-main-nav-container">
                <?php wp_nav_menu( array(
                        'theme_location' => 'main_menu', 
                        'container' => false,
                        'items_wrap' => '<ul id="%1$s" class="__mh-wc-theme-main-nav">%3$s</ul>',
                        'menu_id' => 'nav-main-menu-pc',
                    )); 
                ?>
            </div>
        </div>

        <!-- Mobile ANd Tab -->
        <div class="pc:hidden flex justify-between bg-secondary">
            <div class="text-color-third flex justify-between">
                <a href="<?php echo home_url(); ?>">
                    <?php 
                        if(has_custom_logo()){
                            the_custom_logo();
                        }else{
                            echo bloginfo("title");
                        }
                    ?>
                </a>      
            </div>
           <!-- Hamburger -->
                <div class="h-10 w-10 block pc:static pc:hidden" id="hamburger-container">
                    <div class="h-10 w-10 flex justify-center items-center pc:hidden">
                        <div class="h-10 w-10" id="nav-menu-hamburger">
                            <?php
                            $logo_svg = get_template_directory() . '/assets/svg/hamburger.svg';
                            if (file_exists($logo_svg)) {
                                echo '<div class="stroke-current fill-current text-color-third">';
                                echo file_get_contents($logo_svg); 
                                echo '</div>';
                            }
                            ?>
                        </div>
                        
                    </div>

                </div>

                <!-- OverLay -->

                <div class="h-screen w-screen pc:hidden hidden bg-black bg-opacity-60 absolute top-0 right-0 z-[1000] gsap-main-nav" id="main-nav-overlay">
                <!-- UnComment this to animate the hamburger icon -->
                <!-- <div class="h-6 w-6 hidden absolute left-0" id="nav-menu-cross">
                                <?php
                                $logo_svg = get_template_directory() . '/assets/svg/cross.svg';
                                if (file_exists($logo_svg)) {
                                    echo '<div class="stroke-current fill-current text-blue-500">';
                                    echo file_get_contents($logo_svg); 
                                    echo '</div>';
                                }
                                ?>
                </div> -->
            </div>
<!-- Menus -->
            <div class="hidden absolute pc:static w-[50%] right-0 pc:w-auto pc:block bg-secondary text-color-third h-screen pc:h-auto z-[1005] gsap-main-nav" id="main-nav-container">
                <?php wp_nav_menu( array(
                        'theme_location' => 'main_menu', 
                        'container' => false,
                        'items_wrap' => '<ul id="%1$s" class="__mh-wc-theme-main-nav gsap-main-nav-item">%3$s</ul>',
                        'menu_id' => 'nav-main-menu-tab',
                    )); 
                ?>
            </div>
        </div>



    </header>
    <!-- 
        HTML file structure...
            main
             -header
             -content.div
             -footer
     -->
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
    <header id="header_area" class="overflow-hidden" >

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
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
    <header id="header_area" >
        <div class="flex flex-col pc:flex-row pc:justify-between w-full absolute pc:static z-[99999] bg-red-500 pc:bg-transparent h-screen pc:h-auto">
            <div class="bg-green-200">
                <a href="<?php echo home_url(); ?>">Home..</a>
            </div>
            <div>
                <?php wp_nav_menu( array(
                        'theme_location' => 'main_menu', 
                        'container' => false,
                        'items_wrap' => '<ul id="%1$s" class="__mh-wc-theme-main-nav">%3$s</ul>',
                        'menu_id' => 'nav-main-menu',
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
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
<main class="grid grid-cols-1 grid-rows-[auto_1fr_auto] min-h-screen">
    <header id="header_area"  ?>
        <div class="flex justify-between">
            <div class="">
            <a href="<?php echo home_url(); ?>">Home..</a>
            </div>
            <div class="text-blue-800">
                <?php wp_nav_menu( array('theme_location' => 'main_menu', 'menu_id' => 'nav-main-menu') ); ?>
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
<?php
/* 
Template Name: About Page Template
*/

// Get the header
get_header(); 
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                the_content();
            endwhile;
        endif;
        ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
// Get the footer
get_footer(); 
?>

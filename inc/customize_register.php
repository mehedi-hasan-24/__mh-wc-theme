<?php
function __mh_wc_theme_register_customizer($wp_customize){
    // Theme Color
    // $wp_customize->add_section('__mh-wc-theme-colors_section', array(
    //     'title'=>'colors',
    //     'description' => 'Color choices'
    // ));
    // $wp_customize ->add_setting('__mh-wc-theme_primary_color', array(
    //     'default' => '#ea1a70',
    //     // 'type' => 'theme_mod',
    //     // 'sanitize_callbac' => 'sanitize_text_field'
    //   ));
    //   $wp_customize->add_control( 
    //     new WP_Customize_color_control($wp_customize, '__mh-wc-theme-primary_color' /** this should be same ase  setting id */, 
    //         array(
    //             'label' => 'Primary Color',
    //             'section' => '__mh-wc-theme-colors_section',
    //             'settings' => '__mh-wc-theme_primary_color',
    //   )));

    $wp_customize-> add_section('__mh-wc-theme-colors', array(
        'title' => __('Theme Colors', '__mh-wc-theme-colors'),
        'description' => 'If need you can change your theme color.',
      ));
    
      $wp_customize ->add_setting('__mh-wc-theme-primary_color', array(
        'default' => '#FF6600',
      ));
      $wp_customize->add_control( new WP_Customize_color_control($wp_customize, '__mh-wc-theme-primary_color', array(
        'label' => 'Primary Color (All text)',
        'section' => '__mh-wc-theme-colors',
        'settings' => '__mh-wc-theme-primary_color',
      )));
      $wp_customize ->add_setting('__mh-wc-theme-secondary_color', array(
        'default' => '#1D1D1D',
      ));
      $wp_customize->add_control( new WP_Customize_color_control($wp_customize, '__mh-wc-theme-secondary_color', array(
        'label' => 'Secondary Color (Navbar, Footer)',
        'section' => '__mh-wc-theme-colors',
        'settings' => '__mh-wc-theme-secondary_color',
      )));
      
      $wp_customize ->add_setting('__mh-wc-theme-third_color', array(
        'default' => '#FFFFFF',
      ));
      $wp_customize->add_control( new WP_Customize_color_control($wp_customize, '__mh-wc-theme-third_color', array(
        'label' => 'Third Color (Navbar, Footer text)',
        'section' => '__mh-wc-theme-colors',
        'settings' => '__mh-wc-theme-third_color',
      )));
      $wp_customize ->add_setting('__mh-wc-theme-fourth_color', array(
        'default' => '#6e777d',
      ));
      $wp_customize->add_control( new WP_Customize_color_control($wp_customize, '__mh-wc-theme-fourth_color', array(
        'label' => 'Fourth Color (For smaller, notification, alert text)',
        'section' => '__mh-wc-theme-colors',
        'settings' => '__mh-wc-theme-fourth_color',
      )));
    
}

add_action( 'customize_register', '__mh_wc_theme_register_customizer' );

function __mh_wc_theme_color_customizer(){
  ?>
  <style>
    /* body{background: <?php echo get_theme_mod('__mh-wc-theme-primary_color', "#ffffff"); ?>} */
    :root{ 
      --primary-color:<?php echo get_theme_mod('__mh-wc-theme-primary_color', '#FF6600'); ?>;
      --secondary-color:<?php echo get_theme_mod('__mh-wc-theme-secondary_color', '#1D1D1D'); ?>;
      --third-color:<?php echo get_theme_mod('__mh-wc-theme-third_color', '#FFFFFF'); ?>;
      --fourth-color:<?php echo get_theme_mod('__mh-wc-theme-fourth_color', '#6e777d'); ?>;
    }
  </style>
  <?php 
}
add_action('wp_head', '__mh_wc_theme_color_customizer');


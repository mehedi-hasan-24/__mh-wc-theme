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
        'default' => '#ffffff',
      ));
      $wp_customize->add_control( new WP_Customize_color_control($wp_customize, '__mh-wc-theme-primary_color', array(
        'label' => 'Primary Color',
        'section' => '__mh-wc-theme-colors',
        'settings' => '__mh-wc-theme-primary_color',
      )));
      $wp_customize ->add_setting('__mh-wc-theme-secondary_color', array(
        'default' => '#ea1a70',
      ));
      $wp_customize->add_control( new WP_Customize_color_control($wp_customize, '__mh-wc-theme-secondary_color', array(
        'label' => 'Secondary Color',
        'section' => '__mh-wc-theme-colors',
        'settings' => '__mh-wc-theme-secondary_color',
      )));
    
}

add_action( 'customize_register', '__mh_wc_theme_register_customizer' );

function __mh_wc_theme_color_customizer(){
  ?>
  <style>
    /* body{background: <?php echo get_theme_mod('__mh-wc-theme-primary_color', "#ffffff"); ?>} */
    :root{ 
      --primary-color:<?php echo get_theme_mod('__mh-wc-theme-primary_color', '#ffffff'); ?>;
      --secondary-color:<?php echo get_theme_mod('__mh-wc-theme-secondary_color', '#ea1a70'); ?>;
    }
  </style>
  <?php 
}
add_action('wp_head', '__mh_wc_theme_color_customizer');


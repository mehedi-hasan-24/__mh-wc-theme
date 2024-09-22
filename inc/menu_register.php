<?php
// Registering Menu
function __mh_wc_theme_register_menu(){
    register_nav_menus(
        array(
            'main_menu'=> __('Main Menu', '_mh-wc-theme-main-menu'),
            'side_menu' => __('Side Menu', '_mh-wc-theme-side-menu'),
            'footer_menu' => __('Footer Menu', '_mh-wc-theme-footer-menu'),
        )
    );
}

add_action("after_setup_theme", "__mh_wc_theme_register_menu");

// Addinc Custom css to menu li 
function __mh_wc_theme_add_classes_to_nav_li($classes, $items, $args){
    $classes[] = "__mh-wc-theme-main-nav-item";

    return $classes;
}
add_filter("nav_menu_css_class", "__mh_wc_theme_add_classes_to_nav_li", 1, 3);

// Addinc Custom attrivutes to menu <a></a> wrapped by <li></li>
function __mh_wc_theme_add_custom_attr_to_nav_anchor($attr, $items, $args){
    $attr["class"] = "__mh-wc-theme-main-nav-anchor";

    return $attr;
}
add_filter("nav_menu_link_attributes", "__mh_wc_theme_add_custom_attr_to_nav_anchor", 1, 3);
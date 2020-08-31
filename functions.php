<?php
add_action( 'wp_enqueue_scripts', 'enqueue_mytheme_style' );
function enqueue_mytheme_style() {
	wp_enqueue_style( 'theme-style', get_stylesheet_uri() );
    wp_enqueue_style( 'additional-style', get_template_directory_uri() . '/css/styles.css');
    wp_enqueue_script('theme-script', get_template_directory_uri() . '/libs/owl-carousel/owl.carousel.min.js', array('jquery'));
    wp_enqueue_script('theme-script1', get_template_directory_uri() . '/js/scripts.js', array('jquery'));
    wp_enqueue_style( 'additional-style1', get_template_directory_uri() . '/libs/owl-carousel/owl.theme.default.min.css'); 
    wp_enqueue_style( 'additional-style2', get_template_directory_uri() . '/libs/owl-carousel/owl.carousel.min.css'); 
}

add_theme_support( 'custom-logo' );
add_theme_support( 'menus' );

add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3);
function filter_nav_menu_link_attributes($atts, $item, $args) {
    if ($args->menu === 'main') {
        $atts['class'] = 'header__nav-item';

        if ($item->current) {
            $atts['class'] .= ' header__nav-item-active';
        }
    };

    return $atts;
}


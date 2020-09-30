<?php
add_action( 'wp_enqueue_scripts', 'enqueue_mytheme_style' );
function enqueue_mytheme_style() {
    $pageID = get_option('page_on_front');
	wp_enqueue_style( 'theme-style', get_stylesheet_uri() );
    wp_enqueue_style( 'additional-style', get_template_directory_uri() . '/css/styles.css');
    wp_enqueue_script('theme-script3', get_template_directory_uri() . '/js/burger.js', array('jquery'));
    if ( $pageID == get_the_ID() ) {
        wp_enqueue_script('theme-script', get_template_directory_uri() . '/libs/owl-carousel/owl.carousel.min.js', array('jquery'));
        wp_enqueue_script('theme-script1', get_template_directory_uri() . '/js/scripts.js', array('jquery'));
    }

    if ( $pageID !== get_the_ID() ) {
        wp_enqueue_script('theme-script2', get_template_directory_uri() . '/js/services.js', array('jquery'));
        wp_enqueue_style( 'additional-style3', get_template_directory_uri() . '/css/limited_header_styles.css');
    }

    if ( 13 !== get_the_ID() && 8 !== get_the_ID()) {
        wp_enqueue_style( 'additional-style4', get_template_directory_uri() . '/css/content_pages.css');

    }

    if ( 144 == get_the_ID()) {
        wp_enqueue_style( 'about-style', get_template_directory_uri() . '/css/about_page.css');

    }

    if (is_single()) {
        wp_enqueue_script('owl-carousel-script', get_template_directory_uri() . '/libs/owl-carousel/owl.carousel.min.js', array('jquery'));
        wp_enqueue_script('single-page-script', get_template_directory_uri() . '/js/single_page.js', array('jquery'));
    }

    wp_enqueue_style( 'additional-style1', get_template_directory_uri() . '/libs/owl-carousel/owl.theme.default.min.css'); 
    wp_enqueue_style( 'additional-style2', get_template_directory_uri() . '/libs/owl-carousel/owl.carousel.min.css'); 
}

add_theme_support( 'post-thumbnails' );



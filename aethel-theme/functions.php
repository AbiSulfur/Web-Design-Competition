<?php
/**
 * Aethel functions and definitions
 */

if ( ! function_exists( 'aethel_setup' ) ) :
    function aethel_setup() {
        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        // Let WordPress manage the document title.
        add_theme_support( 'title-tag' );

        // Enable support for Post Thumbnails on posts and pages.
        add_theme_support( 'post-thumbnails' );

        // Register Navigation Menus
        register_nav_menus( array(
            'primary' => esc_html__( 'Primary Menu', 'aethel' ),
        ) );
    }
endif;
add_action( 'after_setup_theme', 'aethel_setup' );

/**
 * Enqueue scripts and styles.
 */
function aethel_scripts() {
    // Font Awesome
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0' );

    // Theme CSS
    wp_enqueue_style( 'aethel-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0' );

    // Theme JS
    wp_enqueue_script( 'aethel-script', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'aethel_scripts' );

/**
 * Filter to add custom classes to nav menu links
 */
function aethel_add_link_atts($atts, $item, $args) {
    if($args->theme_location == 'primary') {
        // If we want to add specific classes to links, we can do it here.
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'aethel_add_link_atts', 10, 3);

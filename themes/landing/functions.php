<?php
/**
 * Landing theme functions
 */

/**
 * Theme setup
 */
function landing_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'landing' ),
    ) );
}
add_action( 'after_setup_theme', 'landing_setup' );

/**
 * Enqueue styles
 */
function landing_scripts() {
    wp_enqueue_style( 'landing-style', get_stylesheet_uri(), array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'landing_scripts' );

/**
 * Simple nav menu fallback
 */
function landing_fallback_menu() {
    echo '<ul>';
    echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">Home</a></li>';
    if ( class_exists( 'WooCommerce' ) ) {
        echo '<li><a href="' . esc_url( wc_get_page_permalink( 'shop' ) ) . '">Shop</a></li>';
        echo '<li><a href="' . esc_url( wc_get_cart_url() ) . '">Cart</a></li>';
    }
    echo '</ul>';
}

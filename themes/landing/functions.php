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
    add_theme_support( 'custom-logo', array(
        'height'      => 50,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'landing_setup' );

/**
 * Enqueue styles and scripts
 */
function landing_scripts() {
    wp_enqueue_style( 'landing-style', get_stylesheet_uri(), array(), '1.0.0' );
    wp_enqueue_script( 'landing-faq', get_template_directory_uri() . '/assets/js/faq.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'landing_scripts' );

/**
 * Buy Now redirect — add to cart then go straight to checkout
 */
function landing_buy_now_redirect( $url ) {
    if ( isset( $_GET['buy_now'] ) ) {
        return wc_get_checkout_url();
    }
    return $url;
}
add_filter( 'woocommerce_add_to_cart_redirect', 'landing_buy_now_redirect' );

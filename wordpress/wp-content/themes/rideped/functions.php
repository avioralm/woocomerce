<?php
/**
 * Rideped Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Rideped
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_RIDEPED_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'rideped-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_RIDEPED_VERSION, 'all' );
	wp_enqueue_style('rideped-main-css' , get_stylesheet_directory_uri() . '/output.css' ,[], CHILD_THEME_RIDEPED_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );

// add_action('wp_enqueue_scripts', 'main_styles', 20);


function add_noindex_nofollow() {    
        echo '<meta name="robots" content="noindex,nofollow">' . "\n";
}

add_action('wp_head', 'add_noindex_nofollow');




function custom_woo_buy_button($atts = array(), $content = null) {
    // Extract shortcode attributes
    $a = shortcode_atts(array(
        'product_id' => '',
        'text' => 'BUY',
        'class' => '',
        'out_of_stock_text' => 'Out of Stock',
    ), $atts);

    // If no product ID is provided, try to get the current product ID
    if (empty($a['product_id'])) {
        global $product;
        if (is_a($product, 'WC_Product')) {
            $a['product_id'] = $product->get_id();
        }
    }

    // If we still don't have a product ID, return empty
    if (empty($a['product_id'])) {
        return '';
    }

    // Get the product
    $product = wc_get_product($a['product_id']);

    if (!$product) {
        return '';
    }

    // Check if the product is in stock
    $is_in_stock = $product->is_in_stock();

    // Generate the button HTML
    if ($is_in_stock) {
        $button_html = sprintf(
            '<a href="%s" data-quantity="1" class="w-[140px] button %s add_to_cart_button" data-product_id="%d" rel="nofollow" style="display:flex; gap:8px; background-color: #E7843A; color: white; padding: 10px 20px; border-radius: 25px; text-decoration: none; display: inline-flex; align-items: center; justify-content: center; font-weight: bold;">
                <img src="/wp-content/themes/rideped/assets/shopping--cart.svg" alt="Cart" />
                %s
            </a>',
            esc_url($product->add_to_cart_url()),
            esc_attr($a['class']),
            esc_attr($a['product_id']),
            esc_html($a['text'])
        );
    } else {
        $button_html = sprintf(
            '<span class="out-of-stock-button" style="display:flex; gap:8px; background-color: #cccccc; color: #666666; padding: 10px 20px; border-radius: 25px; text-decoration: none; display: inline-flex; align-items: center; justify-content: center; font-weight: bold;">
                %s
            </span>',
            esc_html($a['out_of_stock_text'])
        );
    }

    return $button_html;
}
add_shortcode('woo_buy_button', 'custom_woo_buy_button');

// Optional: Add a function to easily use in PHP files
function woo_buy_button($product_id = '', $text = 'BUY', $class = '') {
    return do_shortcode(sprintf('[woo_buy_button product_id="%s" text="%s" class="%s"]', $product_id, $text, $class));
}
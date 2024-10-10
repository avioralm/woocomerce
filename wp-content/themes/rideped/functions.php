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
    wp_enqueue_style( 'rideped-theme-css', get_stylesheet_directory_uri() . '/style.css', ['astra-theme-css'], CHILD_THEME_RIDEPED_VERSION, 'all' );
    wp_enqueue_style('rideped-main-css' , get_stylesheet_directory_uri() . '/output.css' ,[], CHILD_THEME_RIDEPED_VERSION, 'all' );
}
add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );

/**
 * Add noindex, nofollow meta tag
 */
function add_noindex_nofollow() {
    echo '<meta name="robots" content="noindex,nofollow">' . "\n";
}
add_action('wp_head', 'add_noindex_nofollow');

/**
 * Custom WooCommerce buy button shortcode
 */
function custom_woo_buy_button($atts = [], $content = null) {
    $a = shortcode_atts([
        'product_id' => '',
        'text' => __('BUY', 'rideped'),
        'class' => '',
        'out_of_stock_text' => __('Out of Stock', 'rideped'),
    ], $atts);

    if (empty($a['product_id'])) {
        global $product;
        if (is_a($product, 'WC_Product')) {
            $a['product_id'] = $product->get_id();
        }
    }

    if (empty($a['product_id'])) {
        return '';
    }

    $product = wc_get_product($a['product_id']);

    if (!$product) {
        return '';
    }

    $is_in_stock = $product->is_in_stock();

    if ($is_in_stock) {
        $button_html = sprintf(
            '<a href="%s" data-quantity="1" class="w-[140px] button %s add_to_cart_button" data-product_id="%d" rel="nofollow" style="display:flex; gap:8px; background-color: #E7843A; color: white; padding: 10px 20px; border-radius: 25px; text-decoration: none; display: inline-flex; align-items: center; justify-content: center; font-weight: bold;">
                <img src="%s" alt="%s" />
                %s
            </a>',
            esc_url($product->add_to_cart_url()),
            esc_attr($a['class']),
            esc_attr($a['product_id']),
            esc_url(get_stylesheet_directory_uri() . '/assets/shopping--cart.svg'),
            esc_attr__('Cart', 'rideped'),
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

/**
 * Helper function for woo buy button
 */
function woo_buy_button($product_id = '', $text = '', $class = '') {
    $text = $text ?: __('BUY', 'rideped');
    return do_shortcode(sprintf('[woo_buy_button product_id="%s" text="%s" class="%s"]', $product_id, $text, $class));
}

/**
 * Display login/account link
 */
function display_login_account_link() {
    if (is_user_logged_in()) {
        $url = get_permalink(get_option('woocommerce_myaccount_page_id'));
        $text = __('Account', 'rideped');
    } else {
        $url = wp_login_url(get_permalink());
        $text = __('Login', 'rideped');
    }
    ?>
    <a href="<?php echo esc_url($url); ?>" class="flex items-center justify-center bg-gray-800 text-white p-[12px] gap-[12px] rounded-[12px] hover:bg-gray-700 transition-colors duration-300">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-circle">
            <path d="M18 20a6 6 0 0 0-12 0"></path>
            <circle cx="12" cy="10" r="4"></circle>
            <circle cx="12" cy="12" r="10"></circle>
        </svg>
        <span class="font-medium"><?php echo esc_html($text); ?></span>
    </a>
    <?php
}


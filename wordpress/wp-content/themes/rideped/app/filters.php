<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a href="%s">%s</a>', get_permalink(), __('Continued', 'sage'));
});


/**
 * Add support for WooCommerce Subscription templates.
 */
add_filter('sage-woocommerce/templates', function ($paths) {
    $paths[] = WP_PLUGIN_DIR . '/woocommerce-subscriptions/templates/';
    return $paths;
});


/**
 * Keep WooCommerce product slugs in English for all languages
 */
add_filter('wpml_slug_translation_available', 'keep_english_product_slugs', 10, 3);

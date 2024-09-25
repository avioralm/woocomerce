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

function keep_english_product_slugs($available, $slug, $post_type) {
    // Check if it's a product post type
    if ($post_type === 'product') {
        return false; // Disable slug translation for products
    }
    return $available;
}

/**
 * Ensure new products always use the English slug
 */
add_filter('wp_unique_post_slug', 'force_english_product_slug', 10, 6);

function force_english_product_slug($slug, $post_ID, $post_status, $post_type, $post_parent, $original_slug) {
    if ($post_type === 'product' && function_exists('icl_object_id')) {
        // Get the product in the default language (assuming English is default)
        $default_lang_product_id = icl_object_id($post_ID, 'product', false, ICL_LANGUAGE_CODE);
        
        if ($default_lang_product_id) {
            $default_lang_product = get_post($default_lang_product_id);
            if ($default_lang_product) {
                return $default_lang_product->post_name;
            }
        }
    }
    return $slug;
}
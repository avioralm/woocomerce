@php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.1
 */

defined( 'ABSPATH' ) || exit;

global $product;
@endphp

<div class="product-image-wrapper relative overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-yellow-400 via-yellow-300 to-green-500 z-10"></div>
    <div class="relative">
        @php
        if ( has_post_thumbnail() ) {
            $post_thumbnail_id = get_post_thumbnail_id( $product->get_id() );
            $full_size_image   = wp_get_attachment_image_src( $post_thumbnail_id, 'full' );
            $thumbnail_src     = wp_get_attachment_image_src( $post_thumbnail_id, 'woocommerce_single' );
            $html              = sprintf(
                '<img src="%s" alt="%s" class="w-full h-auto object-cover" style="max-height: 400px;">',
                esc_url( $full_size_image[0] ),
                esc_attr( $product->get_name() )
            );
        } else {
            $html  = sprintf(
                '<img src="%s" alt="%s" class="w-full h-auto object-cover" style="max-height: 400px;">',
                esc_url( wc_placeholder_img_src( 'woocommerce_single' ) ),
                esc_attr__( 'Awaiting product image', 'woocommerce' )
            );
        }

        echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', $html, $post_thumbnail_id );
        @endphp
    </div>
</div>
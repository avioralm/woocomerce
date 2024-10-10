<style>
.custom-product-card {
    background-color: #f5f5f5;
    border-radius: 10px;
    padding: 20px;
    text-align: center;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    transition: box-shadow 0.3s ease;
}

.custom-product-card:hover {
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

.custom-product-card .product-image img {
    max-width: 100%;
    height: auto;
    margin-bottom: 15px;
}

.custom-product-card .product-title {
    font-size: 18px;
    margin-bottom: 10px;
}

.custom-product-card .product-price {
    font-size: 24px;
    font-weight: bold;
    color: #333;
    margin-bottom: 15px;
}

.custom-product-card .add-to-cart {
    background-color: #ff9900;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.custom-product-card .add-to-cart:hover {
    background-color: #e68a00;
}
    </style>
<?php
/**
 * The template for displaying product content within loops
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility
if ( empty( $product ) || ! $product->is_visible() ) {
    return;
}
?>
<li <?php wc_product_class( 'custom-product-card', $product ); ?>>
    <div class="product-image">
        <?php echo $product->get_image(); // Product Image ?>
    </div>
    <div class="product-info">
        <h2 class="product-title"><?php echo $product->get_name(); ?></h2>
        <div class="product-price"><?php echo $product->get_price_html(); ?></div>
        <?php echo apply_filters( 'woocommerce_loop_add_to_cart_link',
            sprintf( '<a href="%s" data-quantity="%s" class="%s" %s>%s</a>',
                esc_url( $product->add_to_cart_url() ),
                esc_attr( isset( $args['quantity'] ) ? $args['quantity'] : 1 ),
                esc_attr( isset( $args['class'] ) ? $args['class'] : 'button add-to-cart' ),
                isset( $args['attributes'] ) ? wc_implode_html_attributes( $args['attributes'] ) : '',
                esc_html( $product->add_to_cart_text() )
            ),
        $product ); ?>
    </div>
</li>
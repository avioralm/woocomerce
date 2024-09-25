<?php
defined( 'ABSPATH' ) || exit;

global $product;

// Debug: Check if $product is set
if (!isset($product)) {
    error_log('Debug: $product is not set in simple.blade.php');
    $product = wc_get_product(get_the_ID());
}

// Debug: Check if $product is a valid WC_Product object
if (!is_a($product, 'WC_Product')) {
    error_log('Debug: $product is not a valid WC_Product object in simple.blade.php');
    return;
}

if ( ! $product->is_purchasable() ) {
    return;
}

echo wc_get_stock_html( $product ); // WPCS: XSS ok.

if ( $product->is_in_stock() ) :
?>

    <form class="cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>
        <?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

        <div class="flex items-center space-x-2 mb-4">
            <?php
            woocommerce_quantity_input(
                array(
                    'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
                    'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
                    'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( wp_unslash( $_POST['quantity'] ) ) : $product->get_min_purchase_quantity(),
                    'classes'     => apply_filters( 'woocommerce_quantity_input_classes', array( 'input-text', 'qty', 'text', 'w-16', 'text-center', 'border', 'border-gray-300', 'rounded' ), $product ),
                )
            );
            ?>
        </div>

        <button type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="bg-orange-500 text-white px-4 py-2 rounded-md flex items-center justify-center w-full">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
            <?php echo esc_html( $product->single_add_to_cart_text() ); ?>
        </button>

        <?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
    </form>

<?php endif; ?><?php /**PATH /var/www/html/wp-content/themes/rideped/resources/views/woocommerce/single-product/add-to-cart/simple.blade.php ENDPATH**/ ?>
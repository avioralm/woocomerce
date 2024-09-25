@php
do_action('woocommerce_before_cart');
@endphp

<form class="woocommerce-cart-form" action="@php echo esc_url(wc_get_cart_url()); @endphp" method="post">
    <div class="px-4 py-6">
        <h1 class="text-2xl font-bold mb-4">My Cart</h1>
        
        <div class="border-t border-gray-200">
            @php do_action('woocommerce_before_cart_contents'); @endphp

            @php
            foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
                $_product = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
                $product_id = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);

                if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_cart_item_visible', true, $cart_item, $cart_item_key)) {
                    $product_permalink = apply_filters('woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink($cart_item) : '', $cart_item, $cart_item_key);
                    @endphp
                    <div class="flex items-start py-4 border-b border-gray-200">
                        <div class="flex-shrink-0 w-20 h-20 mr-4">
                            @php
                            echo apply_filters('woocommerce_cart_item_thumbnail', $_product->get_image(array(80, 80)), $cart_item, $cart_item_key);
                            @endphp
                        </div>

                        <div class="flex-grow">
                            <h2 class="font-bold text-lg">
                                @php
                                echo wp_kses_post(apply_filters('woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key));
                                @endphp
                            </h2>
                            <p class="text-sm text-gray-600 mt-1">
                                @php
                                echo wp_kses_post($_product->get_short_description());
                                @endphp
                            </p>

                            


 <div class="flex items-center mt-2 justify-between	 ">

   <div class="font-bold text-lg">
                                @php
                                echo apply_filters('woocommerce_cart_item_price', WC()->cart->get_product_price($_product), $cart_item, $cart_item_key);
                                @endphp
                            </div>
                                <div class="mr-2">
                                    @php
                                    echo apply_filters('woocommerce_cart_item_quantity', woocommerce_quantity_input(
                                        array(
                                            'input_name'   => "cart[{$cart_item_key}][qty]",
                                            'input_value'  => $cart_item['quantity'],
                                            'max_value'    => $_product->get_max_purchase_quantity(),
                                            'min_value'    => '0',
                                            'product_name' => $_product->get_name(),
                                        ),
                                        $_product,
                                        false
                                    ), $cart_item_key, $cart_item);
                                    @endphp
                                </div>
                                <div class="product-remove">
                                    @php
                                    echo apply_filters(
                                        'woocommerce_cart_item_remove_link',
                                        sprintf(
                                            '<a href="%s" class="text-red-500" aria-label="%s" data-product_id="%s" data-product_sku="%s">
                                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                </svg>
                                            </a>',
                                            esc_url(wc_get_cart_remove_url($cart_item_key)),
                                            esc_html__('Remove this item', 'woocommerce'),
                                            esc_attr($product_id),
                                            esc_attr($_product->get_sku())
                                        ),
                                        $cart_item_key
                                    );
                                    @endphp
                                </div>
                            </div>

                           
                           
                           
                        </div>
                    </div>
                    @php
                }
            }
            @endphp

            @php do_action('woocommerce_cart_contents'); @endphp
        </div>

        <div class="mt-6">
            <div class="flex justify-between items-center mb-4">
                <span class="text-xl font-bold">Total price</span>
                <span class="text-xl font-bold">@php echo WC()->cart->get_cart_total(); @endphp</span>
            </div>
            <button type="submit" class="w-full bg-orange-500 text-white py-3 rounded-lg font-semibold" name="proceed" value="@php esc_attr_e('Proceed to Checkout', 'woocommerce'); @endphp">
                @php esc_html_e('Purchase', 'woocommerce'); @endphp
            </button>
        </div>

        @php do_action('woocommerce_cart_actions'); @endphp
        @php wp_nonce_field('woocommerce-cart', 'woocommerce-cart-nonce'); @endphp
        @php do_action('woocommerce_after_cart_contents'); @endphp
    </div>
</form>

@php do_action('woocommerce_after_cart'); @endphp
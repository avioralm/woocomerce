@extends('layouts.app')

@section('content')
    @php
        do_action('get_header', 'shop');
        do_action('woocommerce_before_main_content');
    @endphp

    @while(have_posts())
        @php
            the_post();
            global $product;

            // Ensure $product is a WC_Product object
            if (!is_a($product, 'WC_Product')) {
                $product = wc_get_product(get_the_ID());
            }
        @endphp

        @if($product && $product instanceof WC_Product)
            <div class="container mx-auto px-4">
                <div class="product-details mt-8">
                    <div class="w-full mb-6">
    @php
        /**
         * Hook: woocommerce_before_single_product_summary.
         *
         * @hooked woocommerce_show_product_sale_flash - 10
         * @hooked woocommerce_show_product_images - 20
         */
        do_action( 'woocommerce_before_single_product_summary' );
    @endphp
</div>

                    <h1 class="text-2xl font-bold mb-2">{{ $product->get_name() }}</h1>
                    <p class="text-gray-600 mb-4">{!! $product->get_short_description() !!}</p>
                    
                    {{-- <div class="flex items-center justify-between mb-4">
                        <span class="text-3xl font-bold">{!! $product->get_price_html() !!}</span>
                    </div> --}}

                    @php
                        /**
                         * Hook: woocommerce_single_product_summary.
                         *
                         * @hooked woocommerce_template_single_title - 5
                         * @hooked woocommerce_template_single_rating - 10
                         * @hooked woocommerce_template_single_price - 10
                         * @hooked woocommerce_template_single_excerpt - 20
                         * @hooked woocommerce_template_single_add_to_cart - 30
                         * @hooked woocommerce_template_single_meta - 40
                         * @hooked woocommerce_template_single_sharing - 50
                         * @hooked WC_Structured_Data::generate_product_data() - 60
                         */
                        do_action('woocommerce_single_product_summary');
                    @endphp
                </div>

                @php
                    /**
                     * Hook: woocommerce_after_single_product_summary.
                     *
                     * @hooked woocommerce_output_product_data_tabs - 10
                     * @hooked woocommerce_upsell_display - 15
                     * @hooked woocommerce_output_related_products - 20
                     */
                    do_action('woocommerce_after_single_product_summary');
                @endphp
            </div>
        @else
            <p class="text-center py-8">Sorry, this product is not available.</p>
        @endif

    @endwhile

    @php
        do_action('woocommerce_after_main_content');
        do_action('get_footer', 'shop');
    @endphp
@endsection
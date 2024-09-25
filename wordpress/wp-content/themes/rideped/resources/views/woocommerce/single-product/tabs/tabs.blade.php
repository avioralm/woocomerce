@php
/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.8.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 *
 * @see woocommerce_default_product_tabs()
 */
$product_tabs = apply_filters( 'woocommerce_product_tabs', array() );

if ( ! empty( $product_tabs ) ) : @endphp

    <div class="woocommerce-tabs wc-tabs-wrapper mt-8">
        <h2 class="text-xl font-bold mb-4">Specifications</h2>
        <table class="w-full">
            <tbody>
                @php
                $specifications = array(
                    'Type' => '6,5" Minibike',
                    'Design type' => 'Urban',
                    'Hardness compund' => '65 Shore A',
                    'Tire width' => '90mm',
                    'Outer diameter' => '275 mm',
                    'Tread Pattern Use' => 'Strada',
                    'Compound Use' => 'Universal',
                    'Rim width' => '60-66mm',
                    'Pressure' => '2,0 – 2,5 bar',
                    'Application' => 'Tubeless and inner tube'
                );

                foreach ($specifications as $key => $value) :
                @endphp
                    <tr class="border-b border-gray-200">
                        <td class="py-2 bg-gray-100 font-semibold">@php echo esc_html($key); @endphp</td>
                        <td class="py-2 pl-4">@php echo esc_html($value); @endphp</td>
                    </tr>
                @php endforeach; @endphp
            </tbody>
        </table>
    </div>

@php endif; @endphp
<?php
    get_header();

    $features = array(
        array(
            'icon' => '/wp-content/uploads/2024/09/kilogram_5009306.svg',
            'text' => '29.9 kg'
        ),
        array(
            'icon' => '/wp-content/uploads/2024/09/charging_5945741.svg',
            'text' => '48V15AH'
        ),
        array(
            'icon' => '/wp-content/uploads/2024/09/dashboard_8078295.svg',
            'text' => '25 km/h'
        ),
        array(
            'icon' => '/wp-content/uploads/2024/09/tire_6955616.svg',
            'text' => '2x750KW'
        ),
        array(
            'icon' => '/wp-content/uploads/2024/09/tire_950472.svg',
            'text' => 'pMT 11”'
        ),
        array(
            'icon' => '/wp-content/uploads/2024/09/road_6088994.svg',
            'text' => '40 km'
        )
    );
?>


<main>


<section class="hero-section md:flex md:items-center">
    
     
    <div class="flex mt-[40px] mx-[24px] gap-[40px]">
         <h3 class="h3">Speed <br/> Quality <br/> Relaiabilty</h3>

        <div class="gap-[16px] flex flex-col">
        <?php foreach ($features as $feature) : ?>
        <div class="feature flex items-center gap-x-2">
            <div class="feature-icon">
                <img width="30px" height="30px" src="<?php echo esc_url($feature['icon']); ?>" alt="<?php echo esc_attr($feature['text']); ?>">
            </div>
            <div class="feature-text"><?php echo esc_html($feature['text']); ?></div>
        </div>
    <?php endforeach; ?>

            

             <!-- WooCommerce Button -->
             <?php
             $product_id = 14; // Replace with your actual product ID
             $product = wc_get_product($product_id);
            if ($product && $product->is_purchasable() && $product->is_in_stock()) {
                echo apply_filters('woocommerce_loop_add_to_cart_link',
                    sprintf('<a href="%s" data-quantity="1" class="%s" %s>%s</a>',
                        esc_url($product->add_to_cart_url()),
                        'bg-[#f28b30] text-white font-bold py-2 px-6 rounded-full text-center',
                        'data-product_id="' . $product->get_id() . '" data-product_sku="' . $product->get_sku() . '"',
                        "BUY"
                        // esc_html($product->add_to_cart_text())
                    ),
                $product);
            }
            ?>


            <img src="/wp-content/themes/rideped/assets/scooter-bg.png" alt="">
        </div>


    </div>
</section>
<!-- /wp:html -->

<!-- wp:html -->
<section class="px-[21px]">
    <div class="title md:mt-6">
        Our Scooters
    </div>

    <div class="products flex flex-col gap-y-4 md:flex-row md:justify-evenly">
        <?php
            $query_args = array(
                'numberposts' => 3,
                'category' => array( 'scooters' ),
            );
            $products = wc_get_products( $query_args );


            foreach ($products as $product) {
                $image_id  = $product->get_image_id();
                $is_coming_soon = count($product->tag_ids) != 0;
                ?>
                <div class="product flex flex-col rounded-md">
                    <div class="product-image relative flex justify-center items-center " style="border-radius: 30px 30px 0px 0;padding: 31px; background-image: url(/wp-content/themes/rideped/assets/cement-wall-floor-copy-space.png); background-repeat: no-repeat; background-size:cover;">
                        <img class="w-[319px] h-[319px] object-contain"  src="<?= wp_get_attachment_image_url( $image_id, 'full' ) ?>" />
                        <?
                            if($is_coming_soon) {
                                ?>
                                <img class="absolute top-0" src="/wp-content/uploads/2024/09/Group-1171275041.svg" />
                                <?
                            }
                        ?>
                        <div class="product-like-button"></div>
                    
                    </div>
                    <div class="product-details bg-black flex justify-between items-center justify-center">
                        <div class="product-bottom-left flex flex-col gap-y-2">
                            <div class="product-name font-bold"><?= $product->name; ?></div>
                            <div class="product-price text-gray-400"><?= $product->price.get_woocommerce_currency_symbol(); ?></div>
                        </div>
                        <?php echo do_shortcode('[woo_buy_button]');  ?>
                    </div>
                </div>
                <?
            }
        ?>
    </div>
    <div class="h-20 md:hidden"></div>
    <img class="absolute bottom-0 right-0 rotate-270 md:hidden" src="/wp-content/uploads/2024/09/Group-1171275044.svg" />
</section>
<!-- /wp:html -->


<section>
    <div class="title">
        <?php 
      echo  apply_filters('set-default-payment-method', 
        'Add to Cart', // $original_string
        'WP Endpoints', // $domain
        'set-default-payment-method' // $name
    );
        ?>
    </div>

    <?php echo do_shortcode('[woo_buy_button product_id="14"]'); ?>
    <?php echo do_shortcode('[product_categories columns="3" number="3" hide_empty="0" parent="0"]') ?>
</section>
<!-- wp:html -->


<!-- wp:html -->

<?php
    $query_args = array(
        'numberposts' => 1,
        'category' => 'scooters',
    );
    $products = wc_get_products( $query_args );


    foreach ($products as $product) {
        $image_id  = $product->get_image_id();
        $is_coming_soon = count($product->tag_ids) != 0;
        ?>
        <section class="xfeatures fit md:flex md:items-center md:justify-center md:gap-x-24 md:relative">
            <div class="md:w-1/3">
                <div class="title left mt-4">
                    <?= $product->name ?>
                </div>

                <div class="x-features flex flex-col gap-y-4">
                    <div class="x-feature flex items-start gap-x-2">
                            <div class="x-feature-icon">
                                <img class="w-8 min-w-8" src="/wp-content/uploads/2024/09/tire_6955616.svg" />
                            </div>
                        <div class="x-feature-text text-sm">
                        Safer Than Ever: Crafted with precision CNC technology, we've built the strongest and most reliable scooter to guarantee your safety.
                        </div>
                    </div>
                    
                    <div class="x-feature flex items-start gap-x-2">
                        <div class="x-feature-icon">
                            <img class="w-8 min-w-8" src="/wp-content/uploads/2024/09/tire_6955616.svg" />
                        </div>
                        <div class="x-feature-text text-sm">
                        Futuristic Tech: Packed with the latest technology, our scooter offers a smart, responsive ride experience.
                    </div>
                    </div>
                    <div class="x-feature flex items-start gap-x-2">
                        <div class="x-feature-icon">
                            <img class="w-8 min-w-8" src="/wp-content/uploads/2024/09/tire_6955616.svg" />
                        </div>
                        <div class="x-feature-text text-sm">
                        Modular Design: Easy to fold and with replaceable parts, it’s designed for convenience and adaptability 
                        </div>
                    </div>
                </div>

                <div class="x-price md:text-start"><?= $product->price.get_woocommerce_currency_symbol(); ?></div>

                <? woocommerce_simple_add_to_cart(); ?>
            </div>

            <img src="<?= wp_get_attachment_image_url( $image_id, 'full' ) ?>" class="x-image md:w-1/2" />
        </section>
        <?
    }
?>
<!-- /wp:html -->



<!-- wp:html -->
<section class="hero2 fit mdhscreen md:flex md:items-center">
    <img class="hero-img w-full md:hidden" src="/wp-content/uploads/2024/09/Group-1171275049.svg" />


    <div class="hero2-content md:mx-24 md:text-start">
        <div class="title left nomb">{{ hero2.title }}</div>

        <div class="primary-title">{{ hero2.primaryTitle }}</div>

        <div class="paragraph">{{ hero2.paragraph }}</div>

        <button class="hollow-btn py-2 px-6 mt-6 w-fit text-black">{{ hero2.btn }}</button>
    </div>
</section>
<!-- /wp:html -->

<!-- wp:html -->
<section class="mfit md:py-8">

    <div class="highlights flex flex-col gap-y-4 md:flex-row md:justify-evenly">
        <div class="highlight flex flex-col">
            <div class="highlight-image relative">
                <img src="/wp-content/uploads/2024/09/man-riding-electric-scooter-busy-cityscape-ecofriendly-commuting-concept-healthy.svg" />
                <div class="highlight-like-button"></div>
            </div>

            <div class="highlight-details flex flex-col justify-center items-center">
                <div class="highlight-bottom-head">Performance</div>
                <div class="highlight-bottom-stat text-2xl font-medium">x500</div>
                <div class="highlight-bottom-bottom text-lg">More Efficient</div>
            </div>
        </div>

        <div class="highlight flex flex-col">
            <div class="highlight-image relative">
                <img src="/wp-content/uploads/2024/09/teenage-boy-lifestyle-concept-with-scooter.svg" />
                <div class="highlight-like-button"></div>
            </div>

            <div class="highlight-details flex flex-col justify-center items-center">
                <div class="highlight-bottom-head">Performance</div>
                <div class="highlight-bottom-stat text-2xl font-medium">x500 times</div>
                <div class="highlight-bottom-bottom text-lg">More Efficient</div>
            </div>
        </div>

        <div class="highlight flex flex-col">
            <div class="highlight-image relative">
                <img src="/wp-content/uploads/2024/09/full-shot-young-man-sitting-scooter-1.svg" />
                <div class="highlight-like-button"></div>
            </div>

            <div class="highlight-details flex flex-col justify-center items-center">
                <div class="highlight-bottom-head">Performance</div>
                <div class="highlight-bottom-stat text-2xl font-medium">x500 times</div>
                <div class="highlight-bottom-bottom text-lg">More Efficient</div>
            </div>
        </div>
    </div>
</section>

<!-- wp:html -->
<section class="fit bg-white">
    <div class="title lg md:mb-0 nomb-md md:pt-8">Frequently asked questions</div>
    <div class="paragraph text-center mb-4">Everything you need to know about the product and billing.</div>

    <details>
        <summary>
            <span class="summary-title">Details element with custom arrow!</span>
            <div class="summary-chevron-up">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </div>
        </summary>

        <div class="summary-content">Give me attention or face the wrath of my claws give me attention or face the wrath of my claws and pretend not to be evil cats go for world domination allways wanting food. Eat owner's food playing with balls of wool and meow and walk away, and bleghbleghvomit
            my furball really tie the room together. Cuddle no cuddle cuddle love scratch scratch cat</div>
        <div class="summary-chevron-down">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up"><polyline points="18 15 12 9 6 15"></polyline></svg>
        
    </details>

    <details>
        <summary>
            <span class="summary-title">Details element with custom arrow!</span>
            <div class="summary-chevron-up">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </div>
        </summary>

        <div class="summary-content">Give me attention or face the wrath of my claws give me attention or face the wrath of my claws and pretend not to be evil cats go for world domination allways wanting food. Eat owner's food playing with balls of wool and meow and walk away, and bleghbleghvomit
            my furball really tie the room together. Cuddle no cuddle cuddle love scratch scratch cat</div>
        <div class="summary-chevron-down">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up"><polyline points="18 15 12 9 6 15"></polyline></svg>
        
    </details>

    <details>
        <summary>
            <span class="summary-title">Details element with custom arrow!</span>
            <div class="summary-chevron-up">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </div>
        </summary>

        <div class="summary-content">Give me attention or face the wrath of my claws give me attention or face the wrath of my claws and pretend not to be evil cats go for world domination allways wanting food. Eat owner's food playing with balls of wool and meow and walk away, and bleghbleghvomit
            my furball really tie the room together. Cuddle no cuddle cuddle love scratch scratch cat</div>
        <div class="summary-chevron-down">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up"><polyline points="18 15 12 9 6 15"></polyline></svg>
        
    </details>


    <!-- <div class="collapsibles flex flex-col gap-y-2">
        <div class="collapsible active">
            <div class="collapsible-top flex justify-between">
                <div class="collapsible-title">Lorem Ipsum</div>
                <img src="/wp-content/uploads/2024/09/Icon.svg" class="collapser active">
            </div>
            <div class="collapsible-paragraph">Dolor Sit Amet</div>
        </div>

        <div class="collapsible">
            <div class="collapsible-top flex justify-between">
                <div class="collapsible-title">Lorem Ipsum</div>
                <img src="/wp-content/uploads/2024/09/Icon-1.svg" class="collapser">
            </div>
            <div class="collapsible-paragraph">Dolor Sit Amet</div>
        </div>

        <div class="collapsible">
            <div class="collapsible-top flex justify-between">
                <div class="collapsible-title">Lorem Ipsum</div>
                <img src="/wp-content/uploads/2024/09/Icon-1.svg" class="collapser">
            </div>
            <div class="collapsible-paragraph">Dolor Sit Amet</div>
        </div>
        
        <div class="collapsible">
            <div class="collapsible-top flex justify-between">
                <div class="collapsible-title">Lorem Ipsum</div>
                <img src="/wp-content/uploads/2024/09/Icon-1.svg" class="collapser">
            </div>
            <div class="collapsible-paragraph">Dolor Sit Amet</div>
        </div>
    </div> -->
</section>
<!-- /wp:html -->

<!-- wp:html -->
<section class="clear hidden">
    <div class="title">{{ blog.title }}</div>

    <div class="posts flex overflow-x-scroll">
        <div class="post flex flex-col">
            <img src="/wp-content/uploads/2024/09/Image-1.svg" class="post-image">
            <div class="post-title font-medium text-lg">{{ blog.post1.title }}</div>
            <div class="post-desc">{{ blog.post1.desc }}</div>
            <div class="post-read-more">{{ blog.post1.readMore }} <img src="/wp-content/uploads/2024/09/Arrow.svg" /></div>
        </div>
        <div class="post flex flex-col">
            <img src="/wp-content/uploads/2024/09/Image-1.svg" class="post-image">
            <div class="post-title font-medium text-lg">{{ blog.post1.title }}</div>
            <div class="post-desc">{{ blog.post1.desc }}</div>
            <div class="post-read-more">{{ blog.post1.readMore }} <img src="/wp-content/uploads/2024/09/Arrow.svg" /></div>
        </div>
        <div class="post flex flex-col">
            <img src="/wp-content/uploads/2024/09/Image-1.svg" class="post-image">
            <div class="post-title font-medium text-lg">{{ blog.post1.title }}</div>
            <div class="post-desc">{{ blog.post1.desc }}</div>
            <div class="post-read-more">{{ blog.post1.readMore }} <img src="/wp-content/uploads/2024/09/Arrow.svg" /></div>
        </div>
    </div>
</section>

<main>
<?php get_footer(); ?> 
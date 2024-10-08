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

$highlights = array(
    array(
        'image' => '/wp-content/uploads/2024/09/man-riding-electric-scooter-busy-cityscape-ecofriendly-commuting-concept-healthy.svg',
        'title' => 'Performance',
        'stat' => 'x500',
        'description' => 'More Efficient'
    ),
    array(
        'image' => '/wp-content/uploads/2024/09/teenage-boy-lifestyle-concept-with-scooter.svg',
        'title' => 'Infinite combinations',
        'stat' => '2k+',
        'description' => 'components'
    ),
    array(
        'image' => '/wp-content/uploads/2024/09/full-shot-young-man-sitting-scooter-1.svg',
        'title' => 'Guarantee',
        'stat' => '98%',
        'description' => 'positive reviews'
    )
);


$faqs = array(
    array(
        'question' => 'Details element with custom arrow!',
        'answer' => 'Give me attention or face the wrath of my claws give me attention or face the wrath of my claws and pretend not to be evil cats go for world domination allways wanting food. Eat owner\'s food playing with balls of wool and meow and walk away, and bleghbleghvomit my furball really tie the room together. Cuddle no cuddle cuddle love scratch scratch cat'
    ),
    array(
        'question' => 'Another frequently asked question?',
        'answer' => 'Here\'s another example answer. You can add as many questions and answers as you need.'
    ),
    array(
        'question' => 'What if I have a third question?',
        'answer' => 'No problem! Just add another item to the $faqs array with the question and answer.'
    )
);

// Function to generate SVG icons
function get_svg_icon($icon_name)
{
    if ($icon_name === 'chevron-down') {
        return '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>';
    } elseif ($icon_name === 'chevron-up') {
        return '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up"><polyline points="18 15 12 9 6 15"></polyline></svg>';
    }
    return '';
}
?>


<main>




    <section
        class="relative hero-section md:flex md:items-center relative w-full  bg-cover bg-no-repeat bg-left sm:bg-none bg-[url('/wp-content/themes/rideped/assets/scooters-bg-line-ltr.svg')]">


        <div class="grid sm:grid-cols-3">
            <div class="flex mt-[40px]  col-span-1 mx-[24px] gap-[40px] sm:flex-col sm:ml-[64px]">
                <h3 class="h3 hidden sm:flex">Speed Quality Relaiabilty</h3>
                <h3 class="h3 sm:hidden">Speed <br /> Quality <br /> Relaiabilty</h3>

                <div class="flex flex-col items-center gap-[24px] sm:items-start">
                    <div class="gap-[16px] flex flex-col sm:grid grid-cols-3">
                        <?php foreach ($features as $feature): ?>
                            <div class="feature flex items-center gap-2 sm:flex-col">
                                <div class="feature-icon">
                                    <img width="30px" height="30px" src="<?php echo esc_url($feature['icon']); ?>"
                                        alt="<?php echo esc_attr($feature['text']); ?>">
                                </div>
                                <div class="feature-text"><?php echo esc_html($feature['text']); ?></div>
                            </div>
                        <?php endforeach; ?>

                    </div>


                    <?php echo do_shortcode('[woo_buy_button product_id="14" text="Buy now"]'); ?>


                    <img width="320" class="sm:hidden w-[320px]" src="/wp-content/themes/rideped/assets/scooters.svg"
                        alt="">

                </div>




            </div>

            <img class="hidden sm:block col-span-2" src="/wp-content/themes/rideped/assets/scooters-bg-rtl.svg" alt="">

        </div>
    </section>



    <section class="px-[21px] sm:px-[0]">
        <div class="text-center text-black text-[32px] font-semibold font-['Inter'] capitalize leading-[104.53px]">
            Our Scooters
        </div>

        <div class="products grid sm:grid-cols-3 gap-[24px] sm:gap-[40px] max-w-[1400px] mx-auto w-full">
            <?php
            $query_args = array(
                'numberposts' => 3,
                'category' => array('scooters'),
            );
            $products = wc_get_products($query_args);


            foreach ($products as $product) {
                $image_id = $product->get_image_id();
                $is_coming_soon = count($product->tag_ids) != 0;
                ?>
                <div class="product flex flex-col rounded-md">
                    <div class="product-image relative flex justify-center items-center "
                        style="border-radius: 30px 30px 0px 0;padding: 31px; background-image: url(/wp-content/themes/rideped/assets/cement-wall-floor-copy-space.png); background-repeat: no-repeat; background-size:cover;">
                        <img class="w-[319px] h-[319px] object-contain"
                            src="<?= wp_get_attachment_image_url($image_id, 'full') ?>" />
                        <?
                        if ($is_coming_soon) {
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
                            <div class="product-price text-gray-400">
                                <?= $product->price . get_woocommerce_currency_symbol(); ?>
                            </div>
                        </div>
                        <?php echo do_shortcode('[woo_buy_button]'); ?>
                    </div>
                </div>
                <?
            }
            ?>
        </div>
        <div class="h-20 md:hidden"></div>

    </section>



    <section>
        <div class="text-center text-black text-[32px] font-semibold font-['Inter'] capitalize leading-[104.53px]">
            <?php
            echo apply_filters(
                'set-default-payment-method',
                'Add to Cart', // $original_string
                'WP Endpoints', // $domain
                'set-default-payment-method' // $name
            );
            ?>
        </div>

        <div class="max-w-[1400px] mx-auto">
            <?php echo do_shortcode('[product_categories columns="3" number="3" hide_empty="0" parent="0"]') ?>
        </div>
    </section>


    <?php
    $query_args = array(
        'numberposts' => 1,
        'category' => 'scooters',
    );
    $products = wc_get_products($query_args);


    foreach ($products as $product) {
        $image_id = $product->get_image_id();
        $is_coming_soon = count($product->tag_ids) != 0;
        ?>
        <section class="xfeatures fit md:flex md:items-center md:justify-center md:gap-x-24 relative">
        <img src="<?= wp_get_attachment_image_url($image_id, 'full') ?>" class="x-image md:w-1/2" />
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
                            Safer Than Ever: Crafted with precision CNC technology, we've built the strongest and most
                            reliable scooter to guarantee your safety.
                        </div>
                    </div>

                    <div class="x-feature flex items-start gap-x-2">
                        <div class="x-feature-icon">
                            <img class="w-8 min-w-8" src="/wp-content/uploads/2024/09/tire_6955616.svg" />
                        </div>
                        <div class="x-feature-text text-sm">
                            Futuristic Tech: Packed with the latest technology, our scooter offers a smart, responsive ride
                            experience.
                        </div>
                    </div>
                    <div class="x-feature flex items-start gap-x-2">
                        <div class="x-feature-icon">
                            <img class="w-8 min-w-8" src="/wp-content/uploads/2024/09/tire_6955616.svg" />
                        </div>
                        <div class="x-feature-text text-sm">
                            Modular Design: Easy to fold and with replaceable parts, it’s designed for convenience and
                            adaptability
                        </div>
                    </div>
                </div>

                <div class="x-price md:text-start"><?= $product->price . get_woocommerce_currency_symbol(); ?></div>

                <!-- <? woocommerce_simple_add_to_cart(); ?> -->
                 <?php echo do_shortcode('[woo_buy_button]'); ?>
            </div>



            <img class="absolute bottom-0 right-0 rotate-270 hidden sm:block"
                src="/wp-content/uploads/2024/09/Group-1171275044.svg" />
        </section>
        <?
    }
    ?>

    <section class="hero2 fit mdhscreen md:flex md:items-center">
        <img class="hero-img w-full md:hidden" src="/wp-content/uploads/2024/09/Group-1171275049.svg" />


        <div class="hero2-content md:mx-24 md:text-start">
            <div class="title left nomb">{{ hero2.title }}</div>

            <div class="primary-title">{{ hero2.primaryTitle }}</div>

            <div class="paragraph">{{ hero2.paragraph }}</div>

            <button class="hollow-btn py-2 px-6 mt-6 w-fit text-black">{{ hero2.btn }}</button>
        </div>
    </section>

    <section class="mfit md:py-8 px-[21px] mt-[24px] sm:px-none">
        <div class="grid sm:grid-cols-3 gap-[24px] sm:gap-[40px] max-w-[1400px] mx-auto w-full gap-y-4 md:flex-row md:justify-between">
            <?php foreach ($highlights as $highlight): ?>
                <div class="highlight flex flex-col rounded-[30px]">
                    <div class="highlight-image relative">
                        <img class="w-full rounded-t-[30px]" src="<?php echo esc_url($highlight['image']); ?>"
                            alt="<?php echo esc_attr($highlight['title']); ?>" />
                        <div class="highlight-like-button"></div>
                    </div>

                    <div class="highlight-details flex flex-col justify-center items-center">
                        <div class="highlight-bottom-head"><?php echo esc_html($highlight['title']); ?></div>
                        <div class="highlight-bottom-stat text-2xl font-medium"><?php echo esc_html($highlight['stat']); ?>
                        </div>
                        <div class="highlight-bottom-bottom text-lg"><?php echo esc_html($highlight['description']); ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>


    <section class="fit bg-white px-[21px] mt-[24px] sm:px-none">
        <div class="title lg md:mb-0 nomb-md md:pt-8">Frequently asked questions</div>
        <div class="paragraph text-center mb-4">Everything you need to know about the product and billing.</div>

        <?php foreach ($faqs as $faq): ?>
            <details>
                <summary>
                    <span class="summary-title"><?php echo esc_html($faq['question']); ?></span>
                    <div class="summary-chevron-up">
                        <?php echo get_svg_icon('chevron-down'); ?>
                    </div>
                </summary>

                <div class="summary-content"><?php echo esc_html($faq['answer']); ?></div>
                <div class="summary-chevron-down">
                    <?php echo get_svg_icon('chevron-up'); ?>
                </div>
            </details>
        <?php endforeach; ?>

    </section>


    <section class="clear hidden">
        <div class="title">{{ blog.title }}</div>

        <div class="posts flex overflow-x-scroll">
            <div class="post flex flex-col">
                <img src="/wp-content/uploads/2024/09/Image-1.svg" class="post-image">
                <div class="post-title font-medium text-lg">{{ blog.post1.title }}</div>
                <div class="post-desc">{{ blog.post1.desc }}</div>
                <div class="post-read-more">{{ blog.post1.readMore }} <img
                        src="/wp-content/uploads/2024/09/Arrow.svg" /></div>
            </div>
            <div class="post flex flex-col">
                <img src="/wp-content/uploads/2024/09/Image-1.svg" class="post-image">
                <div class="post-title font-medium text-lg">{{ blog.post1.title }}</div>
                <div class="post-desc">{{ blog.post1.desc }}</div>
                <div class="post-read-more">{{ blog.post1.readMore }} <img
                        src="/wp-content/uploads/2024/09/Arrow.svg" /></div>
            </div>
            <div class="post flex flex-col">
                <img src="/wp-content/uploads/2024/09/Image-1.svg" class="post-image">
                <div class="post-title font-medium text-lg">{{ blog.post1.title }}</div>
                <div class="post-desc">{{ blog.post1.desc }}</div>
                <div class="post-read-more">{{ blog.post1.readMore }} <img
                        src="/wp-content/uploads/2024/09/Arrow.svg" /></div>
            </div>
        </div>
    </section>

    <main>




        <?php get_footer(); ?>
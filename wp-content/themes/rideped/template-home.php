<?php
/**
 * Template Name: Home Page
 */

get_header();

$features = [
    ['icon' => '/wp-content/uploads/2024/09/kilogram_5009306.svg', 'text' => __('29.9 kg', 'rideped')],
    ['icon' => '/wp-content/uploads/2024/09/charging_5945741.svg', 'text' => __('48V15AH', 'rideped')],
    ['icon' => '/wp-content/uploads/2024/09/dashboard_8078295.svg', 'text' => __('25 km/h', 'rideped')],
    ['icon' => '/wp-content/uploads/2024/09/tire_6955616.svg', 'text' => __('2x750KW', 'rideped')],
    ['icon' => '/wp-content/uploads/2024/09/tire_950472.svg', 'text' => __('pMT 11"', 'rideped')],
    ['icon' => '/wp-content/uploads/2024/09/road_6088994.svg', 'text' => __('40 km', 'rideped')]
];

$highlights = [
    [
        'image' => '/wp-content/uploads/2024/09/man-riding-electric-scooter-busy-cityscape-ecofriendly-commuting-concept-healthy.svg',
        'title' => __('Performance', 'rideped'),
        'stat' => __('x500', 'rideped'),
        'description' => __('More Efficient', 'rideped')
    ],
    [
        'image' => '/wp-content/uploads/2024/09/teenage-boy-lifestyle-concept-with-scooter.svg',
        'title' => __('Infinite combinations', 'rideped'),
        'stat' => __('2k+', 'rideped'),
        'description' => __('components', 'rideped')
    ],
    [
        'image' => '/wp-content/uploads/2024/09/full-shot-young-man-sitting-scooter-1.svg',
        'title' => __('Guarantee', 'rideped'),
        'stat' => __('98%', 'rideped'),
        'description' => __('positive reviews', 'rideped')
    ]
];

$faqs = [
    [
        'question' => __('What is the CNC technology and why is it better then casting?', 'rideped'),
        'answer' => __('At our company, we utilize advanced CNC (Computer Numerical Control) machining to craft each scooter with unmatched precision and strength. CNC is a modern manufacturing process where computers control the movement of cutting tools to shape materials with extreme accuracy. Unlike traditional methods, CNC machining allows us to build every component to exact specifications, ensuring superior durability and reliability. This high-precision process results in parts that fit perfectly together, reducing wear and increasing the scooter\'s lifespan. Our CNC-crafted scooters are built to handle the toughest conditions, offering customers the confidence that their scooter is not only strong but will also perform consistently, ride after ride.', 'rideped')
    ],
    [
        'question' => __('What makes RidePed\'s scooters safer then other scooters?', 'rideped'),
        'answer' => __('RidePed\'s scooters are designed with safety as our top priority. Our scooters are crafted from the highest-quality materials available, including carbon Fiber and 6065 aluminium, ensuring exceptional durability and strength. Each component is precisely manufactured using advanced CNC technology, and instead of welding, we use a screwing system to assemble the parts, enhancing reliability and longevity. Unlike many competitors, our scooters are equipped with real PMT tires, renowned for their superior performance, providing better grip and stability on the road. Additionally, our patented shock absorbers offer an incredibly smooth and comfortable ride, reducing the impact of bumps and uneven surfaces. Every detail of RidePed\'s scooter has been thoughtfully engineered to give you the safest, most comfortable, and highest-quality riding experience. At RidePed, safety and quality are not just priorities—they are our motto.', 'rideped')
    ]
];

function get_svg_icon($icon_name)
{
    $icons = [
        'chevron-down' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>',
        'chevron-up' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up"><polyline points="18 15 12 9 6 15"></polyline></svg>'
    ];
    return $icons[$icon_name] ?? '';
}
?>

<main>
    <section
        class="relative hero-section md:flex md:items-center relative w-full bg-cover md:h-[964px] bg-no-repeat bg-left md:bg-right md:bg-[url('/wp-content/themes/rideped/assets/scooters-bg-rtl.svg')] bg-[url('/wp-content/themes/rideped/assets/scooters-bg-line-ltr.svg')] <?php if (is_rtl()): ?>
        md:bg-[url('/wp-content/themes/rideped/assets/scooters-bg-ltr.svg')]
    <?php else: ?>
        md:bg-[url('/wp-content/themes/rideped/assets/scooters-bg-rtl.svg')]
    <?php endif; ?>
    bg-[url('/wp-content/themes/rideped/assets/scooters-bg-line-ltr.svg')]">
        <div class="container">
            <div class="flex mt-[40px]  px-[21px] md:px-[0] gap-[40px] md:flex-col">
                <h3 class="text-black text-5xl font-semibold  capitalize leading-[55.12px] hidden md:flex">
                    <?php esc_html_e('Speed Quality Reliability', 'rideped'); ?>
                </h3>
                <h3 class="w-[216px] text-black text-4xl font-semibold  capitalize leading-[55.12px] md:hidden">
                    <?php esc_html_e('Speed <br /> Quality <br /> Reliability', 'rideped'); ?>
                </h3>

                <div class="flex flex-col items-center gap-[24px] md:items-start">
                    <div class="gap-[16px] flex flex-col md:grid grid-cols-3">
                        <?php foreach ($features as $feature): ?>
                            <div class="feature flex items-center gap-2 md:flex-col">
                                <div class="feature-icon">
                                    <img width="30" height="30" src="<?php echo esc_url($feature['icon']); ?>"
                                        alt="<?php echo esc_attr($feature['text']); ?>">
                                </div>
                                <div class="feature-text"><?php echo esc_html($feature['text']); ?></div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <?php echo do_shortcode('[woo_buy_button product_id="14" text="' . esc_attr__('Buy now', 'rideped') . '"]'); ?>

                    <img width="320" class="md:hidden w-[320px]"
                        src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/scooters.svg'); ?>" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="px-[21px] md:px-[0] mt-[24px]">
        <h2 class="text-center text-black text-[32px] font-semibold font-['Inter'] capitalize leading-[30.34px] md:leading-[104.53px]">
            <?php esc_html_e('Our Scooters', 'rideped'); ?>
        </h2>

        <div class="products grid md:grid-cols-3 gap-[24px] md:gap-[40px] container pb-[50px] md:pb-none">
            <?php
            $query_args = [
                'post_type' => 'product',
                'posts_per_page' => 3,
                'tax_query' => [
                    [
                        'taxonomy' => 'product_cat',
                        'field' => 'slug',
                        'terms' => 'scooters',
                    ],
                ],
            ];
            $products = new WP_Query($query_args);

            if ($products->have_posts()):
                while ($products->have_posts()):
                    $products->the_post();
                    global $product;
                    $is_coming_soon = has_term('coming-soon', 'product_tag');
                    ?>
                    <div class="product flex flex-col rounded-md">
                        <div class="product-image relative flex justify-center items-center"
                            style="border-radius: 30px 30px 0 0; padding: 31px; background-image: url(<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/cement-wall-floor-copy-space.png'); ?>); background-repeat: no-repeat; background-size: cover;">
                            <?php echo $product->get_image('full', ['class' => 'max-w-full w-[319px] h-[319px] object-contain']); ?>
                            <?php if ($is_coming_soon): ?>
                                <img class="absolute top-0"
                                    src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/coming-soon-badge.svg'); ?>"
                                    alt="<?php esc_attr_e('Coming Soon', 'rideped'); ?>" />
                            <?php endif; ?>
                            <div class="product-like-button"></div>
                        </div>
                        <div class="product-details bg-black flex justify-between items-center justify-center">
                            <div class="product-bottom-left flex flex-col gap-y-2">
                                <div class="product-name font-bold"><?php the_title(); ?></div>
                                <div class="product-price text-gray-400"><?php echo $product->get_price_html(); ?></div>
                            </div>
                            <?php echo do_shortcode('[woo_buy_button]'); ?>
                        </div>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
        
    </section>

    <?php
    $featured_product_query = new WP_Query([
        'post_type' => 'product',
        'posts_per_page' => 1,
        'tax_query' => [
            [
                'taxonomy' => 'product_cat',
                'field' => 'slug',
                'terms' => 'scooters',
            ],
        ],
    ]);

    if ($featured_product_query->have_posts()):
        while ($featured_product_query->have_posts()):
            $featured_product_query->the_post();
            global $product;
            ?>
            <section
                class="border-y-[#F28B30] border-[1px] xfeatures px-[21px] md:px-[0] fit md:flex md:items-center  md:justify-center md:gap-x-24 relative">

                <div class="container  md:gap-[80px] grid md:grid-cols-2 items-center">

                    <?php echo $product->get_image('full', ['class' => 'x-image md:order-0']); ?>
                    <div class="my-[50px] md:mt-[24px]">
                        <h2 class="title left mt-4"><?php the_title(); ?></h2>

                        <div class="x-features flex flex-col gap-y-4">
                            <div class="x-feature flex items-start gap-x-2">
                                <div class="x-feature-icon">
                                    <img class="w-8 min-w-8"
                                        src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/features/tire_6955616.svg'); ?>"
                                        alt="">
                                </div>
                                <div class="x-feature-text text-sm">
                                    <?php esc_html_e('Safer Than Ever: Crafted with precision CNC technology, we\'ve built the strongest and most reliable scooter to guarantee your safety.', 'rideped'); ?>
                                </div>
                            </div>

                            <div class="x-feature flex items-start gap-x-2">
                                <div class="x-feature-icon">
                                    <img class="w-8 min-w-8"
                                        src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/features/tire_6955616.svg'); ?>"
                                        alt="">
                                </div>
                                <div class="x-feature-text text-sm">
                                    <?php esc_html_e('Futuristic Tech: Packed with the latest technology, our scooter offers a smart, responsive ride experience.', 'rideped'); ?>
                                </div>
                            </div>
                            <div class="x-feature flex items-start gap-x-2">
                                <div class="x-feature-icon">
                                    <img class="w-8 min-w-8"
                                        src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/features/tire_6955616.svg'); ?>"
                                        alt="">
                                </div>
                                <div class="x-feature-text text-sm">
                                    <?php esc_html_e('Modular Design: Easy to fold and with replaceable parts, it\'s designed for convenience and adaptability', 'rideped'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="x-price md:text-start"><?php echo $product->get_price_html(); ?></div>

                        <?php echo do_shortcode('[woo_buy_button text="' . esc_attr__('Buy now', 'rideped') . '"]'); ?>

                    </div>

                </div>

                <img class="absolute bottom-0 right-0 rotate-270 hidden md:block"
                    src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/Group-1171275044.svg'); ?>" alt="">
            </section>
            <?php
        endwhile;
        wp_reset_postdata();
    endif;
    ?>

<section class="px-[21px] md:px-[0]">

    <div class="container">

        <h2 class="text-center text-black text-[32px] mt-[24px] font-semibold  capitalize leading-[30.34px] md:leading-[104.53px]">
            <?php esc_html_e('Upgrade your scooter', 'rideped'); ?>
        </h2>

        <div class="products grid md:grid-cols-3 gap-[24px] md:gap-[40px] container">
            <?php
            $args = array(
                'taxonomy' => 'product_cat',
                'orderby' => 'name',
                'hide_empty' => 0,
                'number' => 3,
                'parent' => 0
            );
            $categories = get_categories($args);

            foreach ($categories as $category):
                $category_link = get_term_link($category);
                $thumbnail_id = get_term_meta($category->term_id, 'thumbnail_id', true);
                $image = wp_get_attachment_image_src($thumbnail_id, 'full');
                $default_image = '/wp-content/uploads/woocommerce-placeholder.png';
                ?>

                <div class="product flex flex-col rounded-md">
                    <div class="product-image relative flex justify-center items-center"
                        style="border-radius: 30px 30px 0 0; padding: 31px; background-image: url(<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/cement-wall-floor-copy-space.png'); ?>); background-repeat: no-repeat; background-size: cover;">

                        <img src="<?php echo $image ? esc_url($image[0]) : esc_url($default_image); ?>"
                            alt="<?php echo esc_attr($category->name); ?>" class="max-w-full w-[319px] h-[319px] object-contain" />

                    </div>
                    <div class="product-details !p-[30px] bg-black flex  items-center justify-center">
                        <a href="<?php echo esc_url($category_link); ?>" class="text-white text-[35px] font-bold leading-[30.27px] hover:text-white">
                            <?php echo esc_html($category->name); ?>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="md:flex md:items-center bg-[#F2F2F2] mt-[24px]">

    <div class="container md:gap-[80px] grid md:grid-cols-2 items-center">

        <img class="w-full md:order-1"
            src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/rideped-tire.svg'); ?>" alt="">

        <div class="px-[21px] md:px-[0]">
            <h2 class="title left nomb"><?php esc_html_e('Rideped scooter', 'rideped'); ?></h2>
            <h3 class="primary-title"><?php esc_html_e('Innovative Tech and Modularity', 'rideped'); ?></h3>
            <p class="paragraph">
                <?php esc_html_e('we never leave our customers behind when it comes to innovation. That\'s why our scooters are designed with a modular build, allowing for quick and easy part replacements. In other words, It\'s a next-level scooter that delivers an unbeatable ride experience, time after time!', 'rideped'); ?>
            </p>
            <button class="hollow-btn py-2 px-6 mt-6 w-fit text-black"><?php esc_html_e('Learn More', 'rideped'); ?></button>
        </div>

    </div>

</section>

<section class="px-[21px] mt-[24px]">
    <div class="grid md:grid-cols-3 gap-[24px] md:gap-[40px]  w-full gap-y-4 md:flex-row md:justify-between container">
        <?php foreach ($highlights as $highlight): ?>
            <div class="highlight flex flex-col rounded-[30px]">
                <div class="highlight-image relative">
                    <img class="w-full rounded-t-[30px]" src="<?php echo esc_url($highlight['image']); ?>"
                        alt="<?php echo esc_attr($highlight['title']); ?>" />
                    <div class="highlight-like-button"></div>
                </div>

                <div class="highlight-details flex flex-col justify-center items-center">
                    <div class="highlight-bottom-head"><?php echo esc_html($highlight['title']); ?></div>
                    <div class="highlight-bottom-stat text-2xl font-medium"><?php echo esc_html($highlight['stat']); ?></div>
                    <div class="highlight-bottom-bottom text-lg"><?php echo esc_html($highlight['description']); ?></div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<section class="fit bg-white px-[21px] mt-[24px] md:px-none">
    <h2 class="title lg md:mb-0 nomb-md md:pt-8"><?php esc_html_e('Frequently asked questions', 'rideped'); ?></h2>
    <p class="paragraph text-center mb-4">
        <?php esc_html_e('Everything you need to know about the product and billing.', 'rideped'); ?>
    </p>

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
    <h2 class="title"><?php esc_html_e('Blog Title', 'rideped'); ?></h2>

    <div class="posts flex overflow-x-scroll">
        <?php
        $blog_posts = new WP_Query([
            'post_type' => 'post',
            'posts_per_page' => 3,
        ]);

        if ($blog_posts->have_posts()):
            while ($blog_posts->have_posts()):
                $blog_posts->the_post();
                ?>
                <div class="post flex flex-col">
                    <?php the_post_thumbnail('full', ['class' => 'post-image']); ?>
                    <h3 class="post-title font-medium text-lg"><?php the_title(); ?></h3>
                    <div class="post-desc"><?php the_excerpt(); ?></div>
                    <a href="<?php the_permalink(); ?>" class="post-read-more">
                        <?php esc_html_e('Read More', 'rideped'); ?>
                        <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/uploads/2024/09/Arrow.svg'); ?>" alt="<?php esc_attr_e('Arrow', 'rideped'); ?>" />
                    </a>
                </div>
                <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </div>
</section>
</main>

<?php get_footer(); ?>
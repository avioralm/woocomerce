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
        'question' => __('Details element with custom arrow!', 'rideped'),
        'answer' => __('Give me attention or face the wrath of my claws give me attention or face the wrath of my claws and pretend not to be evil cats go for world domination allways wanting food. Eat owner\'s food playing with balls of wool and meow and walk away, and bleghbleghvomit my furball really tie the room together. Cuddle no cuddle cuddle love scratch scratch cat', 'rideped')
    ],
    [
        'question' => __('Another frequently asked question?', 'rideped'),
        'answer' => __('Here\'s another example answer. You can add as many questions and answers as you need.', 'rideped')
    ],
    [
        'question' => __('What if I have a third question?', 'rideped'),
        'answer' => __('No problem! Just add another item to the $faqs array with the question and answer.', 'rideped')
    ]
];

function get_svg_icon($icon_name) {
    $icons = [
        'chevron-down' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>',
        'chevron-up' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up"><polyline points="18 15 12 9 6 15"></polyline></svg>'
    ];
    return $icons[$icon_name] ?? '';
}
?>

<main>
    <section class="relative hero-section md:flex md:items-center relative w-full bg-cover bg-no-repeat bg-left sm:bg-none bg-[url('/wp-content/themes/rideped/assets/scooters-bg-line-ltr.svg')]">
        <div class="grid sm:grid-cols-3">
            <div class="flex mt-[40px] col-span-1 mx-[24px] gap-[40px] sm:flex-col sm:ml-[130px]">
                <h3 class="h3 hidden sm:flex"><?php _e('Speed Quality Reliability', 'rideped'); ?></h3>
                <h3 class="h3 sm:hidden"><?php _e('Speed <br /> Quality <br /> Reliability', 'rideped'); ?></h3>

                <div class="flex flex-col items-center gap-[24px] sm:items-start">
                    <div class="gap-[16px] flex flex-col sm:grid grid-cols-3">
                        <?php foreach ($features as $feature): ?>
                            <div class="feature flex items-center gap-2 sm:flex-col">
                                <div class="feature-icon">
                                    <img width="30" height="30" src="<?php echo esc_url($feature['icon']); ?>" alt="<?php echo esc_attr($feature['text']); ?>">
                                </div>
                                <div class="feature-text"><?php echo esc_html($feature['text']); ?></div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <?php echo do_shortcode('[woo_buy_button product_id="14" text="' . __('Buy now', 'rideped') . '"]'); ?>

                    <img width="320" class="sm:hidden w-[320px]" src="<?php echo get_stylesheet_directory_uri() . '/assets/scooters.svg'; ?>" alt="">
                </div>
            </div>

            <img class="hidden sm:block col-span-2" src="<?php echo get_stylesheet_directory_uri() . '/assets/scooters-bg-rtl.svg'; ?>" alt="">
        </div>
    </section>

    <section class="px-[21px] sm:px-[0]">
        <h2 class="text-center text-black text-[32px] font-semibold font-['Inter'] capitalize leading-[104.53px]">
            <?php _e('Our Scooters', 'rideped'); ?>
        </h2>

        <div class="products grid sm:grid-cols-3 gap-[24px] sm:gap-[40px] max-w-[1240px] mx-auto w-full">
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

            if ($products->have_posts()) :
                while ($products->have_posts()) : $products->the_post();
                    global $product;
                    $is_coming_soon = has_term('coming-soon', 'product_tag');
                    ?>
                    <div class="product flex flex-col rounded-md">
                        <div class="product-image relative flex justify-center items-center" style="border-radius: 30px 30px 0 0; padding: 31px; background-image: url(<?php  echo get_stylesheet_directory_uri() .'/assets/cement-wall-floor-copy-space.png'; ?>); background-repeat: no-repeat; background-size: cover;">
                            <?php echo $product->get_image('full', ['class' => 'w-[319px] h-[319px] object-contain']); ?>
                            <?php if ($is_coming_soon) : ?>
                                <img class="absolute top-0" src="<?php echo  get_stylesheet_directory_uri() .'/assets/coming-soon-badge.svg'; ?>" alt="<?php _e('Coming Soon', 'rideped'); ?>" />
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
        <div class="h-20 md:hidden"></div>
    </section>

    <section>
        <h2 class="text-center text-black text-[32px] font-semibold font-['Inter'] capitalize leading-[104.53px]">
            <?php _e('Add to Cart', 'rideped'); ?>
        </h2>

        <div class="max-w-[1240px] mx-auto">
            <?php echo do_shortcode('[product_categories columns="3" number="3" hide_empty="0" parent="0"]') ?>
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

    if ($featured_product_query->have_posts()) :
        while ($featured_product_query->have_posts()) : $featured_product_query->the_post();
            global $product;
            ?>
            <section class="xfeatures fit md:flex md:items-center md:justify-center md:gap-x-24 relative">
                <?php echo $product->get_image('full', ['class' => 'x-image md:w-1/2']); ?>
                <div class="md:w-1/3">
                    <h2 class="title left mt-4"><?php the_title(); ?></h2>

                    <div class="x-features flex flex-col gap-y-4">
                        <div class="x-feature flex items-start gap-x-2">
                            <div class="x-feature-icon">
                                <img class="w-8 min-w-8" src="<?php echo  get_stylesheet_directory_uri() .'/assets/features/tire_6955616.svg'; ?>" alt="">
                            </div>
                            <div class="x-feature-text text-sm">
                                <?php _e('Safer Than Ever: Crafted with precision CNC technology, we\'ve built the strongest and most reliable scooter to guarantee your safety.', 'rideped'); ?>
                            </div>
                        </div>

                        <div class="x-feature flex items-start gap-x-2">
                            <div class="x-feature-icon">
                                <img class="w-8 min-w-8" src="<?php echo get_stylesheet_directory_uri() .'/assets/features/tire_6955616.svg'; ?>" alt="">
                            </div>
                            <div class="x-feature-text text-sm">
                                <?php _e('Futuristic Tech: Packed with the latest technology, our scooter offers a smart, responsive ride experience.', 'rideped'); ?>
                            </div>
                        </div>
                        <div class="x-feature flex items-start gap-x-2">
                            <div class="x-feature-icon">
                                <img class="w-8 min-w-8" src="<?php echo get_stylesheet_directory_uri() .'/assets/features/tire_6955616.svg'; ?>" alt="">
                            </div>
                            <div class="x-feature-text text-sm">
                                <?php _e('Modular Design: Easy to fold and with replaceable parts, it\'s designed for convenience and adaptability', 'rideped'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="x-price md:text-start"><?php echo $product->get_price_html(); ?></div>

                    <?php woocommerce_template_single_add_to_cart(); ?>
                </div>

                <img class="absolute bottom-0 right-0 rotate-270 hidden sm:block" src="<?php echo get_stylesheet_directory_uri() .'/assets/Group-1171275044.svg'; ?>" alt="">
            </section>
            <?php
        endwhile;
        wp_reset_postdata();
    endif;
    ?>

    <section class="hero2 fit mdhscreen md:flex md:items-center">
        <img class="hero-img w-full md:hidden" src="<?php echo get_stylesheet_directory_uri() .'/assets/Group-1171275049.svg'; ?>" alt="">

        <div class="hero2-content md:mx-24 md:text-start">
            <h2 class="title left nomb"><?php _e('Hero Title', 'rideped'); ?></h2>
            <h3 class="primary-title"><?php _e('Primary Title', 'rideped'); ?></h3>
            <p class="paragraph"><?php _e('Hero paragraph content goes here.', 'rideped'); ?></p>
            <button class="hollow-btn py-2 px-6 mt-6 w-fit text-black"><?php _e('Learn More', 'rideped'); ?></button>
        </div>
    </section>

    <section class="mfit md:py-8 px-[21px] mt-[24px] sm:px-none">
        <div class="grid sm:grid-cols-3 gap-[24px] sm:gap-[40px] max-w-[1240px] mx-auto w-full gap-y-4 md:flex-row md:justify-between">
            <?php foreach ($highlights as $highlight): ?>
                <div class="highlight flex flex-col rounded-[30px]">
                    <div class="highlight-image relative">
                        <img class="w-full rounded-t-[30px]" src="<?php echo esc_url($highlight['image']); ?>" alt="<?php echo esc_attr($highlight['title']); ?>" />
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

    <section class="fit bg-white px-[21px] mt-[24px] sm:px-none">
        <h2 class="title lg md:mb-0 nomb-md md:pt-8"><?php _e('Frequently asked questions', 'rideped'); ?></h2>
        <p class="paragraph text-center mb-4"><?php _e('Everything you need to know about the product and billing.', 'rideped'); ?></p>

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
        <h2 class="title"><?php _e('Blog Title', 'rideped'); ?></h2>

        <div class="posts flex overflow-x-scroll">
            <?php
            $blog_posts = new WP_Query([
                'post_type' => 'post',
                'posts_per_page' => 3,
            ]);

            if ($blog_posts->have_posts()) :
                while ($blog_posts->have_posts()) : $blog_posts->the_post();
                    ?>
                    <div class="post flex flex-col">
                        <?php the_post_thumbnail('full', ['class' => 'post-image']); ?>
                        <h3 class="post-title font-medium text-lg"><?php the_title(); ?></h3>
                        <div class="post-desc"><?php the_excerpt(); ?></div>
                        <a href="<?php the_permalink(); ?>" class="post-read-more">
                            <?php _e('Read More', 'rideped'); ?>
                            <img src="<?php echo get_stylesheet_directory_uri() .'/assets/Arrow.svg'; ?>" alt="Arrow" />
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
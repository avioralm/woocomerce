<?php
    get_header();
?>

<!-- wp:html -->
<section class="hero-section md:flex md:items-center">
    <div class="hero flex justify-between w-4/5 mx-auto md:w-full md:flex-col md:gap-y-2">
        <div class="hero-text mt-10 md:mt-0 flex flex-col font-bold gap-y-3 md:flex-row md:gap-x-2">
            <h3 class="text-4xl md:text-2xl">Speed</h3>
            <h3 class="text-4xl md:text-2xl">Quality</h3>
            <h3 class="text-4xl md:text-2xl">Reliability</h3>
        </div>

        <div class="hero-features mt-10 md:mt-0 flex flex-col gap-y-2">
            <div class="features-container flex flex-col gap-y-2 md:flex-row md:gap-x-2">
                <div class="feature flex gap-x-1 items-center md:flex-col">
                    <div class="feature-icon">
                        <img src="/wp-content/uploads/2024/09/kilogram_5009306.svg" />
                    </div>
                    <div class="feature-text">{{ hero.ft1 }}</div>
                </div>

                <div class="feature flex gap-x-1 items-center md:flex-col">
                    <div class="feature-icon">
                        <img src="/wp-content/uploads/2024/09/charging_5945741.svg" />
                    </div>
                    <div class="feature-text">{{ hero.ft1 }}</div>
                </div>

                <div class="feature flex gap-x-1 items-center md:flex-col">
                    <div class="feature-icon">
                        <img src="/wp-content/uploads/2024/09/dashboard_8078295.svg" />
                    </div>
                    <div class="feature-text">{{ hero.ft1 }}</div>
                </div>
            </div>

            <div class="features-container flex flex-col gap-y-2 md:flex-row md:gap-x-2">
                <div class="feature flex gap-x-1 items-center md:flex-col">
                    <div class="feature-icon">
                        <img src="/wp-content/uploads/2024/09/tire_6955616.svg" />
                    </div>
                    <div class="feature-text">{{ hero.ft1 }}</div>
                </div>

                <div class="feature flex gap-x-1 items-center md:flex-col">
                    <div class="feature-icon">
                        <img src="/wp-content/uploads/2024/09/tire_950472.svg" />
                    </div>
                    <div class="feature-text">{{ hero.ft1 }}</div>
                </div>

                <div class="feature flex gap-x-1 items-center md:flex-col">
                    <div class="feature-icon">
                        <img src="/wp-content/uploads/2024/09/road_6088994.svg" />
                    </div>
                    <div class="feature-text">{{ hero.ft1 }}</div>
                </div>
            </div>

            <button class="buy-button font-bold bg-primary mt-2 rounded-full py-2 px-4 md:self-start">Buy</button>
        </div>
    </div>
</section>
<!-- /wp:html -->

<!-- wp:html -->
<section class="relative">
    <div class="title md:mt-6">
        Our Scooters
    </div>

    <div class="products flex flex-col gap-y-4 md:flex-row md:justify-evenly">
        <?php
            $query_args = array(
                'featured' => true,  
                'numberposts' => 3,
                'category' => array( 'Hoodies' ),
            );
            $products = wc_get_products( $query_args );


            foreach ($products as $product) {
                $image_id  = $product->get_image_id();
                $is_coming_soon = count($product->tag_ids) != 0;
                ?>
                <div class="product flex flex-col rounded-md">
                    <div class="product-image relative">
                        <img src="<?= wp_get_attachment_image_url( $image_id, 'full' ) ?>" />
                        <?
                            if($is_coming_soon) {
                                ?>
                                <img class="absolute top-0" src="/wp-content/uploads/2024/09/Group-1171275041.svg" />
                                <?
                            }
                        ?>
                        <div class="product-like-button"></div>
                        <!-- <div><?php echo get_field('max_speed', $product->id) ?></div> -->
                    </div>
                    <div class="product-details bg-black flex justify-between items-center">
                        <div class="product-bottom-left flex flex-col gap-y-2">
                            <div class="product-name font-bold"><?= $product->name; ?></div>
                            <div class="product-price text-gray-400"><?= $product->price.get_woocommerce_currency_symbol(); ?></div>
                        </div>
                        <? woocommerce_simple_add_to_cart(); ?>
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

<!-- wp:html -->
<section class="md:hidden">
    <div class="title">
        Parts
    </div>

    <div class="parts flex flex-col gap-y-4">
        <div class="part flex flex-col">
            <div class="part-image relative">
                <img src="/wp-content/uploads/2024/09/Group-1171275045.svg" />
                <div class="part-like-button"></div>
            </div>

            <div class="part-details bg-black flex justify-center items-center">
                <div class="part-name">
                    Part 1
                </div>
            </div>
        </div>

        <div class="part flex flex-col">
            <div class="part-image relative">
                <img src="/wp-content/uploads/2024/09/Group-1171275045.svg" />
                <div class="part-like-button"></div>
            </div>

            <div class="part-details bg-black flex justify-center items-center">
                <div class="part-name">
                    Part 2
                </div>
            </div>
        </div>

        <div class="part flex flex-col">
            <div class="part-image relative">
                <img src="/wp-content/uploads/2024/09/Group-1171275045.svg" />
                <img class="absolute top-0" src="/wp-content/uploads/2024/09/Group-1171275041.svg" />
                <div class="part-like-button"></div>
            </div>

            <div class="part-details bg-black flex justify-center items-center">
                <div class="part-name">
                    Part 3
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /wp:html -->

<!-- wp:html -->

<?php
    $query_args = array(
        'numberposts' => 1,
        'category' => 'Scooters',
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
                        <div class="x-feature-text text-sm"><?php echo get_field('annotation_1', $product->id) ?></div>
                    </div>
                    
                    <div class="x-feature flex items-start gap-x-2">
                        <div class="x-feature-icon">
                            <img class="w-8 min-w-8" src="/wp-content/uploads/2024/09/tire_6955616.svg" />
                        </div>
                        <div class="x-feature-text text-sm"><?php echo get_field('annotation_2', $product->id) ?></div>
                    </div>
                    <div class="x-feature flex items-start gap-x-2">
                        <div class="x-feature-icon">
                            <img class="w-8 min-w-8" src="/wp-content/uploads/2024/09/tire_6955616.svg" />
                        </div>
                        <div class="x-feature-text text-sm"><?php echo get_field('annotation_3', $product->id) ?></div>
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
<section class="hidden md:block">
    <div class="title mt-8">
        Parts
    </div>

    <div class="parts flex flex-col gap-y-4 md:flex-row md:justify-evenly">
    <?php
            $query_args = array(
                'numberposts' => 3,
                'category' => 'Parts',
            );
            $products = wc_get_products( $query_args );


            foreach ($products as $product) {
                $image_id  = $product->get_image_id();
                $is_coming_soon = count($product->tag_ids) != 0;
                ?>
                <a class="part cursor-pointer flex flex-col" href="/shop/<?=$product->get_permalink()?>">
                    <div class="part-image relative">
                        <img src="<?= wp_get_attachment_image_url( $image_id, 'full' ) ?>" />
                        <?
                            if($is_coming_soon) {
                                ?>
                                <img class="absolute top-0" src="/wp-content/uploads/2024/09/Group-1171275041.svg" />
                                <?
                            }
                        ?>
                        <div class="part-like-button"></div>
                    </div>
                    <div class="part-details bg-black flex justify-center items-center">
                        <div class="part-name">
                            <?= $product->name; ?>
                        </div>
                    </div>
                </a>
                <?
            }
        ?>
        <!-- <div class="part flex flex-col">
            <div class="part-image relative">
                <img src="/wp-content/uploads/2024/09/Group-1171275045.svg" />
                <div class="part-like-button"></div>
            </div>

            <div class="part-details bg-black flex justify-center items-center">
                <div class="part-name">
                    Part 1
                </div>
            </div>
        </div>

        <div class="part flex flex-col">
            <div class="part-image relative">
                <img src="/wp-content/uploads/2024/09/Group-1171275045.svg" />
                <div class="part-like-button"></div>
            </div>

            <div class="part-details bg-black flex justify-center items-center">
                <div class="part-name">
                    Part 2
                </div>
            </div>
        </div>

        <div class="part flex flex-col">
            <div class="part-image relative">
                <img src="/wp-content/uploads/2024/09/Group-1171275045.svg" />
                <img class="absolute top-0" src="/wp-content/uploads/2024/09/Group-1171275041.svg" />
                <div class="part-like-button"></div>
            </div>

            <div class="part-details bg-black flex justify-center items-center">
                <div class="part-name">
                    Part 3
                </div>
            </div>
        </div> -->
    </div>
</section>
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
<!-- /wp:html -->

<!-- wp:html -->
<section class="md:hidden">
    <div class="cards">
        <div class="card flex flex-col items-center">
            <img class="cmd-icon" src="/wp-content/uploads/2024/09/Contained-Icon.svg" />
            <div class="card-title title">Design Your Ride }}</div>
            <div class="card-desc">paragraph</div>
            <div class="card-learn-more">Learn More →</div>
            <img class="card-image" src="/wp-content/uploads/2024/09/banner-img-1.svg" />

            <img class="card-image rounded-top" src="/wp-content/uploads/2024/09/Image.svg" />
            <img class="cmd-icon mt-6" src="/wp-content/uploads/2024/09/Contained-Icon.svg" />
            <div class="card-title title">Design Your Ride }}</div>
            <div class="card-desc">paragraph</div>
            <div class="card-learn-more">Learn More →</div>
        </div>
    </div>
</section>

<section class="hidden md:block">
    <div class="cards flex justify-evenly">
        <div class="card flex flex-col items-start">
            <img class="cmd-icon" src="/wp-content/uploads/2024/09/Contained-Icon.svg" />
            <div class="card-title title">Design Your Ride</div>
            <div class="card-desc">paragraph</div>
            <div class="card-learn-more">Learn More →</div>
            <img class="card-image self-end -mt-2" src="/wp-content/uploads/2024/09/banner-img-1.svg" />
        </div>

        <div class="card nopad">
            <img class="card-image rounded-top" src="/wp-content/uploads/2024/09/Image.svg" />
            <div class="content md:text-start">
                <img class="mb-2" src="/wp-content/uploads/2024/09/Contained-Icon.svg" />
                <div class="card-title title">Design Your Ride</div>
                <div class="card-desc">paragraph</div>
                <div class="card-learn-more">Learn More →</div>
            </div>
        </div>
    </div>
</section>
<!-- /wp:html -->

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

<?php get_footer(); ?> 
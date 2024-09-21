<?php
    get_header();
?>

<!-- wp:html -->
<section class="hero-section md:flex md:items-center">
    <div class="hero flex justify-between w-full md:flex-col md:gap-y-2">
        <div class="hero-text flex flex-col text-2xl font-bold md:flex-row md:gap-x-2">
            <h3>Speed</h3>
            <h3>Quality</h3>
            <h3>Reliability</h3>
        </div>

        <div class="hero-features flex flex-col gap-y-2">
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
        <div class="product flex flex-col rounded-md">
            <div class="product-image relative">
                <img src="/wp-content/uploads/2024/09/Group-1171275040.svg" />
                <div class="product-like-button"></div>
            </div>
            <div class="product-details bg-black flex justify-between items-center">
                <div class="product-bottom-left flex flex-col gap-y-2">
                    <div class="product-name font-bold">Rideped-X 1</div>
                    <div class="product-price text-gray-400">300$</div>
                </div>
                <button class="product-buy-button bg-secondary rounded-lg py-1 px-2">
                    Buy
                </button>
            </div>
        </div>

        <div class="product flex flex-col rounded-md">
            <div class="product-image relative">
                <img src="/wp-content/uploads/2024/09/Group-1171275040.svg" />
                <img class="absolute top-0" src="/wp-content/uploads/2024/09/Group-1171275041.svg" />
                <div class="product-like-button"></div>
            </div>
            <div class="product-details bg-black flex justify-between items-center">
                <div class="product-bottom-left flex flex-col gap-y-2">
                    <div class="product-name font-bold">Rideped-X 2</div>
                    <div class="product-price text-gray-400">500$</div>
                </div>
                <button class="product-buy-button bg-secondary rounded-lg py-1 px-2">
                    Buy
                </button>
            </div>
        </div>

        <div class="product flex flex-col rounded-md">
            <div class="product-image relative">
                <img src="/wp-content/uploads/2024/09/Group-1171275040.svg" />
                <img class="absolute top-0" src="/wp-content/uploads/2024/09/Group-1171275041.svg" />
                <div class="product-like-button"></div>
            </div>
            <div class="product-details bg-black flex justify-between items-center">
                <div class="product-bottom-left flex flex-col gap-y-2">
                    <div class="product-name font-bold">Rideped-X 3</div>
                    <div class="product-price text-gray-400">600$</div>
                </div>
                <button class="product-buy-button bg-secondary rounded-lg py-1 px-2">
                    Buy
                </button>
            </div>
        </div>
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
<section class="xfeatures fit md:flex md:items-center md:flex-row-reverse md:justify-center md:gap-x-24 md:relative">
    <div>
<div class="title left mt-4">
        Features
    </div>

    <div class="x-features flex flex-col gap-y-2">
        <div class="x-feature flex items-center gap-x-2">
                <div class="x-feature-icon">
                    <img class="w-10" src="/wp-content/uploads/2024/09/tire_6955616.svg" />
                </div>
            <div class="x-feature-text">Safer than evert</div>
        </div>
        
        <div class="x-feature flex items-center gap-x-2">
            <div class="x-feature-icon">
                <img class="w-10" src="/wp-content/uploads/2024/09/tire_6955616.svg" />
            </div>
            <div class="x-feature-text">Futuristic Tech</div>
        </div>
        <div class="x-feature flex items-center gap-x-2">
             <div class="x-feature-icon">
                <img class="w-10" src="/wp-content/uploads/2024/09/tire_6955616.svg" />
            </div>
            <div class="x-feature-text">Modular Design</div>
        </div>
    </div>

    <div class="x-price md:text-start">200$</div>

    <div class="buy-button bg-primary rounded-lg py-1 px-2 w-fit">Buy</div>

    </div>

    <img src="/wp-content/uploads/2024/09/image-ba957477-4a1c-42e5-b7ec-441f82d4d6d7.svg" class="x-image md:w-1/2" />
    <img class="absolute bottom-0 right-0 rotate-270 hidden md:block" src="/wp-content/uploads/2024/09/Group-1171275044.svg" />
</section>


<div class="w-full h-fit relative">
<section class="xfeatures fit md:flex md:items-center md:justify-center md:gap-x-24 md:relative">
    <div>
    <div class="title left mt-4">
        Features
    </div>

    <div class="x-features flex flex-col gap-y-2">
        <div class="x-feature flex items-center gap-x-2">
                <div class="x-feature-icon">
                    <img class="w-10" src="/wp-content/uploads/2024/09/tire_6955616.svg" />
                </div>
            <div class="x-feature-text">Safer Than Ever</div>
        </div>
        
        <div class="x-feature flex items-center gap-x-2">
            <div class="x-feature-icon">
                <img class="w-10" src="/wp-content/uploads/2024/09/tire_6955616.svg" />
            </div>
            <div class="x-feature-text">Futuristic Tech</div>
        </div>
        <div class="x-feature flex items-center gap-x-2">
             <div class="x-feature-icon">
                <img class="w-10" src="/wp-content/uploads/2024/09/tire_6955616.svg" />
            </div>
            <div class="x-feature-text">Modular Design</div>
        </div>
    </div>

    <div class="x-price md:text-start">400$</div>

    <div class="buy-button bg-primary rounded-lg py-1 px-2 w-fit">Buy</div>
    </div>

    <img src="/wp-content/uploads/2024/09/image-ba957477-4a1c-42e5-b7ec-441f82d4d6d7.svg" class="x-image md:w-1/2" />
</section>
</div>
<!-- /wp:html -->

<!-- wp:html -->
<section class="hidden md:block">
    <div class="title mt-8">
        Parts
    </div>

    <div class="parts flex flex-col gap-y-4 md:flex-row md:justify-evenly">
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
<section class="hero2 fit mdhscreen md:flex md:items-center">
    <img class="hero-img w-full md:hidden" src="/wp-content/uploads/2024/09/Group-1171275049.svg" />


    <div class="hero2-content md:mx-24 md:text-start">
        <div class="title left nomb">{{ hero2.title }}</div>

        <div class="primary-title">{{ hero2.primaryTitle }}</div>

        <div class="paragraph">{{ hero2.paragraph }}</div>

        <button class="hollow-btn py-2 px-6 mt-6 w-fit">{{ hero2.btn }}</button>
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
<section class="fit">
    <div class="title lg md:mb-0">Frequently asked questions</div>
    <div class="paragraph text-center mb-4">paragraph</div>

    <div class="collapsibles flex flex-col gap-y-2">
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
    </div>
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
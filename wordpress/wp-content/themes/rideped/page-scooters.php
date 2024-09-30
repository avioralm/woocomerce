<?php
    get_header();
?>

<body>
    <section class="clear fit flex flex-col items-center relative md:items-center md:flex-row md:justify-between">
        <img style="height: 100%;" src="/wp-content/uploads/2024/09/Group-1171275081.svg" alt="" class="absolute top-0 hidden md:block">
        <div class="mt-16 px-8 flex flex-col gap-y-8 md:mt-0 md:px-16">
            <div class="font-bold text-2xl hero-title">Elevate Your Ride: <br> Discover the Next Generation of Electric Scooters</div>
            <div class="hero-subtitle">Crafted with cutting-edge technology and premium materials, <br> our electric scooter delivers an unmatched, efficient, and safe riding experience.</div>
        </div>
        <img style="max-width: 370px;" src="/wp-content/uploads/2024/09/Group-1171275083-1.png" alt="" class="hidden md:block">
        <img src="/wp-content/uploads/2024/09/Group-1171275068-1.svg" alt="" class="hero-img md:hidden">
    </section>

    <section class="clear">
        <div class="title mt-4 product-title">RidePed-X</div>
        <div class="product-img">
            <!-- <div class="top">
                <div class="left">
                    <div class="colors"></div>
                    <div class="arrow"></div>
                </div>
                <img src="" alt="">
                <div class="right">
                    <div class="arrow"></div>
                </div>
            </div> -->
            <img src="/wp-content/uploads/2024/09/Group-1171275069-1.svg" alt="">
            <div class="bottom flex gap-2 justify-center mt-2">
                <img src="/wp-content/uploads/2024/09/Group-1171275070.svg" alt="">
                <img src="/wp-content/uploads/2024/09/Group-1171275070.svg" alt="">
                <img src="/wp-content/uploads/2024/09/Group-1171275070.svg" alt="">
            </div>
        </div>

        <div class="product-description p-8">
            Our electric scooter, precision-crafted with CNC-machined, aerospace-grade aluminum 6065 and carbon fiber, offers unmatched strength and durability—just like an aircraft. This superior engineering ensures your ride is incredibly reliable, safe, and smooth. 

            Feel the difference in every journey, knowing your scooter is built with the highest quality materials for lasting comfort. Limited stock—secure yours today and join a community of riders who refuse to compromise on quality!
        </div>

        <div class="hero-features flex justify-center gap-x-8">
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

        </div>

        <div class="p-4 flex justify-center">
            <button class="buy-button font-bold bg-primary mt-2 rounded-lg gap-2 py-2 px-4 md:self-start flex items-center"><img src="http://localhost:9000/wp-content/uploads/2024/09/shopping-cart.svg"> Add to cart</button>
            <div class="qty"></div>
        </div>

    </section>

    <section class="clear relative" style="background: linear-gradient(180deg, #014051, #027B9B);">
        <div class="text-center text-3xl font-bold pt-8 color-primary md:hidden">Unyielding strength With Reliable Performance</div>

        <img src="/wp-content/uploads/2024/09/Group-1171275075-2.svg" class="hero2-img md:hidden" />
        <img src="/wp-content/uploads/2024/09/Group-3.svg" class="hero2-img hidden md:block absolute top-0 left-0" />
        <img src="/wp-content/uploads/2024/09/image-30-2.svg" class="hero2-img hidden md:block absolute bottom-0 left-0" />

        <div class="hero2-description pb-8 text-white px-8 md:hidden">
        RidePed-X proudly presents our advanced electric scooter, crafted with next-generation materials and cutting-edge manufacturing technologies. Built with a combination of lightweight yet durable carbon fiber and aerospace-grade aluminum 6065, this scooter promises unparalleled strength and long-lasting durability. For the first time, we’ve integrated advanced CNC machining technology, ensuring each component is precisely cut and perfectly fitted for optimal performance and phenomenal accuracy in the final product.
        </div>

        <div class="hidden md:flex justify-between h-screen items-center">
            <div class="texts flex flex-col gap-y-4 w-1/2">
                <div class="text-3xl font-bold pt-8 px-8 color-primary">Unyielding strength With Reliable Performance</div>
                <div class="hero2-description pb-8 text-white px-8">
                    RidePed-X proudly presents our advanced electric scooter, crafted with next-generation materials and cutting-edge manufacturing technologies. Built with a combination of lightweight yet durable carbon fiber and aerospace-grade aluminum 6065, this scooter promises unparalleled strength and long-lasting durability. For the first time, we’ve integrated advanced CNC machining technology, ensuring each component is precisely cut and perfectly fitted for optimal performance and phenomenal accuracy in the final product.
                </div>
            </div>

            <img style="max-width: 530px;" src="/wp-content/uploads/2024/09/Group-1171275087.svg" class="hero2-img hidden md:block absolute top-0 right-0 w-1/2" />
        </div>
    </section>

    <section class="clear relative fit md:flex">
        <img class="hero3-img md:hidden" src="/wp-content/uploads/2024/09/Group-1171275076.svg" />
        <img class="hero3-img hidden md:block w-1/2 my-6 mx-4" style="max-width: 650px;" src="/wp-content/uploads/2024/09/Group-1171275088.svg" />
        <div class="flex flex-col md:justify-center">
            <div class="text-4xl mt-8 font-bold text-center color-primary md:text-start md:px-4">Uncompromising <br class="md:hidden"> Power</div>
            <div class="hero3-description p-8 md:px-4">
                Our scooter's exceptionally powerful motor delivers outstanding performance on every journey. Whether you're tackling steep hills or taking on long rides, our scooter is designed to handle it all with ease, ensuring you get the power and reliability you need, every time.
            </div>
        </div>
    </section>

    <section class="clear relative" style="background: url('/wp-content/uploads/2024/09/iPhone-14-15-Pro-Max-13-1.svg'); background-size: cover;">
        <img class="hero4-img md:hidden" src="/wp-content/uploads/2024/09/5b-copy-2-1-1.svg" />
        <div class="flex md:items-center md:h-screen md:justify-between">
            <div class="flex flex-col" style="max-width: 600px;">
                <div class="text-4xl my-4 font-bold text-center color-dark md:text-start md:px-8 md:hidden">Uncompromising <br class="md:hidden"> Power</div>
                <div class="text-4xl my-4 font-bold text-center color-dark md:text-start md:px-16 hidden md:block">Unyielding Strength <br> with Reliable <br> Performance</div>
                <div class="hero4-description px-8 md:px-16">
                    Our scooter's exceptionally powerful motor delivers outstanding performance on every journey. Whether you're tackling steep hills or taking on long rides, our scooter is designed to handle it all with ease, ensuring you get the power and reliability you need, every time.
                </div>
            </div>
            <img class="hero4-img hidden md:block grow max-h-full" src="/wp-content/uploads/2024/09/5b-copy-2-1-1.svg" />
        </div>
        <img class="hero4-img hidden md:block absolute bottom-0 left-0" style="max-width: 150px;" src="/wp-content/uploads/2024/09/Rectangle-5664.svg" />
        <img class="hero4-img hidden md:block absolute top-0 left-8 max-h-full" src="/wp-content/uploads/2024/09/image-27-1.svg" />
    </section>
</body>

<?php get_footer(); ?> 
<div id="offCanvasMenu"
    class="fixed top-0 left-0 w-64 h-full bg-white transform -translate-x-full transition-transform duration-300 ease-in-out z-50">

    <?php
    wp_nav_menu(array(
        'theme_location' => 'primary-menu',
        'container' => false,
        'menu_class' => 'primary-menu-list',
        'item_class' => 'block px-6 py-2 text-white hover:bg-gray-800',
    ));
    ?>

</div>

<header class="text-white p-4 container w-full">

    <div class="flex items-center justify-between  ">
        <div class="flex items-center gap-[12px]">

            <div id="menuButton"
                class="md:hidden w-[40px] h-[40px] shrink-0	 border-black border rounded-[14px] flex items-center justify-center cursor-pointer"
                aria-label="Toggle menu">
                <span class="menu-icon"></span>
            </div>
            <img src="/wp-content/themes/rideped/assets/logo.svg" />
        </div>


        <div class="flex items-center gap-[12px] flex-row-reverse">

            <a href="<?php echo esc_url(wc_get_cart_url()); ?>"
                class="flex items-center  bg-orange-400 text-white p-[12px] shrink-0 gap-[12px] rounded-[14px]">
                <img src="/wp-content/themes/rideped/assets/shopping--cart.svg" />
                <span>Cart</span>
            </a>

            <?php display_login_account_link(); ?>

            <div class="hidden md:flex">
                <?php do_action('wpml_add_language_selector'); ?>
            </div>

        </div>

    </div>
    <?php
    wp_nav_menu(array(
        'theme_location' => 'primary-menu',
        'container' => false,
        'menu_class' => 'primary-menu-list-desktop hidden md:flex',
        'item_class' => 'block px-6 py-2 text-white hover:bg-gray-800',
    ));
    ?>

</header>






<script>
    document.addEventListener('DOMContentLoaded', function () {
        const menuButton = document.getElementById('menuButton');
        const offCanvasMenu = document.getElementById('offCanvasMenu');

        menuButton.addEventListener('click', function () {
            this.classList.toggle('menu-open');
            offCanvasMenu.classList.toggle('-translate-x-full');
        });

        // Close menu when clicking outside
        document.addEventListener('click', function (event) {
            if (!offCanvasMenu.contains(event.target) && !menuButton.contains(event.target)) {
                menuButton.classList.remove('menu-open');
                offCanvasMenu.classList.add('-translate-x-full');
            }
        });
    });
</script>
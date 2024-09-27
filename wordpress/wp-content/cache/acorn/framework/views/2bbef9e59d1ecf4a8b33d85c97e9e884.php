<nav class="main-menu flex flex-col px-4 md:px-8 py-4 gap-y-4">
    <div class="nav-top flex md:gap-0 justify-between items-center">
        <div class="flex gap-4 items-center">
            <img src="/wp-content/uploads/2024/09/Group-1171275085.svg" class="md:hidden">

        </div>
        <a class="cart-customlocation md:hidden" href="<?php echo wc_get_cart_url(); ?>">
            <div class="bg-primary flex items-center gap-1 font-bold text-sm px-4 py-2 rounded-xl">
                <img src="/wp-content/uploads/2024/09/shopping-cart-1-1.svg" />
                Cart
            </div>
        </a>

        <div class="gap-2 hidden md:flex">

            <a class="account" href="/?page_id=9">
                <div class="bg-dark flex items-center gap-1 font-bold text-sm px-4 py-2 rounded-xl">
                    <img src="/wp-content/uploads/2024/09/Frame-8-1.svg" />
                    <? echo is_user_logged_in() ? 'My Account' : 'Login'; ?>
                </div>
            </a>
            <a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>">
                <div class="bg-primary flex items-center gap-1 font-bold text-sm px-4 py-2 rounded-xl">
                    <img src="/wp-content/uploads/2024/09/shopping-cart-1-1.svg" />
                    Cart
                </div>
            </a>
        </div>
    </div>
    <div>
        <?php
            wp_nav_menu( array(
                'name' => 'primary',
                'menu_id'        => 'primary-menu',
                'menu_class' => 'flex list-none',
                'items_wrap' => '%3$s',
                'container' => 'div',
                'container_class' => 'nav-bottom hidden md:flex gap-4 list-none text-black',
            ) );
        ?>
    </div>
</nav>

<?php /**PATH /var/www/html/wp-content/themes/rideped/resources/views/sections/header.blade.php ENDPATH**/ ?>
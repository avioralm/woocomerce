<div id="offCanvasMenu"
     class="fixed top-0 left-0 w-2/3 h-full bg-white transform -translate-x-full transition-transform duration-300 ease-in-out z-50 overflow-y-auto">

    <!-- User icon -->
<!--    <div class="p-4 border-b border-gray-200">-->
<!--        <div class="w-8 h-8 bg-gray-300 rounded-full"></div>-->
<!--    </div>-->

    <!-- Product Search -->
    <div class="p-4 border-b border-gray-200">
        <form role="search" method="get" class="woocommerce-product-search flex" action="<?php echo esc_url(home_url('/')); ?>">
            <input type="search" id="woocommerce-product-search-field" class="w-full p-2 border border-gray-300 rounded-l-md focus:outline-none" placeholder="<?php esc_attr_e('Search products...', 'rideped'); ?>" value="<?php echo get_search_query(); ?>" name="s" />
            <button type="submit" class="p-2 bg-red-500 text-white rounded-r-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </button>
            <input type="hidden" name="post_type" value="product" />
        </form>
    </div>

    <!-- Menu Items -->
    <nav class="py-2">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary-menu',
            'container' => false,
            'menu_class' => 'primary-menu-list',
            'menu_item' => 'border-b border-gray-200'
        ));
        ?>
    </nav>
</div>

<?php
// Custom walker class to style menu items
class Rideped_Off_Canvas_Walker extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        $output .= '<li class="border-b border-gray-200">';
        $output .= '<a href="' . esc_url($item->url) . '" class="block px-4 py-3 text-gray-700 hover:bg-gray-100">';
        $output .= esc_html($item->title);
        $output .= '</a>';
    }
}
?>

<header class="text-white p-4 container w-full">

    <div class="flex items-center justify-between  ">
        <div class="flex items-center gap-[12px]">

            <div id="menuButton"
                 class="md:hidden w-[40px] h-[40px] shrink-0     border-black border rounded-[14px] flex items-center justify-center cursor-pointer"
                 aria-label="<?php esc_attr_e('Toggle menu', 'rideped'); ?>">
                <span class="menu-icon"></span>
            </div>

            <a href="<?php echo esc_url(apply_filters('wpml_home_url', get_home_url())); ?>">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/logo.svg'); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>"/>
            </a>
        </div>


        <div class="flex items-center gap-[12px] ">



            <div class="hidden md:flex gap-[12px]">
                <?php do_action('wpml_add_language_selector'); ?>
                <?php display_login_account_link(); ?>
            </div>

            <a href="<?php echo esc_url(wc_get_cart_url()); ?>"
               class="flex items-center  bg-orange-400 text-white p-[12px] shrink-0 gap-[12px] rounded-[14px]">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/shopping--cart.svg'); ?>" alt=""/>
                <span><?php esc_html_e('Cart', 'rideped'); ?></span>
            </a>


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
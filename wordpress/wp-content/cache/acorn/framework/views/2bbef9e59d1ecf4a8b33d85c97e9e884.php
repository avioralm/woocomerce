<header class="flex items-center content-center justify-between">
  <div class="flex items-center content-center"> 
  

<label class="sm:hidden relative z-40 cursor-pointer px-3 py-6" for="mobile-menu">
    <input class="peer hidden" type="checkbox" id="mobile-menu" />
    <div
        class="relative z-50 block h-[1px] w-7 bg-black bg-transparent content-[''] before:absolute before:top-[-0.35rem] before:z-50 before:block before:h-full before:w-full before:bg-black before:transition-all before:duration-200 before:ease-out before:content-[''] after:absolute after:right-0 after:bottom-[-0.35rem] after:block after:h-full after:w-full after:bg-black after:transition-all after:duration-200 after:ease-out after:content-[''] peer-checked:bg-transparent before:peer-checked:top-0 before:peer-checked:w-full before:peer-checked:rotate-45 before:peer-checked:transform after:peer-checked:bottom-0 after:peer-checked:w-full after:peer-checked:-rotate-45 after:peer-checked:transform"
    >
    </div>
    <div
        class="fixed inset-0 z-40 hidden h-full w-full bg-black/50 backdrop-blur-sm peer-checked:block"
    >
        &nbsp;
    </div>
    <div
        class="fixed top-0 right-0 z-40 h-full w-full translate-x-full overflow-y-auto overscroll-y-none transition duration-500 peer-checked:translate-x-0"
    >
        <div class="float-right min-h-full w-[85%] bg-white px-6 pt-12 shadow-2xl">
             <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]); ?>

        </div>
    </div>
</label>

<div class="hidden sm:block">
 <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav flex ', 'echo' => false]); ?>

</div>

<a class="brand" href="<?php echo e(home_url('/')); ?>">
    Rideped
  </a>

  
  </div>

  <div class="flex justify-between items-center gap-[24px]">
  <?php echo do_action('wpml_add_language_selector'); ?>

  <a class="cart-customlocation" href="<?php echo e(wc_get_cart_url()); ?>">
					<div class="bg-[#F28B30] bg-primary flex items-center gap-1 font-bold text-sm px-4 py-2 rounded-xl">
						<img src="/wp-content/uploads/2024/09/shopping-cart-1-1.svg" />
						Cart
					</div>
				</a>
</div>

</header>
<?php /**PATH /var/www/html/wp-content/themes/rideped/resources/views/sections/header.blade.php ENDPATH**/ ?>
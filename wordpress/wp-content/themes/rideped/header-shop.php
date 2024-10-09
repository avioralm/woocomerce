<div id="offCanvasMenu" class="fixed top-0 left-0 w-64 h-full bg-white transform -translate-x-full transition-transform duration-300 ease-in-out z-50">
  
    <?php
    wp_nav_menu(array(
      'theme_location' => 'primary-menu',
      'container' => false,
      'menu_class' => 'primary-menu-list',
      'item_class' => 'block px-6 py-2 text-white hover:bg-gray-800',
    ));
    ?>
  
</div>

<header class="flex items-center justify-between  text-white p-4 max-w-[1240px] mx-auto w-full">

    <div class="flex items-center gap-[8px]">
 
    <div id="menuButton" class="sm:hidden w-[40px] h-[40px] shrink-0	 border-black border rounded-[14px] flex items-center justify-center cursor-pointer" aria-label="Toggle menu">
  <span class="menu-icon"></span>
</div>


    
     <img url="<?php echo astra_logo() ?>" />
    </div>
    <div class="flex items-center gap-[12px]">
        
        <a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="flex items-center  bg-orange-400 text-white p-[12px] shrink-0 gap-[12px] rounded-[14px]">
           <img src="/wp-content/themes/rideped/assets/shopping--cart.svg" />
            <span>Cart</span>
        </a>

        <?php display_login_account_link(); ?>

        <?php do_action('wpml_add_language_selector'); ?>
    </div>
</header>


<style>
   
   .menu-icon, .menu-icon::before, .menu-icon::after {
    content: '';
    display: block;
    width: 20px;
    height: 2px;
    background-color: black;
    position: absolute;
    transition: all 0.3s ease;
  }

  .menu-icon::before { transform: translateY(-6px); }
  .menu-icon::after { transform: translateY(6px); }

  .menu-open .menu-icon { background-color: transparent; }
  .menu-open .menu-icon::before { transform: rotate(45deg); }
  .menu-open .menu-icon::after { transform: rotate(-45deg); }
</style>



<script>
document.addEventListener('DOMContentLoaded', function() {
  const menuButton = document.getElementById('menuButton');
  const offCanvasMenu = document.getElementById('offCanvasMenu');
  
  menuButton.addEventListener('click', function() {
    this.classList.toggle('menu-open');
    offCanvasMenu.classList.toggle('-translate-x-full');
  });

  // Close menu when clicking outside
  document.addEventListener('click', function(event) {
    if (!offCanvasMenu.contains(event.target) && !menuButton.contains(event.target)) {
      menuButton.classList.remove('menu-open');
      offCanvasMenu.classList.add('-translate-x-full');
    }
  });
});
</script>
<div class="wpdevart-homepage-page-banner-third-theme" id="content_navigator">
    <div class="banner-third-theme-container
          <?php if (empty(get_theme_mod( 'wpdevart_ecommerce_modern_store_homepage_large_banner_bg_gradient_color' ))) 
                { echo esc_attr( 'wpdevart-homepage-bg-color' ); } 
                else { echo esc_attr('wpdevart-homepage-bg-gradient-color'); } ?>">

        <?php 
            if ( ! get_theme_mod( 'wpdevart_ecommerce_modern_store_custom_homepage_banner_image_1' )) { } else { ?>
              <div class="wpdevart-banner-third-theme-image-container">
                  <div class="wpdevart-banner-third-theme-image"><img src="<?php echo esc_url( get_theme_mod( 'wpdevart_ecommerce_modern_store_custom_homepage_banner_image_1' ) ); ?>"></div>
              </div>
            <?php }
        ?>

        <div class="wpdevart-banner-third-theme-content">
            <div class="wpdevart-home-banner-third-theme">
              <div class="wpdevart-home-banner-third-theme-inner">

              <div class="wpdevart-banner-short-text"><?php echo esc_html( get_theme_mod( 'wpdevart_ecommerce_modern_store_custom_homepage_banner_short_description' ) );  ?></div>
              <div class="wpdevart-banner-title"><?php echo esc_html( get_theme_mod( 'wpdevart_ecommerce_modern_store_custom_homepage_banner_title' ) ); ?></div>

              <?php if ( empty(get_theme_mod( 'wpdevart_ecommerce_modern_store_custom_homepage_banner_sliding_first_text' )) && empty(get_theme_mod( 'wpdevart_ecommerce_modern_store_custom_homepage_banner_sliding_second_text' )) && empty(get_theme_mod( 'wpdevart_ecommerce_modern_store_custom_homepage_banner_sliding_third_text' )) && empty(get_theme_mod( 'wpdevart_ecommerce_modern_store_custom_homepage_banner_sliding_fourth_text' )) ) { } else { ?>

                    <div class="sliding-text-container">
                      <div class="sliding-text sliding-text-third-theme">
                        <ul>
                          <?php if (!empty(get_theme_mod( 'wpdevart_ecommerce_modern_store_custom_homepage_banner_sliding_first_text' ))) { ?><li><?php echo esc_html( get_theme_mod( 'wpdevart_ecommerce_modern_store_custom_homepage_banner_sliding_first_text' ) ) ?></li><?php } ?>
                          <?php if (!empty(get_theme_mod( 'wpdevart_ecommerce_modern_store_custom_homepage_banner_sliding_second_text' ))) { ?><li><?php echo esc_html( get_theme_mod( 'wpdevart_ecommerce_modern_store_custom_homepage_banner_sliding_second_text' ) ) ?></li><?php } ?>
                          <?php if (!empty(get_theme_mod( 'wpdevart_ecommerce_modern_store_custom_homepage_banner_sliding_third_text' ))) { ?><li><?php echo esc_html( get_theme_mod( 'wpdevart_ecommerce_modern_store_custom_homepage_banner_sliding_third_text' ) ) ?></li><?php } ?>
                          <?php if (!empty(get_theme_mod( 'wpdevart_ecommerce_modern_store_custom_homepage_banner_sliding_fourth_text' ))) { ?><li><?php echo esc_html( get_theme_mod( 'wpdevart_ecommerce_modern_store_custom_homepage_banner_sliding_fourth_text' ) ) ?></li><?php } ?>
                        </ul>
                      </div>
                    </div>

              <?php } ?>

              <div class="wpdevart-banner-content"><?php echo esc_html( get_theme_mod( 'wpdevart_ecommerce_modern_store_custom_homepage_banner_content' ) );  ?></div>
              
              <div id="outer">
                  <?php if (get_theme_mod( 'wpdevart_ecommerce_modern_store_custom_homepage_show_banner_first_button', '1' )) { } else { 
                    ?><div class="wpdevart_ecommerce_modern_store_hover_button wpdevart-banner-button-one <?php echo esc_html( get_theme_mod( 'wpdevart_ecommerce_modern_store_custom_homepage_banner_first_button_style' ) ); ?>"><a href="<?php echo esc_url( get_theme_mod( 'wpdevart_ecommerce_modern_store_custom_homepage_banner_first_button_url' ) );  ?>"><?php echo esc_html( get_theme_mod( 'wpdevart_ecommerce_modern_store_custom_homepage_banner_first_button_text' ) );  ?></a></div>
                  <?php } ?>
                  <?php if (get_theme_mod( 'wpdevart_ecommerce_modern_store_custom_homepage_show_banner_second_button', '1' )) { } else { 
                    ?> <div class="wpdevart_ecommerce_modern_store_hover_button wpdevart-banner-button-two <?php echo esc_html( get_theme_mod( 'wpdevart_ecommerce_modern_store_custom_homepage_banner_second_button_style' ) ); ?>"><a href="<?php echo esc_url( get_theme_mod( 'wpdevart_ecommerce_modern_store_custom_homepage_banner_second_button_url' ) );  ?>"><?php echo esc_html( get_theme_mod( 'wpdevart_ecommerce_modern_store_custom_homepage_banner_second_button_text' ) );  ?></a></div>
                  <?php } ?>
              </div>

              </div>
            </div>
        </div>

        <?php 
            if ( ! get_theme_mod( 'wpdevart_ecommerce_modern_store_custom_homepage_banner_image_2' )) { } else { ?>
              <div class="wpdevart-banner-third-theme-image-container">
                  <div class="wpdevart-banner-third-theme-image"><img src="<?php echo esc_url( get_theme_mod( 'wpdevart_ecommerce_modern_store_custom_homepage_banner_image_2' ) ); ?>"></div>
              </div>
            <?php }
        ?>
        
    </div>
</div>
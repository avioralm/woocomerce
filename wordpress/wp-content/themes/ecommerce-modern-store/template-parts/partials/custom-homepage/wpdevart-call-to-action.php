<div class="wpdevart-homepage-title-description">   
	<div class="wpdevart-custom-desctiption"><?php echo esc_html( get_theme_mod( 'wpdevart_ecommerce_modern_store_custom_homepage_call_action_desc' ) ); ?></div>
	<div class="wpdevart-custom-title"><h3 class="wpdevart-custom-title-content"><?php echo esc_html( get_theme_mod( 'wpdevart_ecommerce_modern_store_custom_homepage_call_action_title' ) ); ?></h3></div>
</div>
<div class="<?php if (empty(get_theme_mod( 'wpdevart_ecommerce_modern_store_call_action_bg_gradient_color' ))) 
			{ echo esc_attr( 'wpdevart-action-section-bg' ); } 
			else { echo esc_attr('wpdevart-action-section-bg-gradient'); } ?>">
	<div class="wpdevart-action-section">
		<div class="wpdevart-action-image-section">
		  <?php if ( ! get_theme_mod( 'wpdevart_ecommerce_modern_store_custom_homepage_call_to_action_image' )) { } else { ?>
			<img src="<?php echo esc_url( get_theme_mod( 'wpdevart_ecommerce_modern_store_custom_homepage_call_to_action_image' ) ); ?>">
		  <?php } ?>
		</div>
		<div class="wpdevart-action-text-button-section">
		  <div class="wpdevart-action-text-content">
				  <h2 class="wpdevart-action-text-content-font"><?php echo esc_html( get_theme_mod( 'wpdevart_ecommerce_modern_store_custom_homepage_call_action_sub_title' ) ); ?></h2> 
				  <p><?php echo esc_html( get_theme_mod( 'wpdevart_ecommerce_modern_store_custom_homepage_call_action_text' ) ); ?></p>
		  </div>
		  <div class="wpdevart-action-button-content">
			<div class="wpdevart_ecommerce_modern_store_hover_button <?php echo esc_attr( get_theme_mod( 'wpdevart_ecommerce_modern_store_custom_homepage_call_action_button_style' ) ); ?>"><a href="<?php echo esc_url( get_theme_mod( 'wpdevart_ecommerce_modern_store_custom_homepage_call_action_button_url' ) );  ?>"><?php echo esc_html( get_theme_mod( 'wpdevart_ecommerce_modern_store_custom_homepage_call_action_button_text' ) );  ?></a></div>
		  </div>
		</div>
	</div>
</div>
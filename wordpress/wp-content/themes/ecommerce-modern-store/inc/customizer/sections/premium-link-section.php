<?php

##################------ Pro Button Section ------##################
	$wp_customize->register_section_type( 'wpdevart_ecommerce_modern_store_Section_Premium' );

	$wp_customize->add_section(
		new wpdevart_ecommerce_modern_store_Section_Premium(
			$wp_customize,
			'theme_upsell',
			array(
				'title'    => esc_html__('Ecommerce Modern Store','ecommerce-modern-store'),
				'pro_text' => esc_html__('Premium','ecommerce-modern-store'),
				'pro_url'  => apply_filters( 'parent_wpdevart_ecommerce_modern_store_premium_features_url', esc_url('https://wpdevart.com/wordpress-ecommerce-modern-store-theme')),
				'priority'  => 10,
			)
		)
	);
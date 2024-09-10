<?php 
	$wp_customize->add_panel( 'wpdevart_ecommerce_modern_store_woocommerce_settings_panel', 
    array(
		'title'	=> esc_html__('WooCommerce WpDevArt','ecommerce-modern-store'),			
        'description'	=> esc_html__('WooCommerce custom settings','ecommerce-modern-store'),		
		'priority'		=> 29
    ) 
	);

	##################------ WooCommerce ------##################

	$wp_customize->add_section('woocommerce_general_section',array(
		'title'	=> esc_html__('WooCommerce Layout','ecommerce-modern-store'),					
		'priority'		=> null,
		'panel'         => 'wpdevart_ecommerce_modern_store_woocommerce_settings_panel'
	));
    $wp_customize->add_setting( 'wpdevart_ecommerce_modern_store_woocommerce_shop_category_layout',
	array(
		'default' => esc_html('sidebarnone'),
		'transport' => 'refresh',
		'sanitize_callback' => 'wpdevart_ecommerce_modern_store_text_sanitization'
	)
	);
	$wp_customize->add_control( new Wpdevart_Image_Radio_Button_Custom_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_woocommerce_shop_category_layout',
	array(
		'label' => esc_html__( 'WooCommerce Shop/Category pages layout', 'ecommerce-modern-store' ),
		'description' => esc_html__( 'Choose the WooCommerce Shop/Category pages layout.', 'ecommerce-modern-store' ),
		'section' => 'woocommerce_general_section',
		'choices' => array(
		'sidebarleft' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/sidebar-left.png',
			'name' => esc_html__( 'Left Sidebar', 'ecommerce-modern-store' )
		),
		'sidebarnone' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/sidebar-none.png',
			'name' => esc_html__( 'No Sidebar', 'ecommerce-modern-store' )
		),
		'sidebarright' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/sidebar-right.png',
			'name' => esc_html__( 'Right Sidebar', 'ecommerce-modern-store' )
		)
		)
	)
	) );
	$wp_customize->add_setting( 'wpdevart_ecommerce_modern_store_woocommerce_product_pages_layout',
	array(
		'default' => esc_html('sidebarnone'),
		'transport' => 'refresh',
		'sanitize_callback' => 'wpdevart_ecommerce_modern_store_text_sanitization'
	)
	);
	$wp_customize->add_control( new Wpdevart_Image_Radio_Button_Custom_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_woocommerce_product_pages_layout',
	array(
		'label' => esc_html__( 'WooCommerce Products pages layout', 'ecommerce-modern-store' ),
		'description' => esc_html__( 'Choose the WooCommerce products pages layout.', 'ecommerce-modern-store' ),
		'section' => 'woocommerce_general_section',
		'choices' => array(
		'sidebarleft' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/sidebar-left.png',
			'name' => esc_html__( 'Left Sidebar', 'ecommerce-modern-store' )
		),
		'sidebarnone' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/sidebar-none.png',
			'name' => esc_html__( 'No Sidebar', 'ecommerce-modern-store' )
		),
		'sidebarright' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/sidebar-right.png',
			'name' => esc_html__( 'Right Sidebar', 'ecommerce-modern-store' )
		)
		)
	)
	) );
	$wp_customize->add_setting( 'wpdevart_ecommerce_modern_store_woocommerce_cart_checkout_account_layout',
	array(
		'default' => esc_html('sidebarnone'),
		'transport' => 'refresh',
		'sanitize_callback' => 'wpdevart_ecommerce_modern_store_text_sanitization'
	)
	);
	$wp_customize->add_control( new Wpdevart_Image_Radio_Button_Custom_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_woocommerce_cart_checkout_account_layout',
	array(
		'label' => esc_html__( 'WooCommerce Cart/Checkout/Account layout', 'ecommerce-modern-store' ),
		'description' => esc_html__( 'Choose the WooCommerce Cart/Checkout/Account pages layout.', 'ecommerce-modern-store' ),
		'section' => 'woocommerce_general_section',
		'choices' => array(
		'sidebarleft' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/sidebar-left.png',
			'name' => esc_html__( 'Left Sidebar', 'ecommerce-modern-store' )
		),
		'sidebarnone' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/sidebar-none.png',
			'name' => esc_html__( 'No Sidebar', 'ecommerce-modern-store' )
		),
		'sidebarright' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/sidebar-right.png',
			'name' => esc_html__( 'Right Sidebar', 'ecommerce-modern-store' )
		)
		)
	)
	) );

	##################------ WooCommerce Typography ------##################

	$wp_customize->add_section('woocommerce_typography_section',array(
		'title'	=> esc_html__('WooCommerce Typography','ecommerce-modern-store'),					
		'priority'		=> null,
		'panel'         => 'wpdevart_ecommerce_modern_store_woocommerce_settings_panel'
	));

	$wp_customize->add_setting( 'wpdevart_ecommerce_modern_store_woocommerce_text_font_size',
	array(
		'default' => esc_html('17'),
		'sanitize_callback' => 'wpdevart_ecommerce_modern_store_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_woocommerce_text_font_size',
		array(
		'label' => esc_html__( 'Text font-size for Woo pages (px)', 'ecommerce-modern-store' ),
		'section' => 'woocommerce_typography_section',
		'input_attrs' => array(
			'min' => esc_html('16'),
			'max' => esc_html('20'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting( 'wpdevart_ecommerce_modern_store_woocommerce_link_font_size',
	array(
		'default' => esc_html('17'),
		'sanitize_callback' => 'wpdevart_ecommerce_modern_store_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_woocommerce_link_font_size',
		array(
		'label' => esc_html__( 'Link font-size for Woo pages (px)', 'ecommerce-modern-store' ),
		'section' => 'woocommerce_typography_section',
		'input_attrs' => array(
			'min' => esc_html('16'),
			'max' => esc_html('20'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting( 'wpdevart_ecommerce_modern_store_woocommerce_heading_h1_font_size',
	array(
		'default' => esc_html('40'),
		'sanitize_callback' => 'wpdevart_ecommerce_modern_store_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_woocommerce_heading_h1_font_size',
		array(
		'label' => esc_html__( 'Title font-size for Woo pages (px)', 'ecommerce-modern-store' ),
		'section' => 'woocommerce_typography_section',
		'input_attrs' => array(
			'min' => esc_html('35'),
			'max' => esc_html('60'),
			'step' => esc_html('1'),
		),
		)
	) );
	
	##################------ WooCommerce Primary Button ------##################

	$wp_customize->add_section('woocommerce_primary_button_colors_section',array(
		'title'	=> esc_html__('WooCommerce Primary Button','ecommerce-modern-store'),					
		'priority'		=> null,
		'panel'         => 'wpdevart_ecommerce_modern_store_woocommerce_settings_panel'
	));

	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_woo_primary_button_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_woo_primary_button_bg_color', esc_html('#000000')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_woo_primary_button_bg_color', array(
		'label' => esc_html__('WooCommerce primary button bg color','ecommerce-modern-store'),
		'section' => 'woocommerce_primary_button_colors_section',
		'settings' => 'wpdevart_ecommerce_modern_store_woo_primary_button_bg_color'
	)));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_woo_primary_button_link_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_woo_primary_button_link_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_woo_primary_button_link_color', array(
		'label' => esc_html__('WooCommerce primary button text color','ecommerce-modern-store'),
		'section' => 'woocommerce_primary_button_colors_section',
		'settings' => 'wpdevart_ecommerce_modern_store_woo_primary_button_link_color'
	)));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_woo_primary_button_bg_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_woo_primary_button_bg_hover_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_woo_primary_button_bg_hover_color', array(
		'label' => esc_html__('WooCommerce primary button bg hover color','ecommerce-modern-store'),
		'section' => 'woocommerce_primary_button_colors_section',
		'settings' => 'wpdevart_ecommerce_modern_store_woo_primary_button_bg_hover_color'
	)));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_woo_primary_button_link_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_woo_primary_button_link_hover_color', esc_html('#000000')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_woo_primary_button_link_hover_color', array(
		'label' => esc_html__('WooCommerce primary button text hover color','ecommerce-modern-store'),
		'section' => 'woocommerce_primary_button_colors_section',
		'settings' => 'wpdevart_ecommerce_modern_store_woo_primary_button_link_hover_color'
	)));
		
	##################------ WooCommerce Shop/Product Colors ------##################

	$wp_customize->add_section('woocommerce_global_colors_section',array(
		'title'	=> esc_html__('WooCommerce Colors','ecommerce-modern-store'),					
		'priority'		=> null,
		'panel'         => 'wpdevart_ecommerce_modern_store_woocommerce_settings_panel'
	));

	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_woocommerce_page_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_woocommerce_page_bg_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_woocommerce_page_bg_color', array(
        'label' => esc_html__('WooCommerce pages bg color','ecommerce-modern-store'),
        'section' => 'woocommerce_global_colors_section',
        'settings' => 'wpdevart_ecommerce_modern_store_woocommerce_page_bg_color'
    )));

	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_woocommerce_products_blocks_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_woocommerce_products_blocks_bg_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_woocommerce_products_blocks_bg_color', array(
        'label' => esc_html__('WooCommerce products/summary blocks bg color','ecommerce-modern-store'),
        'section' => 'woocommerce_global_colors_section',
        'settings' => 'wpdevart_ecommerce_modern_store_woocommerce_products_blocks_bg_color'
    )));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_woocommerce_heading_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_woocommerce_heading_color', esc_html('#000000')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_woocommerce_heading_color', array(
        'label' => esc_html__('WooCommerce pages headings color','ecommerce-modern-store'),
        'section' => 'woocommerce_global_colors_section',
        'settings' => 'wpdevart_ecommerce_modern_store_woocommerce_heading_color'
    )));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_woocommerce_text_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_woocommerce_text_color', esc_html('#333333')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_woocommerce_text_color', array(
        'label' => esc_html__('WooCommerce pages text color','ecommerce-modern-store'),
        'section' => 'woocommerce_global_colors_section',
        'settings' => 'wpdevart_ecommerce_modern_store_woocommerce_text_color'
    )));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_woocommerce_link_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_woocommerce_link_color', esc_html('#000000')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_woocommerce_link_color', array(
        'label' => esc_html__('WooCommerce pages link color','ecommerce-modern-store'),
        'section' => 'woocommerce_global_colors_section',
        'settings' => 'wpdevart_ecommerce_modern_store_woocommerce_link_color'
    )));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_woocommerce_link_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_woocommerce_link_hover_color', esc_html('#ff5952')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_woocommerce_link_hover_color', array(
        'label' => esc_html__('WooCommerce pages link hover color','ecommerce-modern-store'),
        'section' => 'woocommerce_global_colors_section',
        'settings' => 'wpdevart_ecommerce_modern_store_woocommerce_link_hover_color'
    )));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_woocommerce_rating_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_woocommerce_rating_color', esc_html('#dd9933')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_woocommerce_rating_color', array(
        'label' => esc_html__('WooCommerce rating/star color','ecommerce-modern-store'),
        'section' => 'woocommerce_global_colors_section',
        'settings' => 'wpdevart_ecommerce_modern_store_woocommerce_rating_color'
    )));

	##################------ WooCommerce Pagination ------##################

	$wp_customize->add_section('wpdevart_ecommerce_modern_store_woo_pagination_settings',array(
		'title'	=> esc_html__('WooCommerce Pagination','ecommerce-modern-store'),					
		'priority'		=> null,
		'panel'         => 'wpdevart_ecommerce_modern_store_woocommerce_settings_panel'
	));

	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_woo_pagination_buttons_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_woo_pagination_buttons_bg_color', esc_html('#333333')),
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_woo_pagination_buttons_bg_color', array(
        'label' => esc_html__('Buttons background color','ecommerce-modern-store'),
        'section' => 'wpdevart_ecommerce_modern_store_woo_pagination_settings',
        'settings' => 'wpdevart_ecommerce_modern_store_woo_pagination_buttons_bg_color'
    )));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_woo_pagination_buttons_link_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_woo_pagination_buttons_link_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_woo_pagination_buttons_link_color', array(
        'label' => esc_html__('Text color of active buttons','ecommerce-modern-store'),
        'section' => 'wpdevart_ecommerce_modern_store_woo_pagination_settings',
        'settings' => 'wpdevart_ecommerce_modern_store_woo_pagination_buttons_link_color'
    )));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_woo_pagination_buttons_text_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_woo_pagination_buttons_text_color', esc_html('#a8a8a8')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_woo_pagination_buttons_text_color', array(
        'label' => esc_html__('Text color of inactive buttons','ecommerce-modern-store'),
        'section' => 'wpdevart_ecommerce_modern_store_woo_pagination_settings',
        'settings' => 'wpdevart_ecommerce_modern_store_woo_pagination_buttons_text_color'
    )));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_woo_pagination_buttons_bg_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_woo_pagination_buttons_bg_hover_color', esc_html('#ebf5fb')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_woo_pagination_buttons_bg_hover_color', array(
        'label' => esc_html__('Buttons background hover color','ecommerce-modern-store'),
        'section' => 'wpdevart_ecommerce_modern_store_woo_pagination_settings',
        'settings' => 'wpdevart_ecommerce_modern_store_woo_pagination_buttons_bg_hover_color'
    )));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_woo_pagination_buttons_link_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_woo_pagination_buttons_link_hover_color', esc_html('#000000')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_woo_pagination_buttons_link_hover_color', array(
        'label' => esc_html__('Text color of active buttons on hover','ecommerce-modern-store'),
        'section' => 'wpdevart_ecommerce_modern_store_woo_pagination_settings',
        'settings' => 'wpdevart_ecommerce_modern_store_woo_pagination_buttons_link_hover_color'
    )));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_woo_pagination_buttons_text_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_woo_pagination_buttons_text_hover_color', esc_html('#a8a8a8')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_woo_pagination_buttons_text_hover_color', array(
        'label' => esc_html__('Text color of inactive buttons on hover','ecommerce-modern-store'),
        'section' => 'wpdevart_ecommerce_modern_store_woo_pagination_settings',
        'settings' => 'wpdevart_ecommerce_modern_store_woo_pagination_buttons_text_hover_color'
    )));
	$wp_customize->add_setting( 'wpdevart_ecommerce_modern_store_woo_pagination_text_font_size',
	array(
		'default' => esc_html('18'),
		'sanitize_callback' => 'wpdevart_ecommerce_modern_store_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_woo_pagination_text_font_size',
		array(
		'label' => esc_html__( 'Font-size of buttons (px)', 'ecommerce-modern-store' ),
		'section' => 'wpdevart_ecommerce_modern_store_woo_pagination_settings',
		'input_attrs' => array(
			'min' => esc_html('16'),
			'max' => esc_html('20'),
			'step' => esc_html('1'),
		),
		)
	) );
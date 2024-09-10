<?php
	$wp_customize->add_panel( 'wpdevart_ecommerce_modern_store_header_panel', 
	array(
		'title'	=> esc_html__('Header','ecommerce-modern-store'),			
		'description'	=> esc_html__('Customize the theme header options','ecommerce-modern-store'),		
		'priority'		=> 24
	) 
	);
    $wp_customize->add_section('wpdevart_ecommerce_modern_store_header_section',array(
		'title'	=> esc_html__('General','ecommerce-modern-store'),					
		'priority'		=> null,
		'panel'         => 'wpdevart_ecommerce_modern_store_header_panel'
	));

	$wp_customize->add_setting( 'wpdevart_ecommerce_modern_store_header_layout',
	array(
		'default' => esc_html('headerlayoutone'),
		'transport' => 'refresh',
		'sanitize_callback' => 'wpdevart_ecommerce_modern_store_text_sanitization'
	)
	);
	$wp_customize->add_control( new Wpdevart_Image_Radio_Button_Custom_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_header_layout',
	array(
		'label' => esc_html__( 'Header layout', 'ecommerce-modern-store' ),
		'description' => esc_html__( 'Select the position of the header elements', 'ecommerce-modern-store' ),
		'section' => 'wpdevart_ecommerce_modern_store_header_section',
		'choices' => array(
		'headerlayoutone' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/header-layout-one.jpg',
			'name' => esc_html__( 'All header elements on one line', 'ecommerce-modern-store' )
		),
		'headerlayouttwo' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/header-layout-two.jpg',
			'name' => esc_html__( 'Logo on the top side of the menu', 'ecommerce-modern-store' )
		),
		)
	)
	) );
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_header_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_header_bg_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_header_bg_color', array(
        'label' => esc_html__('Header background color','ecommerce-modern-store'),
        'section' => 'wpdevart_ecommerce_modern_store_header_section',
        'settings' => 'wpdevart_ecommerce_modern_store_header_bg_color'
    )));

	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_header_gradient_type',array(
		'default'	=> esc_html('to right'),
		'sanitize_callback'	=> 'wpdevart_ecommerce_modern_store_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_ecommerce_modern_store_header_gradient_type',array(
			'label'	=> esc_html__('Gradient type','ecommerce-modern-store'),
			'section'	=> 'wpdevart_ecommerce_modern_store_header_section',
			'setting'	=> 'wpdevart_ecommerce_modern_store_header_gradient_type',
			'type' => 'select',
			'choices' => array(
				'to right' => esc_html__('To right','ecommerce-modern-store'),
				'to left' => esc_html__('To left','ecommerce-modern-store'),
				'to bottom' => esc_html__('To bottom','ecommerce-modern-store'),
				'to top' => esc_html__('To top','ecommerce-modern-store'),
				'to bottom right' => esc_html__('To bottom right','ecommerce-modern-store'),
				'to bottom left' => esc_html__('To bottom left','ecommerce-modern-store'),
				'to top right' => esc_html__('To top right','ecommerce-modern-store'),
				'to top left' => esc_html__('To top left','ecommerce-modern-store'),
				)
	));	
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_header_bg_gradient_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_header_bg_gradient_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_header_bg_gradient_color', array(
        'label' => esc_html__('Header gradient color','ecommerce-modern-store'),
        'section' => 'wpdevart_ecommerce_modern_store_header_section',
        'settings' => 'wpdevart_ecommerce_modern_store_header_bg_gradient_color'
    )));
	$wp_customize->add_setting( 'wpdevart_ecommerce_modern_store_enable_main_header_border',
    array(
       'default' => esc_html(''),
       'transport' => 'refresh',
       'sanitize_callback' => 'wpdevart_ecommerce_modern_store_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Toggle_Switch_Custom_control( $wp_customize, 'wpdevart_ecommerce_modern_store_enable_main_header_border',
        array(
        'label' => esc_html__( 'Hide the header border', 'ecommerce-modern-store' ),
        'section' => 'wpdevart_ecommerce_modern_store_header_section'
        )
    ) );
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_main_header_border_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_main_header_border_color', esc_html('#fbf8f8')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_main_header_border_color', array(
        'label' => esc_html__('Header border color','ecommerce-modern-store'),
        'section' => 'wpdevart_ecommerce_modern_store_header_section',
        'settings' => 'wpdevart_ecommerce_modern_store_main_header_border_color'
    )));
	$wp_customize->add_setting( 'wpdevart_ecommerce_modern_store_header_show_action_button',
    array(
       'default' => esc_html(''),
       'transport' => 'refresh',
       'sanitize_callback' => 'wpdevart_ecommerce_modern_store_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Toggle_Switch_Custom_control( $wp_customize, 'wpdevart_ecommerce_modern_store_header_show_action_button',
        array(
        'label' => esc_html__( 'Hide the action button', 'ecommerce-modern-store' ),
        'section' => 'wpdevart_ecommerce_modern_store_header_section'
        )
    ) );
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_header_action_button_text',array(
		'default'	=> esc_html('Join Us'),
		'sanitize_callback'	=> 'wpdevart_ecommerce_modern_store_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'wpdevart_ecommerce_modern_store_header_action_button_text',
            array(
                'label'    => esc_html__('Header action button text','ecommerce-modern-store'),
                'section'  => 'wpdevart_ecommerce_modern_store_header_section',
                'settings' => 'wpdevart_ecommerce_modern_store_header_action_button_text',
                'type'     => 'text'
            )
        )
    );
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_header_action_button_url',array(
		'default'	=> esc_url('#'),
		'sanitize_callback'	=> 'wpdevart_ecommerce_modern_store_url_sanitization'
	));
	$wp_customize->add_control('wpdevart_ecommerce_modern_store_header_action_button_url',array(
			'label'	=> esc_html__('Header action button URL','ecommerce-modern-store'),
			'section'	=> 'wpdevart_ecommerce_modern_store_header_section',
			'setting'	=> 'wpdevart_ecommerce_modern_store_header_action_button_url'
	));	
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_header_action_button_style',array(
		'default'	=> esc_html('wpdevart_ecommerce_modern_store_eighth_button_slide eighth_btn_slide_right'),
		'sanitize_callback'	=> 'wpdevart_ecommerce_modern_store_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_ecommerce_modern_store_header_action_button_style',array(
			'label'	=> esc_html__('Header action button style','ecommerce-modern-store'),
			'section'	=> 'wpdevart_ecommerce_modern_store_header_section',
			'setting'	=> 'wpdevart_ecommerce_modern_store_header_action_button_style',
			'type' => 'select',
			'choices' => array(
				'wpdevart_ecommerce_modern_store_first_button_slide first_btn_slide_right' => esc_html__('Style 1 - WpDevArt Color', 'ecommerce-modern-store'),
				'wpdevart_ecommerce_modern_store_second_button_slide second_btn_slide_right' => esc_html__('Style 2 - Grapefruit Red', 'ecommerce-modern-store'),
				'wpdevart_ecommerce_modern_store_third_button_slide third_btn_slide_right' => esc_html__('Style 3 - Blue', 'ecommerce-modern-store'),
				'wpdevart_ecommerce_modern_store_fourth_button_slide fourth_btn_slide_right' => esc_html__('Style 4 - Black', 'ecommerce-modern-store'),
				'wpdevart_ecommerce_modern_store_fifth_button_slide fifth_btn_slide_right' => esc_html__('Style 5 - Green', 'ecommerce-modern-store'),
				'wpdevart_ecommerce_modern_store_sixth_button_slide sixth_btn_slide_right' => esc_html__('Style 6 - Yellow', 'ecommerce-modern-store'),
				'wpdevart_ecommerce_modern_store_seventh_button_slide seventh_btn_slide_right' => esc_html__('Style 7 - Custom Green', 'ecommerce-modern-store'),
				'wpdevart_ecommerce_modern_store_eighth_button_slide eighth_btn_slide_right' => esc_html__('Style 8 - White', 'ecommerce-modern-store'),
				'wpdevart_ecommerce_modern_store_ninth_button_slide ninth_btn_slide_right' => esc_html__('Style 9 - Custom Primary', 'ecommerce-modern-store'),
				'wpdevart_ecommerce_modern_store_tenth_button_slide tenth_btn_slide_right' => esc_html__('Style 10 - Custom Secondary', 'ecommerce-modern-store'),
				)
	));

	$wp_customize->add_section('wpdevart_ecommerce_modern_store_header_menu_search_section',array(
		'title'	=> esc_html__('Menu and Search','ecommerce-modern-store'),					
		'priority'		=> null,
		'panel'         => 'wpdevart_ecommerce_modern_store_header_panel'
	));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_header_search_button_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_header_search_button_color', esc_html('#3e58e1')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_header_search_button_color', array(
        'label' => esc_html__('Search button color','ecommerce-modern-store'),
        'section' => 'wpdevart_ecommerce_modern_store_header_menu_search_section',
        'settings' => 'wpdevart_ecommerce_modern_store_header_search_button_color'
    )));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_header_menu_items_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_header_menu_items_color', esc_html('#000000')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_header_menu_items_color', array(
        'label' => esc_html__('Menu items color','ecommerce-modern-store'),
        'section' => 'wpdevart_ecommerce_modern_store_header_menu_search_section',
        'settings' => 'wpdevart_ecommerce_modern_store_header_menu_items_color'
    )));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_main_header_sub_menu_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_main_header_sub_menu_bg_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_main_header_sub_menu_bg_color', array(
        'label' => esc_html__('Sub menu background color','ecommerce-modern-store'),
        'section' => 'wpdevart_ecommerce_modern_store_header_menu_search_section',
        'settings' => 'wpdevart_ecommerce_modern_store_main_header_sub_menu_bg_color'
    )));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_main_header_sub_menu_items_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_main_header_sub_menu_items_color', esc_html('#000000')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_main_header_sub_menu_items_color', array(
        'label' => esc_html__('Sub menu items color','ecommerce-modern-store'),
        'section' => 'wpdevart_ecommerce_modern_store_header_menu_search_section',
        'settings' => 'wpdevart_ecommerce_modern_store_main_header_sub_menu_items_color'
    )));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_main_header_sub_menu_top_border_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_main_header_sub_menu_top_border_color', esc_html('#3e58e1')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_main_header_sub_menu_top_border_color', array(
        'label' => esc_html__('Sub menu border color','ecommerce-modern-store'),
        'section' => 'wpdevart_ecommerce_modern_store_header_menu_search_section',
        'settings' => 'wpdevart_ecommerce_modern_store_main_header_sub_menu_top_border_color'
    )));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_header_mobile_menu_background_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_header_mobile_menu_background_color', esc_html('#ebf5fb')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_header_mobile_menu_background_color', array(
        'label' => esc_html__('Mobile toolbar background color','ecommerce-modern-store'),
        'section' => 'wpdevart_ecommerce_modern_store_header_menu_search_section',
        'settings' => 'wpdevart_ecommerce_modern_store_header_mobile_menu_background_color'
    )));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_mobile_menu_bg_gradient_type',array(
		'default'	=> esc_html('to right'),
		'sanitize_callback'	=> 'wpdevart_ecommerce_modern_store_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_ecommerce_modern_store_mobile_menu_bg_gradient_type',array(
			'label'	=> esc_html__('Gradient type','ecommerce-modern-store'),
			'section'	=> 'wpdevart_ecommerce_modern_store_header_menu_search_section',
			'setting'	=> 'wpdevart_ecommerce_modern_store_mobile_menu_bg_gradient_type',
			'type' => 'select',
			'choices' => array(
				'to right' => esc_html__('To right','ecommerce-modern-store'),
				'to left' => esc_html__('To left','ecommerce-modern-store'),
				'to bottom' => esc_html__('To bottom','ecommerce-modern-store'),
				'to top' => esc_html__('To top','ecommerce-modern-store'),
				'to bottom right' => esc_html__('To bottom right','ecommerce-modern-store'),
				'to bottom left' => esc_html__('To bottom left','ecommerce-modern-store'),
				'to top right' => esc_html__('To top right','ecommerce-modern-store'),
				'to top left' => esc_html__('To top left','ecommerce-modern-store'),
				)
	));	
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_mobile_menu_bg_gradient_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_mobile_menu_bg_gradient_color', esc_html('#ebf5fb')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_mobile_menu_bg_gradient_color', array(
        'label' => esc_html__('Mobile toolbar background gradient color','ecommerce-modern-store'),
        'section' => 'wpdevart_ecommerce_modern_store_header_menu_search_section',
        'settings' => 'wpdevart_ecommerce_modern_store_mobile_menu_bg_gradient_color'
    )));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_header_descktop_search_button_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_header_descktop_search_button_color', esc_html('#3e58e1')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_header_descktop_search_button_color', array(
        'label' => esc_html__('Mobile search button color','ecommerce-modern-store'),
        'section' => 'wpdevart_ecommerce_modern_store_header_menu_search_section',
        'settings' => 'wpdevart_ecommerce_modern_store_header_descktop_search_button_color'
    )));

	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_header_mobile_menu_button_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_header_mobile_menu_button_color', esc_html('#000000')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_header_mobile_menu_button_color', array(
        'label' => esc_html__('Mobile menu button color','ecommerce-modern-store'),
        'section' => 'wpdevart_ecommerce_modern_store_header_menu_search_section',
        'settings' => 'wpdevart_ecommerce_modern_store_header_mobile_menu_button_color'
    )));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_main_header_mobile_menu_background_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_main_header_mobile_menu_background_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_main_header_mobile_menu_background_color', array(
        'label' => esc_html__('Mobile menu background color','ecommerce-modern-store'),
        'section' => 'wpdevart_ecommerce_modern_store_header_menu_search_section',
        'settings' => 'wpdevart_ecommerce_modern_store_main_header_mobile_menu_background_color'
    )));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_main_header_mobile_menu_link_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_main_header_mobile_menu_link_color', esc_html('#000000')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_main_header_mobile_menu_link_color', array(
        'label' => esc_html__('Mobile menu link color','ecommerce-modern-store'),
        'section' => 'wpdevart_ecommerce_modern_store_header_menu_search_section',
        'settings' => 'wpdevart_ecommerce_modern_store_main_header_mobile_menu_link_color'
    )));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_main_header_mobile_menu_border_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_main_header_mobile_menu_border_color', esc_html('#dddddd')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_main_header_mobile_menu_border_color', array(
        'label' => esc_html__('Mobile menu borders color','ecommerce-modern-store'),
        'section' => 'wpdevart_ecommerce_modern_store_header_menu_search_section',
        'settings' => 'wpdevart_ecommerce_modern_store_main_header_mobile_menu_border_color'
    )));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_main_header_mobile_sub_menu_button_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_main_header_mobile_sub_menu_button_bg_color', esc_html('#000000')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_main_header_mobile_sub_menu_button_bg_color', array(
        'label' => esc_html__('Mobile sub-menu button BG color','ecommerce-modern-store'),
        'section' => 'wpdevart_ecommerce_modern_store_header_menu_search_section',
        'settings' => 'wpdevart_ecommerce_modern_store_main_header_mobile_sub_menu_button_bg_color'
    )));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_main_header_mobile_sub_menu_button_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_main_header_mobile_sub_menu_button_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_main_header_mobile_sub_menu_button_color', array(
        'label' => esc_html__('Mobile sub-menu button color','ecommerce-modern-store'),
        'section' => 'wpdevart_ecommerce_modern_store_header_menu_search_section',
        'settings' => 'wpdevart_ecommerce_modern_store_main_header_mobile_sub_menu_button_color'
    )));

	if ( class_exists( 'WooCommerce' ) ) {
		$wp_customize->add_section('wpdevart_ecommerce_modern_store_header_woo_cart',array(
			'title'	=> esc_html__('WooCommerce','ecommerce-modern-store'),					
			'priority'		=> null,
			'panel'         => 'wpdevart_ecommerce_modern_store_header_panel'
		));
		$wp_customize->add_setting('wpdevart_ecommerce_modern_store_woocommerce_account_icon_color',array(
			'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_woocommerce_account_icon_color', esc_html('#3e58e1')),
			'sanitize_callback'	=> 'sanitize_hex_color'	
		));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_woocommerce_account_icon_color', array(
			'label' => esc_html__('WooCommerce account icon color','ecommerce-modern-store'),
			'section' => 'wpdevart_ecommerce_modern_store_header_woo_cart',
			'settings' => 'wpdevart_ecommerce_modern_store_woocommerce_account_icon_color'
		)));
		$wp_customize->add_setting('wpdevart_ecommerce_modern_store_woocommerce_cart_icon_color',array(
			'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_woocommerce_cart_icon_color', esc_html('#3e58e1')),
			'sanitize_callback'	=> 'sanitize_hex_color'	
		));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_woocommerce_cart_icon_color', array(
			'label' => esc_html__('WooCommerce cart icon color','ecommerce-modern-store'),
			'section' => 'wpdevart_ecommerce_modern_store_header_woo_cart',
			'settings' => 'wpdevart_ecommerce_modern_store_woocommerce_cart_icon_color'
		)));
		$wp_customize->add_setting('wpdevart_ecommerce_modern_store_woocommerce_cart_icon_number_color',array(
			'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_woocommerce_cart_icon_number_color', esc_html('#ffffff')),
			'sanitize_callback'	=> 'sanitize_hex_color'	
		));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_woocommerce_cart_icon_number_color', array(
			'label' => esc_html__('WooCommerce cart number color','ecommerce-modern-store'),
			'section' => 'wpdevart_ecommerce_modern_store_header_woo_cart',
			'settings' => 'wpdevart_ecommerce_modern_store_woocommerce_cart_icon_number_color'
		)));
	};
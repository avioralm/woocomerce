<?php
    $wp_customize->add_section('wpdevart_ecommerce_modern_store_not_found_section',array(
		'title'	=> esc_html__('404 Page','ecommerce-modern-store'),					
		'priority'		=> 31
	));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_not_found_page_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_not_found_page_bg_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_not_found_page_bg_color', array(
        'label' => esc_html__('404 Page background color','ecommerce-modern-store'),
        'section' => 'wpdevart_ecommerce_modern_store_not_found_section',
        'settings' => 'wpdevart_ecommerce_modern_store_not_found_page_bg_color'
    )));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_not_found_image',array(
		'default'	=> esc_url(get_theme_file_uri('/images/wpdevart-default-404.png')),
		'sanitize_callback'	=> 'wpdevart_ecommerce_modern_store_url_sanitization'
	));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_not_found_image', array(
        'label' => esc_html__('404 page Image','ecommerce-modern-store'),
		'description' => esc_html__( 'Recommended image size ~1080*550', 'ecommerce-modern-store' ),
        'section' => 'wpdevart_ecommerce_modern_store_not_found_section',
        'settings' => 'wpdevart_ecommerce_modern_store_not_found_image',
        'button_labels' => array(
                    'select' =>  esc_html__('Select Image', 'ecommerce-modern-store'),
                    'remove' =>  esc_html__('Remove Image', 'ecommerce-modern-store'),
                    'change' =>  esc_html__('Change Image', 'ecommerce-modern-store'),
                    )
    )));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_not_found_page_title',array(
		'default'	=> esc_html('Oops! Page Not Found'),
		'sanitize_callback'	=> 'wpdevart_ecommerce_modern_store_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'wpdevart_ecommerce_modern_store_not_found_page_title',
            array(
                'label'    => esc_html__('404 page title','ecommerce-modern-store'),
                'section'  => 'wpdevart_ecommerce_modern_store_not_found_section',
                'settings' => 'wpdevart_ecommerce_modern_store_not_found_page_title',
                'type'     => 'text'
            )
        )
    );
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_not_found_page_description',array(
		'default'	=> esc_html('The page or URL you are trying to access was not found. Use the homepage link below to navigate to the homepage. You can also use the search function.'),
		'sanitize_callback'	=> 'wpdevart_ecommerce_modern_store_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_ecommerce_modern_store_not_found_page_description',array(
			'label'	=> esc_html__('404 page description','ecommerce-modern-store'),
			'section'	=> 'wpdevart_ecommerce_modern_store_not_found_section',
			'setting'	=> 'wpdevart_ecommerce_modern_store_not_found_page_description'
	));	
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_not_found_page_button_text',array(
		'default'	=> esc_html('Back to Homepage'),
		'sanitize_callback'	=> 'wpdevart_ecommerce_modern_store_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_ecommerce_modern_store_not_found_page_button_text',array(
			'label'	=> esc_html__('404 page button text','ecommerce-modern-store'),
			'section'	=> 'wpdevart_ecommerce_modern_store_not_found_section',
			'setting'	=> 'wpdevart_ecommerce_modern_store_not_found_page_button_text'
	));	
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_not_found_page_button_url',array(
		'default'	=> esc_url(get_home_url()),
		'sanitize_callback'	=> 'wpdevart_ecommerce_modern_store_url_sanitization'	
	));
	$wp_customize->add_control('wpdevart_ecommerce_modern_store_not_found_page_button_url',array(
			'label'	=> esc_html__('404 page button URL','ecommerce-modern-store'),
			'section'	=> 'wpdevart_ecommerce_modern_store_not_found_section',
			'setting'	=> 'wpdevart_ecommerce_modern_store_not_found_page_button_url'
	));	
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_not_found_page_button_style',array(
		'default'	=> esc_html('wpdevart_ecommerce_modern_store_fourth_button_slide fourth_btn_slide_right'),
		'sanitize_callback'	=> 'wpdevart_ecommerce_modern_store_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_ecommerce_modern_store_not_found_page_button_style',array(
			'label'	=> esc_html__('Back to Homepage button style','ecommerce-modern-store'),
			'section'	=> 'wpdevart_ecommerce_modern_store_not_found_section',
			'setting'	=> 'wpdevart_ecommerce_modern_store_not_found_page_button_style',
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
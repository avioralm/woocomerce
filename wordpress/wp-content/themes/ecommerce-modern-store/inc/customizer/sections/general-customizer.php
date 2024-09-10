<?php 
	$wp_customize->add_panel( 'wpdevart_ecommerce_modern_store_general_settings_panel', 
    array(
		'title'	=> esc_html__('General','ecommerce-modern-store'),			
        'description'	=> esc_html__('General Settings','ecommerce-modern-store'),		
		'priority'		=> 21
    ) 
	);

	##################------ Fonts ------##################

	$wp_customize->add_section('wpdevart_ecommerce_modern_store_fonts_section',array(
		'title'	=> esc_html__('Fonts','ecommerce-modern-store'),					
		'priority'		=> null,
		'panel'         => 'wpdevart_ecommerce_modern_store_general_settings_panel'
	));
		
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_global_fonts',array(
		'default'	=> esc_html('Alegreya'),
		'sanitize_callback'	=> 'wpdevart_ecommerce_modern_store_text_sanitization'	
	));
  
	$wp_customize->add_control('wpdevart_ecommerce_modern_store_global_fonts',array(
			'label'	=> esc_html__('Select the font','ecommerce-modern-store'),
			'section'	=> 'wpdevart_ecommerce_modern_store_fonts_section',
			'setting'	=> 'wpdevart_ecommerce_modern_store_global_fonts',
			'type' => 'select',
			'choices' => array(
				'Roboto' => esc_html__('Roboto', 'ecommerce-modern-store'),
				'Poppins' => esc_html__('Poppins', 'ecommerce-modern-store'),
				'Open Sans' => esc_html__('Open Sans', 'ecommerce-modern-store'),
				'Alegreya' => esc_html__('Alegreya', 'ecommerce-modern-store'),
				'Alegreya Sans' => esc_html__('Alegreya Sans', 'ecommerce-modern-store'),
				'Lato' => esc_html__('Lato', 'ecommerce-modern-store'),
				'Montserrat' => esc_html__('Montserrat', 'ecommerce-modern-store'),
				'Oswald' => esc_html__('Oswald', 'ecommerce-modern-store'),
				'Raleway' => esc_html__('Raleway', 'ecommerce-modern-store'),
				'Inknut Antiqua' => esc_html__('Inknut Antiqua', 'ecommerce-modern-store'),
				)
	));

    ##################------ Primary Button ------##################

	$wp_customize->add_section('wpdevart_ecommerce_modern_store_primary_button_settings',array(
		'title'	=> esc_html__('Primary Button','ecommerce-modern-store'),
		'priority'		=> null,
		'panel'         => 'wpdevart_ecommerce_modern_store_general_settings_panel'
	));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_primary_button_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_primary_button_bg_color', esc_html('#000000')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_primary_button_bg_color', array(
        'label' => esc_html__('Primary button background color','ecommerce-modern-store'),
        'section' => 'wpdevart_ecommerce_modern_store_primary_button_settings',
        'settings' => 'wpdevart_ecommerce_modern_store_primary_button_bg_color'
    )));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_primary_button_link_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_primary_button_link_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_primary_button_link_color', array(
        'label' => esc_html__('Primary button text color','ecommerce-modern-store'),
        'section' => 'wpdevart_ecommerce_modern_store_primary_button_settings',
        'settings' => 'wpdevart_ecommerce_modern_store_primary_button_link_color'
    )));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_primary_button_bg_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_primary_button_bg_hover_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_primary_button_bg_hover_color', array(
        'label' => esc_html__('Primary button background hover color','ecommerce-modern-store'),
        'section' => 'wpdevart_ecommerce_modern_store_primary_button_settings',
        'settings' => 'wpdevart_ecommerce_modern_store_primary_button_bg_hover_color'
    )));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_primary_button_link_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_primary_button_link_hover_color', esc_html('#000000')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_primary_button_link_hover_color', array(
        'label' => esc_html__('Primary button text hover color','ecommerce-modern-store'),
        'section' => 'wpdevart_ecommerce_modern_store_primary_button_settings',
        'settings' => 'wpdevart_ecommerce_modern_store_primary_button_link_hover_color'
    )));

    ##################------ Colors ------##################

	$wp_customize->add_section('wpdevart_ecommerce_modern_store_main_colors_settings',array(
		'title'	=> esc_html__('Colors','ecommerce-modern-store'),					
		'priority'		=> null,
		'panel'         => 'wpdevart_ecommerce_modern_store_general_settings_panel'
	));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_main_container_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_main_container_bg_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_main_container_bg_color', array(
        'label' => esc_html__('Main container background color','ecommerce-modern-store'),
        'section' => 'wpdevart_ecommerce_modern_store_main_colors_settings',
        'settings' => 'wpdevart_ecommerce_modern_store_main_container_bg_color'
    )));
	
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_main_container_heading_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_main_container_heading_color', esc_html('#000000')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_main_container_heading_color', array(
        'label' => esc_html__('Main container heading color','ecommerce-modern-store'),
        'section' => 'wpdevart_ecommerce_modern_store_main_colors_settings',
        'settings' => 'wpdevart_ecommerce_modern_store_main_container_heading_color'
    )));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_main_container_text_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_main_container_text_color', esc_html('#333333')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_main_container_text_color', array(
        'label' => esc_html__('Main container text color','ecommerce-modern-store'),
        'section' => 'wpdevart_ecommerce_modern_store_main_colors_settings',
        'settings' => 'wpdevart_ecommerce_modern_store_main_container_text_color'
    )));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_main_container_link_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_main_container_link_color', esc_html('#000000')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_main_container_link_color', array(
        'label' => esc_html__('Main container link color','ecommerce-modern-store'),
        'section' => 'wpdevart_ecommerce_modern_store_main_colors_settings',
        'settings' => 'wpdevart_ecommerce_modern_store_main_container_link_color'
    )));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_main_container_link_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_main_container_link_hover_color', esc_html('#ff5952')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_main_container_link_hover_color', array(
        'label' => esc_html__('Main container link hover color','ecommerce-modern-store'),
        'section' => 'wpdevart_ecommerce_modern_store_main_colors_settings',
        'settings' => 'wpdevart_ecommerce_modern_store_main_container_link_hover_color'
    )));

	##################------ Sidebar Colors ------##################

	$wp_customize->add_section('wpdevart_ecommerce_modern_store_sidebar_colors_settings',array(
		'title'	=> esc_html__('Sidebar Colors','ecommerce-modern-store'),					
		'priority'		=> null,
		'panel'         => 'wpdevart_ecommerce_modern_store_general_settings_panel'
	));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_main_container_sidebar_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_main_container_sidebar_bg_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_main_container_sidebar_bg_color', array(
		'label' => esc_html__('Widgets background color','ecommerce-modern-store'),
		'section' => 'wpdevart_ecommerce_modern_store_sidebar_colors_settings',
		'settings' => 'wpdevart_ecommerce_modern_store_main_container_sidebar_bg_color'
	)));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_main_container_sidebar_shadow_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_main_container_sidebar_shadow_color', esc_html('#c9c9c9')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_main_container_sidebar_shadow_color', array(
		'label' => esc_html__('Widgets shadow color','ecommerce-modern-store'),
		'section' => 'wpdevart_ecommerce_modern_store_sidebar_colors_settings',
		'settings' => 'wpdevart_ecommerce_modern_store_main_container_sidebar_shadow_color'
	)));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_main_container_sidebar_heading_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_main_container_sidebar_heading_color', esc_html('#000000')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_main_container_sidebar_heading_color', array(
		'label' => esc_html__('Sidebar headings color','ecommerce-modern-store'),
		'section' => 'wpdevart_ecommerce_modern_store_sidebar_colors_settings',
		'settings' => 'wpdevart_ecommerce_modern_store_main_container_sidebar_heading_color'
	)));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_main_container_sidebar_text_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_main_container_sidebar_text_color', esc_html('#333333')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_main_container_sidebar_text_color', array(
		'label' => esc_html__('Sidebar text color','ecommerce-modern-store'),
		'section' => 'wpdevart_ecommerce_modern_store_sidebar_colors_settings',
		'settings' => 'wpdevart_ecommerce_modern_store_main_container_sidebar_text_color'
	)));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_main_container_sidebar_link_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_main_container_sidebar_link_color', esc_html('#000000')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_main_container_sidebar_link_color', array(
		'label' => esc_html__('Sidebar link color','ecommerce-modern-store'),
		'section' => 'wpdevart_ecommerce_modern_store_sidebar_colors_settings',
		'settings' => 'wpdevart_ecommerce_modern_store_main_container_sidebar_link_color'
	)));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_main_container_sidebar_link_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_main_container_sidebar_link_hover_color', esc_html('#ff5952')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_main_container_sidebar_link_hover_color', array(
		'label' => esc_html__('Sidebar link hover color','ecommerce-modern-store'),
		'section' => 'wpdevart_ecommerce_modern_store_sidebar_colors_settings',
		'settings' => 'wpdevart_ecommerce_modern_store_main_container_sidebar_link_hover_color'
	)));

	##################------ Typography ------##################

	$wp_customize->add_section('wpdevart_ecommerce_modern_store_text_link_typography_settings',array(
		'title'	=> esc_html__('Typography','ecommerce-modern-store'),					
		'priority'		=> null,
		'panel'         => 'wpdevart_ecommerce_modern_store_general_settings_panel'
	));

    $wp_customize->add_setting( 'wpdevart_ecommerce_modern_store_main_container_text_font_size',
    array(
       'default' => esc_html('17'),
       'sanitize_callback' => 'wpdevart_ecommerce_modern_store_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_main_container_text_font_size',
		array(
		'label' => esc_html__( 'Main container text font-size (px)', 'ecommerce-modern-store' ),
		'section' => 'wpdevart_ecommerce_modern_store_text_link_typography_settings',
		'input_attrs' => array(
			'min' => esc_html('10'),
			'max' => esc_html('40'),
			'step' => esc_html('1'),
		),
		)
	) );
    $wp_customize->add_setting( 'wpdevart_ecommerce_modern_store_main_container_link_font_size',
    array(
       'default' => esc_html('17'),
       'sanitize_callback' => 'wpdevart_ecommerce_modern_store_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_main_container_link_font_size',
		array(
		'label' => esc_html__( 'Main container link font-size (px)', 'ecommerce-modern-store' ),
		'section' => 'wpdevart_ecommerce_modern_store_text_link_typography_settings',
		'input_attrs' => array(
			'min' => esc_html('10'),
			'max' => esc_html('40'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_main_container_link_font_weight',array(
		'default'	=> esc_html('400'),
		'sanitize_callback'	=> 'wpdevart_ecommerce_modern_store_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_ecommerce_modern_store_main_container_link_font_weight',array(
			'label'	=> esc_html__('Link font weight','ecommerce-modern-store'),
			'section'	=> 'wpdevart_ecommerce_modern_store_text_link_typography_settings',
			'setting'	=> 'wpdevart_ecommerce_modern_store_main_container_link_font_weight',
			'type' => 'select',
			'choices' => array(
				'100' => esc_html__('Thin 100','ecommerce-modern-store'),
				'400' => esc_html__('Normal 400','ecommerce-modern-store'),
				'600' => esc_html__('Semi-Bold 600','ecommerce-modern-store'),
				'800' => esc_html__('Extra-Bold 800','ecommerce-modern-store'),
				)
	));	
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_main_container_link_font_style',array(
		'default'	=> esc_html('normal'),
		'sanitize_callback'	=> 'wpdevart_ecommerce_modern_store_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_ecommerce_modern_store_main_container_link_font_style',array(
			'label'	=> esc_html__('Link font style','ecommerce-modern-store'),
			'section'	=> 'wpdevart_ecommerce_modern_store_text_link_typography_settings',
			'setting'	=> 'wpdevart_ecommerce_modern_store_main_container_link_font_style',
			'type' => 'select',
			'choices' => array(
				'normal' => esc_html__('Normal','ecommerce-modern-store'),
				'italic' => esc_html__('Italic','ecommerce-modern-store'),
				)
	));	

	##################------ Typography H1 ------##################

	$wp_customize->add_section('wpdevart_ecommerce_modern_store_text_h1_h2_h3_h4_h5_h6_typography_settings',array(
		'title'	=> esc_html__('Typography H1, H2, H3, H4, H5, H6','ecommerce-modern-store'),					
		'priority'		=> null,
		'panel'         => 'wpdevart_ecommerce_modern_store_general_settings_panel'
	));

    $wp_customize->add_setting( 'wpdevart_ecommerce_modern_store_main_container_heading_h1_font_size',
    array(
       'default' => esc_html('40'),
       'sanitize_callback' => 'wpdevart_ecommerce_modern_store_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_main_container_heading_h1_font_size',
		array(
		'label' => esc_html__( 'Heading H1 font-size (px)', 'ecommerce-modern-store' ),
		'section' => 'wpdevart_ecommerce_modern_store_text_h1_h2_h3_h4_h5_h6_typography_settings',
		'input_attrs' => array(
			'min' => esc_html('25'),
			'max' => esc_html('70'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_main_container_heading_h1_font_weight',array(
		'default'	=> esc_html('400'),
		'sanitize_callback'	=> 'wpdevart_ecommerce_modern_store_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_ecommerce_modern_store_main_container_heading_h1_font_weight',array(
			'label'	=> esc_html__('Heading H1 font weight','ecommerce-modern-store'),
			'section'	=> 'wpdevart_ecommerce_modern_store_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_ecommerce_modern_store_main_container_heading_h1_font_weight',
			'type' => 'select',
			'choices' => array(
				'100' => esc_html__('Thin 100','ecommerce-modern-store'),
				'400' => esc_html__('Normal 400','ecommerce-modern-store'),
				'600' => esc_html__('Semi-Bold 600','ecommerce-modern-store'),
				'800' => esc_html__('Extra-Bold 800','ecommerce-modern-store'),
				)
	));	
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_main_container_heading_h1_font_style',array(
		'default'	=> esc_html('normal'),
		'sanitize_callback'	=> 'wpdevart_ecommerce_modern_store_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_ecommerce_modern_store_main_container_heading_h1_font_style',array(
			'label'	=> esc_html__('Heading H1 font style','ecommerce-modern-store'),
			'section'	=> 'wpdevart_ecommerce_modern_store_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_ecommerce_modern_store_main_container_heading_h1_font_style',
			'type' => 'select',
			'choices' => array(
				'normal' => esc_html__('Normal','ecommerce-modern-store'),
				'italic' => esc_html__('Italic','ecommerce-modern-store'),
				)
	));	
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_main_container_heading_h1_font_transform',array(
		'default'	=> esc_html('uppercase'),
		'sanitize_callback'	=> 'wpdevart_ecommerce_modern_store_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_ecommerce_modern_store_main_container_heading_h1_font_transform',array(
			'label'	=> esc_html__('Heading H1 font transform','ecommerce-modern-store'),
			'section'	=> 'wpdevart_ecommerce_modern_store_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_ecommerce_modern_store_main_container_heading_h1_font_transform',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','ecommerce-modern-store'),
				'capitalize' => esc_html__('Capitalize','ecommerce-modern-store'),
				'uppercase' => esc_html__('Uppercase','ecommerce-modern-store'),
				'lowercase' => esc_html__('Lowercase','ecommerce-modern-store'),
				)
	));	
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_main_container_heading_h1_font_decoration',array(
		'default'	=> esc_html('none'),
		'sanitize_callback'	=> 'wpdevart_ecommerce_modern_store_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_ecommerce_modern_store_main_container_heading_h1_font_decoration',array(
			'label'	=> esc_html__('Heading H1 font decoration','ecommerce-modern-store'),
			'section'	=> 'wpdevart_ecommerce_modern_store_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_ecommerce_modern_store_main_container_heading_h1_font_decoration',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','ecommerce-modern-store'),
				'underline' => esc_html__('Underline','ecommerce-modern-store'),
				'line-through' => esc_html__('Line-through','ecommerce-modern-store'),
				'overline' => esc_html__('Overline','ecommerce-modern-store'),
				)
	));	

	##################------ Typography H2 ------##################

    $wp_customize->add_setting( 'wpdevart_ecommerce_modern_store_main_container_heading_h2_font_size',
    array(
       'default' => esc_html('28'),
       'sanitize_callback' => 'wpdevart_ecommerce_modern_store_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_main_container_heading_h2_font_size',
		array(
		'label' => esc_html__( 'Heading H2 font-size (px)', 'ecommerce-modern-store' ),
		'section' => 'wpdevart_ecommerce_modern_store_text_h1_h2_h3_h4_h5_h6_typography_settings',
		'input_attrs' => array(
			'min' => esc_html('20'),
			'max' => esc_html('65'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_main_container_heading_h2_font_weight',array(
		'default'	=> esc_html('400'),
		'sanitize_callback'	=> 'wpdevart_ecommerce_modern_store_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_ecommerce_modern_store_main_container_heading_h2_font_weight',array(
			'label'	=> esc_html__('Heading H2 font weight','ecommerce-modern-store'),
			'section'	=> 'wpdevart_ecommerce_modern_store_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_ecommerce_modern_store_main_container_heading_h2_font_weight',
			'type' => 'select',
			'choices' => array(
				'100' => esc_html__('Thin 100','ecommerce-modern-store'),
				'400' => esc_html__('Normal 400','ecommerce-modern-store'),
				'600' => esc_html__('Semi-Bold 600','ecommerce-modern-store'),
				'800' => esc_html__('Extra-Bold 800','ecommerce-modern-store'),
				)
	));	
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_main_container_heading_h2_font_style',array(
		'default'	=> esc_html('normal'),
		'sanitize_callback'	=> 'wpdevart_ecommerce_modern_store_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_ecommerce_modern_store_main_container_heading_h2_font_style',array(
			'label'	=> esc_html__('Heading H2 font style','ecommerce-modern-store'),
			'section'	=> 'wpdevart_ecommerce_modern_store_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_ecommerce_modern_store_main_container_heading_h2_font_style',
			'type' => 'select',
			'choices' => array(
				'normal' => esc_html__('Normal','ecommerce-modern-store'),
				'italic' => esc_html__('Italic','ecommerce-modern-store'),
				)
	));	
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_main_container_heading_h2_font_transform',array(
		'default'	=> esc_html('uppercase'),
		'sanitize_callback'	=> 'wpdevart_ecommerce_modern_store_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_ecommerce_modern_store_main_container_heading_h2_font_transform',array(
			'label'	=> esc_html__('Heading H2 font transform','ecommerce-modern-store'),
			'section'	=> 'wpdevart_ecommerce_modern_store_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_ecommerce_modern_store_main_container_heading_h2_font_transform',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','ecommerce-modern-store'),
				'capitalize' => esc_html__('Capitalize','ecommerce-modern-store'),
				'uppercase' => esc_html__('Uppercase','ecommerce-modern-store'),
				'lowercase' => esc_html__('Lowercase','ecommerce-modern-store'),
				)
	));	
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_main_container_heading_h2_font_decoration',array(
		'default'	=> esc_html('none'),
		'sanitize_callback'	=> 'wpdevart_ecommerce_modern_store_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_ecommerce_modern_store_main_container_heading_h2_font_decoration',array(
			'label'	=> esc_html__('Heading H2 font decoration','ecommerce-modern-store'),
			'section'	=> 'wpdevart_ecommerce_modern_store_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_ecommerce_modern_store_main_container_heading_h2_font_decoration',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','ecommerce-modern-store'),
				'underline' => esc_html__('Underline','ecommerce-modern-store'),
				'line-through' => esc_html__('Line-through','ecommerce-modern-store'),
				'overline' => esc_html__('Overline','ecommerce-modern-store'),
				)
	));	

	##################------ Typography H3 ------##################

    $wp_customize->add_setting( 'wpdevart_ecommerce_modern_store_main_container_heading_h3_font_size',
    array(
       'default' => esc_html('24'),
       'sanitize_callback' => 'wpdevart_ecommerce_modern_store_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_main_container_heading_h3_font_size',
		array(
		'label' => esc_html__( 'Heading H3 font-size (px)', 'ecommerce-modern-store' ),
		'section' => 'wpdevart_ecommerce_modern_store_text_h1_h2_h3_h4_h5_h6_typography_settings',
		'input_attrs' => array(
			'min' => esc_html('20'),
			'max' => esc_html('65'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_main_container_heading_h3_font_weight',array(
		'default'	=> esc_html('400'),
		'sanitize_callback'	=> 'wpdevart_ecommerce_modern_store_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_ecommerce_modern_store_main_container_heading_h3_font_weight',array(
			'label'	=> esc_html__('Heading H3 font weight','ecommerce-modern-store'),
			'section'	=> 'wpdevart_ecommerce_modern_store_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_ecommerce_modern_store_main_container_heading_h3_font_weight',
			'type' => 'select',
			'choices' => array(
				'100' => esc_html__('Thin 100','ecommerce-modern-store'),
				'400' => esc_html__('Normal 400','ecommerce-modern-store'),
				'600' => esc_html__('Semi-Bold 600','ecommerce-modern-store'),
				'800' => esc_html__('Extra-Bold 800','ecommerce-modern-store'),
				)
	));	
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_main_container_heading_h3_font_style',array(
		'default'	=> esc_html('normal'),
		'sanitize_callback'	=> 'wpdevart_ecommerce_modern_store_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_ecommerce_modern_store_main_container_heading_h3_font_style',array(
			'label'	=> esc_html__('Heading H3 font style','ecommerce-modern-store'),
			'section'	=> 'wpdevart_ecommerce_modern_store_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_ecommerce_modern_store_main_container_heading_h3_font_style',
			'type' => 'select',
			'choices' => array(
				'normal' => esc_html__('Normal','ecommerce-modern-store'),
				'italic' => esc_html__('Italic','ecommerce-modern-store'),
				)
	));	
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_main_container_heading_h3_font_transform',array(
		'default'	=> esc_html('uppercase'),
		'sanitize_callback'	=> 'wpdevart_ecommerce_modern_store_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_ecommerce_modern_store_main_container_heading_h3_font_transform',array(
			'label'	=> esc_html__('Heading H3 font transform','ecommerce-modern-store'),
			'section'	=> 'wpdevart_ecommerce_modern_store_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_ecommerce_modern_store_main_container_heading_h3_font_transform',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','ecommerce-modern-store'),
				'capitalize' => esc_html__('Capitalize','ecommerce-modern-store'),
				'uppercase' => esc_html__('Uppercase','ecommerce-modern-store'),
				'lowercase' => esc_html__('Lowercase','ecommerce-modern-store'),
				)
	));	
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_main_container_heading_h3_font_decoration',array(
		'default'	=> esc_html('none'),
		'sanitize_callback'	=> 'wpdevart_ecommerce_modern_store_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_ecommerce_modern_store_main_container_heading_h3_font_decoration',array(
			'label'	=> esc_html__('Heading H3 font decoration','ecommerce-modern-store'),
			'section'	=> 'wpdevart_ecommerce_modern_store_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_ecommerce_modern_store_main_container_heading_h3_font_decoration',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','ecommerce-modern-store'),
				'underline' => esc_html__('Underline','ecommerce-modern-store'),
				'line-through' => esc_html__('Line-through','ecommerce-modern-store'),
				'overline' => esc_html__('Overline','ecommerce-modern-store'),
				)
	));	

	##################------ Typography H4 ------##################

    $wp_customize->add_setting( 'wpdevart_ecommerce_modern_store_main_container_heading_h4_font_size',
    array(
       'default' => esc_html('23'),
       'sanitize_callback' => 'wpdevart_ecommerce_modern_store_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_main_container_heading_h4_font_size',
		array(
		'label' => esc_html__( 'Heading H4 font-size (px)', 'ecommerce-modern-store' ),
		'section' => 'wpdevart_ecommerce_modern_store_text_h1_h2_h3_h4_h5_h6_typography_settings',
		'input_attrs' => array(
			'min' => esc_html('15'),
			'max' => esc_html('60'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_main_container_heading_h4_font_weight',array(
		'default'	=> esc_html('400'),
		'sanitize_callback'	=> 'wpdevart_ecommerce_modern_store_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_ecommerce_modern_store_main_container_heading_h4_font_weight',array(
			'label'	=> esc_html__('Heading H4 font weight','ecommerce-modern-store'),
			'section'	=> 'wpdevart_ecommerce_modern_store_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_ecommerce_modern_store_main_container_heading_h4_font_weight',
			'type' => 'select',
			'choices' => array(
				'100' => esc_html__('Thin 100','ecommerce-modern-store'),
				'400' => esc_html__('Normal 400','ecommerce-modern-store'),
				'600' => esc_html__('Semi-Bold 600','ecommerce-modern-store'),
				'800' => esc_html__('Extra-Bold 800','ecommerce-modern-store'),
				)
	));	
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_main_container_heading_h4_font_style',array(
		'default'	=> esc_html('normal'),
		'sanitize_callback'	=> 'wpdevart_ecommerce_modern_store_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_ecommerce_modern_store_main_container_heading_h4_font_style',array(
			'label'	=> esc_html__('Heading H4 font style','ecommerce-modern-store'),
			'section'	=> 'wpdevart_ecommerce_modern_store_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_ecommerce_modern_store_main_container_heading_h4_font_style',
			'type' => 'select',
			'choices' => array(
				'normal' => esc_html__('Normal','ecommerce-modern-store'),
				'italic' => esc_html__('Italic','ecommerce-modern-store'),
				)
	));	
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_main_container_heading_h4_font_transform',array(
		'default'	=> esc_html('uppercase'),
		'sanitize_callback'	=> 'wpdevart_ecommerce_modern_store_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_ecommerce_modern_store_main_container_heading_h4_font_transform',array(
			'label'	=> esc_html__('Heading H4 font transform','ecommerce-modern-store'),
			'section'	=> 'wpdevart_ecommerce_modern_store_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_ecommerce_modern_store_main_container_heading_h4_font_transform',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','ecommerce-modern-store'),
				'capitalize' => esc_html__('Capitalize','ecommerce-modern-store'),
				'uppercase' => esc_html__('Uppercase','ecommerce-modern-store'),
				'lowercase' => esc_html__('Lowercase','ecommerce-modern-store'),
				)
	));	
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_main_container_heading_h4_font_decoration',array(
		'default'	=> esc_html('none'),
		'sanitize_callback'	=> 'wpdevart_ecommerce_modern_store_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_ecommerce_modern_store_main_container_heading_h4_font_decoration',array(
			'label'	=> esc_html__('Heading H4 font decoration','ecommerce-modern-store'),
			'section'	=> 'wpdevart_ecommerce_modern_store_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_ecommerce_modern_store_main_container_heading_h4_font_decoration',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','ecommerce-modern-store'),
				'underline' => esc_html__('Underline','ecommerce-modern-store'),
				'line-through' => esc_html__('Line-through','ecommerce-modern-store'),
				'overline' => esc_html__('Overline','ecommerce-modern-store'),
				)
	));	

	##################------ Typography H5 ------##################

    $wp_customize->add_setting( 'wpdevart_ecommerce_modern_store_main_container_heading_h5_font_size',
    array(
       'default' => esc_html('22'),
       'sanitize_callback' => 'wpdevart_ecommerce_modern_store_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_main_container_heading_h5_font_size',
		array(
		'label' => esc_html__( 'Heading H5 font-size (px)', 'ecommerce-modern-store' ),
		'section' => 'wpdevart_ecommerce_modern_store_text_h1_h2_h3_h4_h5_h6_typography_settings',
		'input_attrs' => array(
			'min' => esc_html('15'),
			'max' => esc_html('60'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_main_container_heading_h5_font_weight',array(
		'default'	=> esc_html('400'),
		'sanitize_callback'	=> 'wpdevart_ecommerce_modern_store_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_ecommerce_modern_store_main_container_heading_h5_font_weight',array(
			'label'	=> esc_html__('Heading H5 font weight','ecommerce-modern-store'),
			'section'	=> 'wpdevart_ecommerce_modern_store_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_ecommerce_modern_store_main_container_heading_h5_font_weight',
			'type' => 'select',
			'choices' => array(
				'100' => esc_html__('Thin 100','ecommerce-modern-store'),
				'400' => esc_html__('Normal 400','ecommerce-modern-store'),
				'600' => esc_html__('Semi-Bold 600','ecommerce-modern-store'),
				'800' => esc_html__('Extra-Bold 800','ecommerce-modern-store'),
				)
	));	
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_main_container_heading_h5_font_style',array(
		'default'	=> esc_html('normal'),
		'sanitize_callback'	=> 'wpdevart_ecommerce_modern_store_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_ecommerce_modern_store_main_container_heading_h5_font_style',array(
			'label'	=> esc_html__('Heading H5 font style','ecommerce-modern-store'),
			'section'	=> 'wpdevart_ecommerce_modern_store_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_ecommerce_modern_store_main_container_heading_h5_font_style',
			'type' => 'select',
			'choices' => array(
				'normal' => esc_html__('Normal','ecommerce-modern-store'),
				'italic' => esc_html__('Italic','ecommerce-modern-store'),
				)
	));	
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_main_container_heading_h5_font_transform',array(
		'default'	=> esc_html('uppercase'),
		'sanitize_callback'	=> 'wpdevart_ecommerce_modern_store_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_ecommerce_modern_store_main_container_heading_h5_font_transform',array(
			'label'	=> esc_html__('Heading H5 font transform','ecommerce-modern-store'),
			'section'	=> 'wpdevart_ecommerce_modern_store_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_ecommerce_modern_store_main_container_heading_h5_font_transform',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','ecommerce-modern-store'),
				'capitalize' => esc_html__('Capitalize','ecommerce-modern-store'),
				'uppercase' => esc_html__('Uppercase','ecommerce-modern-store'),
				'lowercase' => esc_html__('Lowercase','ecommerce-modern-store'),
				)
	));	
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_main_container_heading_h5_font_decoration',array(
		'default'	=> esc_html('none'),
		'sanitize_callback'	=> 'wpdevart_ecommerce_modern_store_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_ecommerce_modern_store_main_container_heading_h5_font_decoration',array(
			'label'	=> esc_html__('Heading H5 font decoration','ecommerce-modern-store'),
			'section'	=> 'wpdevart_ecommerce_modern_store_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_ecommerce_modern_store_main_container_heading_h5_font_decoration',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','ecommerce-modern-store'),
				'underline' => esc_html__('Underline','ecommerce-modern-store'),
				'line-through' => esc_html__('Line-through','ecommerce-modern-store'),
				'overline' => esc_html__('Overline','ecommerce-modern-store'),
				)
	));	

	##################------ Typography H6 ------##################

    $wp_customize->add_setting( 'wpdevart_ecommerce_modern_store_main_container_heading_h6_font_size',
    array(
       'default' => esc_html('20'),
       'sanitize_callback' => 'wpdevart_ecommerce_modern_store_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_main_container_heading_h6_font_size',
		array(
		'label' => esc_html__( 'Heading H6 font-size (px)', 'ecommerce-modern-store' ),
		'section' => 'wpdevart_ecommerce_modern_store_text_h1_h2_h3_h4_h5_h6_typography_settings',
		'input_attrs' => array(
			'min' => esc_html('15'),
			'max' => esc_html('60'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_main_container_heading_h6_font_weight',array(
		'default'	=> esc_html('400'),
		'sanitize_callback'	=> 'wpdevart_ecommerce_modern_store_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_ecommerce_modern_store_main_container_heading_h6_font_weight',array(
			'label'	=> esc_html__('Heading H6 font weight','ecommerce-modern-store'),
			'section'	=> 'wpdevart_ecommerce_modern_store_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_ecommerce_modern_store_main_container_heading_h6_font_weight',
			'type' => 'select',
			'choices' => array(
				'100' => esc_html__('Thin 100','ecommerce-modern-store'),
				'400' => esc_html__('Normal 400','ecommerce-modern-store'),
				'600' => esc_html__('Semi-Bold 600','ecommerce-modern-store'),
				'800' => esc_html__('Extra-Bold 800','ecommerce-modern-store'),
				)
	));	
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_main_container_heading_h6_font_style',array(
		'default'	=> esc_html('normal'),
		'sanitize_callback'	=> 'wpdevart_ecommerce_modern_store_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_ecommerce_modern_store_main_container_heading_h6_font_style',array(
			'label'	=> esc_html__('Heading H6 font style','ecommerce-modern-store'),
			'section'	=> 'wpdevart_ecommerce_modern_store_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_ecommerce_modern_store_main_container_heading_h6_font_style',
			'type' => 'select',
			'choices' => array(
				'normal' => esc_html__('Normal','ecommerce-modern-store'),
				'italic' => esc_html__('Italic','ecommerce-modern-store'),
				)
	));	
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_main_container_heading_h6_font_transform',array(
		'default'	=> esc_html('uppercase'),
		'sanitize_callback'	=> 'wpdevart_ecommerce_modern_store_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_ecommerce_modern_store_main_container_heading_h6_font_transform',array(
			'label'	=> esc_html__('Heading H6 font transform','ecommerce-modern-store'),
			'section'	=> 'wpdevart_ecommerce_modern_store_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_ecommerce_modern_store_main_container_heading_h6_font_transform',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','ecommerce-modern-store'),
				'capitalize' => esc_html__('Capitalize','ecommerce-modern-store'),
				'uppercase' => esc_html__('Uppercase','ecommerce-modern-store'),
				'lowercase' => esc_html__('Lowercase','ecommerce-modern-store'),
				)
	));	
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_main_container_heading_h6_font_decoration',array(
		'default'	=> esc_html('none'),
		'sanitize_callback'	=> 'wpdevart_ecommerce_modern_store_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_ecommerce_modern_store_main_container_heading_h6_font_decoration',array(
			'label'	=> esc_html__('Heading H6 font decoration','ecommerce-modern-store'),
			'section'	=> 'wpdevart_ecommerce_modern_store_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_ecommerce_modern_store_main_container_heading_h6_font_decoration',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','ecommerce-modern-store'),
				'underline' => esc_html__('Underline','ecommerce-modern-store'),
				'line-through' => esc_html__('Line-through','ecommerce-modern-store'),
				'overline' => esc_html__('Overline','ecommerce-modern-store'),
				)
	));
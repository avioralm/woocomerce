<?php 
	$wp_customize->add_panel( 'wpdevart_ecommerce_modern_store_blog_archive_search_panel', 
	array(
		'title'	=> esc_html__('Blog/Archive/Search','ecommerce-modern-store'),			
		'description'	=> esc_html__('Blog/Archive/Search pages settings','ecommerce-modern-store'),		
		'priority'		=> 27
	) 
	);

	##################------ Blog/Archive Page ------##################

	$wp_customize->add_section('wpdevart_ecommerce_modern_store_blog_section',array(
		'title'	=> esc_html__('Blog/Archive Page','ecommerce-modern-store'),
		'priority'		=> null,
		'panel'         => 'wpdevart_ecommerce_modern_store_blog_archive_search_panel'
	));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_archive_banner_width',array(
		'default'	=> esc_html('narrow'),
		'sanitize_callback'	=> 'wpdevart_ecommerce_modern_store_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_ecommerce_modern_store_archive_banner_width',array(
			'label'	=> esc_html__('Blog/Archive banner width','ecommerce-modern-store'),
			'section'	=> 'wpdevart_ecommerce_modern_store_blog_section',
			'setting'	=> 'wpdevart_ecommerce_modern_store_archive_banner_width',
			'type' => 'select',
			'choices' => array(
				'narrow' => esc_html__('Narrow','ecommerce-modern-store'),
				'wide' => esc_html__('Wide','ecommerce-modern-store')
				)
	));	
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_archive_banner_title_alignment',array(
		'default'	=> esc_html('center'),
		'sanitize_callback'	=> 'wpdevart_ecommerce_modern_store_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_ecommerce_modern_store_archive_banner_title_alignment',array(
			'label'	=> esc_html__('Blog/Archive title alignment','ecommerce-modern-store'),
			'section'	=> 'wpdevart_ecommerce_modern_store_blog_section',
			'setting'	=> 'wpdevart_ecommerce_modern_store_archive_banner_title_alignment',
			'type' => 'select',
			'choices' => array(
				'left' => esc_html__('Left','ecommerce-modern-store'),
				'center' => esc_html__('Center','ecommerce-modern-store'),
				'right' => esc_html__('Right','ecommerce-modern-store')
				)
	));	
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_archive_banner_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_archive_banner_bg_color', esc_html('#fcfeff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_archive_banner_bg_color', array(
        'label' => esc_html__('Blog/Archive banner background color','ecommerce-modern-store'),
        'section' => 'wpdevart_ecommerce_modern_store_blog_section',
        'settings' => 'wpdevart_ecommerce_modern_store_archive_banner_bg_color'
    )));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_archive_banner_bg_gradient_type',array(
		'default'	=> esc_html('to right'),
		'sanitize_callback'	=> 'wpdevart_ecommerce_modern_store_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_ecommerce_modern_store_archive_banner_bg_gradient_type',array(
			'label'	=> esc_html__('Archive pages banner gradient type','ecommerce-modern-store'),
			'section'	=> 'wpdevart_ecommerce_modern_store_blog_section',
			'setting'	=> 'wpdevart_ecommerce_modern_store_archive_banner_bg_gradient_type',
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
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_archive_banner_bg_gradient_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_archive_banner_bg_gradient_color', esc_html('#fcfeff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_archive_banner_bg_gradient_color', array(
        'label' => esc_html__('Archive pages banner gradient color','ecommerce-modern-store'),
        'section' => 'wpdevart_ecommerce_modern_store_blog_section',
        'settings' => 'wpdevart_ecommerce_modern_store_archive_banner_bg_gradient_color'
    )));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_archive_banner_title_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_archive_banner_title_color', esc_html('#000000')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_archive_banner_title_color', array(
        'label' => esc_html__('Blog/Archive title color','ecommerce-modern-store'),
        'section' => 'wpdevart_ecommerce_modern_store_blog_section',
        'settings' => 'wpdevart_ecommerce_modern_store_archive_banner_title_color'
    )));
    $wp_customize->add_setting( 'wpdevart_ecommerce_modern_store_blog_archive_page_layout',
	array(
		'default' => esc_html('sidebarright'),
		'transport' => 'refresh',
		'sanitize_callback' => 'wpdevart_ecommerce_modern_store_text_sanitization'
	)
	);
	$wp_customize->add_control( new Wpdevart_Image_Radio_Button_Custom_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_blog_archive_page_layout',
	array(
		'label' => esc_html__( 'Blog/Archive Page Layout', 'ecommerce-modern-store' ),
		'description' => esc_html__( 'Choose the blog/archive page layout.', 'ecommerce-modern-store' ),
		'section' => 'wpdevart_ecommerce_modern_store_blog_section',
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

	##################------ Search Page ------##################

	$wp_customize->add_section('wpdevart_ecommerce_modern_store_search_page_section',array(
		'title'	=> esc_html__('Search Page','ecommerce-modern-store'),					
		'priority'		=> null,
		'panel'         => 'wpdevart_ecommerce_modern_store_blog_archive_search_panel'
	));


	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_search_banner_width',array(
		'default'	=> esc_html('narrow'),
		'sanitize_callback'	=> 'wpdevart_ecommerce_modern_store_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_ecommerce_modern_store_search_banner_width',array(
			'label'	=> esc_html__('Search page banner width','ecommerce-modern-store'),
			'section'	=> 'wpdevart_ecommerce_modern_store_search_page_section',
			'setting'	=> 'wpdevart_ecommerce_modern_store_search_banner_width',
			'type' => 'select',
			'choices' => array(
				'narrow' => esc_html__('Narrow','ecommerce-modern-store'),
				'wide' => esc_html__('Wide','ecommerce-modern-store')
				)
	));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_search_banner_title_alignment',array(
		'default'	=> esc_html('center'),
		'sanitize_callback'	=> 'wpdevart_ecommerce_modern_store_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_ecommerce_modern_store_search_banner_title_alignment',array(
			'label'	=> esc_html__('Search page title alignment','ecommerce-modern-store'),
			'section'	=> 'wpdevart_ecommerce_modern_store_search_page_section',
			'setting'	=> 'wpdevart_ecommerce_modern_store_search_banner_title_alignment',
			'type' => 'select',
			'choices' => array(
				'left' => esc_html__('Left','ecommerce-modern-store'),
				'center' => esc_html__('Center','ecommerce-modern-store'),
				'right' => esc_html__('Right','ecommerce-modern-store')
				)
	));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_search_banner_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_search_banner_bg_color', esc_html('#fcfeff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_search_banner_bg_color', array(
		'label' => esc_html__('Search page banner background color','ecommerce-modern-store'),
		'section' => 'wpdevart_ecommerce_modern_store_search_page_section',
		'settings' => 'wpdevart_ecommerce_modern_store_search_banner_bg_color'
	)));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_search_banner_bg_gradient_type',array(
		'default'	=> esc_html('to right'),
		'sanitize_callback'	=> 'wpdevart_ecommerce_modern_store_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_ecommerce_modern_store_search_banner_bg_gradient_type',array(
			'label'	=> esc_html__('Search page banner gradient type','ecommerce-modern-store'),
			'section'	=> 'wpdevart_ecommerce_modern_store_search_page_section',
			'setting'	=> 'wpdevart_ecommerce_modern_store_search_banner_bg_gradient_type',
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
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_search_banner_bg_gradient_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_search_banner_bg_gradient_color', esc_html('#fcfeff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_search_banner_bg_gradient_color', array(
        'label' => esc_html__('Search page banner gradient color','ecommerce-modern-store'),
        'section' => 'wpdevart_ecommerce_modern_store_search_page_section',
        'settings' => 'wpdevart_ecommerce_modern_store_search_banner_bg_gradient_color'
    )));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_search_banner_title_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_search_banner_title_color', esc_html('#000000')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_search_banner_title_color', array(
		'label' => esc_html__('Search page title color','ecommerce-modern-store'),
		'section' => 'wpdevart_ecommerce_modern_store_search_page_section',
		'settings' => 'wpdevart_ecommerce_modern_store_search_banner_title_color'
	)));	
	$wp_customize->add_setting( 'wpdevart_ecommerce_modern_store_search_page_layout',
	array(
		'default' => esc_html('sidebarright'),
		'transport' => 'refresh',
		'sanitize_callback' => 'wpdevart_ecommerce_modern_store_text_sanitization'
	)
	);
	$wp_customize->add_control( new Wpdevart_Image_Radio_Button_Custom_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_search_page_layout',
	array(
		'label' => esc_html__( 'Search Page Layout', 'ecommerce-modern-store' ),
		'description' => esc_html__( 'Choose the search page layout.', 'ecommerce-modern-store' ),
		'section' => 'wpdevart_ecommerce_modern_store_search_page_section',
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
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_search_page_button_style',array(
		'default'	=> esc_html('wpdevart_ecommerce_modern_store_fourth_button_slide fourth_btn_slide_right'),
		'sanitize_callback'	=> 'wpdevart_ecommerce_modern_store_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_ecommerce_modern_store_search_page_button_style',array(
			'label'	=> esc_html__('Search Page button style','ecommerce-modern-store'),
			'section'	=> 'wpdevart_ecommerce_modern_store_search_page_section',
			'setting'	=> 'wpdevart_ecommerce_modern_store_search_page_button_style',
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

	##################------ General ------##################
	
	$wp_customize->add_section('wpdevart_ecommerce_modern_store_blog_archive_search_general_section',array(
		'title'	=> esc_html__('General','ecommerce-modern-store'),
		'description'	=> esc_html__('This is the global options page for the Blog/Archive/Search posts lists.','ecommerce-modern-store'),
		'priority'		=> null,
		'panel'         => 'wpdevart_ecommerce_modern_store_blog_archive_search_panel'
	));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_blog_settings_posts_list_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_blog_settings_posts_list_bg_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_blog_settings_posts_list_bg_color', array(
        'label' => esc_html__('Summary/Post/Page block background color','ecommerce-modern-store'),
        'section' => 'wpdevart_ecommerce_modern_store_blog_archive_search_general_section',
        'settings' => 'wpdevart_ecommerce_modern_store_blog_settings_posts_list_bg_color'
    )));
	$wp_customize->add_setting( 'wpdevart_ecommerce_modern_store_blog_archive_display_default_featured_image',
    array(
       'default' => esc_html(''),
       'transport' => 'refresh',
       'sanitize_callback' => 'wpdevart_ecommerce_modern_store_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Toggle_Switch_Custom_control( $wp_customize, 'wpdevart_ecommerce_modern_store_blog_archive_display_default_featured_image',
        array(
        'label' => esc_html__( 'Enable Default Featured Image', 'ecommerce-modern-store' ),
		'description' => esc_html__( 'Display the default featured image for posts that do not have a selected featured image.', 'ecommerce-modern-store' ),
        'section' => 'wpdevart_ecommerce_modern_store_blog_archive_search_general_section'
        )
    ) );
	$wp_customize->add_setting( 'wpdevart_ecommerce_modern_store_blog_settings_title_font_size',
    array(
       'default' => esc_html('22'),
       'sanitize_callback' => 'wpdevart_ecommerce_modern_store_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_blog_settings_title_font_size',
		array(
		'label' => esc_html__( 'Title font-size (px)', 'ecommerce-modern-store' ),
		'section' => 'wpdevart_ecommerce_modern_store_blog_archive_search_general_section',
		'input_attrs' => array(
			'min' => esc_html('15'),
			'max' => esc_html('50'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_blog_settings_title_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_blog_settings_title_color', esc_html('#000000')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_blog_settings_title_color', array(
        'label' => esc_html__('Title color','ecommerce-modern-store'),
        'section' => 'wpdevart_ecommerce_modern_store_blog_archive_search_general_section',
        'settings' => 'wpdevart_ecommerce_modern_store_blog_settings_title_color'
    )));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_blog_settings_title_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_blog_settings_title_hover_color', esc_html('#ff5952')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_blog_settings_title_hover_color', array(
        'label' => esc_html__('Title hover color','ecommerce-modern-store'),
        'section' => 'wpdevart_ecommerce_modern_store_blog_archive_search_general_section',
        'settings' => 'wpdevart_ecommerce_modern_store_blog_settings_title_hover_color'
    )));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_blog_settings_title_border_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_blog_settings_title_border_color', esc_html('#dddddd')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_blog_settings_title_border_color', array(
        'label' => esc_html__('Title border color','ecommerce-modern-store'),
        'section' => 'wpdevart_ecommerce_modern_store_blog_archive_search_general_section',
        'settings' => 'wpdevart_ecommerce_modern_store_blog_settings_title_border_color'
    )));
	$wp_customize->add_setting( 'wpdevart_ecommerce_modern_store_blog_settings_metas_font_size',
    array(
       'default' => esc_html('12'),
       'sanitize_callback' => 'wpdevart_ecommerce_modern_store_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_blog_settings_metas_font_size',
		array(
		'label' => esc_html__( 'Entry metas font-size (px)', 'ecommerce-modern-store' ),
		'section' => 'wpdevart_ecommerce_modern_store_blog_archive_search_general_section',
		'input_attrs' => array(
			'min' => esc_html('10'),
			'max' => esc_html('30'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_blog_settings_metas_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_blog_settings_metas_color', esc_html('#ff5952')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_blog_settings_metas_color', array(
        'label' => esc_html__('Color of the metas','ecommerce-modern-store'),
        'section' => 'wpdevart_ecommerce_modern_store_blog_archive_search_general_section',
        'settings' => 'wpdevart_ecommerce_modern_store_blog_settings_metas_color'
    )));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_blog_settings_metas_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_blog_settings_metas_hover_color', esc_html('#000000')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_blog_settings_metas_hover_color', array(
        'label' => esc_html__('Entry metas hover color','ecommerce-modern-store'),
        'section' => 'wpdevart_ecommerce_modern_store_blog_archive_search_general_section',
        'settings' => 'wpdevart_ecommerce_modern_store_blog_settings_metas_hover_color'
    )));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_blog_settings_meta_icons_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_blog_settings_meta_icons_color', esc_html('#000000')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_blog_settings_meta_icons_color', array(
        'label' => esc_html__('Icons color of the metas','ecommerce-modern-store'),
        'section' => 'wpdevart_ecommerce_modern_store_blog_archive_search_general_section',
        'settings' => 'wpdevart_ecommerce_modern_store_blog_settings_meta_icons_color'
    )));
	$wp_customize->add_setting( 'wpdevart_ecommerce_modern_store_blog_settings_content_text_font_size',
    array(
       'default' => esc_html('15'),
       'sanitize_callback' => 'wpdevart_ecommerce_modern_store_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_blog_settings_content_text_font_size',
		array(
		'label' => esc_html__( 'Content font-size (px)', 'ecommerce-modern-store' ),
		'section' => 'wpdevart_ecommerce_modern_store_blog_archive_search_general_section',
		'input_attrs' => array(
			'min' => esc_html('10'),
			'max' => esc_html('40'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_blog_settings_content_text_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_blog_settings_content_text_color', esc_html('#717171')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_blog_settings_content_text_color', array(
        'label' => esc_html__('Content text color','ecommerce-modern-store'),
        'section' => 'wpdevart_ecommerce_modern_store_blog_archive_search_general_section',
        'settings' => 'wpdevart_ecommerce_modern_store_blog_settings_content_text_color'
    )));
	$wp_customize->add_setting( 'wpdevart_ecommerce_modern_store_blog_settings_category_text_font_size',
    array(
       'default' => esc_html('13'),
       'sanitize_callback' => 'wpdevart_ecommerce_modern_store_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_blog_settings_category_text_font_size',
		array(
		'label' => esc_html__( 'Category font-size (px)', 'ecommerce-modern-store' ),
		'section' => 'wpdevart_ecommerce_modern_store_blog_archive_search_general_section',
		'input_attrs' => array(
			'min' => esc_html('10'),
			'max' => esc_html('40'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_blog_settings_category_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_blog_settings_category_bg_color', esc_html('#333333')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_blog_settings_category_bg_color', array(
        'label' => esc_html__('Categories background color','ecommerce-modern-store'),
        'section' => 'wpdevart_ecommerce_modern_store_blog_archive_search_general_section',
        'settings' => 'wpdevart_ecommerce_modern_store_blog_settings_category_bg_color'
    )));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_blog_settings_category_text_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_blog_settings_category_text_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_blog_settings_category_text_color', array(
        'label' => esc_html__('Categories text color','ecommerce-modern-store'),
        'section' => 'wpdevart_ecommerce_modern_store_blog_archive_search_general_section',
        'settings' => 'wpdevart_ecommerce_modern_store_blog_settings_category_text_color'
    )));	
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_blog_settings_category_bg_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_blog_settings_category_bg_hover_color', esc_html('#ebf5fb')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_blog_settings_category_bg_hover_color', array(
        'label' => esc_html__('Categories background hover color','ecommerce-modern-store'),
        'section' => 'wpdevart_ecommerce_modern_store_blog_archive_search_general_section',
        'settings' => 'wpdevart_ecommerce_modern_store_blog_settings_category_bg_hover_color'
    )));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_blog_settings_category_text_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_blog_settings_category_text_hover_color', esc_html('#000000')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_blog_settings_category_text_hover_color', array(
        'label' => esc_html__('Categories text hover color','ecommerce-modern-store'),
        'section' => 'wpdevart_ecommerce_modern_store_blog_archive_search_general_section',
        'settings' => 'wpdevart_ecommerce_modern_store_blog_settings_category_text_hover_color'
    )));

	##################------ Pagination ------##################

	$wp_customize->add_section('wpdevart_ecommerce_modern_store_pagination_settings',array(
		'title'	=> esc_html__('Pagination','ecommerce-modern-store'),					
		'priority'		=> null,
		'panel'         => 'wpdevart_ecommerce_modern_store_blog_archive_search_panel'
	));

	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_pagination_buttons_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_pagination_buttons_bg_color', esc_html('#333333')),
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_pagination_buttons_bg_color', array(
        'label' => esc_html__('Buttons background color','ecommerce-modern-store'),
        'section' => 'wpdevart_ecommerce_modern_store_pagination_settings',
        'settings' => 'wpdevart_ecommerce_modern_store_pagination_buttons_bg_color'
    )));

	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_pagination_buttons_link_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_pagination_buttons_link_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_pagination_buttons_link_color', array(
        'label' => esc_html__('Text color of active buttons','ecommerce-modern-store'),
        'section' => 'wpdevart_ecommerce_modern_store_pagination_settings',
        'settings' => 'wpdevart_ecommerce_modern_store_pagination_buttons_link_color'
    )));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_pagination_buttons_text_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_pagination_buttons_text_color', esc_html('#a8a8a8')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_pagination_buttons_text_color', array(
        'label' => esc_html__('Text color of inactive buttons','ecommerce-modern-store'),
        'section' => 'wpdevart_ecommerce_modern_store_pagination_settings',
        'settings' => 'wpdevart_ecommerce_modern_store_pagination_buttons_text_color'
    )));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_pagination_buttons_bg_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_pagination_buttons_bg_hover_color', esc_html('#ebf5fb')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_pagination_buttons_bg_hover_color', array(
        'label' => esc_html__('Buttons background hover color','ecommerce-modern-store'),
        'section' => 'wpdevart_ecommerce_modern_store_pagination_settings',
        'settings' => 'wpdevart_ecommerce_modern_store_pagination_buttons_bg_hover_color'
    )));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_pagination_buttons_link_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_pagination_buttons_link_hover_color', esc_html('#000000')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_pagination_buttons_link_hover_color', array(
        'label' => esc_html__('Text color of active buttons on hover','ecommerce-modern-store'),
        'section' => 'wpdevart_ecommerce_modern_store_pagination_settings',
        'settings' => 'wpdevart_ecommerce_modern_store_pagination_buttons_link_hover_color'
    )));
	$wp_customize->add_setting('wpdevart_ecommerce_modern_store_pagination_buttons_text_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ecommerce_modern_store_pagination_buttons_text_hover_color', esc_html('#a8a8a8')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_pagination_buttons_text_hover_color', array(
        'label' => esc_html__('Text color of inactive buttons on hover','ecommerce-modern-store'),
        'section' => 'wpdevart_ecommerce_modern_store_pagination_settings',
        'settings' => 'wpdevart_ecommerce_modern_store_pagination_buttons_text_hover_color'
    )));
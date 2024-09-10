<?php

    $wp_customize->register_section_type( 'Wpdevart_Premium_Features_List' );


	##################------ Premium Features Sections ------##################

	$wp_customize->add_section(
		new Wpdevart_Premium_Features_List(
			$wp_customize,
			'wpdevart_ecommerce_modern_store_theme_general_features',
			array(
				'title'         => esc_html__( 'Even More Options in the Premium Version!', 'ecommerce-modern-store' ),
                'upsell_link'  => apply_filters( 'parent_wpdevart_ecommerce_modern_store_premium_features_url', esc_url('https://wpdevart.com/wordpress-ecommerce-modern-store-theme')),
				'premium_features_list' => array(
					esc_html__( '+40 Other Popular Fonts', 'ecommerce-modern-store' ),
					esc_html__( 'Wide and Full-Width Layouts', 'ecommerce-modern-store' ),
					esc_html__( 'Preloader', 'ecommerce-modern-store' ),
					esc_html__( 'Customizable Search Overlay', 'ecommerce-modern-store' ),
					esc_html__( 'Back To Top Button', 'ecommerce-modern-store' ),
					esc_html__( '... and Other Premium Features', 'ecommerce-modern-store' ),
				),
				'panel'         => 'wpdevart_ecommerce_modern_store_general_settings_panel',
				'priority'      => 7777,
			)
		)
	);

	$wp_customize->add_section(
		new Wpdevart_Premium_Features_List(
			$wp_customize,
			'wpdevart_ecommerce_modern_store_theme_header_features',
			array(
				'title'         => esc_html__( 'Even More Options in the Premium Version!', 'ecommerce-modern-store' ),
                'upsell_link'  => apply_filters( 'parent_wpdevart_ecommerce_modern_store_premium_features_url', esc_url('https://wpdevart.com/wordpress-ecommerce-modern-store-theme')),
				'premium_features_list' => array(
					esc_html__( 'Sticky Header Feature', 'ecommerce-modern-store' ),
					esc_html__( 'Sticky Header Feature for Mobile', 'ecommerce-modern-store' ),
                    esc_html__( 'Logo Animations', 'ecommerce-modern-store' ),
					esc_html__( 'Search Button Animations', 'ecommerce-modern-store' ),
                    esc_html__( 'Woo Cart Animations', 'ecommerce-modern-store' ),
					esc_html__( 'Wide and Full-Width Layouts', 'ecommerce-modern-store' ),
					esc_html__( '... and Other Premium Features', 'ecommerce-modern-store' ),
				),
				'panel'         => 'wpdevart_ecommerce_modern_store_header_panel',
				'priority'      => 7777,
			)
		)
	);

	$wp_customize->add_section(
		new Wpdevart_Premium_Features_List(
			$wp_customize,
			'wpdevart_ecommerce_modern_store_theme_single_post_page_features',
			array(
				'title'         => esc_html__( 'Even More Options in the Premium Version!', 'ecommerce-modern-store' ),
                'upsell_link'  => apply_filters( 'parent_wpdevart_ecommerce_modern_store_premium_features_url', esc_url('https://wpdevart.com/wordpress-ecommerce-modern-store-theme')),
				'premium_features_list' => array(
					esc_html__( 'Post/Page Title Animations', 'ecommerce-modern-store' ),
					esc_html__( 'Post/Page Banner Animations', 'ecommerce-modern-store' ),
                    esc_html__( '4 Animated Banner Elements', 'ecommerce-modern-store' ),
					esc_html__( 'Animated Elements Colors', 'ecommerce-modern-store' ),
					esc_html__( 'Wide and Full-Width Layouts', 'ecommerce-modern-store' ),
					esc_html__( '... and Other Premium Features', 'ecommerce-modern-store' ),
				),
				'panel'         => 'wpdevart_ecommerce_modern_store_single_post_page_panel',
				'priority'      => 7777,
			)
		)
	);

	$wp_customize->add_section(
		new Wpdevart_Premium_Features_List(
			$wp_customize,
			'wpdevart_ecommerce_modern_store_theme_blog_archive_search_features',
			array(
				'title'         => esc_html__( 'Even More Options in the Premium Version!', 'ecommerce-modern-store' ),
                'upsell_link'  => apply_filters( 'parent_wpdevart_ecommerce_modern_store_premium_features_url', esc_url('https://wpdevart.com/wordpress-ecommerce-modern-store-theme')),
				'premium_features_list' => array(
					esc_html__( 'Images Hover Effects', 'ecommerce-modern-store' ),
					esc_html__( 'Archive/Search Page Title Animations', 'ecommerce-modern-store' ),
                    esc_html__( 'Archive/Search Page Banner Animations', 'ecommerce-modern-store' ),
					esc_html__( '4 Animated Elements', 'ecommerce-modern-store' ),
                    esc_html__( 'Animated Elements Colors', 'ecommerce-modern-store' ),
					esc_html__( 'Wide and Full-Width Layouts', 'ecommerce-modern-store' ),
					esc_html__( '... and Other Premium Features', 'ecommerce-modern-store' ),
				),
				'panel'         => 'wpdevart_ecommerce_modern_store_blog_archive_search_panel',
				'priority'      => 7777,
			)
		)
	);

    $wp_customize->add_section(
		new Wpdevart_Premium_Features_List(
			$wp_customize,
			'wpdevart_ecommerce_modern_store_theme_custom_homepage_features',
			array(
				'title'         => esc_html__( 'Even More Options in the Premium Version!', 'ecommerce-modern-store' ),
                'upsell_link'  => apply_filters( 'parent_wpdevart_ecommerce_modern_store_premium_features_url', esc_url('https://wpdevart.com/wordpress-ecommerce-modern-store-theme')),
				'premium_features_list' => array(
                    esc_html__( '+4 Beautiful Banner Themes', 'ecommerce-modern-store' ),
					esc_html__( 'WooCommerce Section', 'ecommerce-modern-store' ),
					esc_html__( 'Sales Section', 'ecommerce-modern-store' ),
					esc_html__( 'Achievements Section', 'ecommerce-modern-store' ),
					esc_html__( 'Advantages Section', 'ecommerce-modern-store' ),
					esc_html__( 'Services Section', 'ecommerce-modern-store' ),
					esc_html__( 'Sections Description Color', 'ecommerce-modern-store' ),
					esc_html__( 'Sections Title Lines Color', 'ecommerce-modern-store' ),
					esc_html__( 'Wide and Full-Width Layouts', 'ecommerce-modern-store' ),
					esc_html__( '... and Other Premium Features', 'ecommerce-modern-store' ),
				),
				'panel'         => 'wpdevart_ecommerce_modern_store_custom_homepage_panel',
				'priority'      => 7777,
			)
		)
	);

	$wp_customize->add_section(
		new Wpdevart_Premium_Features_List(
			$wp_customize,
			'wpdevart_ecommerce_modern_store_theme_woo_features',
			array(
				'title'         => esc_html__( 'Even More Options in the Premium Version!', 'ecommerce-modern-store' ),
                'upsell_link'  => apply_filters( 'parent_wpdevart_ecommerce_modern_store_premium_features_url', esc_url('https://wpdevart.com/wordpress-ecommerce-modern-store-theme')),
				'premium_features_list' => array(
                    esc_html__( 'WooCommerce Search Bar Section', 'ecommerce-modern-store' ),
                    esc_html__( 'Customizable Category List and Search Bar', 'ecommerce-modern-store' ),
					esc_html__( 'WooCommerce Breadcrumbs', 'ecommerce-modern-store' ),
					esc_html__( 'WooCommerce Header Cart Design', 'ecommerce-modern-store' ),
					esc_html__( 'WooCommerce Sidebar Options', 'ecommerce-modern-store' ),
					esc_html__( 'Wide and Full-Width Layouts', 'ecommerce-modern-store' ),
					esc_html__( '... and Other Premium Features', 'ecommerce-modern-store' ),
				),
				'panel'         => 'wpdevart_ecommerce_modern_store_woocommerce_settings_panel',
				'priority'      => 7777,
			)
		)
	);
        
    ##################------ Premium Features Controls------##################

    $wp_customize->add_setting( 'wpdevart_ecommerce_modern_store_logo_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_ecommerce_modern_store_text_sanitization',
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_ecommerce_modern_store_logo_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'ecommerce-modern-store' ),
        'section' => 'title_tagline',
        'priority' => 50,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Text Logo animations', 'ecommerce-modern-store' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Text Logo font-size', 'ecommerce-modern-store' )
            ),
            'feature3' => array(
                'name' => esc_html__( 'Text Logo font weight', 'ecommerce-modern-store' )
            ),
            'feature4' => array(
                'name' => esc_html__( '... and Other Premium Features', 'ecommerce-modern-store' )
            ),
        )
    )
    ) );

    $wp_customize->add_setting( 'wpdevart_ecommerce_modern_store_font_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_ecommerce_modern_store_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_ecommerce_modern_store_font_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'ecommerce-modern-store' ),
        'section' => 'wpdevart_ecommerce_modern_store_fonts_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( '+40 Other Popular Fonts', 'ecommerce-modern-store' )
            ),
            'feature2' => array(
                'name' => esc_html__( '... and Other Premium Features', 'ecommerce-modern-store' )
            ),
        )
    )
    ) );

    $wp_customize->add_setting( 'wpdevart_ecommerce_modern_store_header_general_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_ecommerce_modern_store_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_ecommerce_modern_store_header_general_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'ecommerce-modern-store' ),
        'section' => 'wpdevart_ecommerce_modern_store_header_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Sticky Header Feature', 'ecommerce-modern-store' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Sticky Header Feature for Mobile', 'ecommerce-modern-store' )
            ),
            'feature3' => array(
                'name' => esc_html__( 'Animations for Header Elements', 'ecommerce-modern-store' )
            ),
            'feature4' => array(
                'name' => esc_html__( '... and Other Premium Features', 'ecommerce-modern-store' )
            ),
        )
    )
    ) );

    $wp_customize->add_setting( 'wpdevart_ecommerce_modern_store_top_header_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_ecommerce_modern_store_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_ecommerce_modern_store_top_header_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'ecommerce-modern-store' ),
        'section' => 'wpdevart_ecommerce_modern_store_top_header_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Address Section', 'ecommerce-modern-store' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Phone/Email/Address Icon Color', 'ecommerce-modern-store' )
            ),
            'feature3' => array(
                'name' => esc_html__( 'Animations for Top Header Elements', 'ecommerce-modern-store' )
            ),
            'feature4' => array(
                'name' => esc_html__( '... and Other Premium Features', 'ecommerce-modern-store' )
            ),
        )
    )
    ) );
    
    $wp_customize->add_setting( 'wpdevart_ecommerce_modern_store_header_menu_search_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_ecommerce_modern_store_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_ecommerce_modern_store_header_menu_search_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'ecommerce-modern-store' ),
        'section' => 'wpdevart_ecommerce_modern_store_header_menu_search_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Search Button Animations', 'ecommerce-modern-store' )
            ),
            'feature2' => array(
                'name' => esc_html__( '... and Other Premium Features', 'ecommerce-modern-store' )
            ),
        )
    )
    ) );

	if ( class_exists( 'WooCommerce' ) ) {
    $wp_customize->add_setting( 'wpdevart_ecommerce_modern_store_header_woo_cart_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_ecommerce_modern_store_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_ecommerce_modern_store_header_woo_cart_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'ecommerce-modern-store' ),
        'section' => 'wpdevart_ecommerce_modern_store_header_woo_cart',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Woo Cart Animations', 'ecommerce-modern-store' )
            ),
            'feature2' => array(
                'name' => esc_html__( '... and Other Premium Features', 'ecommerce-modern-store' )
            ),
        )
    )
    ) );
    };

    $wp_customize->add_setting( 'wpdevart_ecommerce_modern_store_single_post_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_ecommerce_modern_store_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_ecommerce_modern_store_single_post_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'ecommerce-modern-store' ),
        'section' => 'wpdevart_ecommerce_modern_store_single_post_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Title Animations', 'ecommerce-modern-store' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Banner Animations', 'ecommerce-modern-store' )
            ),
            'feature3' => array(
                'name' => esc_html__( '4 Animated Elements', 'ecommerce-modern-store' )
            ),
            'feature4' => array(
                'name' => esc_html__( 'Animated Elements Colors', 'ecommerce-modern-store' )
            ),
            'feature5' => array(
                'name' => esc_html__( '... and Other Premium Features', 'ecommerce-modern-store' )
            ),
        )
    )
    ) );
    $wp_customize->add_setting( 'wpdevart_ecommerce_modern_store_single_page_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_ecommerce_modern_store_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_ecommerce_modern_store_single_page_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'ecommerce-modern-store' ),
        'section' => 'wpdevart_ecommerce_modern_store_single_page_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Title Animations', 'ecommerce-modern-store' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Banner Animations', 'ecommerce-modern-store' )
            ),
            'feature3' => array(
                'name' => esc_html__( '4 Animated Elements', 'ecommerce-modern-store' )
            ),
            'feature4' => array(
                'name' => esc_html__( 'Animated Elements Colors', 'ecommerce-modern-store' )
            ),
            'feature5' => array(
                'name' => esc_html__( '... and Other Premium Features', 'ecommerce-modern-store' )
            ),
        )
    )
    ) );

    $wp_customize->add_setting( 'wpdevart_ecommerce_modern_store_blog_archive_page_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_ecommerce_modern_store_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_ecommerce_modern_store_blog_archive_page_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'ecommerce-modern-store' ),
        'section' => 'wpdevart_ecommerce_modern_store_blog_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Title Animations', 'ecommerce-modern-store' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Banner Animations', 'ecommerce-modern-store' )
            ),
            'feature3' => array(
                'name' => esc_html__( '4 Animated Elements', 'ecommerce-modern-store' )
            ),
            'feature4' => array(
                'name' => esc_html__( 'Animated Elements Colors', 'ecommerce-modern-store' )
            ),
            'feature5' => array(
                'name' => esc_html__( '... and Other Premium Features', 'ecommerce-modern-store' )
            ),
        )
    )
    ) );
    $wp_customize->add_setting( 'wpdevart_ecommerce_modern_store_search_page_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_ecommerce_modern_store_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_ecommerce_modern_store_search_page_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'ecommerce-modern-store' ),
        'section' => 'wpdevart_ecommerce_modern_store_search_page_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Title Animations', 'ecommerce-modern-store' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Banner Animations', 'ecommerce-modern-store' )
            ),
            'feature3' => array(
                'name' => esc_html__( '4 Animated Elements', 'ecommerce-modern-store' )
            ),
            'feature4' => array(
                'name' => esc_html__( 'Animated Elements Colors', 'ecommerce-modern-store' )
            ),
            'feature5' => array(
                'name' => esc_html__( '... and Other Premium Features', 'ecommerce-modern-store' )
            ),
        )
    )
    ) );
    $wp_customize->add_setting( 'wpdevart_ecommerce_modern_store_blog_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_ecommerce_modern_store_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_ecommerce_modern_store_blog_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'ecommerce-modern-store' ),
        'section' => 'wpdevart_ecommerce_modern_store_blog_archive_search_general_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Images Hover Effects', 'ecommerce-modern-store' )
            ),
            'feature2' => array(
                'name' => esc_html__( '... and Other Premium Features', 'ecommerce-modern-store' )
            ),
        )
    )
    ) );
    $wp_customize->add_setting( 'wpdevart_ecommerce_modern_store_custom_homepage_banner_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_ecommerce_modern_store_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_ecommerce_modern_store_custom_homepage_banner_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'ecommerce-modern-store' ),
        'section' => 'wpdevart_ecommerce_modern_store_custom_homepage_banner_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( '+4 Beautiful Banner Themes', 'ecommerce-modern-store' )
            ),
            'feature2' => array(
                'name' => esc_html__( '... and Other Premium Features', 'ecommerce-modern-store' )
            ),
        )
    )
    ) );
    $wp_customize->add_setting( 'wpdevart_ecommerce_modern_store_custom_homepage_general_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_ecommerce_modern_store_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_ecommerce_modern_store_custom_homepage_general_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'ecommerce-modern-store' ),
        'section' => 'wpdevart_ecommerce_modern_store_custom_homepage_general_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Sections Description Color', 'ecommerce-modern-store' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Sections Title Lines Color', 'ecommerce-modern-store' )
            ),
            'feature3' => array(
                'name' => esc_html__( '... and Other Premium Features', 'ecommerce-modern-store' )
            ),
        )
    )
    ) );
    $wp_customize->add_setting( 'wpdevart_ecommerce_modern_store_footer_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_ecommerce_modern_store_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_ecommerce_modern_store_footer_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'ecommerce-modern-store' ),
        'section' => 'wpdevart_ecommerce_modern_store_footer_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( '+4 Beautiful Footer Themes', 'ecommerce-modern-store' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Copyright section image', 'ecommerce-modern-store' )
            ),
            'feature3' => array(
                'name' => esc_html__( '... and Other Premium Features', 'ecommerce-modern-store' )
            ),
        )
    )
    ) );
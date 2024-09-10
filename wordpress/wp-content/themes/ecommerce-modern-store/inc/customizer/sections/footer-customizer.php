<?php 
        $wp_customize->add_section('wpdevart_ecommerce_modern_store_footer_section',array(
            'title'	=> esc_html__('Footer','ecommerce-modern-store'),
            'priority'		=> 30
        ));
        $wp_customize->add_setting( 'wpdevart_ecommerce_modern_store_footer_layout',
        array(
            'default' => esc_html('wpdevartthreewidgetsleft'),
            'transport' => 'refresh',
            'sanitize_callback' => 'wpdevart_ecommerce_modern_store_text_sanitization'
        )
        );
        $wp_customize->add_control( new Wpdevart_Image_Radio_Button_Custom_Control( $wp_customize, 'wpdevart_ecommerce_modern_store_footer_layout',
        array(
            'label' => esc_html__( 'Footer layout', 'ecommerce-modern-store' ),
            'description' => esc_html__( 'Select the layout of the footer', 'ecommerce-modern-store' ),
            'section' => 'wpdevart_ecommerce_modern_store_footer_section',
            'choices' => array(
            'wpdevartthreewidgetsleft' => array(
                'image' => trailingslashit( get_template_directory_uri() ) . 'images/footer-layout-one.jpg',
                'name' => esc_html__( 'Large widget on the left', 'ecommerce-modern-store' )
            ),
            'wpdevartthreewidgetscenter' => array(
                'image' => trailingslashit( get_template_directory_uri() ) . 'images/footer-layout-two.jpg',
                'name' => esc_html__( 'Large widget in the center', 'ecommerce-modern-store' )
            ),
            'wpdevartthreewidgetsright' => array(
                'image' => trailingslashit( get_template_directory_uri() ) . 'images/footer-layout-three.jpg',
                'name' => esc_html__( 'Large widget on the right', 'ecommerce-modern-store' )
            ),
            'wpdevartfourwidgets' => array(
                'image' => trailingslashit( get_template_directory_uri() ) . 'images/footer-layout-four.jpg',
                'name' => esc_html__( 'Four widgets', 'ecommerce-modern-store' )
            ),
            'wpdevartfourwidgetsalternative' => array(
                'image' => trailingslashit( get_template_directory_uri() ) . 'images/footer-layout-five.jpg',
                'name' => esc_html__( 'Four widgets - alternative', 'ecommerce-modern-store' )
            ),
            'wpdevartfivewidgets' => array(
                'image' => trailingslashit( get_template_directory_uri() ) . 'images/footer-layout-six.jpg',
                'name' => esc_html__( 'Five widgets', 'ecommerce-modern-store' )
            )
            )
        )
        ) );
        $wp_customize->add_setting('wpdevart_ecommerce_modern_store_footer_copyright_text',array(
            'default'	=> esc_html('Copyright ©2023. All rights reserved.'),
            'sanitize_callback'	=> 'wpdevart_ecommerce_modern_store_text_sanitization'	
        ));
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'wpdevart_ecommerce_modern_store_footer_copyright_text',
                array(
                    'label'    => esc_html__('Copyright text','ecommerce-modern-store'),
                    'section'  => 'wpdevart_ecommerce_modern_store_footer_section',
                    'settings' => 'wpdevart_ecommerce_modern_store_footer_copyright_text',
                    'type'     => 'text'
                )
            )
        );
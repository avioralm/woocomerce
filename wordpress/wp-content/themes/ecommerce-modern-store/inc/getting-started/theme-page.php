<?php

function wpdevart_theme_backend_enqueue() {
    wp_enqueue_style( 'wpdevart-theme-ecommerce-modern-store-getting-started', get_template_directory_uri() . '/inc/getting-started/notice.css' );
}
add_action( 'admin_enqueue_scripts', 'wpdevart_theme_backend_enqueue' );

function wpdevart_ecommerce_modern_store_menu() {
	add_theme_page( esc_html__( 'About Theme', 'ecommerce-modern-store' ), esc_html__( 'About Theme', 'ecommerce-modern-store' ), 'edit_theme_options', 'wpdevart-theme-about', 'wpdevart_ecommerce_modern_store_about_display' );
}
add_action( 'admin_menu', 'wpdevart_ecommerce_modern_store_menu' );

function wpdevart_ecommerce_modern_store_about_display() {
	$wpdevart_ecommerce_modern_store_theme = wp_get_theme();
	?>
	<div class="wrap about-wrap full-width-layout">
		<h1><?php echo esc_html( $wpdevart_ecommerce_modern_store_theme ); ?></h1>
		<div class="wpdevart-about-theme">
			<div class="wpdevart-theme-description">
				<p class="about-text"><?php echo apply_filters( 'parent_wpdevart_child_description_text', esc_html('Ecommerce Modern Store is a responsive and powerful WordPress theme that is fully integrated with the WooCommerce plugin. The theme has many useful and necessary options to manage and change the entire design of the site, starting from the top bar and header sections to the footer. WordPress Ecommerce Modern Store theme is WooCommerce ready, which means you can easily set up and customize your store website using our theme and WooCommerce plugin. Our theme has many WooCommerce features that allow you to have complete control over your store page design.')); ?></p>
				<p class="actions">
					<a target="_blank" href="<?php echo apply_filters( 'parent_wpdevart_ecommerce_modern_store_premium_features_url', esc_url('https://wpdevart.com/wordpress-ecommerce-modern-store-theme')); ?>" class="button button-secondary" target="_blank"><?php esc_html_e( 'Theme Info', 'ecommerce-modern-store' ); ?></a>
					<a target="_blank" href="<?php echo apply_filters( 'parent_wpdevart_child_demo_url', esc_url('https://ecommercemodernstore.wpdevart.com')); ?>" class="button button-secondary" target="_blank"><?php esc_html_e( 'Demo', 'ecommerce-modern-store' ); ?></a>
                    <a target="_blank" href="<?php echo apply_filters( 'parent_wpdevart_child_wp_support_url', esc_url('https://wordpress.org/support/theme/ecommerce-modern-store')); ?>" class="button button-secondary" target="_blank"><?php esc_html_e( 'Support', 'ecommerce-modern-store' ); ?></a>
					<a target="_blank" href="<?php echo apply_filters( 'parent_wpdevart_ecommerce_modern_store_premium_features_url', esc_url('https://wpdevart.com/wordpress-ecommerce-modern-store-theme')); ?>" class="green button button-secondary" target="_blank"><?php esc_html_e( 'Upgrade to Premium', 'ecommerce-modern-store' ); ?></a>
                    <a target="_blank" href="<?php echo esc_url('https://wpdevart.com/hire-wordpress-developer-dedicated-experts-are-ready-to-help/'); ?>" class="green button button-secondary" target="_blank"><?php esc_html_e( 'Hire a Developer', 'ecommerce-modern-store' ); ?></a>
				</p>
			</div>
			<div class="wpdevart-theme-screenshot">
				<img src="<?php echo esc_url( $wpdevart_ecommerce_modern_store_theme->get_screenshot() ); ?>" />
			</div>
		</div>
		<nav class="nav-tab-wrapper wp-clearfix" aria-label="<?php esc_attr_e( 'Secondary menu', 'ecommerce-modern-store' ); ?>">
			<a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'wpdevart-theme-about' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['page'] ) && 'wpdevart-theme-about' === $_GET['page'] && ! isset( $_GET['tab'] ) ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'About', 'ecommerce-modern-store' ); ?></a>
			<a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'wpdevart-theme-about', 'tab' => 'free_vs_pro' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['tab'] ) && 'free_vs_pro' === $_GET['tab'] ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'Free Vs Pro', 'ecommerce-modern-store' ); ?></a>
			<a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'wpdevart-theme-about', 'tab' => 'changelog' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['tab'] ) && 'changelog' === $_GET['tab'] ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'FAQ', 'ecommerce-modern-store' ); ?></a>
		</nav>
		<?php
			wpdevart_ecommerce_modern_store_main_screen();
			wpdevart_ecommerce_modern_store_changelog_screen();
			wpdevart_ecommerce_modern_store_free_vs_pro();
		?>
	</div>
	<?php
}

function wpdevart_ecommerce_modern_store_main_screen() {
	if ( isset( $_GET['page'] ) && 'wpdevart-theme-about' === $_GET['page'] && ! isset( $_GET['tab'] ) ) {
	?>
		<div class="feature-section two-col">
			<div class="col card">
				<h2 class="title"><?php esc_html_e( 'Theme Customizer', 'ecommerce-modern-store' ); ?></h2>
				<p><?php esc_html_e( 'You can edit and change theme options using the customizer. All theme options are available via Customize screen.', 'ecommerce-modern-store' ) ?></p>
				<p><a href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>" class="button button-primary"><?php esc_html_e( 'Customize', 'ecommerce-modern-store' ); ?></a></p>
			</div>

			<div class="col card">
				<h2 class="title"><?php esc_html_e( 'Got theme support question?', 'ecommerce-modern-store' ); ?></h2>
				<p><?php esc_html_e( 'If you have any questions regarding our theme, you can add a support ticket and get fast support from our team.', 'ecommerce-modern-store' ) ?></p>
				<p><a target="_blank" href="<?php echo apply_filters( 'parent_wpdevart_child_wp_support_url', esc_url('https://wordpress.org/support/theme/ecommerce-modern-store')); ?>" class="button button-primary"><?php esc_html_e( 'Support Forum', 'ecommerce-modern-store' ); ?></a></p>
			</div>

			<div class="col card">
				<h2 class="title"><?php esc_html_e( 'Hire a Developer', 'ecommerce-modern-store' ); ?></h2>
				<p><?php esc_html_e( 'Hire WordPress developers from WpDevArt and you will get a quick and flexible solution at cost-effective rates. Our WordPress experts will help you to solve any problem. We provide different services for WordPress – website customization and development, theme/plugin customization and development, SEO optimization, WordPress integration, website speed optimization, etc. Our experts have over 10 years of experience, so a high-quality job is guaranteed.', 'ecommerce-modern-store' ) ?></p>
				<p><a target="_blank" href="<?php echo esc_url('https://wpdevart.com/hire-wordpress-developer-dedicated-experts-are-ready-to-help/'); ?>" class="button button-primary"><?php esc_html_e( 'Check Details', 'ecommerce-modern-store' ); ?></a></p>
			</div>
		</div>
	<?php
	}
}

function wpdevart_ecommerce_modern_store_free_vs_pro() {
	if ( isset( $_GET['tab'] ) && 'free_vs_pro' === $_GET['tab'] ) {
	?>
		<div class="wrap about-wrap">
			<p class="about-description"><?php esc_html_e( 'Check out some of the differences between the free and premium versions below:', 'ecommerce-modern-store' ); ?></p>
			<div class="wpdevart-vs-theme-table">
				<table>
					<thead>
						<tr><th scope="col"></th>
							<th class="head" scope="col"><?php esc_html_e( 'Free Version', 'ecommerce-modern-store' ); ?></th>
							<th class="head" scope="col"><?php esc_html_e( 'Pro Version', 'ecommerce-modern-store' ); ?></th>
						</tr>
					</thead>
					<tbody>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><span><?php esc_html_e( 'Homepage Premium Sections', 'ecommerce-modern-store' ); ?></span></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( '+4 Homepage Banner Themes', 'ecommerce-modern-store' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Animation Effects', 'ecommerce-modern-store' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Sticky Header', 'ecommerce-modern-store' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'WooCommerce Search Bar', 'ecommerce-modern-store' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'WooCommerce Sales Section', 'ecommerce-modern-store' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Banner Animations', 'ecommerce-modern-store' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Preloader', 'ecommerce-modern-store' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Priority Support', 'ecommerce-modern-store' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Footer Themes', 'ecommerce-modern-store' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Fully Responsive Design', 'ecommerce-modern-store' ); ?></td>
							<td><span class="dashicons dashicons-saved"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Integrated with WooCommerce', 'ecommerce-modern-store' ); ?></td>
							<td><span class="dashicons dashicons-saved"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Optimized PageSpeed and Clear Codding', 'ecommerce-modern-store' ); ?></td>
							<td><span class="dashicons dashicons-saved"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td class="feature feature--empty"></td>
							<td class="feature feature--empty"></td>
							<td headers="comp-2" class="td-btn-2"><a class="sidebar-button single-btn" href="<?php echo apply_filters( 'parent_wpdevart_ecommerce_modern_store_premium_features_url', esc_url('https://wpdevart.com/wordpress-ecommerce-modern-store-theme')); ?>" target="_blank"><?php esc_html_e( 'Go For Premium', 'ecommerce-modern-store' ); ?></a></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	<?php
	}
}

function wpdevart_ecommerce_modern_store_changelog_screen() {
	if ( isset( $_GET['tab'] ) && 'changelog' === $_GET['tab'] ) {
		global $wp_filesystem;
	?>
			<p class="about-description"><?php esc_html_e( 'Check out some frequently asked questions below:', 'ecommerce-modern-store' ); ?></p>
			<div class="feature-section two-col">			
				<div class="col card">
					<h2 class="title"><?php esc_html_e( 'How can I display the custom homepage instead of the latest posts on the main page?', 'ecommerce-modern-store' ); ?></h2>
					<p><?php esc_html_e( 'Go to the theme customize page, then in the left menu, click the Custom Homepage section, go to the Enable Custom Homepage section, and enable the option. Important: You will need to make sure that on the theme Customize page under the Homepage Settings section, the “Your homepage displays” option is set to “Your latest posts.”', 'ecommerce-modern-store' ) ?></p>
				</div>
				<div class="col card">
					<h2 class="title"><?php esc_html_e( 'How can I add widgets to the WooCommerce sidebar?', 'ecommerce-modern-store' ); ?></h2>
					<p><?php esc_html_e( 'You need to go to Appearance > Widgets page, find the WooCommerce Sidebar widget and add the widgets you want.', 'ecommerce-modern-store' ) ?></p>
				</div>
				<div class="col card">
					<h2 class="title"><?php esc_html_e( 'What is the difference between the Primary Button and the header/banner/search page and other buttons?', 'ecommerce-modern-store' ); ?></h2>
					<p><?php esc_html_e( 'The Primary Button is the style of the widget search button and the comments submit button and you can set a custom color for it, while the other buttons are placed on different settings pages and you can choose the color for these buttons from the 10 available colors.', 'ecommerce-modern-store' ) ?></p>
				</div>
				<div class="col card">
					<h2 class="title"><?php esc_html_e( 'What should I do if after successful payment I did not receive a link to download the premium version?', 'ecommerce-modern-store' ); ?></h2>
					<p><?php esc_html_e( 'You need to contact us using the form on the Contact Us page of our website.', 'ecommerce-modern-store' ) ?></p>
				</div>
				<div class="col card">
					<h2 class="title"><?php esc_html_e( 'Can I use animated elements in the free version?', 'ecommerce-modern-store' ); ?></h2>
					<p><?php esc_html_e( 'The animation feature is only available in the premium version, so you need to purchase a theme to use it.', 'ecommerce-modern-store' ) ?></p>
				</div>
			</div>
	<?php
	}
}
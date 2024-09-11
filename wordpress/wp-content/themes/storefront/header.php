<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
		  <script src="https://cdn.tailwindcss.com"></script>
	<style>
		.container {
			max-width: 100%!important;
			padding: 0;
		}
		
		.main-area {
			padding: 0;
		}
		
		.theme-th-shop-mania .page-content {
			padding-top: 0;
		}
		
		.container > .content-wrap {
			padding-top: 0;
		}
		
		body .is-layout-flex {
			padding: 0 5px;
		}
		
		.entry-content p {
			margin-bottom: 0;
		}
		
		.full {
			width: 100%;
		}
		
		section:not(.fit):not(.mfit) {
			width: 100vw;
			min-height: 100vh;
		}
		
		.bg-primary {
			background-color: #F28B30;
			color: white;
		}
		
		.bg-secondary {
			background-color: #B1B1B1;
		}
		
		.hero-section {
			background-image: url('/wp-content/uploads/2024/09/Group-1171275038.svg');
			background-size: contain;
			background-repeat: no-repeat;
		}
		
		.title {
			font-size: x-large;
			font-weight: bold;
			text-align: center;
			margin-bottom: 12px;
		}
		
		.title.left {
			font-size: x-large;
			font-weight: bold;
			text-align: start;
			margin-bottom: 12px;
		}
		
		.product-image img, .part-image img {
			border-radius: 24px 24px 0 0;
		}
		
		.product-details, .part-details, .highlight-details {
			margin-top: -2px;
			border-radius: 0 0 24px 24px;
			padding: 20px;
		}
		
		.product-bottom-left, .part-name {
			color: white;
		}
		
		.part-name {
			font-weight: bold;
			font-size: x-large;
		}
		
		.page-head {
			display: none;
		}
		
		.x-price {
			margin: 12px 0;
			font-size: x-large;
			font-weight: bold;
		}
		
		.x-image {
			border-radius: 24px;
			margin: 32px 0;
		}
		
		.xfeatures {
			border-top: #F28B30 1px solid;
			border-bottom: #F28B30 1px solid;
		}
		
		.dimmed {
			opacity: 0.5;
		}
		
		.hero2 {
			background-color: #F2F2F2;
			padding: 0;
		}
		
		.hero2-content {
			padding: 0 16px;
		}
		
		.title.nomb {
			margin-bottom: 0;
		}
		
		.primary-title {
			font-size: xx-large;
			color: #F28B30;
			font-weight: 600;
		}
		
		.hollow-btn {
			background: transparent;
			border: 1px solid black;
			margin-bottom: 32px;
		}
		
		.highlight-details {
			background-color: #F8F9FC;
		}
		
		.card {
			background-color: #F8F9FC;
			border-radius: 32px;
			padding: 24px;
			margin-bottom: 16px;
		}
		
		.cmd-icon {
			margin-bottom: 24px;
		}
		
		.card-learn-more {
			margin-top: 16px;
		}
		
		.card-image {
			margin-top: 36px;
		}
		
		.rounded-top {
			border-radius: 24px 24px 0 0;
		}
		
		.title.lg {
			font-size: xx-large;
		}
		
		.collapsible {
			width: 85%;
			margin: 0 auto;
			padding: 8px;
			border-radius: 10px;
		}
		
		.collapsible.active {
			background-color: #F9FAFB;
			border: solid 2px #F28B30;
		}
		
		.collapsible-title {
			font-weight: 500;
		}
		
		.collapsible-paragraph {
			color: #475467;
			display: none;
		}
		
		.collapsible.active .collapsible-paragraph {
			display: block;
		}
		
		.post-read-more {
			color: #F28B30;
		}
		
		.post {
			margin: 0 16px;
			min-width: 80%;
		}
		
		.post-read-more {
			display: flex;
			gap: 8px;
		}
		
		@media only screen and (max-width: 576px) {
			section:not(.clear) {
				padding: 0 8px;
			}
			
			.xfeatures {
				padding: 0 32px;
			}
		}
		
		@media only screen and (min-width: 576px) {
			.hero-section {
				background-image: url('/wp-content/uploads/2024/09/Group-1171275062.svg');
				background-position: right;
			}
			
			.hero-section .hero {
				max-width: 80%;
				margin: 0 auto;
			}
			
			.feature-icon img {
				width: 32px;
			}
			
			.feature-text {
				font-weight: bold;
			}
			
			.products .product, .parts .part, .highlights .highlight {
				width: 30%;
				max-width: 330px;
			}
			
			img.md\:w-1\/2 {
				max-width: 550px;
			}
			
			.title {
				margin-bottom: 2rem;
			}
			
			.hero2 {
				background-image: url('/wp-content/uploads/2024/09/Group-1171275063.svg');
				background-size: cover;
				background-repeat: no-repeat;
			}
			
			.mdhscreen {
				min-height: 100vh;
			}
			
			.highlight-image img {
				border-radius: 24px 24px 0 0;
			}
			
			.card {
				width: 46%;
			}
			
			.card.nopad {
				padding: 0;
			}
			
			.card.nopad .card-image {
				width: 100%;
				margin-top: 0;
			}
			
			.card.nopad .content {
				padding: 16px 24px;
			}
			
			.card.nopad .title {
				text-align: inherit;
				margin-bottom: 0;
			}
			
			.collapsible {
				max-width: 700px;
			}
			
			.collapsible-paragraph {
				text-align: start;
			}
		}
	</style>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<?php do_action( 'storefront_before_site' ); ?>

<div id="page" class="hfeed site">
	<?php do_action( 'storefront_before_header' ); ?>

	<header id="masthead" class="site-header" role="banner" style="<?php storefront_header_styles(); ?>">

		<?php
		/**
		 * Functions hooked into storefront_header action
		 *
		 * @hooked storefront_header_container                 - 0
		 * @hooked storefront_skip_links                       - 5
		 * @hooked storefront_social_icons                     - 10
		 * @hooked storefront_site_branding                    - 20
		 * @hooked storefront_secondary_navigation             - 30
		 * @hooked storefront_product_search                   - 40
		 * @hooked storefront_header_container_close           - 41
		 * @hooked storefront_primary_navigation_wrapper       - 42
		 * @hooked storefront_primary_navigation               - 50
		 * @hooked storefront_header_cart                      - 60
		 * @hooked storefront_primary_navigation_wrapper_close - 68
		 */
		do_action( 'storefront_header' );
		?>

	</header><!-- #masthead -->

	<?php
	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 * @hooked woocommerce_breadcrumb - 10
	 */
	do_action( 'storefront_before_content' );
	?>

	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">

		<?php
		do_action( 'storefront_content_top' );

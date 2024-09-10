<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Th Shop Mania
 * @since 1.0.0
 * 
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url(get_bloginfo('pingback_url')); ?>">
	<?php endif; ?>
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
			text-align: unset;
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
		}
	</style>
</head>
<?php
// page post meta
global $post;
if ((is_single() || is_page()) || ((class_exists('WooCommerce')) && (is_woocommerce() || is_checkout() || is_cart() || is_account_page()))
||  is_front_page() || is_home()) {
	if (class_exists('WooCommerce') && is_shop()) {
		$shop_page_id = get_option('woocommerce_shop_page_id');
		$postid = $shop_page_id;
	} elseif(th_shop_mania_is_blog()){
		$blog_page_id = get_option('page_for_posts');
		$postid = $blog_page_id;
	} else {
		$postid =(isset($post->ID)) ? $post->ID : '';
	}
	$th_shop_mania_transparent_header_dyn = get_post_meta($postid, 'th_shop_mania_transparent_header_dyn', true);
	$th_shop_mania_disable_main_header_dyn = get_post_meta($postid, 'th_shop_mania_disable_main_header_dyn', true);
	$th_shop_mania_disable_above_header_dyn = get_post_meta($postid, 'th_shop_mania_disable_above_header_dyn', true);
	$th_shop_mania_disable_bottom_header_dyn = get_post_meta($postid, 'th_shop_mania_disable_bottom_header_dyn', true);
	if (is_search() || is_404()) {
		$th_shop_mania_sticky_header_dyn = '';
	} else {
		$th_shop_mania_sticky_header_dyn = get_post_meta($postid, 'th_shop_mania_sticky_header_dyn', true);
	}
} else {
	$th_shop_mania_disable_above_header_dyn = '';
	$th_shop_mania_disable_main_header_dyn = '';
	$th_shop_mania_disable_bottom_header_dyn = '';
	$th_shop_mania_transparent_header_dyn = '';
	$th_shop_mania_sticky_header_dyn = '';
}
?>
<body <?php body_class();?>>

	<?php wp_body_open();
	if (function_exists( 'th_shop_mania_pro_load_plugin' ) ){  
		do_action('th_shop_mania_pro_site_preloader');
	}
	else{
		do_action('th_shop_mania_site_preloader');
	}
	?>

<div id="page" class="th-shop-mania-site">
	<header class="<?php echo esc_attr(th_shop_mania_header_transparent_class($th_shop_mania_transparent_header_dyn)); ?>">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'th-shop-mania' ); ?></a>
        <?php do_action( 'th_shop_mania_sticky_header' );
        	th_shop_mania_header_abv_post_meta($th_shop_mania_disable_above_header_dyn);
        	th_shop_mania_header_main_post_meta($th_shop_mania_disable_main_header_dyn);
			th_shop_mania_header_btm_post_meta($th_shop_mania_disable_bottom_header_dyn);
        ?> 
		<!-- end below-header -->
	</header> <!-- end header -->

	<?php 
	//Page Header 
		$id = (isset($post->ID)) ? $post->ID : '';
		if (has_action('th_shop_mania_page_header_markup')) {

		do_action( 'th_shop_mania_page_header_markup', $id );
	}
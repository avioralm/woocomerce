<? 
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?><!DOCTYPE html>
<?php astra_html_before(); ?>
<html <?php language_attributes(); ?>>
<head>
<?php astra_head_top(); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php 
if ( apply_filters( 'astra_header_profile_gmpg_link', true ) ) {
	?>
	 <link rel="profile" href="https://gmpg.org/xfn/11"> 
	 <?php
} 
?>
<?php wp_head(); ?>
<?php astra_head_bottom(); ?>
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
		
		section:not(.fit):not(.mfit):not(.widget) {
			width: 100vw;
			min-height: 100vh;
		}
		
		.bg-primary {
			background-color: #F28B30;
			color: white;
		}

		.bg-dark {
			background-color: #2D2D30;
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

		html[dir="rtl"] .hero-section {
			background-image: url('/wp-content/uploads/2024/09/Group-1171275058-1.svg');
			background-position-x: 0;
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
		
		details {
			font-size: 1rem;
			margin: 0 auto;
			width: 100%;
			background: #fff;
			border-radius: 8px;
			position: relative;
			max-width: 90vw;
			width: 500px;
			padding-bottom: 1rem;
			border-top: 1px solid #e2e8f0;
		}

		details[open] {
			background-color: #F9FAFB;
			border-top: none;
			border: solid 2px #F28B30;
			margin-bottom: 1rem;
		}

		details .summary-title {
			font-size: large;
			user-select: none;
		}

		details:hover {
			cursor: pointer;
		}

		details .summary-content {
			cursor: default;
			padding: 0.3em 1em;
			font-weight: 300;
			line-height: 1.5;
		}

		details summary {
			list-style: none;
			display: flex;
			align-items: center;
			justify-content: space-between;
			padding: 1em;
			padding-bottom: 0.2em;
		}

		details .summary-chevron-down {
			pointer-events: none;
			position: absolute;
			top: 1.2em;
			right: 1em;
			background: #F9FAFB;
		}

		details summary:focus {
			outline: none;
		}

		details summary:hover .summary-chevron-up svg {
			opacity: 1;
		}

		details .summary-chevron-up svg {
			opacity: 0.5;
		}

		details .summary-chevron-up svg, details .summary-chevron-down svg {
			display: block;
		}

		details summary::-webkit-details-marker {
			display: none;
		}	

		.summary-title {
			font-weight: 600;
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

		.feature-icon img {
			width: 32px;
		}

		.color-primary {
			color: #F28B30;
		}

		.color-dark {
			color: #014051;
		}
		
		@media only screen and (max-width: 576px) {
			section:not(.clear) {
				padding: 0 8px;
			}
			
			.xfeatures {
				padding: 0 32px;
			}

			nav.main-menu {
				background-color: white!important;
			}
			
			#primary {
				padding: 0 24px;
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
			
			.feature-text {
				font-weight: bold;
			}
			
			.products .product, .parts .part, .highlights .highlight {
				width: 30%;
				max-width: 330px;
			}

			.title.nomb-md {
				margin-bottom: 0;
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

			html[dir="rtl"] .hero2 {
				background-image: url('/wp-content/uploads/2024/09/Group-1171275084.svg');
				background-position-x: 0;
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

			.scooters-hero {
				background: url('/wp-content/uploads/2024/09/section.svg');
			}

			.md\:not-fit {
				min-height: 100vh!important;
			}
		}
		
		#content .ast-container {
			padding: 0;
			max-width: 100%!important;
		}
		
		.entry-title {
			display: none;
		}
		
		.ast-plain-container.ast-no-sidebar #primary {
			margin: 0;
		}
		
		section {
			max-width: 100%!important;
		}
		
		.site-header {
			background:#ffff;
			z-index:999;
			margin:0 auto;
			width:100%;
			/* position:fixed; */
			top:0;
			left:0;
			right:0;
		}

		.menu-link {
			color: black;
			font-size: small;
		}

		.current-menu-item .menu-link {
			color: #F28B30;
		}

		.wpml-ls-legacy-dropdown {
			width: fit-content;
		}

		.wpml-ls-legacy-dropdown a.wpml-ls-item-toggle, .wpml-ls-legacy-dropdown .wpml-ls-sub-menu a {
			border: none;
		}
		
		.wpml-ls-legacy-dropdown .wpml-ls-sub-menu a {
			border-bottom: 1px rgb(51, 65, 85) solid;
		}

		nav.main-menu {
			/* position: fixed; */
			top: 0;
			width: 100%;
			z-index: 999999;
			background-color: rgba(255, 255, 255, 0.5);
		}

		.woocommerce-js .quantity .qty {
			display: none;
		}

		.woocommerce-js div.product form.cart .button.single_add_to_cart_button {
			font-size: smaller;
		}

		.entry-content[ast-blocks-layout] > * {
			max-width: 100%!important;
		}

		.entry-content[ast-blocks-layout] > .alignwide {
			margin: 0!important;
		}

		#primary {
			padding: 0 32px;
			margin-top: 75px!important;
		}

		.wc-block-components-totals-coupon .wc-block-components-panel__button {
			padding-top: auto;
		}
	</style>
</head>

<body <?php astra_schema_body(); ?> <?php body_class(); ?>>
    <nav class="main-menu flex flex-col px-4 md:px-8 py-4 gap-y-4">
        <div class="nav-top flex md:gap-0 justify-between items-center">
			<div class="flex gap-4 items-center">
				<img src="/wp-content/uploads/2024/09/Group-1171275085.svg" class="md:hidden">
							<?php astra_logo(); ?>
			</div>
			<a class="cart-customlocation md:hidden" href="<?php echo wc_get_cart_url(); ?>">
				<div class="bg-primary flex items-center gap-1 font-bold text-sm px-4 py-2 rounded-xl">
					<img src="/wp-content/uploads/2024/09/shopping-cart-1-1.svg" />
					Cart
				</div>
			</a>

			<div class="gap-2 hidden md:flex">
				<div class="flex items-center"><? wpml_floating_language_switcher(); ?></div>
				<a class="account" href="/?page_id=9">
					<div class="bg-dark flex items-center gap-1 font-bold text-sm px-4 py-2 rounded-xl">
						<img src="/wp-content/uploads/2024/09/Frame-8-1.svg" />
						<? echo is_user_logged_in() ? 'My Account' : 'Login'; ?>
					</div>
				</a>
				<a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>">
					<div class="bg-primary flex items-center gap-1 font-bold text-sm px-4 py-2 rounded-xl">
						<img src="/wp-content/uploads/2024/09/shopping-cart-1-1.svg" />
						Cart
					</div>
				</a>
			</div>
        </div>
        <div class="nav-bottom hidden md:flex gap-4 list-none text-black">
            <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'menu_id'        => 'primary-menu',
                    'menu_class' => 'flex list-none',
                    'items_wrap' => '%3$s',
                    'container' => false
                ) );
            ?>
        </div>
    </nav>


    <?php astra_body_top(); ?>
    <?php wp_body_open(); ?>
</body>
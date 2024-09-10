<?php
/**
 * Author Writer functions and definitions
  *
 * @package Author Writer
 * @subpackage author_writer
 */

function author_writer_setup() {

	load_theme_textdomain( 'author-writer', get_template_directory() . '/language' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'title-tag' );
	add_theme_support( "responsive-embeds" );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'author-writer-featured-image', 2000, 1200, true );
	add_image_size( 'author-writer-thumbnail-avatar', 100, 100, true );

	// Set the default content width.
	$GLOBALS['content_width'] = 525;

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary-menu'    => __( 'Primary Menu', 'author-writer' ),
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
		'flex-height'  => true,
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array('image','video','gallery','audio',) );

	add_theme_support( 'html5', array('comment-form','comment-list','gallery','caption',) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, and column width.
 	 */
	add_editor_style( array( 'assets/css/editor-style.css', author_writer_fonts_url() ) );
}
add_action( 'after_setup_theme', 'author_writer_setup' );

/**
 * Register custom fonts.
 */
function author_writer_fonts_url(){
	$author_writer_font_url = '';
	$author_writer_font_family = array();
	$author_writer_font_family[] = 'Manrope:wght@200;300;400;500;600;700;800';
	$author_writer_font_family[] = 'Playfair Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900';
	$author_writer_font_family[] = 'PT Sans:ital,wght@0,400;0,700;1,400;1,700';

	$author_writer_font_family[] = 'Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$author_writer_font_family[] = 'Bad Script';
	$author_writer_font_family[] = 'Bebas Neue';
	$author_writer_font_family[] = 'Fjalla One';
	$author_writer_font_family[] = 'PT Sans:ital,wght@0,400;0,700;1,400;1,700';
	$author_writer_font_family[] = 'PT Serif:ital,wght@0,400;0,700;1,400;1,700';
	$author_writer_font_family[] = 'Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900';
	$author_writer_font_family[] = 'Roboto Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700';
	$author_writer_font_family[] = 'Alex Brush';
	$author_writer_font_family[] = 'Overpass:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$author_writer_font_family[] = 'Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$author_writer_font_family[] = 'Playball';
	$author_writer_font_family[] = 'Alegreya:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900';
	$author_writer_font_family[] = 'Julius Sans One';
	$author_writer_font_family[] = 'Arsenal:ital,wght@0,400;0,700;1,400;1,700';
	$author_writer_font_family[] = 'Slabo 13px';
	$author_writer_font_family[] = 'Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900';
	$author_writer_font_family[] = 'Overpass Mono:wght@300;400;500;600;700';
	$author_writer_font_family[] = 'Source Sans Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900';
	$author_writer_font_family[] = 'Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$author_writer_font_family[] = 'Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900';
	$author_writer_font_family[] = 'Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$author_writer_font_family[] = 'Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700';
	$author_writer_font_family[] = 'Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700';
	$author_writer_font_family[] = 'Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700';
	$author_writer_font_family[] = 'Arimo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700';
	$author_writer_font_family[] = 'Playfair Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900';
	$author_writer_font_family[] = 'Quicksand:wght@300;400;500;600;700';
	$author_writer_font_family[] = 'Padauk:wght@400;700';
	$author_writer_font_family[] = 'Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000';
	$author_writer_font_family[] = 'Inconsolata:wght@200;300;400;500;600;700;800;900&family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000';
	$author_writer_font_family[] = 'Bitter:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000';
	$author_writer_font_family[] = 'Pacifico';
	$author_writer_font_family[] = 'Indie Flower';
	$author_writer_font_family[] = 'VT323';
	$author_writer_font_family[] = 'Dosis:wght@200;300;400;500;600;700;800';
	$author_writer_font_family[] = 'Frank Ruhl Libre:wght@300;400;500;700;900';
	$author_writer_font_family[] = 'Fjalla One';
	$author_writer_font_family[] = 'Figtree:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$author_writer_font_family[] = 'Oxygen:wght@300;400;700';
	$author_writer_font_family[] = 'Arvo:ital,wght@0,400;0,700;1,400;1,700';
	$author_writer_font_family[] = 'Noto Serif:ital,wght@0,400;0,700;1,400;1,700';
	$author_writer_font_family[] = 'Lobster';
	$author_writer_font_family[] = 'Crimson Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700';
	$author_writer_font_family[] = 'Yanone Kaffeesatz:wght@200;300;400;500;600;700';
	$author_writer_font_family[] = 'Anton';
	$author_writer_font_family[] = 'Libre Baskerville:ital,wght@0,400;0,700;1,400';
	$author_writer_font_family[] = 'Bree Serif';
	$author_writer_font_family[] = 'Gloria Hallelujah';
	$author_writer_font_family[] = 'Abril Fatface';
	$author_writer_font_family[] = 'Varela Round';
	$author_writer_font_family[] = 'Vampiro One';
	$author_writer_font_family[] = 'Shadows Into Light';
	$author_writer_font_family[] = 'Cuprum:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700';
	$author_writer_font_family[] = 'Rokkitt:wght@100;200;300;400;500;600;700;800;900';
	$author_writer_font_family[] = 'Vollkorn:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900';
	$author_writer_font_family[] = 'Francois One';
	$author_writer_font_family[] = 'Orbitron:wght@400;500;600;700;800;900';
	$author_writer_font_family[] = 'Patua One';
	$author_writer_font_family[] = 'Acme';
	$author_writer_font_family[] = 'Satisfy';
	$author_writer_font_family[] = 'Josefin Slab:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700';
	$author_writer_font_family[] = 'Quattrocento Sans:ital,wght@0,400;0,700;1,400;1,700';
	$author_writer_font_family[] = 'Architects Daughter';
	$author_writer_font_family[] = 'Russo One';
	$author_writer_font_family[] = 'Monda:wght@400;700';
	$author_writer_font_family[] = 'Righteous';
	$author_writer_font_family[] = 'Lobster Two:ital,wght@0,400;0,700;1,400;1,700';
	$author_writer_font_family[] = 'Hammersmith One';
	$author_writer_font_family[] = 'Courgette';
	$author_writer_font_family[] = 'Permanent Marke';
	$author_writer_font_family[] = 'Cherry Swash:wght@400;700';
	$author_writer_font_family[] = 'Cormorant Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700';
	$author_writer_font_family[] = 'Poiret One';
	$author_writer_font_family[] = 'BenchNine:wght@300;400;700';
	$author_writer_font_family[] = 'Economica:ital,wght@0,400;0,700;1,400;1,700';
	$author_writer_font_family[] = 'Handlee';
	$author_writer_font_family[] = 'Cardo:ital,wght@0,400;0,700;1,400';
	$author_writer_font_family[] = 'Alfa Slab One';
	$author_writer_font_family[] = 'Averia Serif Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700';
	$author_writer_font_family[] = 'Cookie';
	$author_writer_font_family[] = 'Chewy';
	$author_writer_font_family[] = 'Great Vibes';
	$author_writer_font_family[] = 'Coming Soon';
	$author_writer_font_family[] = 'Philosopher:ital,wght@0,400;0,700;1,400;1,700';
	$author_writer_font_family[] = 'Days One';
	$author_writer_font_family[] = 'Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$author_writer_font_family[] = 'Shrikhand';
	$author_writer_font_family[] = 'Tangerine:wght@400;700';
	$author_writer_font_family[] = 'IM Fell English SC';
	$author_writer_font_family[] = 'Boogaloo';
	$author_writer_font_family[] = 'Bangers';
	$author_writer_font_family[] = 'Fredoka One';
	$author_writer_font_family[] = 'Volkhov:ital,wght@0,400;0,700;1,400;1,700';
	$author_writer_font_family[] = 'Shadows Into Light Two';
	$author_writer_font_family[] = 'Marck Script';
	$author_writer_font_family[] = 'Sacramento';
	$author_writer_font_family[] = 'Unica One';
	$author_writer_font_family[] = 'Dancing Script:wght@400;500;600;700';
	$author_writer_font_family[] = 'Exo 2:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$author_writer_font_family[] = 'Archivo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$author_writer_font_family[] = 'Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$author_writer_font_family[] = 'DM Serif Display:ital@0;1';
	$author_writer_font_family[] = 'Open Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800';

	$author_writer_query_args = array(
		'family'	=> rawurlencode(implode('|',$author_writer_font_family)),
	);
	$author_writer_font_url = add_query_arg($author_writer_query_args,'//fonts.googleapis.com/css');
	return $author_writer_font_url;
	$contents = wptt_get_webfont_url( esc_url_raw( $author_writer_font_url ) );
}

/**
 * Register widget area.
 */
function author_writer_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'author-writer' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'author-writer' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'author-writer' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your sidebar on pages.', 'author-writer' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar 3', 'author-writer' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'author-writer' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'author-writer' ),
		'id'            => 'footer-1',
		'description'   => __( 'Add widgets here to appear in your footer.', 'author-writer' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'author-writer' ),
		'id'            => 'footer-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'author-writer' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 3', 'author-writer' ),
		'id'            => 'footer-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'author-writer' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 4', 'author-writer' ),
		'id'            => 'footer-4',
		'description'   => __( 'Add widgets here to appear in your footer.', 'author-writer' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'author_writer_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function author_writer_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'author-writer-fonts', author_writer_fonts_url(), array(), null );

	// Bootstrap
	wp_enqueue_style( 'bootstrap-css', get_theme_file_uri( '/assets/css/bootstrap.css' ) );

	// Theme stylesheet.
	wp_enqueue_style( 'author-writer-style', get_stylesheet_uri() );
	require get_parent_theme_file_path( '/tp-body-width-layout.php' );
	wp_add_inline_style( 'author-writer-style',$author_writer_tp_theme_css );
	wp_enqueue_style( 'author-writer-style', get_stylesheet_uri() );
	require get_parent_theme_file_path( '/tp-theme-color.php' );
	wp_add_inline_style( 'author-writer-style',$author_writer_tp_theme_css );
	wp_style_add_data('author-writer-style', 'rtl', 'replace');

	// Theme block stylesheet.
	wp_enqueue_style( 'author-writer-block-style', get_theme_file_uri( '/assets/css/blocks.css' ), array( 'author-writer-style' ), '1.0' );

	// Fontawesome
	wp_enqueue_style( 'fontawesome-css', get_theme_file_uri( '/assets/css/fontawesome-all.css' ) );

	wp_enqueue_script( 'bootstrap-js', get_theme_file_uri( '/assets/js/bootstrap.js' ), array( 'jquery' ), true );
	wp_enqueue_script( 'author-writer-custom-scripts',( get_template_directory_uri() ) . '/assets/js/author-writer-custom.js', array('jquery'), true);

	wp_enqueue_script( 'author-writer-focus-nav',( get_template_directory_uri() ) . '/assets/js/focus-nav.js', array('jquery'), true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	$author_writer_body_font_family = get_theme_mod('author_writer_body_font_family', '');

	$author_writer_heading_font_family = get_theme_mod('author_writer_heading_font_family', '');

	$author_writer_menu_font_family = get_theme_mod('author_writer_menu_font_family', '');

	$author_writer_tp_theme_css = '
		body{
		    font-family: '.esc_html($author_writer_body_font_family).';
		}
		.more-btn a{
		    font-family: '.esc_html($author_writer_body_font_family).';
		}
		h1{
		    font-family: '.esc_html($author_writer_heading_font_family).';
		}
		h2{
		    font-family: '.esc_html($author_writer_heading_font_family).';
		}
		h3{
		    font-family: '.esc_html($author_writer_heading_font_family).';
		}
		h4{
		    font-family: '.esc_html($author_writer_heading_font_family).';
		}
		h5{
		    font-family: '.esc_html($author_writer_heading_font_family).';
		}
		h6{
		    font-family: '.esc_html($author_writer_heading_font_family).';
		}
		#theme-sidebar .wp-block-search .wp-block-search__label{
		    font-family: '.esc_html($author_writer_heading_font_family).';
		}
		.main-navigation li a{
		    font-family: '.esc_html($author_writer_menu_font_family).';
		}
	';
	wp_add_inline_style('author-writer-style', $author_writer_tp_theme_css);
}
add_action( 'wp_enqueue_scripts', 'author_writer_scripts' );

define('AUTHOR_WRITER_CREDIT',__('https://www.themespride.com/products/free-author-wordpress-theme','author-writer') );
if ( ! function_exists( 'author_writer_credit' ) ) {
	function author_writer_credit(){
		echo "<a href=".esc_url(AUTHOR_WRITER_CREDIT)." target='_blank'>".esc_html__(get_theme_mod('author_writer_footer_text',__('Author Writer WordPress Theme','author-writer')))."</a>";
	}
}

/*radio button sanitization*/
function author_writer_sanitize_choices( $input, $setting ) {
    global $wp_customize;
    $control = $wp_customize->get_control( $setting->id );
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}
// Category count 
function author_writer_display_post_category_count() {
    $author_writer_category = get_the_category();
    $author_writer_category_count = ($author_writer_category) ? count($author_writer_category) : 0;
    $author_writer_category_text = ($author_writer_category_count === 1) ? 'category' : 'categories'; // Check for pluralization
    echo $author_writer_category_count . ' ' . $author_writer_category_text;
}

//post tag
function custom_tags_filter($author_writer_tag_list) {
    // Replace the comma (,) with an empty string
    $author_writer_tag_list = str_replace(', ', '', $author_writer_tag_list);

    return $author_writer_tag_list;
}
add_filter('the_tags', 'custom_tags_filter');

function custom_output_tags() {
    $author_writer_tags = get_the_tags();

    if ($author_writer_tags) {
        $author_writer_tags_output = '<div class="post_tag">Tags: ';

        $author_writer_first_tag = reset($author_writer_tags);

        foreach ($author_writer_tags as $tag) {
            $author_writer_tags_output .= '<a href="' . esc_url(get_tag_link($tag)) . '" rel="tag" class="me-2">' . esc_html($tag->name) . '</a>';
            if ($tag !== $author_writer_first_tag) {
                $author_writer_tags_output .= ' ';
            }
        }

        $author_writer_tags_output .= '</div>';

        echo $author_writer_tags_output;
    }
}
// Sanitize Sortable control.
function author_writer_sanitize_sortable( $val, $setting ) {
	if ( is_string( $val ) || is_numeric( $val ) ) {
		return array(
			esc_attr( $val ),
		);
	}
	$sanitized_value = array();
	foreach ( $val as $item ) {
		if ( isset( $setting->manager->get_control( $setting->id )->choices[ $item ] ) ) {
			$sanitized_value[] = esc_attr( $item );
		}
	}
	return $sanitized_value;
}

/* Excerpt Limit Begin */
function author_writer_excerpt_function($excerpt_count = 35) {
    $author_writer_excerpt = get_the_excerpt();

    $author_writer_text_excerpt = wp_strip_all_tags($author_writer_excerpt);

    $author_writer_excerpt_limit = esc_attr(get_theme_mod('author_writer_excerpt_count', $excerpt_count));

    $author_writer_theme_excerpt = implode(' ', array_slice(explode(' ', $author_writer_text_excerpt), 0, $author_writer_excerpt_limit));

    return $author_writer_theme_excerpt;
}

function author_writer_sanitize_dropdown_pages( $page_id, $setting ) {
  // Ensure $input is an absolute integer.
  $page_id = absint( $page_id );
  // If $page_id is an ID of a published page, return it; otherwise, return the default.
  return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'author_writer_loop_columns');
if (!function_exists('author_writer_loop_columns')) {
	function author_writer_loop_columns() {
		$columns = get_theme_mod( 'author_writer_per_columns', 3 );
		return $columns;
	}
}

//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'author_writer_per_page', 20 );
function author_writer_per_page( $author_writer_cols ) {
  	$author_writer_cols = get_theme_mod( 'author_writer_product_per_page', 9 );
	return $author_writer_cols;
}

function author_writer_sanitize_number_range( $number, $setting ) {

	// Ensure input is an absolute integer.
	$number = absint( $number );

	// Get the input attributes associated with the setting.
	$atts = $setting->manager->get_control( $setting->id )->input_attrs;

	// Get minimum number in the range.
	$min = ( isset( $atts['min'] ) ? $atts['min'] : $number );

	// Get maximum number in the range.
	$max = ( isset( $atts['max'] ) ? $atts['max'] : $number );

	// Get step.
	$step = ( isset( $atts['step'] ) ? $atts['step'] : 1 );

	// If the number is within the valid range, return it; otherwise, return the default
	return ( $min <= $number && $number <= $max && is_int( $number / $step ) ? $number : $setting->default );
}

function author_writer_sanitize_checkbox( $input ) {
	// Boolean check
	return ( ( isset( $input ) && true == $input ) ? true : false );
}

function author_writer_sanitize_number_absint( $number, $setting ) {
	// Ensure $number is an absolute integer (whole number, zero or greater).
	$number = absint( $number );

	// If the input is an absolute integer, return it; otherwise, return the default
	return ( $number ? $number : $setting->default );
}

//Admin Enqueue for Admin
function author_writer_admin_enqueue_scripts(){
	wp_enqueue_style('author-writer-admin-style', get_template_directory_uri() . '/assets/css/admin.css');
	wp_enqueue_script( 'author-writer-custom-scripts', get_template_directory_uri(). '/assets/js/custom.js', array('jquery'), true);
	wp_register_script( 'author-writer-admin-script', get_template_directory_uri() . '/assets/js/author-writer-admin.js', array( 'jquery' ), '', true );

	wp_localize_script(
		'author-writer-admin-script',
		'author_writer',
		array(
			'admin_ajax'	=>	admin_url('admin-ajax.php'),
			'wpnonce'			=>	wp_create_nonce('author_writer_dismissed_notice_nonce')
		)
	);
	wp_enqueue_script('author-writer-admin-script');

    wp_localize_script( 'author-writer-admin-script', 'author_writer_ajax_object',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
    );
}
add_action( 'admin_enqueue_scripts', 'author_writer_admin_enqueue_scripts' );

/**
 * Use front-page.php when Front page displays is set to a static page.
 */
function author_writer_front_page_template( $template ) {
	return is_home() ? '' : $template;
}
add_filter( 'frontpage_template','author_writer_front_page_template' );

add_action( 'wp_ajax_author_writer_dismissed_notice_handler', 'author_writer_ajax_notice_handler' );

function author_writer_ajax_notice_handler() {
	if (!wp_verify_nonce($_POST['wpnonce'], 'author_writer_dismissed_notice_nonce')) {
		exit;
	}
    if ( isset( $_POST['type'] ) ) {
        $type = sanitize_text_field( wp_unslash( $_POST['type'] ) );
        update_option( 'dismissed-' . $type, TRUE );
    }
}

function author_writer_activation_notice() { 

	if ( ! get_option('dismissed-get_started', FALSE ) ) { ?>

    <div class="author-writer-notice-wrapper updated notice notice-get-started-class is-dismissible" data-notice="get_started">
        <div class="author-writer-getting-started-notice clearfix">
            <div class="author-writer-theme-notice-content">
                <h2 class="author-writer-notice-h2">
                    <?php
                printf(
                /* translators: 1: welcome page link starting html tag, 2: welcome page link ending html tag. */
                    esc_html__( 'Welcome! Thank you for choosing %1$s!', 'author-writer' ), '<strong>'. wp_get_theme()->get('Name'). '</strong>' );
                ?>
                </h2>

                <p class="plugin-install-notice"><?php echo sprintf(__('Click here to get started with the theme set-up.', 'author-writer')) ?></p>

                <a class="author-writer-btn-get-started button button-primary button-hero author-writer-button-padding" href="<?php echo esc_url( admin_url( 'themes.php?page=author-writer-about' )); ?>" ><?php esc_html_e( 'Get started', 'author-writer' ) ?></a><span class="author-writer-push-down">
                <?php
                    /* translators: %1$s: Anchor link start %2$s: Anchor link end */
                    printf(
                        'or %1$sCustomize theme%2$s</a></span>',
                        '<a target="_blank" href="' . esc_url( admin_url( 'customize.php' ) ) . '">',
                        '</a>'
                    );
                ?>
            </div>
        </div>
    </div>
<?php }

}

add_action( 'admin_notices', 'author_writer_activation_notice' );

add_action('after_switch_theme', 'author_writer_setup_options');
function author_writer_setup_options () {
    update_option('dismissed-get_started', FALSE );
}

/**
 * Logo Custamization.
 */

function author_writer_logo_width(){

	$author_writer_logo_width   = get_theme_mod( 'author_writer_logo_width', 150 );

	echo "<style type='text/css' media='all'>"; ?>
		img.custom-logo{
		    width: <?php echo absint( $author_writer_logo_width ); ?>px;
		    max-width: 100%;
		}
	<?php echo "</style>";
}

add_action( 'wp_head', 'author_writer_logo_width' );

/**
 * Implement the Custom Header feature.
 */
require get_parent_theme_file_path( '/inc/custom-header.php' );

/**
 * Custom template tags for this theme.
 */
require get_parent_theme_file_path( '/inc/template-tags.php' );

/**
 * Additional features to allow styling of the templates.
 */
require get_parent_theme_file_path( '/inc/template-functions.php' );

/**
 * Customizer additions.
 */
require get_parent_theme_file_path( '/inc/customizer.php' );

/**
 * About Theme Page
 */
require get_parent_theme_file_path( '/inc/about-theme.php' );

/**
 * Load Theme Web File
 */
require get_parent_theme_file_path('/inc/wptt-webfont-loader.php' );
/**
 * Load Custom Toggle
 */
require get_parent_theme_file_path( '/inc/controls/customize-control-toggle.php' );
/**
 * load sortable file
 */
require get_parent_theme_file_path( '/inc/controls/sortable-control.php' );
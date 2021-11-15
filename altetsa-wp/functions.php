<?php
/**
 * altetsa functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package altetsa
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'altetsa_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function altetsa_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on altetsa, use a find and replace
		 * to change 'altetsa' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'altetsa', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'altetsa' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'altetsa_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'altetsa_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function altetsa_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'altetsa_content_width', 640 );
}
add_action( 'after_setup_theme', 'altetsa_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function altetsa_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'altetsa' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'altetsa' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'altetsa_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function altetsa_scripts() {
	wp_enqueue_style( 'altetsa-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'altetsa-style', 'rtl', 'replace' );

	wp_enqueue_script( 'altetsa-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'altetsa-choise', get_template_directory_uri() . '/assets/js/choise.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'altetsa-script', get_template_directory_uri() . '/assets/js/script.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'altetsa_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

add_theme_support('menus');

function wpspec_menu_desc( $item_output, $item, $depth, $args ) {
	if ($item->description) {
		$item_output = str_replace( '</a>','<span><svg width="12" height="9" viewBox="0 0 12 9" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M11.8366 3.7344L8.26556 0.163407C8.04769 -0.0544689 7.69434 -0.0544689 7.47646 0.163407C7.25854 0.381327 7.25854 0.734588 7.47646 0.952508L10.0949 3.57099L0.557968 3.57099C0.249836 3.57099 0 3.82082 0 4.12896C0 4.43704 0.249836 4.68692 0.557968 4.68692L10.0949 4.68692L7.47655 7.3054C7.25863 7.52332 7.25863 7.87658 7.47655 8.0945C7.58547 8.20338 7.72831 8.25792 7.8711 8.25792C8.0139 8.25792 8.15669 8.20338 8.26565 8.0945L11.8366 4.52351C12.0545 4.30559 12.0545 3.95232 11.8366 3.7344Z" fill="white"/>
		</svg></span> <br>' . $item->description .'</a>', $item_output );
	}
	
	return $item_output;
}
 
add_filter( 'walker_nav_menu_start_el', 'wpspec_menu_desc', 10, 4 );

// add_action('wp_footer', 'cf7_right_response', 999);

// function cf7_right_response() {

// }
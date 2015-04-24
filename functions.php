<?php
/**
 * lightdesignsystems functions and definitions
 *
 * @package lightdesignsystems
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'lightdesignsystems_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function lightdesignsystems_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on lightdesignsystems, use a find and replace
	 * to change 'lightdesignsystems' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'lightdesignsystems', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'lightdesignsystems' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'lightdesignsystems_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // lightdesignsystems_setup
add_action( 'after_setup_theme', 'lightdesignsystems_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function lightdesignsystems_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'lightdesignsystems' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'lightdesignsystems_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function lightdesignsystems_scripts() {

	wp_enqueue_style( 'lightdesignsystems-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'lightdesignsystems-style', get_template_directory_uri() . '/style.min.css' );
	wp_enqueue_script( 'lightdesignsystems-vendor', get_template_directory_uri() . '/js/scripts.min.js', array(), '20120206', true );
	wp_enqueue_script( 'lightdesignsystems-custom', get_template_directory_uri() . '/js/main.min.js', array(), '20120206', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'lightdesignsystems_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

add_action( 'init', 'lightdesignsystems_posttypes' );
function lightdesignsystems_posttypes() {
	register_post_type( 'products', array(
		'labels' => array(
			'name' => __( 'Products' ),
			'singular_name' => __( 'Product' ),
			'search_items' => __( 'Search Products' ),
			'all_items' => __( 'All Products' ),
			'edit_item' => __( 'Edit Product' ),
			'update_item' => __( 'Update Product' ),
			'add_new_item' => __( 'New Product' ),
			'menu_name' => __( 'Products' ),
		),
		'supports' => array(
			'title',
		),
		'rewrite' => array(
			'slug' => 'products',
			'with_front' => false,
		),
		'public' => true,
		'has_archive' => false,
        'show_in_nav_menus' => true,
	) );
}

add_action( 'init', 'lightdesignsystems_taxonomies' );
function lightdesignsystems_taxonomies() {
	register_taxonomy( 'product-categories', array( 'products' ), array(
		'hierarchical' => true,
		'labels' => array(
			'name' => _x( 'Product Categories', 'taxonomy general name' ),
			'singular_name' => _x( 'Product Category', 'taxonomy singular name' ),
			'search_items' => __( 'Search Product Categories' ),
			'all_items' => __( 'All Product Categories' ),
			'edit_item' => __( 'Edit Product Category' ),
			'update_item' => __( 'Update Product Category' ),
			'add_new_item' => __( 'New Product Category' ),
			'menu_name' => __( 'Product Categories' ),
		),
		'rewrite' => array(
			'slug' => 'product-categories',
			'with_front' => false,
			'hierarchical' => true,
		),
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
	));
}

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'General Settings',
		'menu_title'	=> 'General Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}
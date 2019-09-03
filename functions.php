<?php
/**
 * wirix functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wirix
 */

if ( ! function_exists( 'wirix_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function wirix_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on wirix, use a find and replace
		 * to change 'wirix' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'wirix', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'main-menu' => esc_html__( 'main-menu', 'wirix' ),
			  'footer-menu' => esc_html__( 'footer-menu', 'wirix' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'wirix_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );


	}
endif;
add_action( 'after_setup_theme', 'wirix_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wirix_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'wirix_content_width', 640 );
}
add_action( 'after_setup_theme', 'wirix_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wirix_widgets_init() {
        register_sidebar( array(
        'id'            =>'footer_locations',
		'name'          => esc_html__( 'Footer Locations', 'wirix' ),
		'description'   => esc_html__( 'footer  locations', 'wirix' ),
		'before_widget' => '<div class="col-md-3 footer-border-right">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
    register_sidebar( array(
        'id'            =>'footer_contact',
		'name'          => esc_html__( 'Footer Contact', 'wirix' ),
		'description'   => esc_html__( 'Footer Contact', 'wirix' ),
		'before_widget' => '<div class="col-md-3 footer-border-right">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'wirix_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function wirix_scripts() {
	wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
	wp_enqueue_style( 'mamies-wafers-carousel',  get_template_directory_uri() .'/assets/fonts/fonts.css', array(), null, 'all' );
	wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/assets/css/custom.css', array(), rand(111,9999), 'all' );
	wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0.0', true);
	wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js' );
	wp_enqueue_script( 'popprt-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js' );
	wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' );
	wp_enqueue_script( 'fontawesome-js', 'https://kit.fontawesome.com/e1fcb2d2cf.js' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wirix_scripts' );

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

//call bootstrap walker menu
require_once('class-wp-bootstrap-navwalker.php');

//this for theme option
add_filter( 'ot_show_pages', '__return_false' );
add_filter( 'ot_show_new_layout', '__return_false' );
add_filter( 'ot_theme_mode', '__return_true' );
include_once( 'option-tree/ot-loader.php' );
include_once( 'includes/theme-options.php' );


// Register Custom Post Type

function custom_post_type() {

	$labels = array(
		'name'                  => _x( 'feature', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'features', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'feature', 'text_domain' ),
		'name_admin_bar'        => __( 'feature', 'text_domain' ),
		'archives'              => __( 'feature Archives', 'text_domain' ),
		'attributes'            => __( 'feature Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent feature:', 'text_domain' ),
		'all_items'             => __( 'All feature', 'text_domain' ),
		'add_new_item'          => __( 'Add New feature', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New feature', 'text_domain' ),
		'edit_item'             => __( 'Edit feature', 'text_domain' ),
		'update_item'           => __( 'Update feature', 'text_domain' ),
		'view_item'             => __( 'View feature', 'text_domain' ),
		'view_items'            => __( 'View features', 'text_domain' ),
		'search_items'          => __( 'Search feature', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'feature list', 'text_domain' ),
		'items_list_navigation' => __( 'feature list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter feature list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'features', 'text_domain' ),
		'description'           => __( 'feature of wirix', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor','thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'feature', $args );

}
add_action( 'init', 'custom_post_type', 0 );

		add_theme_support( 'post-thumbnails', array( 'post', 'feature', 'gallery-images') );
	    add_image_size( 'feature-image', 80, 80, true );
	    add_image_size( 'full-bg');
	    
	    
	    

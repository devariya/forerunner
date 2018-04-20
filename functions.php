<?php
/**
 * Forerunner functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Forerunner
 */

if ( ! function_exists( 'forerunner_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function forerunner_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Forerunner, use a find and replace
		 * to change 'forerunner' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'forerunner', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'forerunner' ),
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
		add_theme_support( 'custom-background', apply_filters( 'forerunner_custom_background_args', array(
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
add_action( 'after_setup_theme', 'forerunner_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function forerunner_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'forerunner_content_width', 1170 );
}
add_action( 'after_setup_theme', 'forerunner_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function forerunner_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'forerunner' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'forerunner' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'forerunner_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function forerunner_scripts() {
	wp_enqueue_style( 'forerunner-style', get_stylesheet_uri() );


	wp_enqueue_style( 'sp-bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css',false,'1.0','all');
	wp_enqueue_style( 'sp-main-style-css', get_template_directory_uri() . '/assets/css/main.css',false,'1.0','all');
	wp_enqueue_style( 'sp-responsive-style-css', get_template_directory_uri() . '/assets/css/responsive.css',false,'1.0','all');

	//wp_enqueue_script( 'sp-jquery-migrate', get_template_directory_uri() . '/assets/vendor/jquery-migrate.min.js',  array('jquery'), false, true);
	wp_enqueue_script( 'sp-main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), false, true);
	//wp_enqueue_script( 'forerunner-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	//wp_enqueue_script( 'forerunner-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'forerunner_scripts' );


function add_script_to_wp_page()
{
    // $pagenow, is a global variable referring to the filename of the current page, 
    // such as ‘admin.php’, ‘post-new.php’
 
	/*global $pagenow;
 
    if ($pagenow != array('post.php', 'post-new.php')) {
        return;
    }
     */
    // loading css
    //wp_register_style( 'some-css', get_template_directory_uri() . '/css/some.css', false, '1.0.0' );
   // wp_enqueue_style( 'some-css' );
     
    // loading js
    wp_enqueue_script( 'mt-page-js', get_template_directory_uri().'/assets/admin/mt-page.js', array('jquery'), false, false );
    
}
 
add_action( 'admin_enqueue_scripts', 'add_script_to_wp_page' );


/*
add_action( 'admin_print_scripts-post-new.php', 'portfolio_admin_script', 11 );
add_action( 'admin_print_scripts-post.php', 'portfolio_admin_script', 11 );

function portfolio_admin_script() {
    global $post_type;
    if( 'page' == $post_type )
    wp_enqueue_script( 'mt-page-js', get_template_directory_uri().'/assets/admin/mt-page.js', array('jquery'), false, false );
}
*/

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
 * Theme FrameWork
 */
	require get_template_directory() . '/inc/mt-framework/cs-framework.php';

/**
 * Theme Walker Nav
 */
require get_template_directory() . '/inc/theme-walker-nav.php';

/**
 * Theme Post Type
 */
require get_template_directory() . '/inc/mt-post-type.php';


/**
 * Rename Posts To News
 */
function revcon_change_post_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'News';
    $submenu['edit.php'][5][0] = 'News';
    $submenu['edit.php'][10][0] = 'Add News';
    $submenu['edit.php'][16][0] = 'News Tags';
}
function revcon_change_post_object() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'News';
    $labels->singular_name = 'News';
    $labels->add_new = 'Add News';
    $labels->add_new_item = 'Add News';
    $labels->edit_item = 'Edit News';
    $labels->new_item = 'News';
    $labels->view_item = 'View News';
    $labels->search_items = 'Search News';
    $labels->not_found = 'No News found';
    $labels->not_found_in_trash = 'No News found in Trash';
    $labels->all_items = 'All News';
    $labels->menu_name = 'News';
    $labels->name_admin_bar = 'News';
}
 
add_action( 'admin_menu', 'revcon_change_post_label' );
add_action( 'init', 'revcon_change_post_object' );

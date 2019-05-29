<?php
/**
 * tdows functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tdows
 */


//Theme additional file
require_once('inc/tgm.php');
require_once('inc/tdows-metabox.php');
require_once('inc/tdows-theme-options.php');
require_once('inc/tdows-taxonomy.php');



if (!function_exists('tdows_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function tdows_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on tdows, use a find and replace
         * to change 'tdows' to the name of your theme in all the template files.
         */
        load_theme_textdomain('tdows', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'menu-1' => esc_html__('Primary', 'tdows'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support('custom-logo', array(
            'height' => 100,
            'width' => 600,
            'flex-width' => true,
            'flex-height' => true,
        ));
    }
endif;
add_action('after_setup_theme', 'tdows_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tdows_content_width()
{
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters('tdows_content_width', 640);
}

add_action('after_setup_theme', 'tdows_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tdows_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'tdows'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'tdows'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<span class="widget-title">',
        'after_title' => '</span>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Single Page Sidebar', 'tdows'),
        'id' => 'single-sidebar',
        'description' => esc_html__('Add widgets here.', 'tdows'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<span class="widget-title">',
        'after_title' => '</span>',
    ));


    register_sidebar(array(
        'name' => esc_html__('Footer 1 Widgets', 'tdows'),
        'id' => 'footer-1',
        'description' => esc_html__('Add widgets here for footer 1', 'tdows'),
        'before_widget' => '<div id="%1$s" class="col-md-3 col-sm-6 col-12 single-footer widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<span class="widget-title">',
        'after_title' => '</span>',
    ));
    register_sidebar(array(
        'name' => esc_html__('Footer 2 Widgets', 'tdows'),
        'id' => 'footer-2',
        'description' => esc_html__('Add widgets here for footer 2', 'tdows'),
        'before_widget' => '<div id="%1$s" class="col-md-3 col-sm-6 col-12 single-footer widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<span class="widget-title">',
        'after_title' => '</span>',
    ));
    register_sidebar(array(
        'name' => esc_html__('Footer 3 Widgets', 'tdows'),
        'id' => 'footer-3',
        'description' => esc_html__('Add widgets here for footer 3', 'tdows'),
        'before_widget' => '<div id="%1$s" class="col-md-3 col-sm-6 col-12 single-footer widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<span class="widget-title">',
        'after_title' => '</span>',
    ));
    register_sidebar(array(
        'name' => esc_html__('Footer 4 Widgets', 'tdows'),
        'id' => 'footer-4',
        'description' => esc_html__('Add widgets here for footer 4', 'tdows'),
        'before_widget' => '<div id="%1$s" class="col-md-3 col-sm-6 col-12 single-footer widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<span class="widget-title">',
        'after_title' => '</span>',
    ));
}

add_action('widgets_init', 'tdows_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function tdows_scripts()
{

    wp_enqueue_style("google-fonts-raleway", "//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i");
    wp_enqueue_style("font-awesome", get_theme_file_uri("/assets/css/font-awesome.min.css"), null, "4.7.0");
    wp_enqueue_style("bootstrap", get_theme_file_uri("/assets/css/bootstrap.min.css"), null, "v4.0.0");
    wp_enqueue_style("default-tdows", get_theme_file_uri("/assets/css/default.css"), null, "1.0.0");
    wp_enqueue_style("slicknav", get_theme_file_uri("/assets/css/slicknav.min.css"), null, "4.7.0");
    wp_enqueue_style('tdows-style', get_stylesheet_uri());
	wp_enqueue_style("tdows-responsive", get_theme_file_uri("/assets/css/responsive.css"), null, "1.0.0");



	wp_enqueue_script("popper-js", get_theme_file_uri("/assets/js/popper.min.js"), array( "jquery" ), false, true);
    wp_enqueue_script("bootstrap-js", get_theme_file_uri("/assets/js/bootstrap.min.js"), array( "jquery" ), "v4.0.0", true);
    wp_enqueue_script("slicknav-js", get_theme_file_uri("/assets/js/jquery.slicknav.min.js"), array( "jquery" ), false, true);
    wp_enqueue_script("active-js", get_theme_file_uri("/assets/js/active.js"), array( "jquery" ), "1.0", true);


    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'tdows_scripts');



// Filter hooks

function wpb_move_comment_field_to_bottom( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
}
 
add_filter( 'comment_form_fields', 'wpb_move_comment_field_to_bottom' );

add_filter( 'wp_nav_menu_objects', 'restructure_menu_links', 10, 2 );

function restructure_menu_links( $items, $args ) {

//    $new_links = array();

    $label = '<i class="fa fa-home"></i>';    // add your custom menu item content here
    $link = home_url();
    // Create a nav_menu_item object
    $item = array(
        'title'            => $label,
        'menu_item_parent' => 0,
        'ID'               => 'default',
        'db_id'            => 'asd',
        'url'              => $link,
        'classes'          => array( 'menu-item' )
    );

    $new_links[] = (object) $item; // Add the new menu item to our array

    // insert item
    $location = 0;   // insert at 3rd place
    array_splice( $items, $location, 0, $new_links );

    return $items;
}





require_once get_template_directory() . '/inc/template-tags.php';
require_once get_template_directory() . '/inc/template-functions.php';
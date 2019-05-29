<?php
/**
 * @package tdows Helper
 * @version 1.0
 */
/*
Plugin Name: tdows-toolkit
Plugin URI: http://perthizweb.com.au/plugin
Description: This is a helper plugin for all tdows
Version: 1.0
Author Name: Fajle Rabbi
Author URI: http:/perthbizweb.com.au/
Text Domain: tdows
*/


function tdows_toolkit_scripts(){
	wp_enqueue_style( 'owl-carousel', plugins_url( '/assets/css/owl.carousel.min.css', __FILE__ ), array(), 'v2.2.1', 'all' );
	wp_enqueue_style( 'animate-css', plugins_url( '/assets/css/animate.css', __FILE__ ), array(), 'v2.2.1', 'all' );
	wp_enqueue_style( 'tdows-toolkit', plugins_url( '/assets/css/tdows-toolkit.css', __FILE__ ), array(), '1.0', 'all' );

	wp_enqueue_script( 'owl-carousel', plugins_url( '/assets/js/owl.carousel.min.js', __FILE__ ), array('jquery'), 'v2.2.1', true );


	wp_enqueue_script( 'main-script', plugins_url( '/assets/js/main.js', __FILE__ ), array('jquery'), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'tdows_toolkit_scripts' );





/*
 * Register Testimonial Custom Post
 */
add_action( 'init', 'codex_book_init' );
/**
 * Register a book post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function codex_book_init() {
    $labels = array(
        'name'               => __( 'Testimonials', 'tdows' ),
        'singular_name'      => __( 'Testimonial', 'tdows' ),
        'menu_name'          => __( 'Testimonials','tdows' ),
        'name_admin_bar'     => __( 'Testimonial', 'tdows' ),
        'add_new'            => __( 'Add New','tdows' ),
        'add_new_item'       => __( 'Add New', 'tdows' ),
        'new_item'           => __( 'New Testimonial', 'tdows' ),
        'edit_item'          => __( 'Edit Testimonial', 'tdows' ),
        'view_item'          => __( 'View Testimonial', 'tdows' ),
        'all_items'          => __( 'All Testimonials', 'tdows' ),
        'search_items'       => __( 'Search Testimonials', 'tdows' ),
        'parent_item_colon'  => __( 'Parent Testimonials:', 'tdows' ),
        'not_found'          => __( 'No books found.', 'tdows' ),
        'not_found_in_trash' => __( 'No books found in Trash.', 'tdows' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( '', 'tdows' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'testimonial', 'with_front' => true ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'menu_icon'          => 'dashicons-testimonial',
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' )
    );

    register_post_type( 'testimonial', $args );
}

include_once('inc/tdows-shortcodes.php');
include_once('inc/tdows-kc-addons.php');


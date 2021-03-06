<?php
	require get_template_directory() . '/inc/cs-framework/cs-framework.php';
	
	if (!defined('ABSPATH')) {
		die;
	} // Cannot access pages directly.
	
	
	
	
	function tdows_taxonomy_opt($options)
	{
		
		$options = array(); // remove old options

		// -----------------------------------------
		// Taxonomy Options                        -
		// -----------------------------------------
		$options[]   = array(
			'id'       => 'tdows_taxonomy_options',
			'taxonomy' => 'category', // category, post_tag or your custom taxonomy name
			'fields'   => array(

				array(
					'id'    => 'cat_icon',
					'type'  => 'image',
					'title' => __('Category Icon', 'tdows'),
					'add_title' => __('Add Category Icon', 'tdows'),
					'default' => get_template_directory_uri() . '/assets/images/icon.png'
				),
				array(
					'id'    => 'cat_bg_image',
					'type'  => 'image',
					'title' => __('Category Background Image', 'tdows'),
					'add_title' => __('Add Category Background Image', 'tdows'),
					'default' => get_template_directory_uri() . '/assets/images/blog-6.jpg'
				),
				array(
					'id'    => 'cat_hover_bg_color',
					'type'  => 'color_picker',
					'title' => __('Category Hover BG Color', 'tdows'),
					'default' => 'rgba(0,0,0,.6)'
				),

			),
		);

		return $options;
		
	}
	
	add_filter('cs_taxonomy_options', 'tdows_taxonomy_opt');

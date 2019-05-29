<?php

add_action('init', 'tdows_kc_addons', 99);

function tdows_kc_addons(){

    if (function_exists('kc_add_map')) {


        // Check List Addon
        kc_add_map(
            array(

                'checklist_shortcode' => array(

                    'name' => __('Check List', 'tdows'),
                    'description' => __('', 'tdows'),
                    'icon' => 'kc-icon-progress',
                    'category' => 'TDows',
                    'css_box' => true,
                    'params' => array(
                        array(
                            'type'			=> 'group',
                            'label'			=> __('Check List Options', 'tdows'),
                            'name'			=> 'check_list',
                            'description'	=> __( 'Repeat this fields with each item created, Each item corresponding check list element.', 'tdows' ),
                            'options'		=> array('add_text' => __('Add New', 'tdows')),
                            'params' => array(

                                array(
                                    'type' => 'text',
                                    'label' => __( 'Title', 'tdows' ),
                                    'name' => 'title',
                                    'description' => __( 'Slider Title.', 'tdows' ),
                                    'admin_label' => true,
                                    'value' => __('Write Something Here.', 'tdows')
                                ),
                            ),
                        ),
                    )

                )

            )
        ); // End add map


        // Testimonial Slider Addon
        kc_add_map(
            array(

                'testimonail_slider_shortcode' => array(

                    'name' => __('Testimonial Slider', 'tdows'),
                    'description' => __('', 'tdows'),
                    'icon' => 'kc-icon-progress',
                    'category' => 'TDows',
                    'css_box' => true,
                    'params' => array(
                        array(
                            'type' => 'text',
                            'label' => __( 'Posts Per Page', 'tdows' ),
                            'name' => 'posts_per_page',
                            'description' => __( 'How many sliders do you want to add? (default -1 means unlimited) you must use number.', 'tdows' ),
                            'admin_label' => true,
                            'value' => -1,
                        ),
                        array(
                            'type' => 'select',
                            'label' => __( 'Order', 'tdows' ),
                            'name' => 'order',
                            'description' => __( 'choose slider order.', 'tdows' ),
                            'admin_label' => true,
                            'options' =>array(
                                'ASC' => __('Ascending Order', 'tdows'),
                                'DESC' => __('Descending Order', 'tdows'),
                            ),
                            'value' => 'DESC',

                        ),
                    )

                )

            )
        ); // End add map



        // Service Box Addon
        kc_add_map(
            array(

                'service_box_shortcode' => array(

                    'name' => __('Service Box', 'tdows'),
                    'description' => __('', 'tdows'),
                    'icon' => 'kc-icon-progress',
                    'category' => 'TDows',
                    'css_box' => true,
                    'params' => array(
                        array(
                            'type' => 'attach_image',
                            'label' => __( 'Service Box Image', 'tdows' ),
                            'name' => 'image',
                            'description' => __( 'Choose Service Box Image From Media.', 'tdows' ),
                            'admin_label' => true,
                        ),
                        array(
                            'type' => 'text',
                            'label' => __( 'Service Box Title', 'tdows' ),
                            'name' => 'title',
                            'description' => __( 'Type Service box title here.', 'tdows' ),
                            'admin_label' => true,
                        ),
                        array(
                            'type' => 'textarea',
                            'label' => __( 'Service Box Description', 'tdows' ),
                            'name' => 'description',
                            'description' => __( 'Type Service box description here.', 'tdows' ),
                            'admin_label' => true,
                        ),
                    )

                )

            )
        ); // End add map


        // Primary Button
        kc_add_map(
            array(

                'primary_button' => array(

                    'name' => __('Primary Button', 'tdows'),
                    'description' => __('', 'tdows'),
                    'icon' => 'kc-icon-progress',
                    'category' => 'TDows',
                    'css_box' => true,
                    'params' => array(
                        array(
                            'type' => 'select',
                            'label' => __( 'Button Style', 'tdows' ),
                            'name' => 'button_type',
                            'description' => __( 'Choose Your Button Style', 'tdows' ),
                            'admin_label' => true,
                            'options' => array(
                                'trans_btn' => __('Transparent Button', 'tdows'),
                                'fill_btn' => __('Fill Button', 'tdows'),
                            ),
                            'value' => 'trans_btn'
                        ),
                        array(
                            'type' => 'link',
                            'label' => __( 'Primary Button', 'tdows' ),
                            'name' => 'button_link',
                            'description' => __( 'Primary Button', 'tdows' ),
                            'admin_label' => true,
                        ),
                    )

                )

            )
        ); // End add map


        // Special Heading Addon
        kc_add_map(
            array(

                'special_heading_shortcode' => array(

                    'name' => __('Special Heading', 'tdows'),
                    'description' => __('', 'tdows'),
                    'icon' => 'kc-icon-progress',
                    'category' => 'TDows',
                    'css_box' => true,
                    'params' => array(
                        array(
                            'type' => 'select',
                            'label' => __( 'Special Heading Type', 'tdows' ),
                            'name' => 'heading_type',
                            'description' => __( 'Special Heading Type', 'tdows' ),
                            'admin_label' => true,
                            'options' => array(
                                'primary_heading' => __('Primary Heading', 'tdows'),
                                'about_heading' => __('About Heading', 'tdows'),
                            ),

                        ),

                        array(
                            'type' => 'text',
                            'label' => __( 'Special Heading Title', 'tdows' ),
                            'name' => 'title',
                            'description' => __( 'Type your heading.', 'tdows' ),
                            'admin_label' => true,
                        ),
                        array(
                            'type' => 'text',
                            'label' => __( 'Special Heading Name (For About Heading)', 'tdows' ),
                            'name' => 'about_name',
                            'description' => __( 'Type the name.', 'tdows' ),
                            'admin_label' => true,
                            'relation' => array(
                                'parent'    => 'heading_type',
                                'show_when' => 'about_heading'
                                // 'hide_when' => 'yes'
                                // hide_when has the opposite effect
                                // NOTICE: Only use one show_when or hide_when in the same time
                                // 'show_when' => 'yes,ok,right'
                                // 'show_when' => array( 'yes', 'ok', 'right' )
                            )
                        ),

                        array(
                            'type' => 'select',
                            'label' => __( 'Special Heading Position', 'tdows' ),
                            'name' => 'title_position',
                            'description' => __( 'Choose your position.', 'tdows' ),
                            'admin_label' => true,
                            'options' => array(
                                'left' => __('Left', 'tdows'),
                                'center' => __('Center', 'tdows'),
                                'right' => __('Right', 'tdows'),
                            )
                        ),

                        array(
                            'type' => 'select',
                            'label' => __( 'Text Color', 'tdows' ),
                            'name' => 'text_color',
                            'description' => __( 'Special Heading Text Color.', 'tdows' ),
                            'admin_label' => true,
                            'options' => array(
                                'black' => __('Black', 'tdows'),
                                'white' => __('White', 'tdows'),
                            ),
                            'value' => 'black'
                        ),
                    )

                )

            )
        ); // End add map


        // Testimonial Box Addon
        kc_add_map(
            array(

                'testimonial_box_shortcode' => array(

                    'name' => __('Testimonial Box', 'tdows'),
                    'description' => __('', 'tdows'),
                    'icon' => 'kc-icon-progress',
                    'category' => 'TDows',
                    'css_box' => true,
                    'params' => array(
                        array(
                            'type' => 'text',
                            'label' => __( 'Posts Per Page', 'tdows' ),
                            'name' => 'posts_per_page',
                            'description' => __( 'How many testimonial box want you show here. ', 'tdows' ),
                            'admin_label' => true,
                            'value' => -1,
                        ),
                        array(
                            'type' => 'select',
                            'label' => __( 'Order', 'tdows' ),
                            'name' => 'order',
                            'description' => __( 'choose slider order.', 'tdows' ),
                            'admin_label' => true,
                            'options' =>array(
                                'ASC' => __('Ascending Order', 'tdows'),
                                'DESC' => __('Descending Order', 'tdows'),
                            ),
                            'value' => 'DESC',

                        ),

                    )

                )

            )
        ); // End add map



        // Recent Post Box Addon
        kc_add_map(
            array(

                'recent_post_box_shortcode' => array(

                    'name' => __('Recent Post Box', 'tdows'),
                    'description' => __('', 'tdows'),
                    'icon' => 'kc-icon-progress',
                    'category' => 'TDows',
                    'css_box' => true,
                    'params' => array(
                        array(
                            'type' => 'text',
                            'label' => __( 'Posts Per Page', 'tdows' ),
                            'name' => 'posts_per_page',
                            'description' => __( 'How many post box want you show here. ', 'tdows' ),
                            'admin_label' => true,
                            'value' => -1,
                        ),
                        array(
                            'type' => 'select',
                            'label' => __( 'Order', 'tdows' ),
                            'name' => 'order',
                            'description' => __( 'choose recent post order.', 'tdows' ),
                            'admin_label' => true,
                            'options' =>array(
                                'ASC' => __('Ascending Order', 'tdows'),
                                'DESC' => __('Descending Order', 'tdows'),
                            ),
                            'value' => 'DESC',

                        ),

                    )

                )

            )
        ); // End add map


    }
}
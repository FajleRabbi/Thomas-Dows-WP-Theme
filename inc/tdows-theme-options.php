<?php

require get_template_directory() . '/inc/cs-framework/cs-framework.php';
define('CS_ACTIVE_SHORTCODE', false); // default true
define('CS_ACTIVE_CUSTOMIZE', false); // default true

function tdows_theme_options($options)
{

    $options = array(); // remove old options



    // Header options tdows theme
    $options[] = array(
        'name' => 'header_options',
        'title' => esc_html__('Header settings', 'tdows'),
        'icon' => 'fa fa-heart',
        'fields' => array(

            array(
                'type'    => 'heading',
                'content' => __('Header Bottom Options', 'tdows')
            ),

            // logo text option
            array(
                'id' => 'logo_text',
                'type' => 'text',
                'title' => esc_html__('Custom Logo Text', 'tdows'),
            ),


            //Header notice options
            array(
                'type'    => 'heading',
                'content' => __('Header Notice Options', 'tdows')
            ),
            // Header Notice Options
            array(
                'id' => 'header_notice',
                'type' => 'textarea',
                'title' => esc_html__('Header Notice', 'tdows'),
            ),
            // Header Notice Highlight Worlds
            array(
                'id' => 'header_notice_highlight',
                'type' => 'text',
                'title' => esc_html__('Header Notice Highlight Words.', 'tdows'),
            ),


            // Header quick contact
            array(
                'type'    => 'heading',
                'content' => __('Header Quick Contact', 'tdows')
            ),
            array(
                'id' => 'header_quick_number',
                'type' => 'text',
                'title' => esc_html__('Header Quick Number', 'tdows'),
            ),



        )

    );



    // Footer options tdows theme
    $options[] = array(
        'name' => 'footer_options',
        'title' => esc_html__('Footer settings', 'tdows'),
        'icon' => 'fa fa-heart',
        'fields' => array(
            array(
                'type' => 'heading',
                'content' => 'Footer Bottom | Copyright Area Options',
            ),
            array(
                'id' => 'copyright_switcher',
                'type' => 'switcher',
                'title' => esc_html__('Copyright section enable?', 'tdows'),
                'default' => true,
            ),
            array(
                'id' => 'copyright_text',
                'type' => 'text',
                'title' => esc_html__('Copyright Text', 'tdows'),
                
            ),
        )
    );


    return $options;

}

add_filter('cs_framework_options', 'tdows_theme_options');
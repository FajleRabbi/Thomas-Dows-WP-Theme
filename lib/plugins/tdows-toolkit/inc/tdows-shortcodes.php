<?php


/*******************************
 *Custom Icon With Text Section*
 ********************************/


function tdows_checklist($atts)
{
    extract(shortcode_atts(array(
        'title' => 'write something here...'


    ), $atts, 'checklist_shortcode'));

    ob_start(); ?>


    <?php
    $checkListObjects = $atts['check_list'];
    ?>
    <ul class="check-list">
        <?php
            foreach($checkListObjects as $checkListObject){
                $icon = $checkListObject->icon;
                $title = $checkListObject->title;
                ?>
                <li class="check_item"><?php if(!empty($title)) { echo esc_html($title); } ?></li>
                <?php
            }
        ?>
    </ul>

    <?php
    $checkListMarkup = ob_get_clean();

    return $checkListMarkup;
}

add_shortcode('checklist_shortcode', 'tdows_checklist');








/*******************************
 ***Testimonial Slider Section***
 ********************************/


function tdows_testimonial_slider($atts)
{
    extract(shortcode_atts(array(
        'posts_per_page' => -1,
        'order' => 'DESC',


    ), $atts, 'testimonail_slider_shortcode'));

    ob_start(); ?>



    <?php
        $testimonailQuery = new WP_Query(array(
            'post_type' => 'testimonial',
            'posts_per_page' => $posts_per_page,
            'order' => $order,

        ))
    ?>
    <div class="testimonial-slider-wrap owl-carousel">
    <?php while($testimonailQuery->have_posts()) :  $testimonailQuery->the_post(); ?>
        <div class="single-testimonail-slider">
            <div class="testimonial-avatar">
                <?php the_post_thumbnail('thumbnail'); ?>
            </div>
            <p><?php echo get_the_excerpt(); ?> <a href="<?php the_permalink(); ?>"><?php _e('Read More', 'tdows'); ?></a></p>
        </div>
    <?php endwhile; wp_reset_query(); ?>
    </div>


    <?php
    $testiMonialMarkup = ob_get_clean();

    return $testiMonialMarkup;
}

add_shortcode('testimonail_slider_shortcode', 'tdows_testimonial_slider');





/*******************************
 ******Service Box Section******
 ********************************/


function tdows_service_box($atts)
{
    extract(shortcode_atts(array(
        'image' => '',
        'title' => '',
        'description' => '',
        'active' => '',


    ), $atts, 'service_box_shortcode'));

    ob_start(); ?>

    <div class="service-box-wrap">
        <div class="single-service-box">
            <?php
            if(!empty($image)) {
                $serviceImage = wp_get_attachment_image_src($image, 'full');

                echo '<img src="'.$serviceImage[0].'" alt="'.$title.'"/>';
                if(!empty($title)){
                    echo '<h2>'.esc_html($title).'</h2>';
                }
                if(!empty($description)){
                    echo wp_kses_post(wpautop($description));
                }
            }
            ?>
        </div>
    </div>


    <?php
    $serviceBoxMarkup = ob_get_clean();

    return $serviceBoxMarkup;
}

add_shortcode('service_box_shortcode', 'tdows_service_box');


/*******************************
 ***Tdows Theme Primary Button**
 ********************************/


function tdows_primary_button($atts)
{
    extract(shortcode_atts(array(
        'button_type' => '',
        'button_link' => '',


    ), $atts, 'service_box_shortcode'));

    ob_start(); ?>

    <?php

    if($button_link){
        $url = explode('|', $button_link);
        ?>
        <a class="special-button <?php if($button_type == 'trans_btn') {echo esc_attr('tdwos-btn'); } else {echo esc_attr('fill-btn'); } ?> " <?php if(!empty($url[0])) : ?>href="<?php echo esc_url($url[0]); ?>"<?php endif; ?> <?php if(!empty($url[2])) : ?>target="<?php echo esc_attr($url[2]); ?>"<?php endif; ?>><?php echo esc_html($url[1]); ?></a>
        <?php
    }

    ?>



    <?php
    $buttonMarkup = ob_get_clean();

    return $buttonMarkup;
}

add_shortcode('primary_button', 'tdows_primary_button');

/*******************************
 ***Tdows Special Heading Title**
 ********************************/


function tdows_special_heading($atts)
{
    extract(shortcode_atts(array(
        'heading_type' => '',
        'title_position' => '',
        'title' => '',
        'about_name' => '',
        'text_color' => '',


    ), $atts, 'special_heading_shortcode'));

    ob_start(); ?>

    <?php if($heading_type == 'primary_heading') : ?>
    <div class="special-heading-wrap <?php if($text_color == 'black') { echo esc_attr('heading-black'); }elseif($text_color == 'white') { echo esc_attr('heading-white'); } ?> <?php if($title_position == 'center') { echo esc_attr('center-heading'); }elseif($title_position == 'right') { echo esc_attr('right-heading'); } ?>">
        <h2><?php echo esc_html($title); ?></h2>
    </div>
    <?php endif; ?>

    <?php if($heading_type == 'about_heading') : ?>
    <div class="special-heading-wrap about-heading <?php if($text_color == 'black') { echo esc_attr('heading-black'); }elseif($text_color == 'white') { echo esc_attr('heading-white'); } ?> <?php if($title_position == 'center') { echo esc_attr('center-heading'); }elseif($title_position == 'right') { echo esc_attr('right-heading'); } ?>">
        <h2><?php echo esc_html($title); ?><strong class="about-name"><?php echo $about_name; ?></strong></h2>
    </div>
    <?php endif; ?>




    <?php
    $buttonMarkup = ob_get_clean();

    return $buttonMarkup;
}

add_shortcode('special_heading_shortcode', 'tdows_special_heading');









/*******************************
 *****Tdows Testimonial Box*****
 ********************************/


function tdows_testimonial_box($atts)
{
    extract(shortcode_atts(array(
        'order' => '',
        'posts_per_page' => '',


    ), $atts, 'testimonial_box_shortcode'));

    ob_start(); ?>

    <?php
        $testimonialBoxQuery = new WP_Query(array(
            'post_type' => 'testimonial',
            'posts_per_page' => $posts_per_page,
            'order' => $order
        ))
    ?>
    <div class="testimonial-box-wrap">

        <?php while($testimonialBoxQuery->have_posts()) : $testimonialBoxQuery->the_post(); ?>
        <div class="single-testimonial-box">

            <div class="testimonial-box-content">
                <img class="testimonial-box-avatar" src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="<?php the_title(); ?>">
                <span class="testimonial-box-name"><?php the_title(); ?></span>
                <p><?php echo get_the_excerpt(); ?> <a href="<?php the_permalink(); ?>"><?php _e('Read More', 'tdows'); ?></a></p>
            </div>
        </div>
        <?php endwhile; wp_reset_query(); ?>


    </div>



    <?php
    $testimonialBoxMarkup = ob_get_clean();

    return $testimonialBoxMarkup;
}

add_shortcode('testimonial_box_shortcode', 'tdows_testimonial_box');







/*******************************
 *****Tdows Recent Post Box*****
 ********************************/


function tdows_recent_post_box($atts)
{
    extract(shortcode_atts(array(
        'order' => '',
        'posts_per_page' => '',


    ), $atts, 'recent_post_box_shortcode'));

    ob_start(); ?>

    <?php
    $recentPost = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => $posts_per_page,
        'order' => $order
    ))
    ?>
    <div class="recent-post-box-wrap">

        <?php while($recentPost->have_posts()) : $recentPost->the_post(); ?>
            <div class="single-recent-post-box">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('full'); ?>
                    <div class="recent-post-content">
                        <div class="recent-post-title"><?php the_title(); ?></div>
                        <div class="recent-post-link">View Post <i class="fa fa-caret-right"></i></div>
                    </div>
                </a>
            </div>
        <?php endwhile; wp_reset_query(); ?>


    </div>



    <?php
    $recentPostMarkup = ob_get_clean();

    return $recentPostMarkup;
}

add_shortcode('recent_post_box_shortcode', 'tdows_recent_post_box');
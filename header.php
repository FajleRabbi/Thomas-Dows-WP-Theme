<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tdows
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
<!--    <div class="preloader-wrapper">-->
<!--        <div class="spinner">-->
<!--            <div class="double-bounce1"></div>-->
<!--            <div class="double-bounce2"></div>-->
<!--        </div>-->
<!--    </div>-->

    <header id="masthead" class="site-header">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-12 header-top-notice">
                        <?php
                            $header_notice = cs_get_option('header_notice');
                            $header_notice_highlights = cs_get_option('header_notice_highlight');
                        ?>
                        <p><?php echo wp_kses_post($header_notice); ?> <span class="special-world"><?php echo wp_kses_post($header_notice_highlights); ?></span></p>
                    </div>
                    <?php
                        $header_quick_contact = cs_get_option('header_quick_number');
                        if(!empty($header_quick_contact)) :
                    ?>
                    <div class="col-md-6 col-12 header-top-contact">
                        <ul>
                            <li>Question <a href="tel:<?php echo wp_kses_post($header_quick_contact); ?>"><i class="fa fa-phone"></i><?php echo esc_html($header_quick_contact); ?></a></li>
                        </ul>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <div class="header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-6 d-flex align-items-center justify-content-start">
						<?php get_template_part( 'template-parts/header/logo' ); ?>
                    </div>
                    <div class="col-lg-9 col-md-9 col-6">
                        <nav id="site-navigation"
                             class="main-navigation d-flex align-items-center justify-content-end">
							<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'main_menu',
								'menu_class'     => 'main-menu',
							) );
							?>
                        </nav><!-- #site-navigation -->
                        <div class="tdows-responsive-menu-wrapper">
                            <div class="tdows-responsive-menu"></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header><!-- #masthead -->


    <div class="tdows-bootstrap-modal">
        <!-- Trigger the modal with a button -->
        <!--           <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>-->

        <div class="modal fade show" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">
                            <?php  _e('What can we help you find?', 'tdows'); ?>
                        </h4>
                    </div>
                    <div class="modal-body">
                        <?php if(function_exists('wd_asl')) : ?>
                        <div class="header-search">
                            <!--                                <h3>What can we help you find?</h3>-->
							<?php echo do_shortcode( '[wpdreams_ajaxsearchlite]' ); ?>
                        </div>
                        <?php else: ?>
                        <div class="header-search default-search">
                            <?php get_search_form(); ?>
                        </div>
                        <?php endif; ?>

                    </div>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

            </div>
        </div>
    </div>

    <div id="content" class="site-content">

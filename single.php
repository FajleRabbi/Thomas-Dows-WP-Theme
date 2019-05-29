<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package tdows
 */

get_header();
?>



<?php while ( have_posts() ) : the_post(); ?>

    <div id="primary" class="content-area tdows_main_area">
        <main id="main" class="site-main single_post_wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 single_post_article">
                        <div class="tdows_single">
                            <?php
                            get_template_part( 'template-parts/content', get_post_type() );

                            the_post_navigation(array(
                                'prev_text' => 'Previous Post'.'<h6>%title</h6>',
                                'next_text' => 'Next Post'.'<h6>%title</h6>',
                            ));

                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;
                            ?>
                        </div>
                    </div>
                    <div class="col-md-3 sidebar_wrap single_post_sidebar">
                        <div class="tdows-sidebar">
                            <?php get_sidebar(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->
<?php endwhile; ?>


<?php
get_footer();

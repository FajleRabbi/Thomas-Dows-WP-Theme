<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package tdows
 */

get_header();
?>

    <div class="page-header-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <header class="page-header">
                        <h1 class="page-title">
							<?php
							/* translators: %s: search query. */
							printf( esc_html__( 'Search Results for: %s', 'tdows' ), '<span>' . get_search_query() . '</span>' );
							?>
                        </h1>
                    </header><!-- .page-header -->
                </div>
            </div>
        </div>
    </div>
    <?php get_template_part( 'template-parts/blog-hero/search'); ?>

    <div id="primary" class="content-area tdows_main_area tdows_main_area_search_page">
        <main id="main" class="site-main">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-9">
                        <div class="tdows_blog_wrap">

							<?php if ( have_posts() ) : ?>

								<?php
								/* Start the Loop */
								while ( have_posts() ) :
									the_post();

									/**
									 * Run the loop for the search to output the results.
									 * If you want to overload this in a child theme then include a file
									 * called content-search.php and that will be used instead.
									 */
									get_template_part( 'template-parts/content', 'search' );

								endwhile;

								the_posts_navigation();

							else :

								get_template_part( 'template-parts/content', 'none' );

							endif;
							?>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <div class="tdows-sidebar">
							<?php get_sidebar(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </main><!-- #main -->
    </div>

<?php
// get_sidebar();
get_footer();

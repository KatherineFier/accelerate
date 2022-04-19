<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">


            <div id="error-page-stuff">

                <div id="error-page-content-img" class="error-page-contents">
                    <figure>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/map-image.png"/>
                    </figure>
                </div><!-- .error-page-image-->
       

                <div id="error-page-text" class="error-page-contents">
                    <h1>Whoops, Took a Wrong Turn...</h1>
                    <p>Sorry, this page no longer exists, never existed or has been moved. We feel like complete jerks for totally misleading you.</p>
                    <p>Feel free to take a look around our <a href="http://localhost:8888/accelerate/blog/"> blog</a> or some of our featured <a href="http://localhost:8888/accelerate/case-studies/">work</a>.</p>
                </div><!-- .error-text -->

            </div> <!-- .error-page-content -->


		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>

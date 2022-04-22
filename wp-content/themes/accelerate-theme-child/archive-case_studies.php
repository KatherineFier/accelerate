<?php
/**
 * The template for displaying the archive of case studies
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
			<?php while ( have_posts() ) : the_post(); 
				$image_1 = get_field ("image_1");
				$size = "full";
				$services =get_field('services');
                $client= get_field('client');
                $project_description= get_field('project_description');
                $link = get_field('site_link');	
			?>

		<div class="archive-case-study">

                <div class="archive-case-study-sidebar">
                    <h2 class="title-width"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <h5 class="services-width"><?php echo $services; ?></h5>
                    <p class="project-description-width"><?php echo $project_description; ?></p>
                    <p class="archive-case-study-read-more-link"><a href="<?php the_permalink(); ?>">View Project ›</a></p>
                </div> <!--close "case-study-sidebar"-->

                <div class="archive-case-study-images">
					<a href="<?php the_permalink(); ?>">
                    		<?php if($image_1) {
                        	echo wp_get_attachment_image($image_1, $size);
                    		} ?>
					</a>

                </div> <!--*close "case-study-images"-->

		</div> <!--*close "case-study"-->
		
	<?php endwhile; // end of the loop. ?>
	</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>

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
 **/
get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">

			<?php while ( have_posts() ) : the_post(); 
                    $serviceTypeIconPositionA= get_field('service_type_icon_position_a');
                    $serviceTypeTitle= get_field('service_type_title');
                    $serviceTypeDescription= get_field('service_type_description');
                    $serviceTypeIconPositionB= get_field('service_type_icon_position_b');
             ?>       

                <div class="services">
                    <div class="service-icon-a">
                        <?php if($serviceTypeIconPositionA) { ?>
                            <img src="<?php echo $serviceTypeIconPositionA; ?>" />
                        <?php } ?>
                    </div> <!-- .service-icon-a -->

                    <div class="service">
                        <div class="service-content">
                            <h2><?php echo $serviceTypeTitle; ?></h2>
                            <p><?php echo $serviceTypeDescription; ?></p>
                        </div> <!-- .service-content -->
                    </div> <!-- .service -->

                    <div class="service-icon-b">
                        <?php if($serviceTypeIconPositionB) { ?>
                            <img src="<?php echo $serviceTypeIconPositionB; ?>" />
                        <?php } ?>
                    </div> <!-- .service-icon-b -->
                </div> <!-- .services -->

			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->
<?php get_footer(); ?>




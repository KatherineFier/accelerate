<?php

/**
 * The template for displaying the archive of the services
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


<div id="primary" class="home-page hero-content">
		<div class="main-content" role="main">
				<h1>TEST</h1>
        </div><!-- .main-content -->
</div><!-- #primary -->
	

    <section id="archive-services-content">
        <div class="services-intro">
            <h3>Our Services</h3>
            <p>We take pride in our clients and the content we create for them.</p>
            <p>Here's a brief overview of our offered services.</p>
        </div>  

            <?php while (have_posts()) : the_post();
                $serviceTypeIconPositionA = get_field('service_type_icon_position_a');
                $serviceTypeTitle = get_field('service_type_title');
                $serviceTypeDescription = get_field('service_type_description');
                $serviceTypeIconPositionB = get_field('service_type_icon_position_b');
            ?>

                <div  class="archive-services">

                    <div class="archive-service-icon-a" class="service-icon-a">
                        <?php if ($serviceTypeIconPositionA) { ?>
                            <img src="<?php echo $serviceTypeIconPositionA; ?>" />
                        <?php } ?>
                    </div> <!-- .archive-service-icon-a -->

                    <div class="archive-service">
                        <div class="archive-service-content" class="service-content">
                            <h2><?php echo $serviceTypeTitle; ?></h2>
                            <p><?php echo $serviceTypeDescription; ?></p>
                        </div> <!-- .archive-service-content -->
                    </div> <!-- .archive-service -->

                    <div class="archive-service-icon-b" class="service-icon-b">
                        <?php if ($serviceTypeIconPositionB) { ?>
                            <img src="<?php echo $serviceTypeIconPositionB; ?>" />
                        <?php } ?>
                    </div> <!-- .archive-service-icon-b -->

                </div> <!-- .archive-services -->

            <?php endwhile; // end of the loop. 
            ?>
        </section> <!-- #archive-services-content -->
        
<?php get_footer(); ?>
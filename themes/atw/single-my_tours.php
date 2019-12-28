<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

        <!-- post title -->
        <h2><span><?php the_title(); ?><span></h2>
        <!-- /post title -->

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class('grid2-3'); ?>>
            
			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				
			<?php endif; ?>
            <!-- /post thumbnail -->
            
            <?php 
                //dates
                $format = 'd F, Y';
                $date = strtotime(get_field('departure_date'));
                $leavingDate = date_i18n($format, $date);

                $returnDate = strtotime(get_field('return_date'));
                $returnDate = date_i18n($format, $returnDate);
            ?>

            <div class="tour-information">
                <p><strong>Leaving and Retruning Date:</strong> <?php echo $leavingDate . ' - ' . $returnDate ?></p>
                <p><strong>Location for Departure:</strong><?php the_field('departure_location'); ?></p>
                <p><strong>Available Seats:</strong> <?php the_field('available_seats'); ?></p>
                <p><strong>Price:</strong> $<?php the_field('price'); ?></p>
            </div>

            <div class="itinerary">
                <h3>Travel Itinerary</h3>
                <?php the_field('travel_itinerary'); ?>
            </div>

            <?php the_content(); // Dynamic Content ?>
            
			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>


		</article>
        <!-- /article -->
        
        <aside class="grid1-3">
                <h3>Gallery</h3>
                <?php the_content(); ?>
        </aside>

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>


<?php get_footer(); ?>

<?php 
/*
* Template Name: Tours
*/
get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

        <h2><span><?php the_title(); ?></span></h2>
			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                
                <?php
                    $args = array(
                        'post_type' => 'my_tours',
                        'posts_per_page' => -1,
                        'orderby' => 'title',
                        'order'  => 'ASC',
                    );
                ?>
                <?php $tours = new WP_Query($args); while($tours->have_posts() ): $tours->the_post(); ?>

                <h3><?php the_title(); ?></h3>

                <?php endwhile; wp_reset_postdata(); ?>
				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>

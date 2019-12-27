<?php 
/*
* Template Name: About Us
*/
get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<h2><?php the_title(); ?></h2>
			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

			<div class="about-us-images">

				<?php if( get_field('image_1') ) {?>
				<img src="<?php the_field('image_1'); ?>" >
				<?php } ?>

				<?php if( get_field('image_2') ) {?>
				<img src="<?php the_field('image_2'); ?>" >
				<?php } ?>

			</div>

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

<?php get_sidebar(); ?>

<?php get_footer(); ?>

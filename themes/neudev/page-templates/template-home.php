<?php /* Template Name: Home Page Template */ get_header(); ?>

	<main role="main" aria-label="Content">
		<!-- section -->
		<section>


		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div id="nu__home-content">
					<!-- <h1><?php the_title(); ?></h1><br> -->
					<?php the_content(); ?>
			  </div>




				<br class="clear">



			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'neudev' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>

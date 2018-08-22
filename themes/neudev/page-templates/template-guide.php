<?php /* Template Name: Guide Page Template */ get_header(); ?>

	<main role="main" aria-label="Content">
		<!-- section -->
		<section>
			<div class="nu__accordion" id="nu__desktop">
				<?php get_template_part('/_includes/side', 'navigation');?>
			</div>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div id="nu__content">
					<h1><?php the_title(); ?></h1><br>
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

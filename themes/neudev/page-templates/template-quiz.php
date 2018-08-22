<?php /* Template Name: Demo Page Template */ get_header(); ?>

	<main role="main" aria-label="Content">
		<!-- section -->
		<section>
			<div class="accordion" id="nu__desktop">
				<?php get_template_part('/_includes/side', 'navigation');?>
			</div>
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div id="nu__content">
					<h1><?php the_title(); ?></h1><br>
					<?php the_content(); ?>
					<form  method="post">
						<div>
						<p><strong>Type:</strong></p>
						<input type="radio" name="radio[1]" value="suv">Suv<br>
						<input type="radio" name="radio[1]" value="sedan">Sedan<br>
						<input type="radio" name="radio[1]" value="hybrid">Hybrid<br>
						</div>
						<div>
						<p><strong>Doors:</strong></p>
						<input type="radio" name="radio[2]" value="2doors">2 Doors<br>
						<input type="radio" name="radio[2]" value="4doors">4 Doors<br>
						</div>
						<div>
						<p><strong>Color:</strong><p>
						<input type="radio" name="radio[3]" value="red">Red<br>
						<input type="radio" name="radio[3]" value="black">Black<br>
						<input type="radio" name="radio[3]" value="white">White<br>
						<div>
						<br>
						<input type="submit" name="btnForm1" value="Submit">
					</form>

					<?php
					// print_r($_POST);



						if($_POST['radio'][1] == "suv" && $_POST['radio'][2] == "4doors" && $_POST['radio'][3] == "red"){
							echo "Largest Car!";
						}elseif($_POST['radio'][1] == "sedan" && $_POST['radio'][2] == "2doors" && $_POST['radio'][3] == "white"){
							echo "Smallest Car";
						}else {
							echo "No car was selected";
						}



					?>
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

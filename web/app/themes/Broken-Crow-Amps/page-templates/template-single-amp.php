<?php
/*
Template Name: Single Amps Page
*/
get_header(); ?>

		<div class="amps-single row">
			<div class="large-10 large-centered columns">

					<?php $image = get_field('featured_image');

					if( !empty($image) ): ?>

					<div class="amp-image">

						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

						<div class="amp-tag">
							<h1><?php the_title(); ?></h1>
						</div>

					</div>

					<?php endif; ?>


				<div class="amp-overview">
					<?php if ( have_posts() ): ?>
						<?php while( have_posts() ): the_post(); ?>

							<?php the_content(); ?>

						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>


<?php get_footer();

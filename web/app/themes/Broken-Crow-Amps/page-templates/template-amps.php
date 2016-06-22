<?php
/*
Template Name: All Amps Page
*/
get_header(); ?>

		<div class="amps-main row">
			<h1><?php the_title(); ?></h1>

			<?php

			if( have_rows('all_amp_details') ):

			    while ( have_rows('all_amp_details') ) : the_row(); ?>

					<div class="amp-lg small-12 large-6 columns">
						<?php
						$url = get_sub_field('product_link');
						$image = get_sub_field('amp_image');
						?>

						<?php if( !empty($url) ): ?>

							<a href="<?php echo $url; ?>">

								<?php if( !empty($image) ): ?>
									<div class="image-container">
										<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
										<div class="overlay">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/amp-details-rollover.png" alt="Amps Hover State" />
										</div>
									</div>

								<?php endif; ?>
							</a>
						<?php else: ?>
							<?php if( !empty($image) ): ?>

									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

							<?php endif; ?>
						<?php endif; ?>

						<?php the_field('amp_model'); ?>

					</div>

			    <?php endwhile;

			else :

			    // no rows found

			endif;

			?>

		</div>


<?php get_footer();

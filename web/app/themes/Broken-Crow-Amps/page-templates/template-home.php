<?php
/*
Template Name: Home Page
*/
get_header(); ?>

	<section class="home-hero clearfix">

			<?php $image = get_field('hero_image');

			if( !empty($image) ): ?>

				<figure>

					<img data-interchange="
						[<?php echo get_stylesheet_directory_uri(); ?>/assets/images/mobile-hero.jpg, small],
						[<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home-hero.jpg, medium]
					" alt="Broken Crow Boutique Amps">

							<figcaption class="show-for-medium">
								<h1>
									<a href="<?php echo esc_url( home_url( '/amps' ) ); ?>">
										<?php the_field('home_tagline'); ?>
									</a>
								</h1>
							</figcaption>

				</figure>

			<?php endif; ?>

	</section>

	<section class="insta-feed row clearfix">
		<img class="insta-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/instagram-logo.png" alt="Instagram Feed" />
			<h4><a href="<?php the_field('instagram_link', 'option'); ?>"><?php the_field('instagram_handle', 'option'); ?></a></h4>
			<?php echo do_shortcode('[instagram-feed]'); ?>
	</section>

<?php get_footer();

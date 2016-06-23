<?php
/*
Template Name: About Page
*/
get_header(); ?>

		<div class="about-page row">
			<div class="large-10 large-centered columns">
				<div class="about-content">
					<h1>About Broken Crow Amps</h1>
					<?php if ( have_posts() ): ?>
						<?php while( have_posts() ): the_post(); ?>

							<?php the_content(); ?>

						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>


<?php get_footer();

<?php
/*
Template Name: Media Page
*/
get_header(); ?>

<div class="amps-main">
	<div class="row collapse">
		<div class="large-12 columns">
			<h1><?php the_title(); ?></h1>
		</div>
	</div>

	<div class="row">
		<div class="large-10 large-centered columns">
			<?php the_field('featured_video'); ?>
		</div>

		<?php if( have_rows('other_videos') ): ?>
				<div class="other-vids-wrap clearfix">
				    <?php while ( have_rows('other_videos') ) : the_row(); ?>

				    	<div class="single-vid large-4 columns">
							<?php the_sub_field('video_column'); ?>

							<?php the_sub_field('video_title'); ?>
						</div>

				    <?php endwhile; ?>
				</div>
			<?php else : ?>
		<?php endif; ?>

	</div>
</div>


<?php get_footer();

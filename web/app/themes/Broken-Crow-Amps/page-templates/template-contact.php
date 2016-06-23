<?php
/*
Template Name: Contact Page
*/
get_header(); ?>

	<div class="row">
		<div class="contact-page small-12 large-6 large-centered columns">

			<?php echo do_shortcode('[gravityform id="2" title="true" description="false" ajax="true"]'); ?>

		</div>
	</div>


<?php get_footer();

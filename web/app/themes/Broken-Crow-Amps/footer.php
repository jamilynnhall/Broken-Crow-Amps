<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>
		<section class="newsletter-signup">
				<div class="row">
					<div class="newsletter-form small-12 large-6 columns">
						<?php echo do_shortcode('[gravityform id="1" title="true" description="false" ajax="true"]'); ?>
					</div>
					<div class="newsletter-description small-12 large-6 columns">
						<h3><?php the_field('newsletter_description', 'option'); ?></h3>
					</div>
				</div>
			</section>
		<div id="footer-container">
			<footer id="footer">
				<?php do_action( 'foundationpress_before_footer' ); ?>
					<p>&copy; 2016 Broken Crow Amplification | <?php the_field('footer_email_address', 'option'); ?> | <?php the_field('footer_phone_number', 'option'); ?></p>
				<?php do_action( 'foundationpress_after_footer' ); ?>
			</footer>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>

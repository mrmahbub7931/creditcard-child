<?php
/**
 * The Footer: widgets area, logo, footer menu and socials
 *
 * @package WordPress
 * @subpackage CREDITCARD
 * @since CREDITCARD 1.0
 */

						// Widgets area inside page content
						creditcard_create_widgets_area('widgets_below_content');
						?>				
					</div><!-- </.content> -->

					<?php
					// Show main sidebar
					get_sidebar();

					// Widgets area below page content
					creditcard_create_widgets_area('widgets_below_page');

					$creditcard_body_style = creditcard_get_theme_option('body_style');
					if ($creditcard_body_style != 'fullscreen') {
						?></div><!-- </.content_wrap> --><?php
					}
					?>
			</div><!-- </.page_content_wrap> -->

			<?php
			// Footer
			$creditcard_footer_style = creditcard_get_theme_option("footer_style");
			if (strpos($creditcard_footer_style, 'footer-custom-')===0) $creditcard_footer_style = 'footer-custom';
			get_template_part( "templates/{$creditcard_footer_style}");
			?>

		</div><!-- /.page_wrap -->

	</div><!-- /.body_wrap -->

	<?php if (creditcard_is_on(creditcard_get_theme_option('debug_mode')) && creditcard_get_file_dir('images/makeup.jpg')!='') { ?>
		<img src="<?php echo esc_url(creditcard_get_file_url('images/makeup.jpg')); ?>" id="makeup">
	<?php } ?>

	<?php wp_footer(); ?>

</body>
</html>
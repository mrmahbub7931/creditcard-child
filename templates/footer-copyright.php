<?php
/**
 * The template to display the copyright info in the footer
 *
 * @package WordPress
 * @subpackage CREDITCARD
 * @since CREDITCARD 1.0.10
 */

// Copyright area
$creditcard_footer_scheme =  creditcard_is_inherit(creditcard_get_theme_option('footer_scheme')) ? creditcard_get_theme_option('color_scheme') : creditcard_get_theme_option('footer_scheme');
$creditcard_copyright_scheme = creditcard_is_inherit(creditcard_get_theme_option('copyright_scheme')) ? $creditcard_footer_scheme : creditcard_get_theme_option('copyright_scheme');
?> 
<div class="footer_copyright_wrap scheme_<?php echo esc_attr($creditcard_copyright_scheme); ?>">
	<div class="footer_copyright_inner">
		<div class="content_wrap">
			<div class="copyright_text"><?php
				// Replace {{...}} and [[...]] on the <i>...</i> and <b>...</b>
				$creditcard_copyright = creditcard_prepare_macros(creditcard_get_theme_option('copyright'));
				if (!empty($creditcard_copyright)) {
					// Replace {date_format} on the current date in the specified format
					if (preg_match("/(\\{[\\w\\d\\\\\\-\\:]*\\})/", $creditcard_copyright, $creditcard_matches)) {
						$creditcard_copyright = str_replace($creditcard_matches[1], date(str_replace(array('{', '}'), '', $creditcard_matches[1])), $creditcard_copyright);
					}
					// Display copyright
					$terms_of_use = '<a href="'.get_page_link(1454).'"> Terms of Use</a>';
					$privacy_policy = '<a href="'.get_page_link(1159).'">Privacy policy.</a>';
					echo wp_kses_data(nl2br($creditcard_copyright . $terms_of_use . ' and '.$privacy_policy));
				}
			?></div>
		</div>
	</div>
</div>

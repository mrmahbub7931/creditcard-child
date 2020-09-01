<?php
/**
 * The template to display all single pages
 * Template name: Full width
 * @package WordPress
 * @subpackage CREDITCARD
 * @since CREDITCARD 1.0
 */

get_header();

while ( have_posts() ) { the_post();

	// get_template_part( 'content', 'page' );
	the_content();
	
}

get_footer();
?>
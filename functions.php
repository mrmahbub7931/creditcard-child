<?php
/**
 * Child-Theme functions and definitions
 */


add_action('init','loancard_contact_db');

	$loancard_includes = array(
		'/enqueue.php',                  	// enqueue all scripts
		'/apply-form.php',                  // Apply form shortcode
		'/compare-table.php',				// Compare table shortcode
		'/include.php',						// Include php file
		'/apply-form-ajax.php',				// Apply form ajax request
		//'/loan-post.php',					// Custom post type laon_details
	);

	foreach ( $loancard_includes as $file ) {
	$filepath = locate_template( 'inc' . $file );
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}


function loancard_contact_db() {

	global $wpdb;
	$charset_collate = $wpdb->get_charset_collate();
	$table_name = $wpdb->prefix . 'loancard_contact';

	$sql = "CREATE TABLE $table_name (
		id mediumint(11) NOT NULL AUTO_INCREMENT,
		time datetime DEFAULT CURRENT_TIMESTAMP NULL,
		type varchar(50) NOT NULL,
		name varchar(255) NOT NULL,
		email varchar(50) NOT NULL,
		credit_card varchar(50) NOT NULL,
		type_of_loan varchar(50) NOT NULL,
		loan_amount varchar(255) NULL,
		date_of_birth varchar(50) NOT NULL,
		phone varchar(15) NOT NULL,
		address varchar(255) NOT NULL,
		company_name varchar(100) NOT NULL,
		designation varchar(100) NOT NULL,
		salary_paid_system varchar(100) NOT NULL,
		salary varchar(100) NOT NULL,
		loan_or_card varchar(11) NOT NULL,
		date_of_appointment varchar(50) NOT NULL,
		message varchar(255) NULL,
		status varchar(100) NULL,
		UNIQUE KEY id (id)
	) $charset_collate;";

	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	dbDelta( $sql );
}


// admin menu page
	if (!function_exists('loancard_admin_menu')) {
		add_action('admin_menu','loancard_admin_menu');

		function loancard_admin_menu()
		{
			add_menu_page('Applications','Applications','manage_options','loancard_message','message_box_dahsboard','dashicons-email-alt',26);

			add_submenu_page('loancard_message','Credit Card Application','Card Application','manage_options','card_application','credit_card_callback_func');

			add_submenu_page('loancard_message','Loan Application','Loan Application','manage_options','loan_application','loan_callback_func');

		}

		function message_box_dahsboard(){
			include 'admin-templates/application.php';
		}

		function credit_card_callback_func() {
			include 'admin-templates/card_application.php';
		}

		function loan_callback_func() {
			include 'admin-templates/loan_application.php';
		}


	}

?>

<?php
/**
 * loancard custom post type
 *
 * @package loancard
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function creditcard_child_scripts() {
    wp_enqueue_style( 'creditcard-parent-style', get_template_directory_uri(). '/style.css' );

    wp_enqueue_style( 'creaditcard-dataTable-css', get_stylesheet_directory_uri() . '/assets/css/jquery.dataTables.min.css' );

    wp_enqueue_style( 'creaditcard-cContact-css', get_stylesheet_directory_uri() . '/assets/css/custom_contact.css' );

    wp_enqueue_style( 'creaditcard-bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css' );
    wp_enqueue_style( 'creaditcard-loan-child', get_stylesheet_directory_uri() . '/assets/css/loan-child.css',array('creditcard-main') );

    wp_enqueue_script('creaditcard-bootstrap', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), uniqid(), false);

    wp_enqueue_script('dataTables-jquery', get_stylesheet_directory_uri() . '/assets/js/jquery.dataTables.min.js', array('jquery'), uniqid(), false);

    wp_enqueue_script('jquery-validate', get_stylesheet_directory_uri() . '/assets/js/jquery.validate.js', array('jquery'), uniqid(), false);

    wp_enqueue_script('jquery-steps', get_stylesheet_directory_uri() . '/assets/js/jquery.steps.js', array('jquery'), uniqid(), false);

    wp_enqueue_script('jquery-custom-contact', get_stylesheet_directory_uri() . '/assets/js/custom_contact_form.js', array('jquery'), uniqid(), true);

    wp_enqueue_script('jquery-raw-js', get_stylesheet_directory_uri() . '/assets/js/rawjs.js', array('jquery'), uniqid(), true);

}
add_action( 'wp_enqueue_scripts', 'creditcard_child_scripts' );
add_action( 'admin_enqueue_scripts', 'loancard_admin_enqueue' );
function loancard_admin_enqueue()
{
    // wp_enqueue_style( 'creaditcard-bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css' );
    wp_enqueue_style( 'admin-dataTable', get_stylesheet_directory_uri() . '/assets/css/jquery.dataTables.min.css' );
	wp_enqueue_style( 'admin-css', get_stylesheet_directory_uri() . '/assets/css/admin.css' );

    wp_enqueue_script('jquery-ext',get_stylesheet_directory_uri() . '/assets/js/jquery-1.12.4.js',array(),uniqid(),false);

    wp_enqueue_script('admin-creaditcard-bootstrap', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery-ext'), uniqid(), false);

    wp_enqueue_script('admin-dataTables-jquery', get_stylesheet_directory_uri() . '/assets/js/jquery.dataTables.min.js', array('jquery-ext'), uniqid(), false);
	wp_enqueue_script('admin-js', get_stylesheet_directory_uri() . '/assets/js/admin.js', array('jquery'), uniqid(), true);
}

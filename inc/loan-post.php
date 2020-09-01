<?php
/**
 * loancard custom post type
 *
 * @package loancard
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if (!function_exists('loan_custom_post')) {
	
	function loan_custom_post() {

	$labels = array(
		'name'                  => _x( 'Loan Details', 'Loan Detail', 'loancard' ),
		'singular_name'         => _x( 'Loan Details', 'Loan Detail', 'loancard' ),
		'menu_name'             => __( 'Loan Details', 'loancard' ),
		'name_admin_bar'        => __( 'Loan Details', 'loancard' ),
		'archives'              => __( 'Loan Archives', 'loancard' ),
		'attributes'            => __( 'Item Attributes', 'loancard' ),
		'parent_item_colon'     => __( 'Parent Item:', 'loancard' ),
		'all_items'             => __( 'All Items', 'loancard' ),
		'add_new_item'          => __( 'Add New Item', 'loancard' ),
		'add_new'               => __( 'Add New', 'loancard' ),
		'new_item'              => __( 'New Item', 'loancard' ),
		'edit_item'             => __( 'Edit Item', 'loancard' ),
		'update_item'           => __( 'Update Item', 'loancard' ),
		'view_item'             => __( 'View Item', 'loancard' ),
		'view_items'            => __( 'View Items', 'loancard' ),
		'search_items'          => __( 'Search Item', 'loancard' ),
		'not_found'             => __( 'Not found', 'loancard' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'loancard' ),
		'featured_image'        => __( 'Featured Image', 'loancard' ),
		'set_featured_image'    => __( 'Set featured image', 'loancard' ),
		'remove_featured_image' => __( 'Remove featured image', 'loancard' ),
		'use_featured_image'    => __( 'Use as featured image', 'loancard' ),
		'insert_into_item'      => __( 'Insert into item', 'loancard' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'loancard' ),
		'items_list'            => __( 'Items list', 'loancard' ),
		'items_list_navigation' => __( 'Items list navigation', 'loancard' ),
		'filter_items_list'     => __( 'Filter items list', 'loancard' ),
	);
	$args = array(
		'label'                 => __( 'Loan Details', 'loancard' ),
		'description'           => __( 'Loan Details Description', 'loancard' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor','author' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'				=> 'dashicons-money-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'loan_details', $args );

	}
	add_action( 'init', 'loan_custom_post', 0 );
}
<?php

class TSBT_Post_Types {

	/**
	 * Constructor
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'register_post_types' ) );
		add_action( 'init', array( $this, 'register_taxonomies' ) );
	}

	/**
	 * Register post types
	 */
	public function register_post_types() {
		register_post_type(
			'faq',
			array(
				'labels'       => array(
					'name'          => __( 'FAQs', 'unakaffe' ),
					'singular_name' => __( 'FAQ', 'unakaffe' ),
					'add_new'       => __( 'Add New FAQ', 'unakaffe' ),
					'add_new_item'  => __( 'Add New FAQ', 'unakaffe' ),
					'edit_item'     => __( 'Edit FAQ', 'unakaffe' ),
					'new_item'      => __( 'New FAQ', 'unakaffe' ),
					'view_item'     => __( 'View FAQ', 'unakaffe' ),
					'search_items'  => __( 'Search FAQs', 'unakaffe' ),
				),
				'public'             => true,
				'publicly_queryable' => false,
				'has_archive'        => false,
				'show_ui'            => true,
				// 'menu_icon'       => 'dashicons-products',
				'show_in_rest'       => true,
				'supports'           => array( 'title', 'editor', 'thumbnail' ),
			)
		);

		register_post_type(
			'coffee',
			array(
				'labels'       => array(
					'name'          => __( 'Coffee Capsules', 'unakaffe' ),
					'singular_name' => __( 'Coffee Capsule', 'unakaffe' ),
					'add_new'       => __( 'Add New Coffee Capsule', 'unakaffe' ),
					'add_new_item'  => __( 'Add New Coffee Capsule', 'unakaffe' ),
					'edit_item'     => __( 'Edit Coffee Capsule', 'unakaffe' ),
					'new_item'      => __( 'New Coffee Capsule', 'unakaffe' ),
					'view_item'     => __( 'View Coffee Capsule', 'unakaffe' ),
					'search_items'  => __( 'Search Coffee Capsules', 'unakaffe' ),
				),
				'public'       => true,
				'has_archive'  => true,
				'menu_icon'    => 'dashicons-products',
				'show_in_rest' => true,
				'supports'     => array( 'title', 'editor', 'thumbnail' ),
			)
		);

		register_post_type(
			'machine',
			array(
				'labels'       => array(
					'name'          => __( 'Coffee Capsule Machines', 'unakaffe' ),
					'singular_name' => __( 'Coffee Capsule Machine', 'unakaffe' ),
					'add_new'       => __( 'Add New Coffee Capsule Machine', 'unakaffe' ),
					'add_new_item'  => __( 'Add New Coffee Capsule Machine', 'unakaffe' ),
					'edit_item'     => __( 'Edit Coffee Capsule Machine', 'unakaffe' ),
					'new_item'      => __( 'New Coffee Capsule Machine', 'unakaffe' ),
					'view_item'     => __( 'View Coffee Capsule Machine', 'unakaffe' ),
					'search_items'  => __( 'Search Coffee Capsule Machines', 'unakaffe' ),
				),
				'public'       => true,
				'has_archive'  => true,
				'menu_icon'    => 'dashicons-products',
				'show_in_rest' => true,
				'supports'     => array( 'title', 'editor', 'thumbnail' ),
			)
		);

		register_post_type(
			'accessory',
			array(
				'labels'       => array(
					'name'          => __( 'Accessories', 'unakaffe' ),
					'singular_name' => __( 'Accessory', 'unakaffe' ),
					'add_new'       => __( 'Add New Accessory', 'unakaffe' ),
					'add_new_item'  => __( 'Add New Accessory', 'unakaffe' ),
					'edit_item'     => __( 'Edit Accessory', 'unakaffe' ),
					'new_item'      => __( 'New Accessory', 'unakaffe' ),
					'view_item'     => __( 'View Accessory', 'unakaffe' ),
					'search_items'  => __( 'Search Accessories', 'unakaffe' ),
				),
				'public'       => true,
				'has_archive'  => true,
				'menu_icon'    => 'dashicons-products',
				'show_in_rest' => true,
				'supports'     => array( 'title', 'editor', 'thumbnail' ),
			)
		);
	}

	/**
	 * Register taxonomies
	 */
	public function register_taxonomies() {
		$labels = array(
			'name'                  => _x( 'Categories', 'Taxonomy plural name', 'unakaffe' ),
			'singular_name'         => _x( 'Category', 'Taxonomy singular name', 'unakaffe' ),
			'search_items'          => __( 'Search Categories', 'unakaffe' ),
			'popular_items'         => __( 'Popular Categories', 'unakaffe' ),
			'all_items'             => __( 'All Categories', 'unakaffe' ),
			'parent_item'           => __( 'Parent Category', 'unakaffe' ),
			'parent_item_colon'     => __( 'Parent Category', 'unakaffe' ),
			'edit_item'             => __( 'Edit Category', 'unakaffe' ),
			'update_item'           => __( 'Update Category', 'unakaffe' ),
			'add_new_item'          => __( 'Add New Category', 'unakaffe' ),
			'new_item_name'         => __( 'New Category Name', 'unakaffe' ),
			'add_or_remove_items'   => __( 'Add or remove Categories', 'unakaffe' ),
			'choose_from_most_used' => __( 'Choose from most used Categories', 'unakaffe' ),
			'menu_name'             => __( 'Categories', 'unakaffe' ),
		);

		$args = array(
			'labels'            => $labels,
			'public'            => true,
			'show_in_nav_menus' => true,
			'show_admin_column' => true,
			'hierarchical'      => true,
			'show_tagcloud'     => true,
			'show_ui'           => true,
			'query_var'         => true,
			'rewrite'           => true,
			'query_var'         => true,
			'capabilities'      => array(),
		);

		register_taxonomy( 'faq_category', array( 'faq' ), $args );
		register_taxonomy( 'coffee_category', array( 'coffee' ), $args );
		register_taxonomy( 'machine_category', array( 'machine' ), $args );
		register_taxonomy( 'accessory_category', array( 'accessory' ), $args );
	}
}
new TSBT_Post_Types();

<?php

class TSBT_Custom_Fields {

	public $palletes = array();

	public function __construct() {
		add_filter( 'acf/settings/save_json', array( $this, 'save_json_location' ) );
		add_action( 'acf/init', array( $this, 'setup' ) );
		add_action( 'acf/init', array( $this, 'register_blocks' ) );
		// add_filter( 'acf/settings/show_admin', '__return_false' );

		add_filter( 'acf/load_field/name=menu_slug', array( $this, 'nav_menus_load' ) );

		add_filter( 'acf/prepare_field/key=field_66dad12c63c1a', array( $this, 'hide_field' ) );
	}

	/**
	 * Hide field
	 *
	 * @param  array $field Field.
	 * @return mixed
	 */
	public function hide_field( $field ) {
		if ( get_post_type() === 'accessory' ) {
			return false;
		}
		return $field;
	}

	/**
	 * ACF save field
	 *
	 * @param  string $path Save path.
	 * @return string       Save path.
	 */
	public function save_json_location( $path ) {
		$path = TSBT_DIR . '/acf-json';
		return $path;
	}

	/**
	 * Register theme options page
	 */
	public function setup() {
		acf_add_options_page(
			array(
				'page_title'    => __( 'Options', 'unakaffe' ),
				'menu_title'    => __( 'Options', 'unakaffe' ),
				'menu_slug'     => 'theme-options',
				'capability'    => 'edit_posts',
				'redirect'      => false,
				'icon_url'      => 'dashicons-feedback',
			)
		);
	}

	public function register_blocks() {
		// register custom ACF block disini
		register_block_type( TSBT_DIR . '/blocks/header/' );
	}

	function nav_menus_load( $field ) {
		if ( ! function_exists( 'get_current_screen' ) ) {
			return $field;
		}
		$screen = get_current_screen();
		if ( $screen && 'toplevel_page_theme-options' === $screen->base ) {
			$field['choices'][''] = '';

			$menus = wp_get_nav_menus();
			if ( ! empty( $menus ) ) {
				foreach ( $menus as $menu ) {
					$field['choices'][ $menu->slug ] = $menu->name;
				}
			}
		}

		return $field;
	}
}
new TSBT_Custom_Fields();

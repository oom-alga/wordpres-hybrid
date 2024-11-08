<?php

define( 'TSBT_DIR', get_template_directory() );
define( 'TSBT_URI', get_template_directory_uri() );
define( 'TSBT_VER', '1.0.3' );
if ( ! defined( 'TSBT_SHOW_ONBOARDING_NOTICE' ) ) {
	define( 'TSBT_SHOW_ONBOARDING_NOTICE', false );
}

// BEGIN: KEBUTUHAN FE DEVELOPMENT
// Requird Plugin: tiga-router
require_once TSBT_DIR . '/template-html/_function-routes.php';
// END: KEBUTUHAN FE DEVELOPMENT

require_once TSBT_DIR . '/inc/function-helpers.php';
require_once TSBT_DIR . '/inc/function-templates.php';
require_once TSBT_DIR . '/inc/class-tsbt-scripts.php';
require_once TSBT_DIR . '/inc/class-tsbt-post-types.php';
require_once TSBT_DIR . '/inc/class-tsbt-custom-fields.php';
require_once TSBT_DIR . '/inc/class-tsbt-block-patterns.php';
require_once TSBT_DIR . '/inc/class-wp-bootstrap-navwalker.php';

class Tongkolspace_Base_Theme {

	public function __construct() {
		add_action( 'after_setup_theme', array( $this, 'theme_setup' ) );
	}

	public function theme_setup() {
		load_theme_textdomain( 'unakaffe', TSBT_DIR . '/languages' );

		add_theme_support( 'editor-styles' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'block-templates' );
		add_theme_support( 'block-template-parts' );

		// navigation menu.
		register_nav_menus(
			array(
				'main-menu'      => __( 'Main Menu', 'unakaffe' ),
				'secondary-menu' => __( 'Secondary Menu', 'unakaffe' ),
			)
		);
	}

}
new Tongkolspace_Base_Theme();

function my_plugin_body_class( $classes ) {
	if ( is_ios() ) {
		$classes[] = 'is_ios';
	}
	if ( is_android() ) {
		$classes[] = 'is_android';
	}
	return $classes;
}

add_filter( 'body_class', 'my_plugin_body_class' );

add_filter( 'wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2 );

function my_wp_nav_menu_objects( $items, $args ) {

	global $arr_modal;
	global $arr_mega;

	// loop
	foreach ( $items as &$item ) {
		// vars
		$modal_popup = get_field( 'modal_popup', $item );
		$mega_menu = get_field( 'mega_menu', $item );

		if ( $modal_popup ) {
			// print_r( $item );
			$arr_modal[] = array(
				'menu-id' => 'menu-item-' . $item->ID,
				'modal' => $modal_popup,
			);
			$item->classes[] = 'has-menu-modal';
		}
		if ( $mega_menu ) {
			$arr_mega[] = array(
				'menu-id' => 'menu-item-' . $item->ID,
				'mega' => $mega_menu,
			);
			$item->classes[] = 'has-mega-menu';
		}
	}

	// print_r( $arr_mega );
	// return
	return $items;
}

<?php

class TSBT_Block_Patterns {

	public function __construct() {
		add_action( 'init', [ $this, 'unregister_core_block_patterns' ] );
		add_action( 'init', [ $this, 'register_block_patterns' ] );
	}

	public function unregister_core_block_patterns() {
		unregister_block_pattern( 'core/query-standard-posts' );
		unregister_block_pattern( 'core/query-medium-posts' );
		unregister_block_pattern( 'core/query-small-posts' );
		unregister_block_pattern( 'core/query-grid-posts' );
		unregister_block_pattern( 'core/query-large-title-posts' );
		unregister_block_pattern( 'core/query-offset-posts' );
	}

	public function register_block_patterns() {
		$block_patterns = array(
			'query-boxed-list',
			'query-boxed-grid',
		);

		foreach ( $block_patterns as $block_pattern ) {
			$pattern           = require __DIR__ . '/block-patterns/' . $block_pattern . '.php';
			$pattern['source'] = 'unakaffe';
			register_block_pattern( 'tongkolspace/' . $block_pattern, $pattern );
		}
	}

}
new TSBT_Block_Patterns();
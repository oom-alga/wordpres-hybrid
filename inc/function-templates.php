<?php

/**
 * Update search query
 *
 * @param obj $query Query.
 */
function tsbt_search_query( $query ) {
	if ( ! is_admin() && $query->is_main_query() ) {
		if ( $query->is_search ) {
			$query->set( 'post_type', array( 'post', 'product' ) );
		}
	}
}
add_action( 'pre_get_posts', 'tsbt_search_query' );

<?php
/**
 * Query: Boxed List.
 *
 * @package WordPress
 */

return array(
	'title'      => _x( 'Query Boxed Grid', 'Block pattern title' ),
	'blockTypes' => array( 'core/query' ),
	'categories' => array( 'query' ),
	'content'    => '<!-- wp:query {"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
		<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
		<!-- wp:group {"style":{"border":{"width":"1px","color":"#E0E0E0","radius":"4px"},"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group has-border-color" style="border-color:#E0E0E0;border-width:1px;border-radius:4px"><!-- wp:group {"style":{"dimensions":{"minHeight":"210px"}},"backgroundColor":"secondary-background","layout":{"type":"default"}} -->
		<div class="wp-block-group has-secondary-background-background-color has-background" style="min-height:210px"><!-- wp:post-featured-image {"isLink":true,"height":"210px"} /--></div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:post-terms {"term":"category","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"xs"} /-->

		<!-- wp:post-title {"level":3,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"},":hover":{"color":{"text":"var:preset|color|primary"}}}}}} /-->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group"><!-- wp:post-author-name {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"fontSize":"xs"} /-->

		<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}},"textColor":"tertiary"} -->
		<p class="has-tertiary-color has-text-color has-link-color">•</p>
		<!-- /wp:paragraph -->

		<!-- wp:post-date {"format":"M j, Y","fontSize":"xs"} /--></div>
		<!-- /wp:group --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group -->
		<!-- /wp:post-template -->

		<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:query-pagination -->
		<!-- wp:query-pagination-previous /-->

		<!-- wp:query-pagination-numbers /-->

		<!-- wp:query-pagination-next /-->
		<!-- /wp:query-pagination --></div>
		<!-- /wp:group -->

		<!-- wp:query-no-results -->
		<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
		<p>Pos tidak ditemukan</p>
		<!-- /wp:paragraph -->
		<!-- /wp:query-no-results --></div>
		<!-- /wp:query -->',
);

<?php
/**
 * Query: Boxed List.
 *
 * @package WordPress
 */

return array(
	'title'      => _x( 'Query Boxed List', 'Block pattern title' ),
	'blockTypes' => array( 'core/query' ),
	'categories' => array( 'query' ),
	'content'    => '<!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
		<div class="wp-block-query"><!-- wp:post-template -->
		<!-- wp:group {"style":{"border":{"width":"1px"}},"borderColor":"tertiary","layout":{"type":"default"}} -->
		<div class="wp-block-group has-border-color has-tertiary-border-color" style="border-width:1px"><!-- wp:tonjoo-blocks/row {"columnCount":2,"templateDesktop":"4-8","templateTablet":"6-6","alignColumns":"stretch","horizontalGutters":"var:preset|spacing|30","verticalGutters":"var:preset|spacing|30"} -->
		<div class="wp-block-tonjoo-blocks-row align-columns-stretch" style="--tj-gutter-x:var(--wp--preset--spacing--30);--tj-gutter-y:var(--wp--preset--spacing--30)"><div class="tonjoo-blocks-row"><!-- wp:tonjoo-blocks/column {"sizeDesktop":4,"sizeTablet":5} -->
		<div class="wp-block-tonjoo-blocks-column col-desktop-4 col-tablet-5 col-mobile-12"><!-- wp:group {"style":{"dimensions":{"minHeight":"170px"}},"backgroundColor":"secondary-background","className":"tjcss-c9b4d8c3","layout":{"type":"default"},"hasCustomCSS":true,"customCSS":".tjcss-c9b4d8c3 {\n  height: 100%;\n}\n"} -->
		<div class="wp-block-group tjcss-c9b4d8c3 has-secondary-background-background-color has-background" style="min-height:170px"><!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"100%"} /--></div>
		<!-- /wp:group --></div>
		<!-- /wp:tonjoo-blocks/column -->

		<!-- wp:tonjoo-blocks/column {"sizeDesktop":8,"sizeTablet":7} -->
		<div class="wp-block-tonjoo-blocks-column col-desktop-8 col-tablet-7 col-mobile-12"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:post-terms {"term":"category","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"xs"} /-->

		<!-- wp:post-title {"level":3,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"},":hover":{"color":{"text":"var:preset|color|primary"}}}}}} /-->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group"><!-- wp:post-author-name {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"fontSize":"xs"} /-->

		<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}},"textColor":"tertiary"} -->
		<p class="has-tertiary-color has-text-color has-link-color">•</p>
		<!-- /wp:paragraph -->

		<!-- wp:post-date {"format":"M j, Y","fontSize":"xs"} /--></div>
		<!-- /wp:group -->

		<!-- wp:post-excerpt {"excerptLength":20,"hideOnMobile":true} /--></div>
		<!-- /wp:group --></div>
		<!-- /wp:tonjoo-blocks/column --></div></div>
		<!-- /wp:tonjoo-blocks/row --></div>
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

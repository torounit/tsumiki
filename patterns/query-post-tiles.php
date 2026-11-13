<?php
/**
 * Title: Post Tiles
 * Slug: tsumiki/query-post-tiles
 * Categories: posts
 * Block Types: core/query
 * Description: Posts as notched tiles in three sizes on the page grid, with numbered pagination.
 *
 * @package Tsumiki
 * @since Tsumiki 0.1.0
 */

?>
<!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"className":"is-style-post-tiles","layout":{"type":"grid","columnCount":20}} -->
<!-- wp:pattern {"slug":"tsumiki/hidden-post-card"} /-->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"arrow"} -->
<!-- wp:query-pagination-previous {"label":"<?php echo esc_attr__( 'Previous', 'tsumiki' ); ?>"} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":"<?php echo esc_attr__( 'Next', 'tsumiki' ); ?>"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query -->

<?php
/**
 * Title: Notched featured images
 * Slug: tsumiki/notched-image
 * Categories: query
 * Block Types: core/query
 * Description: Posts whose featured image has a rounded notch in its bottom-left corner that holds the post title and excerpt.
 *
 * @package Tsumiki
 * @since Tsumiki 0.1.0
 */

?>
<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"className":"is-style-notched","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-notched"><!-- wp:post-featured-image {"isLink":true} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-excerpt /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

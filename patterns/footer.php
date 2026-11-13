<?php
/**
 * Title: Footer
 * Slug: tsumiki/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: The theme’s default footer, with social links and the copyright notice.
 *
 * @package Tsumiki
 * @since Tsumiki 0.1.0
 */

?>
<!-- wp:group {"className":"is-style-site-footer","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-site-footer"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group alignwide"><!-- wp:social-links {"iconColor":"contrast","iconColorValue":"#1d1816","iconBackgroundColor":"base","iconBackgroundColorValue":"#ffffff","size":"has-small-icon-size"} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color has-icon-background-color"><!-- wp:social-link {"url":"#","service":"x"} /-->

<!-- wp:social-link {"url":"#","service":"github"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"<?php echo esc_url( get_feed_link() ); ?>","service":"feed"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:paragraph {"textColor":"accent-4","fontSize":"small"} -->
<p class="has-accent-4-color has-text-color has-small-font-size"><?php echo esc_html( sprintf( /* translators: 1: Current year. 2: Site title. */ __( '© %1$s %2$s', 'tsumiki' ), wp_date( 'Y' ), get_bloginfo( 'name' ) ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

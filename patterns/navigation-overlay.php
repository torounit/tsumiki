<?php
/**
 * Title: Navigation Overlay
 * Slug: tsumiki/navigation-overlay
 * Categories: navigation
 * Block Types: core/template-part/navigation-overlay
 * Description: The theme’s default navigation overlay, with the site logo, site title and every menu item.
 *
 * @package Tsumiki
 * @since Tsumiki 0.1.0
 */

?>
<!-- wp:group {"align":"full","className":"is-style-navigation-overlay","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-navigation-overlay"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"12px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":32} /-->

<!-- wp:site-title {"level":0} /--></div>
<!-- /wp:group -->

<!-- wp:navigation-overlay-close /--></div>
<!-- /wp:group -->

<!-- wp:navigation {"ariaLabel":"<?php echo esc_attr__( 'Menu', 'tsumiki' ); ?>","showSubmenuIcon":false,"submenuVisibility":"always","overlayMenu":"never","align":"wide","layout":{"type":"flex","orientation":"vertical"}} /--></div>
<!-- /wp:group -->

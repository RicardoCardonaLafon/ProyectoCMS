<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package azera-shop
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div itemscope itemtype="http://schema.org/WPSideBar" role="complementary" aria-label="<?php esc_html_e( 'Main sidebar', 'azera-shop' ); ?>" id="sidebar-secondary" class="col-md-4 widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #sidebar-secondary -->

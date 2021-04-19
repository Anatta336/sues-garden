<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vintage-catalogue
 */

if (!is_active_sidebar('sidebar-1')) {
	return;
}
?>
<div class="primary-sidebar widget-area">
    <?php dynamic_sidebar('sidebar-1'); ?>
</div>

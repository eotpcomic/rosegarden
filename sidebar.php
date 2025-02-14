<?php


// Exit if accessed directly
defined( 'ABSPATH' ) || exit;


if (!is_active_sidebar('sidebar-1')) {
  return;
}
?>
<!-- start aside -->
<div class="<?= rosegarden_sidebar_col_class(); ?> border-left">
  <aside id="secondary" class="widget-area">

    <button class="<?= rosegarden_sidebar_toggler_class(); ?>" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="sidebar">
      <?php esc_html_e('Open side menu', 'rosegarden'); ?> <i class="fa-solid fa-ellipsis-vertical"></i>
    </button>

    <div class="<?= rosegarden_sidebar_offcanvas_class(); ?>" tabindex="-1" id="sidebar" aria-labelledby="sidebarLabel">
      <div class="offcanvas-header">
        <span class="h5" id="sidebarLabel"><?php esc_html_e('Sidebar', 'rosegarden'); ?></span>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebar" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body flex-column">
        <?php dynamic_sidebar('sidebar-1'); ?>
      </div>
    </div>

  </aside><!-- #secondary -->
</div>

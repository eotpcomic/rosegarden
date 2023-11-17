  
<footer>

  <div class="rosegarden-footer bg-body-tertiary pt-5 pb-5 bg-light ">
    <div class="container">

      <!-- Top Footer Widget -->
      <?php if (is_active_sidebar('top-footer')) : ?>
        <?php dynamic_sidebar('top footer'); ?>
      <?php endif; ?>

      <div class="row">

        <!-- Footer 1 Widget -->
        <div class="col-md-6 col-lg-3">
          <?php if (is_active_sidebar('footer-1')) : ?>
            <?php dynamic_sidebar('footer-1'); ?>
          <?php endif; ?>
        </div>

        <!-- Footer 2 Widget -->
        <div class="col-md-6 col-lg-3">
          <?php if (is_active_sidebar('footer-2')) : ?>
            <?php dynamic_sidebar('footer-2'); ?>
          <?php endif; ?>
        </div>

        <!-- Footer 3 Widget -->
        <div class="col-md-6 col-lg-3">
          <?php if (is_active_sidebar('footer-4')) : ?>
            <?php dynamic_sidebar('footer-4'); ?>
          <?php endif; ?>
        </div>

        <!-- Footer 4 Widget -->
        <div class="col-md-6 col-lg-3">
          <?php if (is_active_sidebar('footer-3')) : ?>
            <?php dynamic_sidebar('footer-3'); ?>
          <?php endif; ?>
        </div>

      </div>

      <!-- Bootstrap 5 Nav Walker Footer Menu -->
      <?php
      wp_nav_menu(array(
        'theme_location' => 'footer-menu',
        'container'      => false,
        'menu_class'     => '',
        'fallback_cb'    => '__return_false',
        'items_wrap'     => '<ul id="footer-menu" class="nav %2$s">%3$s</ul>',
        'depth'          => 1,
        'walker'         => new bootstrap_5_wp_nav_menu_walker()
      ));
      ?>

    </div>

  </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>

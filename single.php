<?php
get_header();

$thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
?>

  <div id="content" class="site-content">
    <div id="primary" class="content-area">

      <main id="main" class="site-main">

        <?php the_post(); ?>
        <div class="<?= bootscore_container_class(); ?> pb-5">

          <!-- Hook to add something nice -->
          <?php bs_after_primary(); ?>

          <?php the_breadcrumb(); ?>

          <div class="row">
            <div class="<?= bootscore_main_col_class(); ?>">

              <header class="entry-header featured-full-width-img bg-dark text-light mb-3" style="background-image: url('<?= $thumb['0']; ?>'); height: 350px">
                <div class="<?= bootscore_container_class(); ?> entry-header h-100 d-flex align-items-end pb-3">
                  <div>
                    <h1 class="text-white"><?php the_title(); ?></h1>
                  <small class="text-white">
                    <?php
                    bootscore_date();
                    ?>
                  </small>
                  </div>
                </div>
              </header>
              <div class="entry-content">
                <?php the_content(); ?>
              </div>

              <footer class="entry-footer clear-both">
                <div class="mb-4">
                  <?php bootscore_tags(); ?>
                </div>
                <!-- Related posts using bS Swiper plugin -->
                <?php if (function_exists('bootscore_related_posts')) bootscore_related_posts(); ?>
                <nav aria-label="bS page navigation">
                  <ul class="pagination justify-content-center">
                    <li class="page-item">
                      <?php previous_post_link('%link'); ?>
                    </li>
                    <li class="page-item">
                      <?php next_post_link('%link'); ?>
                    </li>
                  </ul>
                </nav>
                <?php comments_template(); ?>
              </footer>

            </div>
            <?php get_sidebar(); ?>
          </div>

        </div>

      </main>

    </div>
  </div>

<?php
get_footer();

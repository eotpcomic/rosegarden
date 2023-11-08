<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Bootscore
 */

get_header();
?>
  <div id="content" class="site-content <?= bootscore_container_class(); ?> py-5 mt-5">
    <div id="primary" class="content-area">

      <!-- Hook to add something nice -->
      <?php bs_after_primary(); ?>

      <div class="row">
        <div class="<?= bootscore_main_col_class(); ?>">

          <main id="main" class="site-main">

            <?php if (have_posts()) : ?>

              <header class="page-header mb-4">
                <h1>
                  <?php
                  /* translators: %s: search query. */
                  printf(esc_html__('Search Results for: %s', 'bootscore'), '<span class="text-secondary">' . get_search_query() . '</span>');
                  ?>
                </h1>
              </header>

              <?php
              /* Start the Loop */
              while (have_posts()) :
                the_post(); ?>

                <!-- start post <?php the_ID(); ?> -->
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                  <div class="col">
                    <div class="card mt-5">
                      <div class="card-body">
                      <a class="text-body text-decoration-none" href="<?php the_permalink(); ?>">
                <?php the_title('<h2 class="blog-post-title">', '</h2>'); ?>
              </a>
              <small class="meta small mb-2 text-body-tertiary ">
                  <?php bootscore_date(); bootscore_author(); ?>
              </small>
              <p class="card-text mt-4"><?= strip_tags(get_the_excerpt()); ?></p>
              <a href="<?php the_permalink(); ?>" class="btn btn-light"> <?php _e('Read more »', 'bootscore'); ?> </a>
                      </div>
                    </div>
                  </div>
                </article>
                <!-- end post <?php the_ID(); ?> -->

              <?php endwhile;

              bootscore_pagination();
             

            else : ?>
              <p class="alert alert-info mb-4"><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'bootscore'); ?></p>
            <?php  endif; ?>

          </main><!-- #main -->

        </div><!-- col -->
        <?php get_sidebar(); ?>
      </div><!-- row -->

    </div><!-- #primary -->
  </div><!-- #content -->
<?php
get_footer();

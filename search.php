<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package rosegarden
 */

get_header();
?>

<div class="content-section">
  <div class="container">
    <div class="content-block bg-white shadow-sm">
      <div class="row">
        <div class="col">
          <?php if ( have_posts() ) : ?>
            <header class="page-header mb-4">
            <h1>
              <?php
              /* translators: %s: search query. */
              printf(esc_html__('Search Results for: %s', 'rosegarden'), '<span class="text-secondary">' . get_search_query() . '</span>');
              ?>
            </h1>
          </header>
          <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="<?= rosegarden_main_col_class(); ?>">
                      <div class="row row-cols-1 row-cols-md-3 g-4">
              <?php 
              while ( have_posts() ) { the_post();
                if(is_sticky()) continue;

                get_template_part('article-post');
              }

              // Pagination
              if($wp_query->max_num_pages > 1) {
                if($wp_query->query_vars["paged"] == 0) {
                  $current_page = 1;
                } else {
                  $current_page = $wp_query->query_vars["paged"];
                }
                echo '<div class="pagination" data-query="'.htmlspecialchars(json_encode($wp_query->query_vars)).'" data-maxpages="'.htmlspecialchars(json_encode($wp_query->max_num_pages)).'" data-current="'.$current_page.'">'.paginate_links(array('total' => $wp_query->max_num_pages)).'</div>';
              } ?>
              <?php else : ?>
              <header class="page-header mb-4">
                <h1>
                  <?php
                  /* translators: %s: search query. */
                  printf(esc_html__('Search Results for: %s', 'rosegarden'), '<span class="text-secondary">' . get_search_query() . '</span>');
                  ?>
                </h1>
              </header>
              <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="<?= rosegarden_main_col_class(); ?>">
                  <div class="row row-cols-1 row-cols-md-3 g-4">
                    
              <?php endif  ?>
              </div>
            </div>
            <?php get_sidebar(); ?>
          </div>
              </div><!-- row -->
        </main><!-- #main -->
    </div><!-- #content -->
  </div> 
</div>

<?php
get_footer();

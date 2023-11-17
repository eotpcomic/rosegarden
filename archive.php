<?php

get_header();
?>

<div class="content-section">
  <div class="container">
    <div id="content" class="content-block bg-white" >
      
        <main id="main" class="site-main">

        <header class="page-header mb-4">
              <?php the_archive_title('<h1>', '</h1>'); ?>
              <?php the_archive_description('<div class="archive-description">', '</div>'); ?>
            </header>
        <!-- Post List -->
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="<?= rosegarden_main_col_class(); ?>">
            <div class="row row-cols-1 row-cols-md-3 g-4">
              <?php
                // Standard-Loop
                if ( have_posts() ) {
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
                  }
                }
                ?>
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

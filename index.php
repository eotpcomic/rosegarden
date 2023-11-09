<?php get_header(); ?>

<!-- Page Content-->
<div class="container px-4 px-lg-5">
  <div id="content" class="site-content <?= rosegarden_container_class(); ?> ">
    <div id="primary" class="content-area">
      
      <main id="main" class="site-main">

      <!-- Sticky Post -->
      <?php 
      $args      = array(
        'posts_per_page'      => 1,
        'post__in'            => get_option('sticky_posts'),
        'ignore_sticky_posts' => 1
      );
      $the_query = new WP_Query($args);
      if ($the_query->have_posts()) :
        while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-lg">
                  <a class="text-body text-decoration-none" href="<?php the_permalink(); ?>">
                    <?php the_title('<h2 class="blog-post-title">', '</h2>'); ?>
                  </a>
                  <small class="meta small mb-2 text-body-tertiary ">
                      <?php rosegarden_date(); rosegarden_author(); ?>
                  </small>
                  <p class="card-text mt-4">
                    <?= strip_tags(get_the_excerpt()); ?>
                  </p>
                  <a href="<?php the_permalink(); ?>" class="btn btn-light"> 
                    <?php _e('Read more »', 'rosegarden'); ?> 
                  </a>
                </div>
              </div>
            </article>

        <?php endwhile; ?>

        <hr>
      <?php endif; wp_reset_postdata(); ?>
        
       
        
      <!-- Post List -->
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="<?= rosegarden_main_col_class(); ?>">
          <div class="row row-cols-1 row-cols-md-3 g-4">
          <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <?php if (is_sticky()) continue; ?>

              <!-- start post <?php the_ID(); ?> -->
              <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="col">
                  <div class="card">
                    <div class="card-body">
                    <a class="text-body text-decoration-none" href="<?php the_permalink(); ?>">
                      <?php the_title('<h2 class="blog-post-title">', '</h2>'); ?>
                    </a>
                    <small class="meta small mb-2 text-body-tertiary ">
                      <?php rosegarden_date();  ?>
                    </small>
                    <p class="card-text mt-4"><?= strip_tags(get_the_excerpt()); ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn btn-light"> 
                      <?php _e('Read more »', 'rosegarden'); ?> 
                    </a>
                    </div>
                  </div>
                </div>
              </article>
              <!-- end post <?php the_ID(); ?> -->
            <?php endwhile; ?>
          <?php endif; ?>

            

          <footer class="entry-footer">
            <?php rosegarden_pagination(); ?>
          </footer>
            </div>
          </div>
          <?php get_sidebar(); ?>
        </div>
        <!-- row -->
      </main><!-- #main -->
    </div><!-- #primary -->
  </div><!-- #content -->
</div> 
<?php
get_footer();

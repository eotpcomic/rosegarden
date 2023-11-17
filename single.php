<?php
get_header();

$thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
the_post(); 
?>

<div class="content-section">
  <div class="container">
    <div class="content-block bg-white shadow-sm">
      <div class="row">
        <div class="col">
        <?php the_breadcrumb(); if(has_post_thumbnail() ) : ?>
          
          <div class="rosegarden-site-image">
            <img src="<?php echo get_the_post_thumbnail_url( ); ?>" alt="image" style="width:100%; object-fit: cover;height: 350px;">
            <div class="rosegarden-image-block">
              <?php the_title('<h2 class="blog-post-title">', '</h2>'); ?>
              <small class="meta small mb-2 text-body-tertiary ">
                <?php rosegarden_date(); rosegarden_author(); ?>
              </small>
            </div>
          </div> 
          <?php else : ?>
            <?php the_title('<h2 class="blog-post-title">', '</h2>'); ?>
            <small class="meta small mb-2 text-body-tertiary ">
              <?php rosegarden_date(); rosegarden_author(); ?>
            </small>
          <?php endif; ?>
          </div> 
            
            <p><?php the_content(); ?></p>

            <footer class="pt-5">
                <?php comments_template(); ?>
            </footer>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
get_footer();

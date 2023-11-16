<!-- start post <?php the_ID(); ?>  -->

<div class="col" id="post-<?php the_ID(); ?>">
    <div class="card h-100 rounded-0 shadow-sm">
      <?php if(has_post_thumbnail() ) : ?>
        <div class="bg-dark text-white" >
          <img src="<?php echo get_the_post_thumbnail_url( ); ?>" width="100%" height="150" >
          <div class="card-img-overlay">
            <a class="text-decoration-none" href="<?php the_permalink(); ?>">
                <?php the_title('<h2 class="blog-post-title">', '</h2>'); ?>
            </a>
            <small class="meta small mb-2 text-body-tertiary ">
                <?php rosegarden_date(); rosegarden_author(); ?>
            </small>
          </div> 
        </div> 
        <div class="card-body">
          <p class="card-text"><?= strip_tags(get_the_excerpt()); ?></p>
          <a href="<?php the_permalink(); ?>" class="btn btn-light"> 
              <?php _e('Read more »', 'rosegarden'); ?> 
          </a>
        </div> 
      <?php else : ?>
        <div class="card-header" style="height:150px">
        <a class="text-decoration-none" href="<?php the_permalink(); ?>">
              <?php the_title('<h2 class="blog-post-title">', '</h2>'); ?>
          </a>
          <small class="meta small mb-2 text-body-tertiary ">
              <?php rosegarden_date(); rosegarden_author(); ?>
          </small>
        </div>
        <div class="card-body">
          
          <p class="card-text"><?= strip_tags(get_the_excerpt()); ?></p>
          <a href="<?php the_permalink(); ?>" class="btn btn-light"> 
              <?php _e('Read more »', 'rosegarden'); ?> 
          </a>
        </div>
      <?php endif ?>
    </div>
</div>

<!-- end post <?php the_ID(); ?> -->
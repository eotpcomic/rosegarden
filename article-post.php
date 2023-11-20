<!-- start post <?php the_ID(); ?> --> 

<div class="col" id="post-<?php the_ID(); ?>">
  <div class="card h-100 shadow-blur" style="max-width: 18rem;">
    <div class="card-body">
      <h3><?php the_title(); ?> </h3>
      <small class="card-subtitle mb-2 text-muted">
        <?php rosegarden_date(); rosegarden_author(); ?>
      </small>
      <p class="card-text mt-3"><?= strip_tags(get_the_excerpt()); ?></p>
      <a href="<?php the_permalink(); ?>" class="btn btn-light mt-3"> 
          <?php _e('Read more »', 'rosegarden'); ?> 
      </a>
    </div>
  </div>
</div>


<!-- end post <?php the_ID(); ?> -->
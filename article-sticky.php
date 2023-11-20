<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="row gx-4 gx-lg-5 align-items-center my-5">
        <div class="col">
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
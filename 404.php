<?php

get_header();
?>
<div class="content-section">

  <div class="page-wrap d-flex flex-row align-items-center">
    <div class="container content-block bg-white shadow-sm">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <span class="display-1 d-block">404</span>
                <div class="mb-4 lead"><?php esc_html_e('Page not found.', 'rosegarden'); ?></div>
                <a class="btn btn-link" href="<?= esc_url(home_url()); ?>" role="button"><?php esc_html_e('Back Home &raquo;', 'rosegarden'); ?></a>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
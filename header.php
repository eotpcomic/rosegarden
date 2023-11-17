
<!doctype html >
<html <?php language_attributes(); ?> class="js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body class="home page-template-default logged-in admin-bar custom-background blog  wpa-excerpt hfeed">

<?php wp_body_open(); ?>

<!-- Navigation-->

<nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm bg-light" id="mainNav">
  
  <div class="container px-4">

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
          <?php  wp_nav_menu(array(
          'theme_location' => 'main-menu',
          'container'      => false,
          'menu_class'     => '',
          'fallback_cb'    => '__return_false',
          'items_wrap'     => '<ul class="navbar-nav me-auto fw-bold  %2$s">%3$s</ul>',
          'depth'          => 2,
          'walker'         => new bootstrap_5_wp_nav_menu_walker()
        ));  ?>
        <div class="nav-search-box justify-content-end"> 
        <form class="input-group form-inline my-2 my-lg-0" method="get" action="<?php esc_url(home_url('/')); ?>" style="display: flex; " >
          <input class="form-control mr-sm-2" type="search" name="s"  placeholder="Suche">
          <button type="submit" class="btn btn-outline-success my-2 my-sm-0"><i class="fa-solid fa-magnifying-glass"></i><span class="visually-hidden-focusable">Search</span></button>
        </form>
      </div>
    </div>
  </div>
</nav>



<!-- Header-->
<header class="banner-image w-100 d-flex justify-content-center align-items-center page-header" style="
        background-image: url('<?php header_image(); ?>');
        background-size: cover;
        background-repeat: no-repeat;
        height: 400px;
        position: relative;
      " id="masthead" role="banner">
  <a class="skip-link screen-reader-text" href="#content">Zum Inhalt springen</a>
  <div class="container">
      <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="page-caption">
              <a href="<?= esc_url(home_url('/')); ?>"  class="text-decoration-none">
      <h1 class="text-white text-center"><?php bloginfo('name'); ?></h1>
      <p class="h3 text-white text-center "><?php bloginfo('description'); ?></p>
    </a>
              </div>
          </div>
      </div>
  </div>
</header>



 
    



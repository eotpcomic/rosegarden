
<!doctype html >
<html <?php language_attributes(); ?> class="js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?= get_stylesheet_directory_uri(); ?>/img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= get_stylesheet_directory_uri(); ?>/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= get_stylesheet_directory_uri(); ?>/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?= get_stylesheet_directory_uri(); ?>/img/favicon/site.webmanifest">
  <link rel="mask-icon" href="<?= get_stylesheet_directory_uri(); ?>/img/favicon/safari-pinned-tab.svg" color="#0d6efd">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<div id="page" class="site">
    

<!--start-->



    <header id="masthead" class="site-header">
    <?php if ( get_header_image() ) : ?>
      <div class="page-header jumbotron p-3 p-md-5 text-white  text-white jumbotron-image" data-parallax="true" style="background-image: url(<?php header_image(); ?>)">
            <a href="<?= esc_url(home_url('/')); ?>" class="nav-link">
              <h1 class="display-4 text-center"><?php bloginfo('name'); ?></h1>
            </a>
                <p class="lead my-3 text-center"><?php bloginfo('description'); ?></p>
      </div>
    <?php else : ?>
      <div class="page-header jumbotron p-3 p-md-5 text-white bg-dark>
            <a href="<?= esc_url(home_url('/')); ?>" class="nav-link">
              <h1 class="display-4 text-center"><?php bloginfo('name'); ?></h1>
            </a>
                <p class="lead my-3 text-center"><?php bloginfo('description'); ?></p>
      </div>
    <?php endif ?>


        <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>


          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <!-- Bootstrap 5 Nav Walker Main Menu -->
            <?php
                wp_nav_menu(array(
                  'theme_location' => 'main-menu',
                  'container'      => false,
                  'menu_class'     => '',
                  'fallback_cb'    => '__return_false',
                  'items_wrap'     => '<ul id="bootscore-navbar" class="navbar-nav me-auto mb-2 mb-lg-0 %2$s">%3$s</ul>',
                  'depth'          => 2,
                  'walker'         => new bootstrap_5_wp_nav_menu_walker()
                ));
                ?>
          </div>
        </div>
      </nav>

      
      <!-- Navbar -->
      
    </header>




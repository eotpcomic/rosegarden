<?php



// Exit if accessed directly
defined( 'ABSPATH' ) || exit;


/**
 * Load required files
 */
require_once('inc/theme-setup.php');             // Theme setup and custom theme supports
require_once('inc/breadcrumb.php');              // Breadcrumb
require_once('inc/columns.php');                 // Main/sidebar column width and breakpoints
require_once('inc/comments.php');                // Comments
require_once('inc/container.php');               // Container class
require_once('inc/enable-html.php');             // Enable HTML in category and author description
require_once('inc/enqueue.php');                 // Enqueue scripts and styles
require_once('inc/excerpt.php');                 // Adds excerpt to pages
require_once('inc/hooks.php');                   // Custom hooks
require_once('inc/loop.php');                    // Amount of items in the loop before page gets paginated (set to 24)
require_once('inc/pagination.php');              // Pagination for loop and single posts
require_once('inc/password-protected-form.php'); // Form if post or page is protected by password
require_once('inc/template-tags.php');           // Meta information like author, date, comments, category and tags badges
require_once('inc/template-functions.php');      // Functions which enhance the theme by hooking into WordPress
require_once('inc/widgets.php');                 // Register widget area and disables Gutenberg in widgets


/**
 * Load Bootstrap 5 Nav Walker and registers menus 
 * Remove this snippet in v6 and add nav-walker to the enqueue list
 * https://github.com/orgs/rosegarden/discussions/347
 */
if (!function_exists('register_navwalker')) :
  function register_navwalker() {
    require_once('inc/class-bootstrap-5-navwalker.php');
    // Register Menus
    register_nav_menu('main-menu', 'Main menu');
    register_nav_menu('footer-menu', 'Footer menu');
  }
endif;
add_action('after_setup_theme', 'register_navwalker');


/**
 * Load Jetpack compatibility file
 */
if (defined('JETPACK__VERSION')) {
  require get_template_directory() . '/inc/jetpack.php';
}

function kb_load_scripts() {
  wp_enqueue_script('jquery');

  wp_register_script( 'kb_load_more', get_stylesheet_directory_uri() . '/loadmore.js', array('jquery') );

  wp_localize_script('kb_load_more', 'kb_string', array(
    'ajaxurl' => admin_url('admin-ajax.php'),
    'buttontxt' => __('Load more','kb-theme'),
    'buttonload' => __('Loading ...','kb-theme'),
  ));

  wp_enqueue_script( 'kb_load_more' );
}
add_action( 'wp_enqueue_scripts', 'kb_load_scripts' );
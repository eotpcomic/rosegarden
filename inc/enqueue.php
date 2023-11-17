<?php



// Exit if accessed directly
defined( 'ABSPATH' ) || exit;


/**
 * Enqueue scripts and styles
 */
function rosegarden_scripts() {

  // Get modification time. Enqueue files with modification date to prevent browser from loading cached scripts and styles when file content changes.
  $modificated_rosegardenCss   = (file_exists(get_template_directory() . '/css/bootstrap.min.css')) ? date('YmdHi', filemtime(get_template_directory() . '/css/bootstrap.min.css')) : 1;

  $modificated_styleCss       = date('YmdHi', filemtime(get_stylesheet_directory() . '/style.css'));
  $modificated_fontawesomeCss = date('YmdHi', filemtime(get_template_directory() . '/fontawesome/css/all.min.css'));
  $modificated_bootstrapJs    = date('YmdHi', filemtime(get_template_directory() . '/js/bootstrap.min.js'));
  $modificated_themeJs        = date('YmdHi', filemtime(get_template_directory() . '/js/theme.js'));



  wp_enqueue_style('main', get_template_directory_uri() . '/css/bootstrap.min.css', array(), $modificated_rosegardenCss);

  // Style CSS
  wp_enqueue_style('rosegarden-style', get_stylesheet_uri(), array(), $modificated_styleCss);

  // Fontawesome
  wp_enqueue_style('fontawesome', get_template_directory_uri() . '/fontawesome/css/all.min.css', array(), $modificated_fontawesomeCss);

  // Bootstrap JS
  wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), $modificated_bootstrapJs, true);

  // Theme JS
  wp_localize_script('kb_load_more', 'kb_string', array(
    'ajaxurl' => admin_url('admin-ajax.php'),
    'buttontxt' => __('Load more','kb-theme'),
    'buttonload' => __('Loading ...','kb-theme'),
  ));
  wp_enqueue_script('rosegarden-script', get_template_directory_uri() . '/js/theme.js', array('jquery'), $modificated_themeJs, true);

    // jquery JS
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/theme.js', array(), $modificated_jquery, true);


  if (is_singular() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }
}

add_action('wp_enqueue_scripts', 'rosegarden_scripts');


/**
 * Preload Font Awesome
 */
add_filter('style_loader_tag', 'rosegarden_fa_preload');

function rosegarden_fa_preload($tag) {

  $tag = preg_replace("/id='fontawesome-css'/", "id='fontawesome-css' onload=\"if(media!='all')media='all'\"", $tag);

  return $tag;
}

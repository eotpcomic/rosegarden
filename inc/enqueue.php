<?php



// Exit if accessed directly
defined( 'ABSPATH' ) || exit;


/**
 * Enqueue scripts and styles
 */
function rosegarden_scripts() {
  
  wp_enqueue_style('main', get_template_directory_uri() . '/css/bootstrap.min.css', array(), date('YmdHi', filemtime(get_template_directory() . '/css/bootstrap.min.css') ) );
  wp_enqueue_style('extend', get_template_directory_uri() . '/css/theme.css', array(), date('YmdHi', filemtime(get_template_directory() . '/css/theme.css') ));
  wp_enqueue_style('rstyle', get_template_directory_uri() . '/style.css', array(), date('YmdHi', filemtime(get_template_directory() . '/style.css') ));
  wp_enqueue_style('fontawasome', get_template_directory_uri() . '/fontawesome/css/all.min.css', array(), date('YmdHi', filemtime(get_template_directory() . '/fontawesome/css/all.min.css') ));

  wp_enqueue_script('main-js', get_template_directory_uri(). '/js/bootstrap.min.js', array(), date('YmdHi', filemtime(get_template_directory(). '/js/bootstrap.min.js') ), true); 
  wp_enqueue_script('jquery-theme', get_template_directory_uri(). '/js/theme.js', array('jquery'), date('YmdHi', filemtime(get_template_directory(). '/js/theme.js') ), true);



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

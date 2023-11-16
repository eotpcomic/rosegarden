<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! is_admin() && isset($_SERVER['REQUEST_URI'])){
  if(preg_match('/(wp-comments-post)/', $_SERVER['REQUEST_URI']) === 0 && !empty($_REQUEST['author']) ) {
  wp_die('Du hast keine Rechte diese Adresse aufzurufen');
  }
 }
/**
 * Setup theme
 */
if (!function_exists('rosegarden_setup')) :
  /**
   * Sets up theme defaults and registers support for various WordPress features.
   *
   * Note that this function is hooked into the after_setup_theme hook, which
   * runs before the init hook. The init hook is too late for some features, such
   * as indicating support for post thumbnails.
   */
  function rosegarden_setup() {
    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on rosegarden, use a find and replace
     * to change 'rosegarden' to the name of your theme in all the template files.
    */
    load_theme_textdomain('rosegarden', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
    */
    add_theme_support('title-tag');

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
    */
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size( 150, 150, true ); // default Featured Image dimensions (cropped)

    // additional image sizes
    // delete the next line if you do not need additional image sizes
    add_image_size( 'category-thumb', 1200, 350 ); // 300 pixels wide (and unlimited height)


    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');


    add_theme_support( 'custom-background', array(
      'default-color' => 'ededed',
    ));



    $args = array(
      'flex-width'    => true,
      'width'         => 1200,
      'flex-height'   => true,
      'height'        => 350,
      'default-image' => get_template_directory_uri() . '/img/default-image.jpg',
    );
    add_theme_support( 'custom-header', $args );

    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo', array(
        'height' => 100,
        'width'  => 300,
        'flex-width'           => true,
        'flex-height'          => true,
        'unlink-homepage-logo' => true,
    ) );

    add_theme_support( 'align-wide' );

    add_theme_support( 'wp-block-styles' );

    add_theme_support( 'editor-styles' );

    add_filter( 'rss_widget_feed_link', '__return_empty_string' );
    add_theme_support( 'custom-spacing' );
    add_theme_support( 'responsive-embeds' );
  }
endif;
add_action('after_setup_theme', 'rosegarden_setup');


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function rosegarden_content_width() {
  // This variable is intended to be overruled from themes.
  // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
  // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
  $GLOBALS['content_width'] = apply_filters('rosegarden_content_width', 740);
}

add_action('after_setup_theme', 'rosegarden_content_width', 0);


add_action( 'init', function () {
  $post_type_object = get_post_type_object('post');
  $post_type_object->template = array(
     array('core/paragraph', array(
        'placeholder' => 'Das ist der einleitende Text.'
     )),
     array('core/heading', array(
        'placeholder' => 'Das ist die erste Unterüberschrift (h2).',
        'level' => 2,
     )),
  );
});

function kb_remove_comment_author_class( $classes ) {
  foreach( $classes as $key => $class ) {
   if(strstr($class, "comment-author-")) {
    unset( $classes[$key] );
   }
  }
  return $classes;
 }
 add_filter( 'comment_class' , 'kb_remove_comment_author_class' );

 add_filter('jpeg_quality', function($arg){return 100;});
add_filter( 'wp_editor_set_quality', function($arg){return 100;} );


// Mindestanzahl an Wörtern je Beitrag 
function minWordsPerPost($content){
	global $post;
                $num = 100; // Anzahl Wörter festlegen
		$content = $post->post_content;
	if (str_word_count($content) <  $num)
	        wp_die( __('Fehler: Dein Beitrag muss mindestens 100 Wörter umfassen.') );
}

add_action('publish_post', 'minWordsPerPost');



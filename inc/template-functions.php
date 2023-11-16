<?php



// Exit if accessed directly
defined( 'ABSPATH' ) || exit;




/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function rosegarden_pingback_header() {
  if (is_singular() && pings_open()) {
    printf('<link rel="pingback" href="%s">', esc_url(get_bloginfo('pingback_url')));
  }
}

add_action('wp_head', 'rosegarden_pingback_header');

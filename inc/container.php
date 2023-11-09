<?php

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;


/**
 * Allow modifying the default bootstrap container class
 * @return string
 */
if (!function_exists('rosegarden_container_class')) {
  function rosegarden_container_class() {
    return "container";
  }
}

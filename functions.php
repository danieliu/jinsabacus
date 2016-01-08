<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

$header = array(
  'width' => 1500,
  'height' => 890,
  'default-image' => get_template_directory_uri() . '/dist/images/header.jpg',
);

add_theme_support('custom-header', $header);

// Post excerpt length
function custom_excerpt_length( $length ) {
  return 35;
}
add_filter('excerpt_length', 'custom_excerpt_length');

// Post excerpt ellipsis
function new_excerpt_more( $more ) {
  return ' [...]';
}
add_filter('excerpt_more', 'new_excerpt_more');

add_image_size( 'custom-thumb', 640, 360, array( 'center', 'center') );
add_image_size( 'custom-splash', 1920, 1080, array( 'center', 'center') );
<?php

// Including stylesheets and script files
function load_scripts() {
  wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.1.3', true);
  wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), '5.1.3', 'all');
  wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'load_scripts');

// Main configuration function
function learnwp_config() {

  // Create menus for theme, otherwise wouldn't display in admin
  register_nav_menus (
    array (
      'main_menu' => 'Main Menu',
      'footer_menu' => 'Footer Menu'
    )
  );

  // Add header image
  $args = array (
    'height' => 225,
    'width' => 1920
  );
  add_theme_support('custom-header', $args);

  // Add featured image for post
  add_theme_support('post-thumbnails');

  add_theme_support('post-formats', array('video', 'image'));

}
add_action('after_setup_theme', 'learnwp_config', 0);

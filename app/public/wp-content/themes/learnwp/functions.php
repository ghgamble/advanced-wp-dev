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

  $args = array (
    'height' => 225,
    'width' => 1920
  );
  add_theme_support('custom-header', $args);
  add_theme_support('post-thumbnails');
  add_theme_support('post-formats', array('video', 'image'));

}
add_action('after_setup_theme', 'learnwp_config', 0);

function learnwp_sidebars() {
  register_sidebar (
    array (
      'name' => 'Home Page Sidebar',
      'id' => 'sidebar-1',
      'description' => 'This is the home page sidebar. You can add your widgets here.',
      'before_widget' => '<div class="widget-wrapper">',
      'after_widget' => '</div>',
      'before_title' => '<h2 class="widget-title">',
      'after_title' => '</h2>'
    )
  );
  register_sidebar (
    array (
      'name' => 'Blog Sidebar',
      'id' => 'sidebar-2',
      'description' => 'This is the blog sidebar. You can add your widgets here.',
      'before_widget' => '<div class="widget-wrapper">',
      'after_widget' => '</div>',
      'before_title' => '<h2 class="widget-title">',
      'after_title' => '</h2>'
    )
  );
}
add_action('widgets_init', 'learnwp_sidebars');

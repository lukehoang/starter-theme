<?php
// Enqueue css and js
add_action('wp_enqueue_scripts', 'enqueue_assets');
function enqueue_assets()
{
  wp_register_style(
    'main-styles',
    get_template_directory_uri() . '/dist/index.css',
    [],
    filemtime(get_stylesheet_directory() . '/dist/index.css'),
    false
  );
  wp_register_script(
    'main-scripts',
    get_template_directory_uri() . '/dist/index.js',
    [],
    filemtime(get_stylesheet_directory() . '/dist/index.js'),
    true
  );

  wp_enqueue_style('main-styles');
  wp_enqueue_script('main-scripts');
}

// Config Custom Post Type
require_once get_template_directory() . '/config/cpt.php';

// Config and Register Nav Menu
require_once get_template_directory() . '/config/nav-menu.php';

// Register logo
require_once get_template_directory() . '/config/logo.php';

// enable Dashicons lib
function ww_load_dashicons(){
  wp_enqueue_style('dashicons');
}
add_action('wp_enqueue_scripts', 'ww_load_dashicons', 999);

// hide classic editor
add_action( 'init', function() {
  remove_post_type_support( 'portrait', 'editor' );
  remove_post_type_support( 'page', 'editor' );
}, 99);

// add classes to Post Link
function add_class_next_post_link($html){
  $html = str_replace('<a','<a class="mx-3 my-1 next-posts custom-btn-next"',$html);
  return $html;
}
add_filter('next_post_link','add_class_next_post_link',10,1);

function add_class_previous_post_link($html){
  $html = str_replace('<a','<a class="mx-3 my-1 prev-posts custom-btn-prev"',$html);
  return $html;
}
add_filter('previous_post_link','add_class_previous_post_link',10,1);

<?php

require get_theme_file_path('/includes/register-styles.php');
require get_theme_file_path('/includes/register-scripts.php');
// require get_theme_file_path('/includes/register-areas.php');
require get_theme_file_path('/includes/custom-functions.php');
// require get_theme_file_path('/includes/custom-post-type.php');



function theme_features()
{
  add_theme_support('title-tag');
  add_theme_support('menus');
  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');


  register_nav_menus(
    array(
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
        'footer-menu' => 'Footer Menu Location',
    )
);
}

add_action('after_setup_theme', 'theme_features');


//Security
add_filter( 'rest_endpoints', function( $endpoints )
{
  if ( isset( $endpoints['/wp/v2/users'] ) ) 
  {
      unset( $endpoints['/wp/v2/users'] );
  }    return $endpoints;
});

remove_action('wp_head', 'wp_generator');

function remove_wp_version_rss() 
{
  return'';
}
add_filter('the_generator','remove_wp_version_rss');

function defer_parsing_of_js($url)
{
  if (is_admin()) return $url; //don't break WP Admin
  if (false === strpos($url, '.js')) return $url;
  if (strpos($url, 'jquery.js')) return $url;
  return str_replace(' src', ' defer src', $url);
}
add_filter('script_loader_tag', 'defer_parsing_of_js', 10);
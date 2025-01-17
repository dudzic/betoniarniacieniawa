<?php

function scripts()
{
  // wp_enqueue_script("jquery");

  wp_register_script('jquery', get_template_directory_uri() . '/build/js/jquery.min.js', array(), '1.0.0', false);
  wp_enqueue_script('jquery');

  wp_register_script('modernizr', get_template_directory_uri() . '/build/js/modernizr.js', array(), '1.0.0', false);
  wp_enqueue_script('modernizr');

  wp_register_script('bootstrap', get_template_directory_uri() . '/build/js/bootstrap.min.js', array(), '1.0.0', true);
  wp_enqueue_script('bootstrap');

  wp_register_script('carousel', get_template_directory_uri() . '/build/js/owl.carousel.js', array(), '1.0.0', true);
  wp_enqueue_script('carousel');

  wp_register_script('magnific-popup', get_template_directory_uri() . '/build/js/jquery.magnific-popup.min.js', array(), '1.0.0', true);
  wp_enqueue_script('magnific-popup');
  
  wp_register_script('theme-js', get_template_directory_uri() . '/build/index.js', array(), '1.0.0', true);
  wp_enqueue_script('theme-js');
}

add_action('wp_enqueue_scripts', 'scripts');
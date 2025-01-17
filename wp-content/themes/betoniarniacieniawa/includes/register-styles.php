<?php

function styles()
{
  wp_register_style('bootstrap', get_template_directory_uri(). '/build/css/bootstrap.min.css', array(), '1.0.0', 'all');
  wp_enqueue_style('bootstrap');

  wp_register_style('carousel', get_template_directory_uri(). '/build/css/owl.carousel.min.css', array(), '1.0.0', 'all');
  wp_enqueue_style('carousel');

  wp_register_style('default', get_template_directory_uri(). '/build/css/owl.theme.default.min.css', array(), '1.0.0', 'all');
  wp_enqueue_style('default');

  wp_register_style('popup', get_template_directory_uri(). '/build/css/magnific-popup.css', array(), '1.0.0', 'all');
  wp_enqueue_style('popup');

  wp_register_style('animate', get_template_directory_uri(). '/build/css/animate.min.css', array(), '1.0.0', 'all');
  wp_enqueue_style('animate');

  wp_register_style('brands', get_template_directory_uri(). '/build/css/brands.css', array(), '1.0.0', 'all');
  wp_enqueue_style('brands');

  wp_register_style('solid', get_template_directory_uri(). '/build/css/solid.css', array(), '1.0.0', 'all');
  wp_enqueue_style('solid');

  wp_register_style('theme-style', get_template_directory_uri(). '/build/style-index.css', array(), '1.0.0', 'all');
  wp_enqueue_style('theme-style');
}

add_action('wp_enqueue_scripts','styles');
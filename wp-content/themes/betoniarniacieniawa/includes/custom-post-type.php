<?php
function typPostu()
{
  $labels = array(
    'name'                => _x( 'Oferty pracy', 'Post Type General Name', 'text_domain' ),
    'singular_name'       => _x( 'Oferta pracy', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'           => __( 'Oferty pracy', 'text_domain' ),
    'parent_item_colon'   => __( 'Nadrzędna Oferta', 'text_domain' ),
    'all_items'           => __( 'Wszystkie Oferty', 'text_domain' ),
    'view_item'           => __( 'Zobacz Ofertę', 'text_domain' ),
    'add_new_item'        => __( 'Dodaj nową Ofertę', 'text_domain' ),
    'add_new'             => __( 'Dodaj nową', 'text_domain' ),
    'edit_item'           => __( 'Edytuj Ofertę', 'text_domain' ),
    'update_item'         => __( 'Aktualizuj Ofertę', 'text_domain' ),
    'search_items'        => __( 'Szukaj Ofert', 'text_domain' ),
    'not_found'           => __( 'Nie znaleziono', 'text_domain' ),
    'not_found_in_trash'  => __( 'Nie znaleziono w Koszu', 'text_domain' ),
  );
  $args = array(
    'label'               => __( 'jobs', 'text_domain' ),
    'description'         => __( 'Dostępne oferty pracy', 'text_domain' ),
    'labels'              => $labels,
    'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail' ),
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 5,
    'menu_icon'           => 'dashicons-portfolio',
    'can_export'          => true,
    'has_archive'         => false,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'post',
    'show_in_rest'        => true,
    'rewrite'             => array( 'slug' => 'events' ),
  );

  register_post_type( 'jobs', $args );
}

add_action('init', 'typPostu', 0);
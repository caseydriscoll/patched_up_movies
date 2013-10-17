<?php

add_action( 'init', 'create_patched_up_actor_post_type' );
function create_patched_up_actor_post_type() {
  register_post_type( 'patched_up_actor',
    array(
      'labels' => array(
                    'name' => __( 'Actors' ),
                    'singular_name' => __( 'Actor' ),
                    'menu_name' => __( 'Actors'),
                    'all_items' => __( 'Actors'),
                    'add_new' => __( 'Add New'),
                    'add_new_item' => __( 'Add New Actor'),
                    'edit_item' => __( 'Edit Actor'),
                    'new_item' => __( 'New Actor'),
                    'view_item' => __( 'View Actor'),
                    'search_items' => __( 'Search Actors'),
                    'not_found' => __( 'No actors found'),
                    'not_found_in_trash' => __( 'No actors found in Trash'),
                  ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'actors'),
      'show_ui' => true,
    )
  );
}


?>

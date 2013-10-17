<?php

add_action( 'init', 'create_patched_up_movie_post_type' );
function create_patched_up_movie_post_type() {
  register_post_type( 'patched_up_movie',
    array(
      'labels' => array(
                    'name' => __( 'Movies' ),
                    'singular_name' => __( 'Movie' ),
                    'menu_name' => __( 'Movies'),
                    'all_items' => __( 'Movies'),
                    'add_new' => __( 'Add New'),
                    'add_new_item' => __( 'Add New Movie'),
                    'edit_item' => __( 'Edit Movie'),
                    'new_item' => __( 'New Movie'),
                    'view_item' => __( 'View Movie'),
                    'search_items' => __( 'Search Movies'),
                    'not_found' => __( 'No movies found'),
                    'not_found_in_trash' => __( 'No movies found in Trash'),
                  ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'movies'),
      'show_ui' => true,
    )
  );
}


?>

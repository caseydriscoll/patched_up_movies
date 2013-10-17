<?php

add_action( 'init', 'create_patched_up_person_post_type' );
function create_patched_up_person_post_type() {
  register_post_type( 'patched_up_person',
    array(
      'labels' => array(
                    'name' => __( 'People' ),
                    'singular_name' => __( 'Person' ),
                    'menu_name' => __( 'People'),
                    'all_items' => __( 'People'),
                    'add_new' => __( 'Add New'),
                    'add_new_item' => __( 'Add New Person'),
                    'edit_item' => __( 'Edit Person'),
                    'new_item' => __( 'New Person'),
                    'view_item' => __( 'View Person'),
                    'search_items' => __( 'Search People'),
                    'not_found' => __( 'No people found'),
                    'not_found_in_trash' => __( 'No people found in Trash'),
                  ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'people'),
      'show_ui' => true,
    )
  );
}


?>

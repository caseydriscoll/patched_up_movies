<?php

/* Plugin Name: Patched Up Movies
 * Plugin URI: http://patchedupcreative.com/plugins/movies
 * Description: A small movie plugin to test posts-to-posts
 * Author: Casey Patrick Driscoll
 * Author URI: http://caseypatrickdriscoll.com
 * Version: 0.0.3
 */

include 'class-patched-up-movie.php';
include 'class-patched-up-person.php';

add_action('p2p_init', 'patched_up_movie_person_connection' );
function patched_up_movie_person_connection() {
  p2p_register_connection_type( array(
    'name' => 'movies_to_people',
    'from' => 'patched_up_movie',
    'to' => 'patched_up_person',
    'admin_column' => 'any',
    'admin_box' => array(
      'show' => 'any',
      'context' => 'side',
    ),
    'fields' => array(
      'role' => array(
        'title' => 'Role',
        'type' => 'select',
        'values' => array( 'Actor', 'Director', 'Producer' ),
        'default' => 'Actor',
      ),
    ),
    'from_labels' => array(
      'singular_name' => 'Movie',
      'search_items' => 'Search movie',
      'not_found' => 'No movies found',
      'create' => 'Add movie',
      'column_title' => 'People',
    ),
    'to_labels' => array(
      'singular_name' => 'Person',
      'search_items' => 'Search people',
      'not_found' => 'No people found',
      'create' => 'Add person',
      'column_title' => 'Movies',
    ),
    'title' => array(
      'from' => 'Movies',
      'to' => 'People',
    )
  ));
}

?>

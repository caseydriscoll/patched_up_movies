<?php

/* Plugin Name: Patched Up Movies
 * Plugin URI: http://patchedupcreative.com/plugins/movies
 * Description: A small movie plugin to test posts-to-posts
 * Author: Casey Patrick Driscoll
 * Author URI: http://caseypatrickdriscoll.com
 * Version: 0.0.2
 */

include 'class-patched-up-movie.php';
include 'class-patched-up-actor.php';

add_action('p2p_init', 'patched_up_movie_actor_connection' );
function patched_up_movie_actor_connection() {
  p2p_register_connection_type( array(
    'name' => 'movies_to_actors',
    'from' => 'patched_up_movie',
    'to' => 'patched_up_actor',
    'admin_column' => 'any',
    'admin_box' => array(
      'show' => 'any',
      'context' => 'side',
    ),
    'fields' => array(
      'role' => array(
        'title' => 'Role',
        'type' => 'select',
        'values' => array( 'actor', 'director', 'producer' ),
      ),
    ),
    'from_labels' => array(
      'singular_name' => 'Movie',
      'search_items' => 'Search movie',
      'not_found' => 'No movies found',
      'create' => 'Add movie',
      'column_title' => 'Actors',
    ),
    'to_labels' => array(
      'singular_name' => 'Actor',
      'search_items' => 'Search actors',
      'not_found' => 'No actors found',
      'create' => 'Add actor',
      'column_title' => 'Movies',
    ),
    'title' => array(
      'from' => 'Movies',
      'to' => 'Actors',
    )
  ));
}

?>

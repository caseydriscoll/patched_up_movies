=== Plugin Name ===
Contributors: caseypatrickdriscoll
Donate link: http://caseypatrickdriscoll.com/
Tags: movies, posts-2-posts
Requires at least: 3.0.1
Tested up to: 3.6.1
Stable tag: 0.0.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Small plugin to store movies and learn scribu's posts=2-posts plugin

== Description ==

This plugin uses custom fields to store movies and everything that a movie has in many to many relationships:

= People =
* Actors
* Directors
* Producers
* Writers

= Places =
* Sets
* Filming Locations
* Fictional Locations?

= Things = 
* Production Studios


* Etc. I will add things as I think of them


== Installation ==

1. Upload `patched_up_movies/` directory to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

== Screenshots ==

== Changelog ==

= 0.0.3 =
* Change actors to people and update roles

= 0.0.2 =
* Get posts and pages connection working
* Add movies custom post type with all labels
* Add actors custom post type with all labels
* Link movies and actors one way
* Link movies and actors both ways (was automatic)

* Remove poasts to pages connection

= 0.0.1 =
* Init and readme

== Todo ==

* Figure out what goes in movies and actors
* Get rid of p2p plugin and just use core
* Make sure core is a git submodule

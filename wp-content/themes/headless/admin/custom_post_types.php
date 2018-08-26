<?php

add_action('init', 'create_custom_post_types');
function create_custom_post_types()
{
    // Movies Post Type
    $labels = array(
        'name' => __('Movies', 'post type general name'),
        'singular_name' => __('Movie', 'post type singular name'),
        'add_new' => __('Add New Movie', 'Add New Movie'),
        'add_new_item' => __('Add New Movie'),
        'edit_item' => __('Edit Movie'),
        'new_item' => __('New Movie'),
        'view_item' => __('View Movie'),
        'search_items' => __('Search Movies'),
        'not_found' =>  __('Nothing found'),
        'not_found_in_trash' => __('Nothing found in Trash'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_nav_menus' => true,
        'show_in_rest' => true,
        'rest_base' => 'movies',
        'has_archive' => false,
        'has_archive_string' => '',
        'exclude_from_search' => false,
        'hierarchical' => false,
        'query_var' => true,
        'query_var_slug' => '',
        'rewrite' => true,
        'rewrite_slug' => '',
        'rewrite_withfront' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-video-alt3',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'revisions')
    );
    register_post_type('movies', $args);
}
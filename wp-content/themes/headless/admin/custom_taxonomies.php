<?php
add_action('init', 'create_custom_taxonomies', 0);
function create_custom_taxonomies()
{

    // Type Taxonomy
    $labels = array(
        'name'              => __('Types', 'taxonomy general name'),
        'singular_name'     => __('Type', 'taxonomy singular name'),
        'search_items'      => __('Search Types'),
        'all_items'         => __('All Types'),
        'parent_item'       => __('Parent Type'),
        'parent_item_colon' => __('Parent Type:'),
        'edit_item'         => __('Edit Type'),
        'update_item'       => __('Update Type'),
        'add_new_item'      => __('Add New Type'),
        'new_item_name'     => __('New Type Name'),
        'menu_name'         => __('Types'),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'types'),
    );
    register_taxonomy('type', array('POST_TYPE_SLUG'), $args);
}
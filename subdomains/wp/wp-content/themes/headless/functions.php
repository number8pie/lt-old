<?php

// Custom Post Types
include(get_template_directory() . '/admin/custom_post_types.php');

// Custom Taxonomies
include(get_template_directory() . '/admin/custom_taxonomies.php');

// Shortcodes
include(get_template_directory() . '/admin/shortcodes.php');

add_theme_support('post-thumbnails');
add_action( 'after_switch_theme', 'flush_rewrite_rules' );
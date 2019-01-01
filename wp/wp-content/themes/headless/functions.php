<?php

// Custom Post Types
include(get_template_directory() . '/admin/custom_post_types.php');

// Custom Taxonomies
include(get_template_directory() . '/admin/custom_taxonomies.php');

// Shortcodes
include(get_template_directory() . '/admin/shortcodes.php');

// ACF Functions
include(get_template_directory() . '/admin/acf_functions.php');

// Theme Thumbnail Support
add_theme_support('post-thumbnails');
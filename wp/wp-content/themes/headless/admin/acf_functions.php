<?php

if (function_exists('acf_add_options_page')) {
    $parent = acf_add_options_page(array(
        'page_title'     => 'Site Options',
        'menu_slug'     => 'clicky_options',
        'position'         => 61
    ));
    acf_add_options_sub_page(array(
        'page_title'     => 'Global Settings',
        'menu_title'     => 'Global',
        'parent_slug'     => $parent['menu_slug'],
    ));

    acf_add_options_sub_page(array(
        'page_title'     => 'Header Settings',
        'menu_title'     => 'Header',
        'parent_slug'     => $parent['menu_slug'],
    ));

    acf_add_options_sub_page(array(
        'page_title'     => 'Footer Settings',
        'menu_title'     => 'Footer',
        'parent_slug'     => $parent['menu_slug'],
    ));

    acf_add_options_sub_page(array(
        'page_title'     => 'Map Settings',
        'menu_title'     => 'Maps',
        'parent_slug'     => $parent['menu_slug'],
    ));

    acf_add_options_sub_page(array(
        'page_title'     => '404 Settings',
        'menu_title'     => '404',
        'parent_slug'     => $parent['menu_slug'],
    ));

    acf_add_options_sub_page(array(
        'page_title'     => 'Contact Settings',
        'menu_title'     => 'Contact',
        'parent_slug'     => $parent['menu_slug'],
    ));

    acf_add_options_sub_page(array(
        'page_title'     => 'Social Settings',
        'menu_title'     => 'Social',
        'parent_slug'     => $parent['menu_slug'],
    ));

    acf_add_options_sub_page(array(
        'page_title'     => 'Form Settings',
        'menu_title'     => 'Forms',
        'parent_slug'     => $parent['menu_slug'],
    ));

    acf_add_options_sub_page(array(
        'page_title'     => 'Sitemap Settings',
        'menu_title'     => 'Sitemap',
        'parent_slug'     => $parent['menu_slug'],
    ));
}

function acf_global_options()
{

    acf_add_local_field_group(array(
        'key' => 'global_options',
        'title' => 'Global Options',
        'label_placement' => 'left',
        'fields' => array (
            array (
                'key' => 'field_default_bg_image',
                'label' => 'Default Bg',
                'name' => 'default_bg_image',
                'type' => 'image',
                'return_format' => 'id',
                'preview_size' => 'medium',
            )
        ),
        'location' => array (
            array (
                array (
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-global',
                ),
            ),
        ),
    ));

    acf_add_local_field_group(array(
        'key' => 'header_options',
        'title' => 'Header Options',
        'label_placement' => 'left',
        'fields' => array (
            array (
                'key' => 'field_header_bg_image',
                'label' => 'Header Bg Image',
                'name' => 'header_bg_image',
                'type' => 'image',
                'return_format' => 'id',
                'preview_size' => 'medium',
            )
        ),
        'location' => array (
            array (
                array (
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-header',
                ),
            ),
        ),
    ));

    acf_add_local_field_group(array(
        'key' => 'footer_options',
        'title' => 'Footer Options',
        'label_placement' => 'left',
        'fields' => array (
            array (
                'key' => 'field_footer_bg_image',
                'label' => 'Footer Bg Image',
                'name' => 'footer_bg_image',
                'type' => 'image',
                'return_format' => 'id',
                'preview_size' => 'medium',
            )
        ),
        'location' => array (
            array (
                array (
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-footer',
                ),
            ),
        ),
    ));

    acf_add_local_field_group(array(
        'key' => 'map_options',
        'title' => 'Map Options',
        'label_placement' => 'left',
        'fields' => array (
            array(
                'key' => 'field_google_maps_api_key',
                'label' => 'Google Maps API Key',
                'name' => 'google_maps_api_key',
                'type' => 'text',
            ),
            array(
                'key' => 'field_office_location_lat',
                'label' => 'Office Latitude',
                'name' => 'office_location_lat',
                'type' => 'text',
            ),
            array(
                'key' => 'field_office_location_lng',
                'label' => 'Office Longitude',
                'name' => 'office_location_lng',
                'type' => 'text',
            ),
            array(
                'key' => 'field_maps_custom_pin_image',
                'label' => 'Map Pin Image',
                'name' => 'maps_custom_pin_image',
                'type' => 'image',
                'return_format' => 'id',
                'preview_size' => 'thumbnail',
            )
        ),
        'location' => array (
            array (
                array (
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-maps',
                ),
            ),
        ),
    ));

    acf_add_local_field_group(array(
        'key' => '404_options',
        'title' => '404 Page Options',
        'label_placement' => 'left',
        'fields' => array (
            array(
                'key' => 'field_error_404_title',
                'label' => '404 Page Title',
                'name' => 'error_404_title',
                'type' => 'text',
            ),
            array(
                'key' => 'field_error_404_image',
                'label' => '404 Page Background Image',
                'name' => 'error_404_image',
                'type' => 'image',
                'return_format' => 'id',
                'preview_size' => 'medium',
            ),
            array(
                'key' => 'field_error_404_content',
                'label' => '404 Page Content',
                'name' => 'error_404_content',
                'type' => 'wysiwyg',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-404',
                ),
            ),
        ),
    ));

    acf_add_local_field_group(array(
        'key' => 'contact_options',
        'title' => 'Contact Details',
        'label_placement' => 'left',
        'fields' => array (
            array(
                'key' => 'field_phone_number',
                'label' => 'Phone Number',
                'name' => 'phone_number',
                'type' => 'text',
            ),
            array(
                'key' => 'field_email_address',
                'label' => 'Email Address',
                'name' => 'email_address',
                'type' => 'text',
            ),
            array(
                'key' => 'field_address',
                'label' => 'Address',
                'name' => 'address',
                'type' => 'textarea',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-contact',
                ),
            ),
        ),
    ));

    acf_add_local_field_group(array(
        'key' => 'social_options',
        'title' => 'Social URLs',
        'label_placement' => 'left',
        'fields' => array (
            array(
                'key' => 'field_facebook',
                'label' => 'Facebook',
                'name' => 'facebook',
                'type' => 'text',
            ),
            array(
                'key' => 'field_twitter',
                'label' => 'Twitter',
                'name' => 'twitter',
                'type' => 'text',
            ),
            array(
                'key' => 'field_linkedin',
                'label' => 'LinkedIn',
                'name' => 'linkedin',
                'type' => 'text',
            ),
            array(
                'key' => 'field_google_plus',
                'label' => 'Google Plus',
                'name' => 'google_plus',
                'type' => 'text',
            ),
            array(
                'key' => 'field_pinterest',
                'label' => 'Pinterest',
                'name' => 'pinterest',
                'type' => 'text',
            ),
            array(
                'key' => 'field_youtube',
                'label' => 'Youtube',
                'name' => 'youtube',
                'type' => 'text',
            ),
            array(
                'key' => 'field_instagram',
                'label' => 'Instagram',
                'name' => 'instagram',
                'type' => 'text',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-social',
                ),
            ),
        ),
    ));

    acf_add_local_field_group(array(
        'key' => 'form_options',
        'title' => 'Notification Options',
        'label_placement' => 'left',
        'fields' => array (
            array(
                'key' => 'field_form_email_send_address',
                'label' => 'Notification Email Sender',
                'name' => 'form_email_send_address',
                'type' => 'text',
            ),
            array(
                'key' => 'field_form_email_send_password',
                'label' => 'Notification Email Sender Password',
                'name' => 'form_email_send_password',
                'type' => 'password',
            ),
            array(
                'key' => 'field_form_email_recipients',
                'label' => 'Notification Email Recipients',
                'name' => 'form_email_recipients',
                'type' => 'text',
                'instructions' => 'Enter a list of email addresses to recieve form notifications, separated by a comma.',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-forms',
                ),
            ),
        ),
    ));

    acf_add_local_field_group(array(
        'key' => 'sitemap_options',
        'title' => 'Sitemap Options',
        'label_placement' => 'left',
        'fields' => array (
            array(
                'key' => 'field_sitemap_excludes',
                'label' => 'Sitemap Excludes',
                'name' => 'sitemap_excludes',
                'type' => 'relationship',
                'instructions' => 'Choose which pages to exclude from the sitemap.',
                'post_type' => array('page'),
                'filters' => array('search'),
                'return_format' => 'id'
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-sitemap',
                ),
            ),
        ),
    ));
}

add_action('acf/init', 'acf_global_options');
<?php


// create custom post type while plugin activation
function learn_plugin_create_custom_post_type()
{
    $page = [];
    $page['post_title'] = __('Learn Plugin Post Type');
    $page['post_content'] = __('This is a custom post type for Learn Plugin.');
    $page['post_status'] = 'publish';
    $page['post_slug'] = 'learn-plugin-page';
    $page['post_type'] = 'page';
    $page['post_author'] = get_current_user_id();
    $page['post_category'] = array(0);

    // Insert the post into the database
    wp_insert_post($page);
}

register_activation_hook(__FILE__, 'learn_plugin_create_custom_post_type');
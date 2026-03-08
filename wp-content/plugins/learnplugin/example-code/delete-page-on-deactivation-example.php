<?php

// create custom page while plugin activation
function learn_plugin_create_custom_page()
{
    $page = [];
    $page['post_title'] = __('Learn Plugin Page');
    $page['post_content'] = __('This is a custom page for Learn Plugin.');
    $page['post_status'] = 'publish';
    $page['post_slug'] = 'learn-plugin-page';
    $page['post_type'] = 'page';
    $page['post_author'] = get_current_user_id();
    $page['post_category'] = array(0);

    // Insert the post into the database
    $page_id = wp_insert_post($page); // this will create a page with the title "Learn Plugin Post Type" and content "This is a custom post type for Learn Plugin." when the plugin is activated.

    add_option('learn_plugin_page_id', $page_id); // this will save the page id in the database, so we can use it later to delete the page when the plugin is deactivated.

}

register_activation_hook(__FILE__, 'learn_plugin_create_custom_page');



// delete the page created by the plugin when the plugin is deactivated
function learn_plugin_delete_custom_page()
{
    $page_id = get_option('learn_plugin_page_id'); // get the page id from the database
    if ($page_id) {
        wp_delete_post($page_id, true); // delete the page permanently
        delete_option('learn_plugin_page_id'); // delete the option from the database
    }
}

register_deactivation_hook(__FILE__, 'learn_plugin_delete_custom_page'); // delete the custom page on deactivation
// register_uninstall_hook(__FILE__, 'learn_plugin_delete_custom_page'); // delete the custom page on uninstallation
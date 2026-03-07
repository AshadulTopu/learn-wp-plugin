<?php

/**
 *
 * Plugin Name: Learn Plugin
 * Plugin URI: http://wordpress.org/plugins/learn-plugin/
 * Description: Learn how to create a plugin.
 * Author: Ashadul Islam
 * Version: 1.0.1
 * Author URI: https://wordpress.org/author/ashadul-islam
 * Text Domain: learn-plugin
 */

// Do not load directly.
if (!defined('ABSPATH')) {
    die();
}


// add action hook for admin menu
add_action('admin_menu', 'learn_plugin_menu');

// function for add menu in admin sidebar
function learn_plugin_menu()
{
    // add menu page in admin sidebar
    add_menu_page(
        'Learn Plugin', // mandatory
        'Learn Plugin', // mandatory
        'manage_options', // mandatory
        'learn-plugin', // mandatory
        'learn_plugin_page', // mandatory
        'dashicons-wordpress', // optional
        11 // optional
    );


    // =========================================================== //

    // submenu for main menu page
    add_submenu_page(
        'learn-plugin',
        'Add New',
        'Add New',
        'manage_options',
        'learn-plugin',
        'learn_plugin_page'
    );

    // add submenu page in admin sidebar
    add_submenu_page(
        'learn-plugin',
        'View All',
        'View All',
        'manage_options',
        'learn-plugin-view-all',
        'learn_plugin_view_all_page'
    );
}

// function for display content in menu page
function learn_plugin_page()
{
    include plugin_dir_path(__FILE__) . 'views/add-new.php';
}

// function for display content in submenu page
function learn_plugin_view_all_page()
{
    include plugin_dir_path(__FILE__) . 'views/view-all.php';
}
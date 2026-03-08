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

// define constant for plugin version
define('LEARN_PLUGIN_VERSION', '1.0.1');
// define constant for plugin directory
define('LEARN_PLUGIN_DIR_PATH', plugin_dir_path(__FILE__));
define('LEARN_PLUGIN_DIR_VIEW_PATH', plugin_dir_path(__FILE__) . 'views/');
define('LEARN_PLUGIN_DIR_ASSETS_PATH', plugin_dir_path(__FILE__) . 'assets/');
// define constant for plugin url
define('LEARN_PLUGIN_URL', plugin_dir_url(__FILE__));
// define constant for plugin text domain
// define('LEARN_PLUGIN_TEXT_DOMAIN', 'learn-plugin');
// define constant for plugin file
// define('LEARN_PLUGIN_FILE', __FILE__);


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
    include LEARN_PLUGIN_DIR_VIEW_PATH . '/add-new.php';
}

// function for display content in submenu page
function learn_plugin_view_all_page()
{
    include LEARN_PLUGIN_DIR_VIEW_PATH . '/view-all.php';
}


// load plugin styles and scripts
require_once LEARN_PLUGIN_DIR_PATH . 'include/plugin-script.php';
require_once LEARN_PLUGIN_DIR_PATH . 'include/database-table-on-installation.php';
require_once LEARN_PLUGIN_DIR_PATH . 'include/database-table-drop-on-uninstallation.php';
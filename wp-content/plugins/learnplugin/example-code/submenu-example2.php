<?php
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
        'Learn Plugin Submenu Page',
        'Add New',
        'manage_options',
        'learn-plugin',
        'learn_plugin_page'
    );

    // add submenu page in admin sidebar
    add_submenu_page(
        'learn-plugin',
        'Learn Plugin Submenu Page',
        'Learn Plugin Submenu Combined',
        'manage_options',
        'learn-plugin-submenu-combined',
        'learn_plugin_submenu_page'
    );
}

// function for display content in menu page
function learn_plugin_page()
{
    ?>
    <div class="wrap">
        <h1>Learn Plugin</h1>
        <p>This is the content of the Learn Plugin page.</p>
    </div>
        <?php
}
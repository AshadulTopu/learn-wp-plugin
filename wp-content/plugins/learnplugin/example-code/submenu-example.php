<?php

// =========================================================== //
// add submenu page in admin sidebar / separate action hook for submenu
add_action('admin_menu', 'learn_plugin_submenu');

// function for add submenu in admin sidebar
function learn_plugin_submenu()
{
    add_submenu_page(
        'learn-plugin',
        'Learn Plugin Submenu',
        'Learn Plugin Submenu Separate',
        'manage_options',
        'learn-plugin-submenu-separate',
        'learn_plugin_submenu_page'
    );
}

// function for display content in submenu page
function learn_plugin_submenu_page()
{
    ?>
    <div class="wrap">
        <h1>Learn Plugin Submenu</h1>
        <p>This is the content of the Learn Plugin Submenu page.</p>
    </div>
        <?php
}
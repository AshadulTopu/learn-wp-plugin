<?php

// uninstallation hook

function learn_plugin_uninstall()
{
    global $wpdb;
    $table_name = $wpdb->prefix . 'learn_plugin_table';
    $sql = "DROP TABLE IF EXISTS $table_name;";
    $wpdb->query($sql);
}

// register_uninstall_hook(__FILE__, 'learn_plugin_uninstall'); // uninstallation hook when delete the plugin,
register_deactivation_hook(__FILE__, 'learn_plugin_uninstall'); // uninstallation hook when deactive the plugin
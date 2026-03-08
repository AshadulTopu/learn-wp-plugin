<?php

// uninstallation hook

// function learn_plugin_uninstall()
// {
//     global $wpdb;
//     $table_name = $wpdb->prefix . 'learn_plugin_table';
//     $sql = "DROP TABLE IF EXISTS $table_name;";
//     $wpdb->query($sql);
// }

// register_uninstall_hook(__FILE__, 'learn_plugin_uninstall'); // uninstallation hook not working because this file is included in main plugin file and uninstallation hook should be register in main plugin file only. so we will move this code to main plugin file.
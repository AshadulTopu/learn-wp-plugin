<?php



/* main way to call activation hook, it work only in main plugin file */
// ============================================================ //

// activation hook
// function learn_plugin_install()
// {
//     global $wpdb;
//     if ($wpdb->get_var("SHOW TABLES LIKE '{$wpdb->prefix}learn_plugin_table'") != "{$wpdb->prefix}learn_plugin_table") {
//         // learn_plugin_create_table();
//         $table_name = $wpdb->prefix . 'learn_plugin_table';
//         $charset_collate = $wpdb->get_charset_collate();

//         $sql = "CREATE TABLE $table_name (
//             id int(11) NOT NULL AUTO_INCREMENT,
//             name varchar(255) NOT NULL,
//             email varchar(255) NOT NULL,
//             phone varchar(255) NOT NULL,
//             created_at datetime DEFAULT CURRENT_TIMESTAMP,
//             PRIMARY KEY  (id)
//         ) $charset_collate;";
//         require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
//         dbDelta($sql);
//     }
// }

// register_activation_hook(__FILE__, 'learn_plugin_install'); // activation hook not working because this file is included in main plugin file and activation hook should be register in main plugin file only. so we will move this code to main plugin file.





// =========================================================== //

// different way to create table on plugin activation

// ...existing code...

// require_once(plugin_dir_path(__FILE__) . 'include/database-table-on-installation.php');
// register_activation_hook(__FILE__, 'learn_plugin_install');
// link the file and call the activation hook on main plugin file because activation hook should be register in main plugin file only.
// ...existing code...



//  create the function in this file and call the function in main plugin file because activation hook should be register in main plugin file only.

// function learn_plugin_install()
// {
//     global $wpdb;
//     if ($wpdb->get_var("SHOW TABLES LIKE '{$wpdb->prefix}learn_plugin_table'") != "{$wpdb->prefix}learn_plugin_table") {
//         $table_name = $wpdb->prefix . 'learn_plugin_table';
//         $charset_collate = $wpdb->get_charset_collate();

//         $sql = "CREATE TABLE $table_name (
//             id int(11) NOT NULL AUTO_INCREMENT,
//             name varchar(255) NOT NULL,
//             email varchar(255) NOT NULL,
//             phone varchar(255) NOT NULL,
//             created_at datetime DEFAULT CURRENT_TIMESTAMP,
//             PRIMARY KEY  (id)
//         ) $charset_collate;";
//         require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
//         dbDelta($sql);
//     }
// }
// Remove the register_activation_hook from here
<?php


// activation hook
function learn_plugin_install()
{
    global $wpdb;
    if ($wpdb->get_var("SHOW TABLES LIKE '{$wpdb->prefix}learn_plugin_table'") != "{$wpdb->prefix}learn_plugin_table") {
        // learn_plugin_create_table();
        $table_name = $wpdb->prefix . 'learn_plugin_table';
        $charset_collate = $wpdb->get_charset_collate();

        $sql = "CREATE TABLE $table_name (
id int(11) NOT NULL AUTO_INCREMENT,
name varchar(255) NOT NULL,
email varchar(255) NOT NULL,
phone varchar(255) NOT NULL,
created_at datetime DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY (id)
) $charset_collate;";
        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);
    }
}

register_activation_hook(__FILE__, 'learn_plugin_install');
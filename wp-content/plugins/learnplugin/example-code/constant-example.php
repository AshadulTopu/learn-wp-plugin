<?php



// define constant for plugin version
define('LEARN_PLUGIN_VERSION', '1.0.1');
// define constant for plugin directory
define('LEARN_PLUGIN_DIR_PATH', plugin_dir_path(__FILE__));
define('LEARN_PLUGIN_DIR_VIEW_PATH', plugin_dir_path(__FILE__) . 'views/');
define('LEARN_PLUGIN_DIR_ASSETS_PATH', plugin_dir_path(__FILE__) . 'assets/');
// define constant for plugin url
define('LEARN_PLUGIN_URL', plugin_dir_url(__FILE__));
// define constant for plugin text domain
define('LEARN_PLUGIN_TEXT_DOMAIN', 'learn-plugin');
// define constant for plugin file
define('LEARN_PLUGIN_FILE', __FILE__);


// uses of constant
echo 'Plugin Version: ' . LEARN_PLUGIN_VERSION;
echo '<br>';

// require_once LEARN_PLUGIN_DIR . 'includes/functions.php';
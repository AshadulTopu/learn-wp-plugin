<?php

// Enqueue plugin styles & scripts
function learn_plugin_enqueue_styles()
{
    wp_enqueue_style('learn-plugin-main', LEARN_PLUGIN_URL . 'assets/css/style.css', array(), LEARN_PLUGIN_VERSION);

}
add_action('init', 'learn_plugin_enqueue_styles');

// Enqueue plugin scripts
function learn_plugin_enqueue_scripts()
{
    wp_enqueue_script('learn-plugin-main', LEARN_PLUGIN_URL . 'assets/js/main.js', array('jquery'), LEARN_PLUGIN_VERSION, true);
}
add_action('init', 'learn_plugin_enqueue_scripts');

// // Enqueue plugin scripts
// function learn_plugin_enqueue_admin_scripts()
// {
//     wp_enqueue_script('learn-plugin-admin', LEARN_PLUGIN_URL . 'assets/js/admin.js', array('jquery'), LEARN_PLUGIN_VERSION, true);
// }
// add_action('admin_enqueue_scripts', 'learn_plugin_enqueue_admin_scripts');



// // ============================================================ //
// // localize script
// // localize script for passing data from PHP to JavaScript
// function learn_plugin_localize_script()
// {
//     // wp_localize_script('learn-plugin-main', 'learnPluginData', array(
//     //     'ajaxUrl' => admin_url('admin-ajax.php'),
//     //     // 'nonce' => wp_create_nonce('learn_plugin_nonce'),
//     // ));

//     wp_localize_script(
//         'learn-plugin-main',
//         'ajaxUrl', // this is the name of the JavaScript variable that will be created in the global scope, so we can use it in our JavaScript code to access the AJAX URL.
//         admin_url('admin-ajax.php'),
//     );
// }
// add_action('init', 'learn_plugin_localize_script');



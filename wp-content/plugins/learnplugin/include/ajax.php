<?php

// // Handle AJAX request
// function learn_plugin_handle_ajax_request()
// {
//     // Check for required parameters
//     if (!isset($_POST['action']) || $_POST['action'] !== 'learn_plugin_handle_ajax_request') {
//         wp_send_json_error('Invalid request');
//     }

//     // Process the request
//     $response = '';

//     switch ($_POST['param']) {
//         case 'get_message':
//             $response = 'Hello from the Learn Plugin!';
//             break;
//         default:
//             $response = 'Unknown parameter';
//             break;
//     }

//     // Send the response
//     wp_send_json_success($response);
// }
// add_action('wp_ajax_learn_plugin_handle_ajax_request', 'learn_plugin_handle_ajax_request');
// add_action('wp_ajax_nopriv_learn_plugin_handle_ajax_request', 'learn_plugin_handle_ajax_request');





// ============================================================ //
// localize script
// localize script for passing data from PHP to JavaScript
function learn_plugin_localize_script()
{
    wp_localize_script(
        'learn-plugin-main',
        'ajaxUrl',
        admin_url('admin-ajax.php')
    );
}
add_action('wp_enqueue_scripts', 'learn_plugin_localize_script');
add_action('admin_enqueue_scripts', 'learn_plugin_localize_script');

// Handle AJAX request for learn_plugin_action
add_action('wp_ajax_learn_plugin_action', 'learn_plugin_handle_ajax');
add_action('wp_ajax_nopriv_learn_plugin_action', 'learn_plugin_handle_ajax');

function learn_plugin_handle_ajax()
{
    check_ajax_referer('learn_plugin_action', 'nonce');
    wp_send_json_success(['message' => 'Success!']);
}

// Handle AJAX request for learn_plugin_library
add_action('wp_ajax_learn_plugin_library', 'learn_plugin_library');
add_action('wp_ajax_nopriv_learn_plugin_library', 'learn_plugin_library');

function learn_plugin_library()
{
    global $wpdb;
    include_once LEARN_PLUGIN_DIR_PATH . 'library/custom-plugin-lib.php';
}
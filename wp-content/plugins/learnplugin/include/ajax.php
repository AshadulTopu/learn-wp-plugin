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
    // wp_localize_script('learn-plugin-main', 'learnPluginData', array(
    //     'ajaxUrl' => admin_url('admin-ajax.php'),
    //     // 'nonce' => wp_create_nonce('learn_plugin_nonce'),
    // ));

    wp_localize_script(
        'learn-plugin-main',
        'ajaxUrl', // this is the name of the JavaScript variable that will be created in the global scope, so we can use it in our JavaScript code to access the AJAX URL.
        admin_url('admin-ajax.php'),
    );
}
add_action('init', 'learn_plugin_localize_script');

if (isset($_REQUEST['action'])) { // Check if the 'action' parameter is set in the request
    switch ($_REQUEST['action']) { // Switch based on the value of the 'action' parameter
        case 'learn_plugin_library':
            add_action('admin_init', 'learn_plugin_library');
            break;
        default:
            wp_send_json_error('Unknown action');
            break;
    }


    function learn_plugin_library() // This function will be called when the AJAX request with action 'learn_plugin_library' is made. We can include the necessary code to handle the request and send a response back to the client.
    {
        global $wpdb;

        include_once LEARN_PLUGIN_DIR_PATH . 'library/custom-plugin-lib.php'; // Include the library file that contains the code to handle the AJAX request. This file should contain the necessary code to process the request and send a response back to the client.
    }

}
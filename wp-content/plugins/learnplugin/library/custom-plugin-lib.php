<?php

$getParam = isset($_REQUEST['param']) ? sanitize_text_field($_REQUEST['param']) : '';

if (!empty($getParam)) {
    if ($getParam === 'get_message') {
        echo json_encode([
            'message' => 'Hello from the Learn Plugin!',
            'version' => LEARN_PLUGIN_VERSION,
            'url' => LEARN_PLUGIN_URL,
        ]);
    } else {
        wp_send_json_error('Unknown parameter');
    }
}
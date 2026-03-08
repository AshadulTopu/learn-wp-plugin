<?php


// ============================================================ //
// localize script
// localize script for passing data from PHP to JavaScript
function learn_plugin_localize_script()
{
    // wp_localize_script('learn-plugin-main', 'learnPluginData', array(
    //     'ajaxUrl' => admin_url('admin-ajax.php'),
    //     'nonce' => wp_create_nonce('learn_plugin_nonce'),
    // ));

    $test_data = array(
        'name' => 'John Doe',
        'email' => 'mD3b3@example.com',
        'phone' => '1234567890',
    );
    wp_localize_script('learn-plugin-main', 'learnPluginData', $test_data); //Key point: wp_localize_script() must reference a script handle that's already been enqueued with wp_enqueue_script().
}
add_action('init', 'learn_plugin_localize_script');


// ============================================================ //
// another way to localize script
function learn_plugin_jscode()
{
    $test_data2 = array(
        'name' => 'John Doe',
        'email' => 'mD3b3@example.com',
        'phone' => '1234567890',
    );
    ?>
    <script type="text/javascript">
        // custom JavaScript code to pass data from PHP to JavaScript
        var learnPluginJS = <?php echo json_encode($test_data2); ?>;
    </script>
    <?php
}
add_action('wp_head', 'learn_plugin_jscode'); // this will add the JavaScript code in the head section of the page, so we can use the learnPluginJS variable in our JavaScript code.
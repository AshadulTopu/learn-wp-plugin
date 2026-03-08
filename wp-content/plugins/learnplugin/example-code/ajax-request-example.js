// Main JavaScript file for Learn Plugin
jQuery(function ($) {

    $('#learn-plugin-button').on('click', function () { // when the button is clicked

        //     alert('Button clicked!');
        //     console.log('Button clicked!');

        //     $.get(learnPluginData.ajaxUrl, function (response) {
        //         console.log('AJAX response:', response);
        //         alert('AJAX response: ' + response);
        //     });

        var post_data = "action=learn_plugin_handle_ajax_request&param=get_message";
        $.post(learnPluginData.ajaxUrl, post_data, function (response) {
            console.log('AJAX response:', response);
            alert('AJAX response: ' + response);
        });

    });

});
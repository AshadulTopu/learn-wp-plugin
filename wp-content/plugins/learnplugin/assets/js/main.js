// Main JavaScript file for Learn Plugin
jQuery(function ($) {

    // $('#learn-plugin-button').on('click', function () {

    //     //     alert('Button clicked!');
    //     //     console.log('Button clicked!');

    //     //     $.get(learnPluginData.ajaxUrl, function (response) {
    //     //         console.log('AJAX response:', response);
    //     //         alert('AJAX response: ' + response);
    //     //     });

    //     //     var post_data = "action=learn_plugin_library&param=get_message";
    //     //     $.post(ajaxUrl, post_data, function (response) {
    //     //         console.log('AJAX response:', response);
    //     //         alert('AJAX response: ' + response);
    //     //     });

    //     // });

    const button = document.getElementById('learn-plugin-button');

    if (button) {
        button.addEventListener('click', function () {
            const nonce = document.querySelector('[name="learn_plugin_nonce"]').value;

            fetch(ajaxUrl, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: 'action=learn_plugin_action&nonce=' + nonce
            })
                .then(response => response.json())
                .then(data => {
                    console.log('Response:', data);
                    if (data.success) {
                        alert(data.data.message);  // Show the success message
                        console.log('Message:', data.data.message);
                    } else {
                        alert('Error: ' + data.data);
                    }
                })
                .catch(error => console.error('Error:', error));
        });
    }


});
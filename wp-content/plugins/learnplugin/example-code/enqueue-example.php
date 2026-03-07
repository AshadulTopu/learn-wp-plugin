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



// theme hook vs plugin hook

add_action('wp_enqueue_scripts', 'wp_enqueue_styles'); // theme hook
add_action('init', 'wp_enqueue_scripts'); // plugin hook
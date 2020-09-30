<?php

/**
 * Plugin Name: Chism Plugin
 */
function my_plugin_activate(){
    printf("I just ran");
}

function my_plugin_activate_two(){
    printf("Actually, I just ran");
}

add_action('init', 'my_plugin_activate');


add_action('init', 'my_plugin_activate_two');
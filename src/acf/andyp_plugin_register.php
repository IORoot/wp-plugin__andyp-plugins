<?php

add_action( 'plugins_loaded', 'register_plugin_list' );

function register_plugin_list() {
    
    do_action('register_andyp_plugin', [
        'title'      => 'AndyP plugin list',
        'message'    => '<p>Lists ALL plugins on this page.</p>',
        'icon'       => 'toy-brick-plus',
        'color'      => '#FCC53B',
        'path'      => __FILE__,
    ]);

}

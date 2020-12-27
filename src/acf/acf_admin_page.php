<?php

add_action('acf/init', 'menu_andyp_plugin_list');

function menu_andyp_plugin_list(){

    if (function_exists('acf_add_options_page')) {
        $args = array(
            'page_title' => '<svg viewBox="0 0 24 24" style="height:1.3em; vertical-align:text-bottom; fill:#FCC53B;" xmlns="http://www.w3.org/2000/svg"><path d="M19 6V5A2 2 0 0 0 17 3H15A2 2 0 0 0 13 5V6H11V5A2 2 0 0 0 9 3H7A2 2 0 0 0 5 5V6H3V20H21V6Z"/></svg> AndyP Plugins',
            'menu_title' => '<svg viewBox="0 0 24 24" style="height:1.3em; vertical-align:text-bottom; fill:#FCC53B;" xmlns="http://www.w3.org/2000/svg"><path d="M19 6V5A2 2 0 0 0 17 3H15A2 2 0 0 0 13 5V6H11V5A2 2 0 0 0 9 3H7A2 2 0 0 0 5 5V6H3V20H21V6Z"/></svg> AndyP Plugins',
            'menu_slug' => 'andyp_plugin_list',
            'capability' => 'manage_options',
            'position' => 1,
            'parent_slug' => 'andyp',
            'icon_url' => 'dashicons-screenoptions',
            'redirect' => true,
            'post_id' => 'options',
            'autoload' => false,
            'update_button'		=> __('Update', 'acf'),
            'updated_message'	=> __("Options Updated", 'acf'),
        );

        acf_add_options_sub_page($args);
    }
}
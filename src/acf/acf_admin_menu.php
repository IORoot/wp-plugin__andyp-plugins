<?php

/**
 * ANDYP Parent Menu
 */

if( function_exists('acf_add_options_page') ) {
    
    $argsparent = array(
        'page_title' => 'ANDYP',
        'menu_title' => 'ANDYP',
        'menu_slug' => 'andyp',
        'capability' => 'manage_options',
        'position' => '1',
        'parent_slug' => '',
        'icon_url' => 'data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMjQgMjQiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTTE0LDE3LjdWMjFIMTBWMjAuM0wxNCwxNy43TTE3LDNIN1Y2SDE3VjNNMTUsN0wxNCw3LjdWN0gxMFYxMC4zTDksMTFWMTJMMTUsOC4xVjdNMTUsMTFMMTQsMTEuN1Y5LjdMMTAsMTIuNFYxNC40TDksMTVWMTZMMTUsMTIuMVYxMU0xNSwxNUwxNCwxNS43VjEzLjdMMTAsMTYuNFYxOC40TDksMTlWMjBMMTUsMTYuMVYxNVoiLz48L3N2Zz4=',
        'redirect' => true,
        'post_id' => 'options',
        'autoload' => false,
        'update_button'		=> __('Update', 'acf'),
        'updated_message'	=> __("Options Updated", 'acf'),
    );
    acf_add_options_page($argsparent);

}
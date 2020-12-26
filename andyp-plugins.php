<?php
/*
Plugin Name: _ANDYP - Plugins Menu Parent
Plugin URI: http://londonparkour.com
Description: <strong>📑Admin Menu</strong> | <em>Wordpress Admin > ANDYP</em>
Version: 1.0
Author: Andy Pearson
Author URI: http://londonparkour.com
*/

// ┌─────────────────────────────────────────────────────────────────────────┐
// │                         Use composer autoloader                         │
// └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/vendor/autoload.php';

// ┌─────────────────────────────────────────────────────────────────────────┐
// │                        		 Menu    		                         │
// └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/src/acf/acf_admin_menu.php';


// ┌─────────────────────────────────────────────────────────────────────────┐
// │                        	  Options Page    		                     │
// └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/src/acf/acf_admin_page.php';


// ┌─────────────────────────────────────────────────────────────────────────┐
// │                        	  Field Group    		                     │
// └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/src/acf/acf_admin_field_group.php';


// ┌─────────────────────────────────────────────────────────────────────────┐
// │                            Register Action  		                     │
// └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/src/action/register_with_plugin_list.php';


// ┌─────────────────────────────────────────────────────────────────────────┐
// │                       Register as new Plugin  		                     │
// └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/src/acf/andyp_plugin_register.php';


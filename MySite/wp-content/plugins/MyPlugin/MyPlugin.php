<?php
/*
Plugin Name: MyPlugin
Plugin URI: http://www.mainwp.com
Description: This plugin does some stuff with WordPress
Version: 1.0
Author: Afsha Mohammed
Author URI: http://www.mainwp.com
License: GPL2
*/

add_action('admin_menu', 'MyPlugin_admin_actions');
function MyPlugin_admin_actions(){
	add_options_page('MyPlugin', 'MyPlugin','manage_options', FILE, 'MyPlugin_admin');	
}
function MyPlugin_admin()
{
	
}
?>


-S

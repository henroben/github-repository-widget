<?php
/**
* Plugin Name: My Github Repos
* Description: Display user repos in widget
* Version: 1.0
* Author: Brad Traversy
*
**/

// Exit if Accessed Directly
if(!defined('ABSPATH')){
	exit;
}

// Include Scripts
require_once(plugin_dir_path(__FILE__) . '/includes/my-github-repos-scripts.php');

// Include Class
require_once(plugin_dir_path(__FILE__) . '/includes/my-github-repos-class.php');

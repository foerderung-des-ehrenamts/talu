<?php

/*
Plugin Name:	talu
Plugin URI:		https://github.com/foerderung-des-ehrenamts/talu
Description:	Custom WordPress Features @ Tafel Ludwigshafen
Version:		0.1
Author: 		Marco Hitschler
Author URI: 	https://www.unmus.de/
License:     	GPL3
License URI: 	https://www.gnu.org/licenses/gpl-3.0.html
Domain Path: 	/languages
Text Domain: 	talu
*/

if (!defined('ABSPATH'))
{
	exit;
}

/**
 * Include the plugin files
 */

require_once('talu_medienspiegel.php'); 
require_once('talu_loop.php'); 

/**
 * Activate the plugin
 * 
 * @package talu
 * @since 0.1
 */

function talu_activate () {
	// add_option('talu_option',"na");
}

register_activation_hook( __FILE__ , 'talu_activate' );

/**
 * Deactivate the plugin
 * 
 * @package talu
 * @since 0.1
 */

function talu_deactivate () {
	// update_option('talu_option',"na");
}

register_deactivation_hook( __FILE__ , 'talu_deactivate' );

/**
 * Delete the plugin
 * 
 * @package talu
 * @since 0.1
 */

function talu_delete () {
	// delete_option('talu_option');
} 

register_uninstall_hook( __FILE__ , 'talu_delete' );

?>
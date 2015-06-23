<?php

/*
Plugin Name: Function to load styles
Plugin URI: https://pippinsplugins.com/series/plugin-development-101/
Description: Loads scripts
Author: Julian Tapping
Version: 1.0
Author URI: 
*/

define( 'PD101_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );


if (is_admin()) {
	include( PD101_PLUGIN_PATH . 'includes/admin-scripts.php' );
} else {
	include( PD101_PLUGIN_PATH . 'includes/scripts.php' );
}
}


include( PD101_PLUGIN_PATH . 'includes/post-types.php' );

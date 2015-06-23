<?php

/*
Plugin Name: Function to load styles
Plugin URI: https://pippinsplugins.com/series/plugin-development-101/
Description: Loads scripts
Author: Julian Tapping
Version: 1.0
Author URI: 
*/

class PD_101 {
	
	function __construct() {
		// $this -> load();
	}

	function load() {

		add_action( 'admin_notices', array( $this, 'notice' ) );

	}

	function notice() {

		echo '<div class="updated><p>This is my admin notice. My plugin works!</p></div>';

	}

}

$pd_101 = new PD_101;

// Run notice
$pd_101->load();

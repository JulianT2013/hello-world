<?php

/*
Plugin Name: Function to load styles
Plugin URI: https://pippinsplugins.com/series/plugin-development-101/
Description: Loads scripts
Author: Julian Tapping
Version: 1.0
Author URI: 
*/

/**
 * Practice Object Orientated Techniques 
 * @since 1.0
 */
class PD_101 {
	
	/**
	 * Initialise the class 
	 * @since 1.0
	 */
	function __construct() {
		// $this -> load();
	}

	/**
	 * Set up our action and filters required
	 * @return void
	 * @since 1.0
	 */
	function load() {

		add_action( 'admin_notices', array( $this, 'notice' ) );

	}

	/**
	 * Display an admin notice telling everyone my OOP plugin works
	 * @return void
	 * @since 1.0
	 */
	function notice() {

		echo '<div class="updated><p>This is my admin notice. My plugin works!</p></div>';

	}

}

$pd_101 = new PD_101();

// Run notice
$pd_101->load();

<?php

/*
Plugin Name: Function to load styles
Plugin URI: https://pippinsplugins.com/series/plugin-development-101/
Description: Loads stylesheet
Author: Julian Tapping
Version: 1.0
Author URI: 
*/

function pd101_load_styles() {
	wp_enqueue_style( 'pd101-styles', plugins_url( 'pd101-styles.css', __FILE__ ) );
	wp_enqueue_script( 'pd101-scripts', plugins_url( 'pd101-scripts.js', __FILE__ ), array( 'jquery' ), '1.1' );
}
add_action( 'wp_enqueue_scripts', 'pd101_load_styles');
<?php

/*
Plugin Name: Function to add dashboard menus
Plugin URI: https://pippinsplugins.com/series/plugin-development-101/
Description: Loads stylesheet
Author: Julian Tapping
Version: 1.0
Author URI: 
*/

function pd101_add_menu_page() {
	add_menu_page( 'Plugin Dev 101', 'PD101', 'edit_pages', 'pd101', 'pd101_render_admin', false, 62 );
	add_submenu_page( 'pd101', 'PD101 Settings', 'PD101 Settings', 'edit_pages', 'pd101_settings', 'pd101_render_settings' )
}
add_action( 'admin_menu', 'pd101_add_menu_page');

function pd101_render_admin {
	echo 'This is our admin screen.';
}

function pd101_render_settings {
	echo 'This is our admin screen.';
}


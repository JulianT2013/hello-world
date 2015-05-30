<?php

/*
Plugin Name: Plugin Development 101
Plugin URI: https://pippinsplugins.com/series/plugin-development-101/
Description: An introductory course on plugin development
Author: Pippin Williamson
Version: 1.0
Author URI: https://pippinsplugins.com
*/

function pd101_message_shortcode ( 'atts') {
	return '<div class="message blue">' . $atts['text'] . '</div>';
}
add_shortcode( 'message', 'pd101_message_shortcode' );

?>
<?php

/*
Plugin Name: Plugin Development 101
Plugin URI: https://pippinsplugins.com/series/plugin-development-101/
Description: An introductory course on plugin development
Author: Pippin Williamson
Version: 1.0
Author URI: https://pippinsplugins.com
*/

function pd101_message_shortcode ( $atts ) {

	$atts = shortcode_atts {
		array(
			'color'  == 'blue',
			'text'	  == 'text message'
			),
			$atts
	};

	return '<div class="message ' . esc_attr( $atts['color'] ) . '">' . esc_html( $atts['text'] ) . '</div>';
}
add_shortcode( 'message', 'pd101_message_shortcode' );

?>
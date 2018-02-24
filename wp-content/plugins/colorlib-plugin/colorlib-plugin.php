<?php 
/*
Plugin Name: Colorlib Plugin
Description: Quick Custom Solution Plugin for Implementing Custom Solution.
Version: 1.0.0
Author: Movin
Author URI: http://freewptp.com/
License: GNU General Public License (Version 2 - GPLv2)
*/


function custom_dazzling_custom_header_args( $args ) {
	$args['width'] = 9999;
        $args['height'] = 9999;
	return $args;
}
add_filter( 'dazzling_custom_header_args', 'custom_dazzling_custom_header_args' );
<?php
/**
 * Plugin Name: Simple Gist Embed
 * Plugin URI: 
 * Description: A shortcode to add github gists. Hurray!
 * Version: The Plugin's Version Number, e.g.: 1.0
 * Author: Heather Buchel
 * Author URI: http://heather-buchel.com
 * License: GPL2
 */


function gist_embed($atts) {
	extract(shortcode_atts($atts));
	return '<script src="' . $url . '.js"></script>';
}

add_shortcode('gist', 'gist_embed');

?>
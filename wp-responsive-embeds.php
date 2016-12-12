<?php
/*
Plugin Name: WP Responsive Embeds
Plugin URI: https://github.com/JeremyEnglert/WP-Responsive-Embeds
Description: Automatically wrap embedded content from YouTube, Vimeo, Google Maps and other iFrames in a flexible, responsive container to ensure embeds maintain the correct aspect ratio regardless of screen size.
Version: 1.0
Author: Jeremy Englert
Author URI: http://jointswp.com
License: GPLv2 or later
*/

// Get admin settings
$auto_embeds = get_option( 'auto_embed_field' );

// Unless auto embeds are disabled, load the JS
if ( 1 != $auto_embeds ) {
    wp_enqueue_script( 'wpre-js', plugin_dir_url( __FILE__ ) . 'assets/js/scripts.js', array( 'jquery' ), '', true );
} 

// Load styles
wp_enqueue_style( 'wpre-css', plugin_dir_url( __FILE__ ) . 'assets/css/style.css', array(), 'all' );

require_once('wpre-admin.php'); 
require_once('wpre-shortcode.php'); 
<?php
/*
Plugin Name: Webhook Update
Plugin URI: https://github.com/KamataRyo/webhook-update
Description: Create end point for webhook and update plugin or theme.
Author: KamataRyo
Version: 0.0.1
Author URI: http://biwako.io/
*/

$webhook = new Webhook();
$webhook->register();


class Webhook {

	// function register() {
	// 	add_action( 'wp_ajax_gh_update', array( $this, '_plugins_loaded' ) );
	// }

	// public function _plugins_loaded() {
	// 	add_action( 'wp_ajax_gh_update', '_gh_update' );
	// }

}


// EOF

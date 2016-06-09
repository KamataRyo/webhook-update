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
$e_travis->register();


class Webhook {

	function register() {
		add_action( 'plugins_loaded', array( $this, 'plugins_loaded' ) );
	}

	public function plugins_loaded() {
	}

}


// EOF

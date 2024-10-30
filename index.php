<?php
	/*
		Plugin Name: bxGistFun
		Plugin URI: http://www.braxissoftware.com
		Description: Allows you to display gists from GitHub with shortcodes in posts and pages.
		Author: Don Marges
		Version: 0.1
		Author URI: http://www.braxissoftware.com
	*/
	include_once( 'includes/Gist4Fun.php' );
	add_action( 'init', 'Gist4Fun::register_shortcodes' );

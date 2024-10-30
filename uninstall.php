<?php
/**
* This is run only when this plugin is uninstalled. All cleanup code goes here.
*/

if ( defined ( 'WP_UNINSTALL_PLUGIN' ) ) {
	include_once( 'includes/Gist4Fun.php' );
	delete_option( Gist4Fun::option_key );
	global $wp_rewrite;
	$wp_rewrite->flush_rules();
}

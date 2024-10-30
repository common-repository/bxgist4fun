<?php

class Gist4Fun {
	// Used to uniquely identify this plugin's menu page in the WP manager
	//const admin_menu_slug = 'bx_gist_4_fun';
	const default_shortcode_name = 'get-gist';
	const shortcode_option_key = 'bx_g4f_shortcode';

	//Returns the content of a gist, referenced via shortcode, e.g. put the
	//following in the content of a post or page:
	//[get-gist id="YOUR GITHUB GIST ID" file="GIST FILE NAME"]
	public static function get_gist ( $raw_args, $content = null ) {
		$defaults = array ( 'id' => '',	'file' => '' );
		$sanitized_args = shortcode_atts ( $defaults, $raw_args );
		if ( empty (  $sanitized_args [ 'id' ] ) &&  empty ( $sanitized_args [ 'file' ] ) ) { return ' '; }
		$gistContent = '<script src="https://gist.github.com/' . $sanitized_args [ 'id' ] . '.js?file=' . $sanitized_args [ 'file' ] . '" type="text/javascript"></script>';
		return $gistContent;
	}

	//Register the shortcodes used for Gists
	public static function register_shortcodes() {
		$shortcode = get_option ( self::shortcode_option_key, self::default_shortcode_name );
		add_shortcode ( $shortcode, 'Gist4Fun::get_gist' );
	}
}


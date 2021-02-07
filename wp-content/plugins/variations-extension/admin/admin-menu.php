<?php
// exit if file is called directly
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}

//__________________________________________
// Settings Page (seperate page under settings menu)

// add sub-level administrative menu
function myplugin_add_sublevel_menu() {
	
	/*
	
	add_submenu_page(
		string   $parent_slug,
		string   $page_title,
		string   $menu_title,
		string   $capability,
		string   $menu_slug,
		callable $function = ''
	);
	
	*/
	
	add_submenu_page(
		'options-general.php',
        'Variation Extension Settings',
		'Variation Extension',
		'manage_options',
		'variation-extension',
		'myplugin_display_settings_page'
	);
	
}
add_action( 'admin_menu', 'myplugin_add_sublevel_menu' );


// add top-level administrative menu
function myplugin_add_toplevel_menu() {
	
	/* 
		add_menu_page(
			string   $page_title, 
			string   $menu_title, 
			string   $capability, 
			string   $menu_slug, 
			callable $function = '', 
			string   $icon_url = '', 
			int      $position = null 
		)
	*/
	
	add_menu_page(
		'Variation Extension Settings',
		'Variation Extension',
		'manage_options',
		'variation-extension',
		'myplugin_display_settings_page',
		'dashicons-admin-generic',
		null
	);
	
}
add_action( 'admin_menu', 'myplugin_add_toplevel_menu' );


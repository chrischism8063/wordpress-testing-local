<?php
//__________________________________________
// Plugin Settings

// exit if file is called directly
if(! defined( 'ABSPATH')){
    exit;
}


// register plugin settings
function myplugin_register_settings() {
	
	/*
	
	register_setting( 
		string   $option_group, 
		string   $option_name, 
		callable $sanitize_callback
	);
	
	*/
	
	register_setting( 
		'myplugin_options', 
		'myplugin_options', 
		'myplugin_callback_validate_options' 
	); 
    	/*
	
	add_settings_section( 
		string   $id, 
		string   $title, 
		callable $callback, 
		string   $page
	);
	
	*/ 

    // ADD SETTINGS
	
	add_settings_section( 
		'myplugin_section_login', 
		'Variation Extension Login Page', 
		'myplugin_callback_section_login', 
		'variation-extension'
	);
	
	add_settings_section( 
		'myplugin_section_admin', 
		'Variation Extension Admin Area', 
		'myplugin_callback_section_admin', 
		'variation-extension'
	);

    	/*

	add_settings_field(
    	string   $id,
		string   $title,
		callable $callback,
		string   $page,
		string   $section = 'default',
		array    $args = []
	);

	*/

    // ADD SETTINGS FIELDS
	add_settings_field(
		'custom_url',
		'Custom URL',
		'myplugin_callback_field_text',
		'variation-extension',
		'myplugin_section_login',
		[ 'id' => 'custom_url', 'label' => 'Custom URL for the login logo link' ]
	);

	add_settings_field(
		'custom_title',
		'Custom Title',
		'myplugin_callback_field_text',
		'variation-extension',
		'myplugin_section_login',
		[ 'id' => 'custom_title', 'label' => 'Custom title attribute for the logo link' ]
	);

	add_settings_field(
		'custom_style',
		'Custom Style',
		'myplugin_callback_field_radio',
		'variation-extension',
		'myplugin_section_login',
		[ 'id' => 'custom_style', 'label' => 'Custom CSS for the Login screen' ]
	);

	add_settings_field(
		'custom_message',
		'Custom Message',
		'myplugin_callback_field_textarea',
		'variation-extension',
		'myplugin_section_login',
		[ 'id' => 'custom_message', 'label' => 'Custom text and/or markup' ]
	);

	add_settings_field(
		'custom_footer',
		'Custom Footer',
		'myplugin_callback_field_text',
		'variation-extension',
		'myplugin_section_admin',
		[ 'id' => 'custom_footer', 'label' => 'Custom footer text' ]
	);

	add_settings_field(
		'custom_toolbar',
		'Custom Toolbar',
		'myplugin_callback_field_checkbox',
		'variation-extension',
		'myplugin_section_admin',
		[ 'id' => 'custom_toolbar', 'label' => 'Remove new post and comment links from the Toolbar' ]
	);

	add_settings_field(
		'custom_scheme',
		'Custom Scheme',
		'myplugin_callback_field_select',
		'variation-extension',
		'myplugin_section_admin',
		[ 'id' => 'custom_scheme', 'label' => 'Default color scheme for new users' ]
	);



}
add_action( 'admin_init', 'myplugin_register_settings' );


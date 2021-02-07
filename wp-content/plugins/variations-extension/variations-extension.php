<?php
/*
* Plugin Name: Variation Extension
* Plugin URI: 
* Description: 
* Version: 1.0
* Stable tag:        1.0
* Requires at least: 4.5
* Tested up to:      4.8
* Author: SC IT Solutions
* Author URI: 
* Tags:              example, boilerplate
* License:           GPL v2 or later
* License URI:       https://www.gnu.org/licenses/gpl-2.0.txt

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 
2 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
with this program. If not, visit: https://www.gnu.org/licenses/

REF: https://www.linkedin.com/learning/wordpress-plugin-development/add-the-plugin-settings-page?u=2128545
*/

// exit if file is called directly
if(! defined( 'ABSPATH')){
    exit;
}

// default plugin options
function myplugin_options_default() {

	return array(
		'custom_url'     => 'https://wordpress.org/',
		'custom_title'   => 'Powered by WordPress',
		'custom_style'   => 'disable',
		'custom_message' => '<p class="custom-message">My custom message</p>',
		'custom_footer'  => 'Special message for users',
		'custom_toolbar' => false,
		'custom_scheme'  => 'default',
	);

}

if( is_admin()){
    // include plugin dependencies
    require_once plugin_dir_path( __FILE__ ) . 'admin/admin-menu.php';
    require_once plugin_dir_path( __FILE__ ) . 'admin/settings-page.php';
	require_once plugin_dir_path( __FILE__ ) . 'admin/settings-register.php';
	require_once plugin_dir_path( __FILE__ ) . 'admin/settings-callbacks.php';
	require_once plugin_dir_path( __FILE__ ) . 'admin/settings-validate.php';

}
// include dependancies: admin and public
require_once plugin_dir_path( __FILE__ ) . 'includes/core-functions.php';

//__________________________________________
// extend variations V.1(hard coded)

 // regular variable products
 add_action( 'woocommerce_product_after_variable_attributes', 'add_to_variations_metabox', 10, 3 );
 add_action( 'woocommerce_save_product_variation', 'save_product_variation', 20, 2 );
 
 
 /*
  * Add new inputs to each variation
  *
  * @param string $loop
  * @param array $variation_data
  * @return print HTML
  */
 function add_to_variations_metabox( $loop, $variation_data, $variation ){
 
     $custom = get_post_meta( $variation->ID, '_bottle_qty', true ); ?>
 
         <div class="variable_custom_field">
             <p class="form-row form-row-first">
                 <label><?php echo __( 'Bottle Qty:', 'plugin_textdomain' ); ?></label>
                 <input type="text" size="5" name="variation_custom_data[<?php echo $loop; ?>]" value="<?php echo esc_attr( $custom ); ?>" />
             </p>
         </div>
 
     <?php 
 
 }
 
 /*
  * Save extra meta info for variable products
  *
  * @param int $variation_id
  * @param int $i
  * return void
  */
 function save_product_variation( $variation_id, $i ){
 
     // save custom data
     if ( isset( $_POST['variation_custom_data'][$i] ) ) {
         // sanitize data in way that makes sense for your data type
		//   sanitize_text_field probably better for keeping white space
         $custom_data = ( trim( $_POST['variation_custom_data'][$i]  ) === '' ) ? '' : sanitize_title( $_POST['variation_custom_data'][$i] );
         update_post_meta( $variation_id, '_bottle_qty', $custom_data );
     }
 
 }
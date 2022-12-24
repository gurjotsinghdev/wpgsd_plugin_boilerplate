<?php
/**
 *
 * Plugin Name:       Plugin Name
 * Plugin URI:        https://gurjotsinghdev.vercel.app/plugin-name
 * Description:       This plugin shows time on the frontend of wordpress using shortcode.
 * Version:           1.0.0
 * Author:            Gurjot Singh
 * Author URI:        https://gurjotsinghdev.vercel.app/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       plugin-name
 */

 
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'plugin_name_VERSION', '1.0.0' );


// Activate the plugin.
function wpgsd_plugin_name_activate() { 
	
	flush_rewrite_rules(); 
}
register_activation_hook( __FILE__, 'wpgsd_plugin_name_activate' );

// Deactivate the plugin.
function wpgsd_plugin_name_deactivate() {
	
	flush_rewrite_rules();
}
register_deactivation_hook( __FILE__, 'wpgsd_plugin_name_deactivate' );

// Admin CSS
function wpgsd_plugin_name_load_styles () {
	if( is_admin() ) {
		wp_enqueue_style( 
			'wpgsd-admin-css', 
			plugins_url('/assets/css/admin.css', __FILE__),
			array(),
			plugin_name_VERSION,
			'screen' 
		);
	}
	else {
		wp_enqueue_style( 
			'wpgsd-frontend-css', 
			plugins_url('/assets/css/frontend.css', __FILE__),
			array(),
			plugin_name_VERSION,
			'screen' 
		);
	}
}
add_action( 'init' , 'wpgsd_plugin_name_load_styles' );

require __DIR__ . '/inc/plugin-name.php' ; 

require __DIR__ . '/adminpages/plugin-name-admin.php' ; 




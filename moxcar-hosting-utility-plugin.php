<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://moxcar.com
 * @since             1.0.0
 * @package           Moxcar_Hosting_Utility_Plugin
 *
 * @wordpress-plugin
 * Plugin Name:       Moxcar Hosting Utility Plugin
 * Plugin URI:        https://moxcar.com
 * Description:       This plugin is used to streamline development and hosting functionality for all Moxcar Clients
 * Version:           1.0.0
 * Author:            Gino Peterson
 * Author URI:        https://moxcar.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       moxcar-hosting-utility-plugin
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'MOXCAR_HOSTING_UTILITY_PLUGIN_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-moxcar-hosting-utility-plugin-activator.php
 */
function activate_moxcar_hosting_utility_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-moxcar-hosting-utility-plugin-activator.php';
	Moxcar_Hosting_Utility_Plugin_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-moxcar-hosting-utility-plugin-deactivator.php
 */
function deactivate_moxcar_hosting_utility_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-moxcar-hosting-utility-plugin-deactivator.php';
	Moxcar_Hosting_Utility_Plugin_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_moxcar_hosting_utility_plugin' );
register_deactivation_hook( __FILE__, 'deactivate_moxcar_hosting_utility_plugin' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-moxcar-hosting-utility-plugin.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_moxcar_hosting_utility_plugin() {

	$plugin = new Moxcar_Hosting_Utility_Plugin();
	$plugin->run();

}
run_moxcar_hosting_utility_plugin();

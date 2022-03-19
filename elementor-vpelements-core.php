<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://vladparole.info
 * @since             1.0.0
 * @package           Elementor_Vpelements_Core
 *
 * @wordpress-plugin
 * Plugin Name:       VPElements-Core
 * Plugin URI:        http://vladparole.info/vpelements
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Vlad Parole
 * Author URI:        http://vladparole.info
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       elementor-vpelements-core
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
define( 'ELEMENTOR_VPELEMENTS_CORE_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-elementor-vpelements-core-activator.php
 */
function activate_elementor_vpelements_core() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-elementor-vpelements-core-activator.php';
	Elementor_Vpelements_Core_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-elementor-vpelements-core-deactivator.php
 */
function deactivate_elementor_vpelements_core() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-elementor-vpelements-core-deactivator.php';
	Elementor_Vpelements_Core_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_elementor_vpelements_core' );
register_deactivation_hook( __FILE__, 'deactivate_elementor_vpelements_core' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-elementor-vpelements-core.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_elementor_vpelements_core() {

	$plugin = new Elementor_Vpelements_Core();
	$plugin->run();

}
run_elementor_vpelements_core();

add_filter( 'plugin_action_links_' . plugin_basename(__FILE__), 'settings_link');

function settings_link( $links ){
	// $settings_link[] = '<a href="options-general.php?page=vpelements_plugin">Dashboard</a>';
	// $settings_link[] = '<a href="http://vladparole.info">Documentation</a>';
	$links[] = '<a href="admin.php?page=vpelements_plugin">Dashboard</a>';
	$links[] = '<a href="http://vladparole.info"><b>View Plugin Documentation</b></a>';

	// array_push( $links, $settings_link );
	return $links;
}
<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://vladparole.info
 * @since      1.0.0
 *
 * @package    Elementor_Vpelements_Core
 * @subpackage Elementor_Vpelements_Core/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Elementor_Vpelements_Core
 * @subpackage Elementor_Vpelements_Core/includes
 * @author     Vlad Parole <blodiemere09@gmail.com>
 */
class Elementor_Vpelements_Core_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'elementor-vpelements-core',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}

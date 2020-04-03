<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://cleilsontechinfo.netlify.com/
 * @since      1.0.0
 *
 * @package    Radom_Quote
 * @subpackage Radom_Quote/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Radom_Quote
 * @subpackage Radom_Quote/includes
 * @author     CLEILSON  PEREIRA <marcialwushu@gmail.com>
 */
class Radom_Quote_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'radom-quote',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}

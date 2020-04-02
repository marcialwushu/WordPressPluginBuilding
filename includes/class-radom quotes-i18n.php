<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://unigrande.edu.br
 * @since      1.0.0
 *
 * @package    Radom_Quotes
 * @subpackage Radom_Quotes/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Radom_Quotes
 * @subpackage Radom_Quotes/includes
 * @author     CLEILSON PEREIRA <marcialwushu@gmail.com>
 */
class Radom_Quotes_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'radom quotes',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}

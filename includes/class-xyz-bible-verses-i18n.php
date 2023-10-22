<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://lucaromano.xyz
 * @since      1.0.0
 *
 * @package    Xyz_Bible_Verses
 * @subpackage Xyz_Bible_Verses/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Xyz_Bible_Verses
 * @subpackage Xyz_Bible_Verses/includes
 * @author     Luca Romano <romano.luca@hotmail.it>
 */
class Xyz_Bible_Verses_i18n
{


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain()
	{

		load_plugin_textdomain(
			XYZ_BIBLE_VERSES_DOMAIN,
			false,
			dirname(dirname(plugin_basename(__FILE__))) . '/languages/'
		);

	}


}

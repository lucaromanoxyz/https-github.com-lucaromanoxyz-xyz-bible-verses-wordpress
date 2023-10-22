<?php

/**
 * Fired during plugin deactivation
 *
 * @link       https://lucaromano.xyz
 * @since      1.0.0
 *
 * @package    Xyz_Bible_Verses
 * @subpackage Xyz_Bible_Verses/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Xyz_Bible_Verses
 * @subpackage Xyz_Bible_Verses/includes
 * @author     Luca Romano <romano.luca@hotmail.it>
 */
class Xyz_Bible_Verses_Uninstaller
{

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function uninstall()
	{
		// delete option
		get_option('xyz_bible_verses_verse_container_tag');
		get_option('xyz_bible_verses_verse_reference_tag');
		get_option('xyz_bible_verses_verse_text_tag');
		get_option('xyz_bible_verses_verse_container_class');
		get_option('xyz_bible_verses_verse_reference_class');
		get_option('xyz_bible_verses_verse_text_class');
	}

}

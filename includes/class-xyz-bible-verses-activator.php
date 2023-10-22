<?php

/**
 * Fired during plugin activation
 *
 * @link       https://lucaromano.xyz
 * @since      1.0.0
 *
 * @package    Xyz_Bible_Verses
 * @subpackage Xyz_Bible_Verses/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Xyz_Bible_Verses
 * @subpackage Xyz_Bible_Verses/includes
 * @author     Luca Romano <romano.luca@hotmail.it>
 */
class Xyz_Bible_Verses_Activator
{

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate()
	{
		// set options
		if (get_option('xyz_bible_verses_verse_container_tag') == null) {
			update_option('xyz_bible_verses_verse_container_tag', "blockquote");
		}
		if (get_option('xyz_bible_verses_verse_reference_tag') == null) {
			update_option('xyz_bible_verses_verse_reference_tag', "strong");
		}
		if (get_option('xyz_bible_verses_verse_text_tag') == null) {
			update_option('xyz_bible_verses_verse_text_tag', 'p');
		}
		if (get_option('xyz_bible_verses_verse_container_class') == null) {
			update_option('xyz_bible_verses_verse_container_class', "xyz-bible-verse");
		}
		if (get_option('xyz_bible_verses_verse_reference_class') == null) {
			update_option('xyz_bible_verses_verse_reference_class', "xyz-bible-verse-reference");
		}
		if (get_option('xyz_bible_verses_verse_text_class') == null) {
			update_option('xyz_bible_verses_verse_text_class', 'xyz-bible-verse-text');
		}
	}

}

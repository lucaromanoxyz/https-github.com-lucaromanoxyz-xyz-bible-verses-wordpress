<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://lucaromano.xyz
 * @since             1.0.0
 * @package           Xyz_Bible_Verses
 *
 * @wordpress-plugin
 * Plugin Name:       XYZ Bible Verses
 * Plugin URI:        https://github.com/lucaromanoxyz/xyz-bible-verses-wordpress
 * Description:       This plugin enables the shortcode to include the biblical verses available on the site https://lucaromano.xyz/bible in your Wordpress site.
 * Version:           1.2.0
 * Author:            Luca Romano
 * Author URI:        https://lucaromano.xyz/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       xyz-bible-verses
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
	die;
}

/**
 * Plugin domain
 */
define('XYZ_BIBLE_VERSES_DOMAIN', 'xyz-bible-verses');

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define('XYZ_BIBLE_VERSES_VERSION', '1.0.0');

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-xyz-bible-verses-deactivator.php
 */
function deactivate_xyz_bible_verses()
{
	require_once plugin_dir_path(__FILE__) . 'includes/class-xyz-bible-verses-deactivator.php';
	Xyz_Bible_Verses_Deactivator::deactivate();
}

/**
 * The code that runs during plugin uninstall.
 * This action is documented in includes/class-xyz-bible-verses-uninstaller.php
 */
function uninstall_xyz_bible_verses()
{
	require_once plugin_dir_path(__FILE__) . 'includes/class-xyz-bible-verses-uninstaller.php';
	Xyz_Bible_Verses_Uninstaller::uninstall();
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-xyz-bible-verses-activator.php
 */
function activate_xyz_bible_verses()
{
	require_once plugin_dir_path(__FILE__) . 'includes/class-xyz-bible-verses-activator.php';
	Xyz_Bible_Verses_Activator::activate();
	register_uninstall_hook(__FILE__, 'uninstall_xyz_bible_verses');
}

register_activation_hook(__FILE__, 'activate_xyz_bible_verses');
register_deactivation_hook(__FILE__, 'deactivate_xyz_bible_verses');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-xyz-bible-verses.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_xyz_bible_verses()
{

	$plugin = new Xyz_Bible_Verses();
	$plugin->run();

}

run_xyz_bible_verses();

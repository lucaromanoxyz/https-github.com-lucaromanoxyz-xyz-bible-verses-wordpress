<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://lucaromano.xyz
 * @since      1.0.0
 *
 * @package    Xyz_Bible_Verses
 * @subpackage Xyz_Bible_Verses/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Xyz_Bible_Verses
 * @subpackage Xyz_Bible_Verses/admin
 * @author     Luca Romano <romano.luca@hotmail.it>
 */
class Xyz_Bible_Verses_Admin
{

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string $plugin_name The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string $version The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @param string $plugin_name The name of this plugin.
	 * @param string $version The version of this plugin.
	 * @since    1.0.0
	 */
	public function __construct($plugin_name, $version)
	{

		$this->plugin_name = $plugin_name;
		$this->version = $version;


		/**
		 * Initialize menu settings for plugin
		 * @link https://developer.wordpress.org/reference/hooks/admin_menu/
		 */
		add_action('admin_menu', array(__CLASS__, 'admin_init_menu_setting'));

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles()
	{

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Xyz_Bible_Verses_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Xyz_Bible_Verses_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/xyz-bible-verses-admin.css', array(), $this->version, 'all');

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts()
	{

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Xyz_Bible_Verses_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Xyz_Bible_Verses_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . 'js/xyz-bible-verses-admin.js', array('jquery'), $this->version, false);

	}

	/**
	 * Create menu in admin sidebar
	 */
	public static function admin_init_menu_setting()
	{
		/**
		 * Add link into menu
		 * @link https://developer.wordpress.org/reference/functions/add_menu_page/
		 */
		add_menu_page(
			__('XYZ Bible Verses', XYZ_BIBLE_VERSES_DOMAIN),
			__('XYZ Bible Verses', XYZ_BIBLE_VERSES_DOMAIN),
			'manage_options',
			XYZ_BIBLE_VERSES_DOMAIN,
			array(
				__CLASS__,
				'admin_how_to_use_page'
			), 'dashicons-book-alt');

		add_submenu_page(
			XYZ_BIBLE_VERSES_DOMAIN,
			__('Settings', XYZ_BIBLE_VERSES_DOMAIN),
			__('Settings', XYZ_BIBLE_VERSES_DOMAIN),
			'manage_options',
			XYZ_BIBLE_VERSES_DOMAIN . "-setting",
			array(
				__CLASS__,
				'admin_create_settings_page'
			)
		);

	}

	/**
	 * Create how to use's page in admin menu
	 */
	public static function admin_how_to_use_page()
	{
		?>

		<div class="wrap xyz-bible-verses-container">
			<h1 class="wp-heading-inline"><?php _e('XYZ Bible Verses', XYZ_BIBLE_VERSES_DOMAIN) ?></h1>
			<hr>
			<section class="documentation">
				<article>
					<h1><?php _e('How to use', XYZ_BIBLE_VERSES_DOMAIN) ?></h1>
					<p>
						<strong>[xyz_bible_verses version="KJV" reference="Lk 1:1-20"]</strong>
					</p>
					<p>
						<code>version</code>: <?php _e('indicates the version code of the biblical verses. In this example, <i>King James Version</i>. For acronyms, look at "Available versions of the Bible".', XYZ_BIBLE_VERSES_DOMAIN) ?>
					</p>
					<p>
						<code>reference</code>: <?php _e('indicates the biblical verses to retrieve. In this example, <i>Luke 1:1-20</i>.', XYZ_BIBLE_VERSES_DOMAIN) ?>
					</p>
					<p>
						<code>notes</code>: <?php _e('indicates whether notes should be included in the verses. To not include notes, do not pass the attribute, as in this examples.', XYZ_BIBLE_VERSES_DOMAIN) ?>
					</p>
					<p>
						<code>underline</code>: <?php _e('indicates the word or the sentences to underline. Below is the pattern to follow.', XYZ_BIBLE_VERSES_DOMAIN) ?>
					</p>
					<p>
						<code>bold</code>: <?php _e('indicates the word or the sentences to put in bold. Below is the pattern to follow.', XYZ_BIBLE_VERSES_DOMAIN) ?>
					</p>
				</article>
				<hr>
				<article>
					<h1><?php _e('How to underline or put in bold', XYZ_BIBLE_VERSES_DOMAIN) ?></h1>
					<p>
						<?php _e('Through the <code>underline</code> and <code>bold</code> attributes, you have the possibility to underline or bold words or sentences. Both works in the same way.', XYZ_BIBLE_VERSES_DOMAIN) ?>
					</p>
					<div>
						<h2><?php _e('Highlight word or sentence', XYZ_BIBLE_VERSES_DOMAIN) ?></h2>
						<p>
							<?php _e('To highlight a word or a sentence, write the text you want to use.', XYZ_BIBLE_VERSES_DOMAIN) ?>
						</p>
						<p>
							<?php _e('For example, if you want to highlight the word <code>Zacharias</code> you use <code>underline="Zacharias"</code>.', XYZ_BIBLE_VERSES_DOMAIN) ?>
						</p>
						<p>
							<?php _e('If there are multiple occurrences of the highlighting within the selected verses, all occurrences will be highlighted.', XYZ_BIBLE_VERSES_DOMAIN) ?>
						</p>
						<p>
							<strong><?php _e('Example:', XYZ_BIBLE_VERSES_DOMAIN) ?></strong>
						</p>
						<p>
							<code>[xyz_bible_verses version="KJV" reference="Lk 1:1-20" underline="Zacharias"]</code>
						</p>
						<p>
							<?php _e('To underline both <code>Zacharias</code> and <code>Elisabeth</code> use <code>|</code> as separator.', XYZ_BIBLE_VERSES_DOMAIN) ?>
						</p>
						<p>
							<strong><?php _e('Example:', XYZ_BIBLE_VERSES_DOMAIN) ?></strong>
						</p>
						<p>
							<code>[xyz_bible_verses version="KJV" reference="Lk 1:1-20"	underline="Zacharias|Elisabeth"]</code>
						</p>
					</div>
					<div>
						<h2><?php _e('Highlight a specific occurrence', XYZ_BIBLE_VERSES_DOMAIN) ?></h2>
						<p>
							<?php _e('To select only one particular occurrence, use <code>:</code> with the number of the occurrence to select.', XYZ_BIBLE_VERSES_DOMAIN) ?>
						</p>
						<p>
							<?php _e('For example, writing <code>Zacharias:2</code> only selects the second time the word <i>Zacharias</i> appears.', XYZ_BIBLE_VERSES_DOMAIN) ?>
						</p>
						<p>
							<strong><?php _e('Example:', XYZ_BIBLE_VERSES_DOMAIN) ?></strong>
						</p>
						<p>
							<code>[xyz_bible_verses version="KJV" reference="Lk 1:1-20" underline="Zacharias:2"]</code>
						</p>
					</div>
					<div>
						<h2><?php _e('Highlight multiple occurrences', XYZ_BIBLE_VERSES_DOMAIN) ?></h2>
						<p>
							<?php _e('To select multiple occurrences, separate the occurrences with a <code>,</code>.', XYZ_BIBLE_VERSES_DOMAIN) ?>
						</p>
						<p>
							<?php _e('For example, writing <code>Zacharias:2,4</code>, selects the <i>second</i> and <i>fourth</i> occurrences of the word <i>Zacharias</i>.', XYZ_BIBLE_VERSES_DOMAIN) ?>
						</p>
						<p>
							<strong><?php _e('Example:', XYZ_BIBLE_VERSES_DOMAIN) ?></strong>
						</p>
						<p>
							<code>[xyz_bible_verses version="KJV" reference="Lk 1:1-20" underline="Zacharias:2,4"]</code>
						</p>
					</div>
					<div>
						<h2><?php _e('Highlight multiple occurrences in a range', XYZ_BIBLE_VERSES_DOMAIN) ?></h2>
						<p>
							<?php _e('To select multiple occurrences in a range, separate the occurrences with a <code>...</code>.', XYZ_BIBLE_VERSES_DOMAIN) ?>
						</p>
						<p>
							<?php _e('For example, writing <code>Zacharias:2,6...8</code>, selects the <i>second</i>, <i>sixth</i>, <i>seventh</i> and <i>eighth</i> occurrences of the word <i>Zacharias</i>.', XYZ_BIBLE_VERSES_DOMAIN) ?>
						</p>
						<p>
							<strong><?php _e('Example:', XYZ_BIBLE_VERSES_DOMAIN) ?></strong>
						</p>
						<p>
							<code>[xyz_bible_verses version="KJV" reference="Lk 1:1-20" underline="Zacharias:2,6...8"]</code>
						</p>
					</div>
					<div>
						<h2><?php _e('Advanced use', XYZ_BIBLE_VERSES_DOMAIN) ?></h2>
						<p>
							<?php _e('Underline the <i>first</i> and the <i>third</i> occourrence of `Elisabeth` and the <i>first</i> of `Zacharias`.', XYZ_BIBLE_VERSES_DOMAIN) ?>
						</p>
						<p>
							<?php _e('Put in bold <i>all</i> the occourrence of `Elisabeth` and the _second_, the _third_ and the _fourh_ of `Zacharias`.', XYZ_BIBLE_VERSES_DOMAIN) ?>
						</p>
						<p>
							<strong><?php _e('Example:', XYZ_BIBLE_VERSES_DOMAIN) ?></strong>
						</p>
						<p>
							<code>[xyz_bible_verses version="KJV" reference="Lk 1:1-20" underline="Elisabeth:1,3|Zacharias:1" bold="Elisabeth|Zacharias:2...4"]</code>
						</p>
					</div>
				</article>
				<hr>
				<article>
					<h1><?php _e('Available versions of the Bible', XYZ_BIBLE_VERSES_DOMAIN) ?></h1>
					<div>
						<h2><?php _e('English', XYZ_BIBLE_VERSES_DOMAIN) ?></h2>
						<ul>
							<li>Authorized King James Version (1611 / 1769)</li>
						</ul>
					</div>
					<div>
						<h2><?php _e('Italian', XYZ_BIBLE_VERSES_DOMAIN) ?></h2>
						<ul>
							<li>Bibbia Diodati (1649)</li>
							<li>Nuova Riveduta (1996)</li>
						</ul>
					</div>
					<div>
						<h2><?php _e('Version\'s code', XYZ_BIBLE_VERSES_DOMAIN) ?></h2>
						<table>
							<thead>
								<tr>
									<th align="left">Bible version</th>
									<th align="left">Code</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Authorized King James Version</td>
									<td>KJV</td>
								</tr>
								<tr>
									<td>Bibbia Diodati</td>
									<td>DIO</td>
								</tr>
								<tr>
									<td>Nuova Riveduta 1996</td>
									<td>NR96</td>
								</tr>
							</tbody>
						</table>
					</div>
				</article>
			</section>
		</div>
		<?php
	}

	/**
	 * Create setting's page in admin menu
	 */
	public static function admin_create_settings_page()
	{
		?>
		<div class="wrap xyz-bible-verses-container">
			<h1 class="wp-heading-inline"><?php _e('XYZ Bible Verses', XYZ_BIBLE_VERSES_DOMAIN) ?></h1>
			<hr>
			<?php if (isset($_POST['justsubmitted']) && $_POST['justsubmitted'] == "true") {
				Xyz_Bible_Verses_Admin::admin_update_options();
			} ?>
			<form method="post">
				<input type="hidden" name="justsubmitted" value="true">
				<?php wp_nonce_field('saveFilterCheck', 'saveFilter') ?>
				<section class="editor">
					<article>
						<h2><?php _e('Quote container', XYZ_BIBLE_VERSES_DOMAIN) ?></h2>
						<table class="form-table" role="presentation">
							<tbody>
							<tr>
								<th scope="row">
									<label for="xyz_bible_verses_verse_container_tag">
										<?php _e('Tag', XYZ_BIBLE_VERSES_DOMAIN) ?> <?= wp_required_field_indicator() ?>
									</label>
								</th>
								<td>
									<input class="form-select" type="text" name="xyz_bible_verses_verse_container_tag"
										   id="xyz_bible_verses_verse_container_tag"
										   value="<?= get_option('xyz_bible_verses_verse_container_tag') ?>">
									<?php _e('The tag for the item that wrap the quote', XYZ_BIBLE_VERSES_DOMAIN) ?>
								</td>
							</tr>
							<tr>
								<th scope="row">
									<label for="xyz_bible_verses_verse_container_class">
										<?php _e('Class', XYZ_BIBLE_VERSES_DOMAIN) ?> <?= wp_required_field_indicator() ?>
									</label>
								</th>
								<td>
									<input class="form-select" type="text" name="xyz_bible_verses_verse_container_class"
										   id="xyz_bible_verses_verse_container_class"
										   value="<?= get_option('xyz_bible_verses_verse_container_class') ?>">
									<?php _e('The CSS class to use on item', XYZ_BIBLE_VERSES_DOMAIN) ?>
								</td>
							</tr>
							</tbody>
						</table>
					</article>
					<article>
						<h2><?php _e('Reference', XYZ_BIBLE_VERSES_DOMAIN) ?></h2>
						<table class="form-table" role="presentation">
							<tbody>
							<tr>
								<th scope="row">
									<label for="xyz_bible_verses_verse_reference_tag">
										<?php _e('Tag', XYZ_BIBLE_VERSES_DOMAIN) ?> <?= wp_required_field_indicator() ?>
									</label>
								</th>
								<td>
									<input class="form-select" type="text" name="xyz_bible_verses_verse_reference_tag"
										   id="xyz_bible_verses_verse_reference_tag"
										   value="<?= get_option('xyz_bible_verses_verse_reference_tag') ?>">
									<?php _e('The tag the bible passage\'s name', XYZ_BIBLE_VERSES_DOMAIN) ?>
								</td>
							</tr>
							<tr>
								<th scope="row">
									<label for="xyz_bible_verses_verse_reference_class">
										<?php _e('Class', XYZ_BIBLE_VERSES_DOMAIN) ?> <?= wp_required_field_indicator() ?>
									</label>
								</th>
								<td>
									<input class="form-select" type="text" name="xyz_bible_verses_verse_reference_class"
										   id="xyz_bible_verses_verse_reference_class"
										   value="<?= get_option('xyz_bible_verses_verse_reference_class') ?>">
									<?php _e('The CSS class to use on item', XYZ_BIBLE_VERSES_DOMAIN) ?>
								</td>
							</tr>
							</tbody>
						</table>
					</article>
					<article>
						<h2><?php _e('Text', XYZ_BIBLE_VERSES_DOMAIN) ?></h2>
						<table class="form-table" role="presentation">
							<tbody>
							<tr>
								<th scope="row">
									<label for="xyz_bible_verses_verse_text_tag">
										<?php _e('Tag', XYZ_BIBLE_VERSES_DOMAIN) ?> <?= wp_required_field_indicator() ?>
									</label>
								</th>
								<td>
									<input class="form-select" type="text" name="xyz_bible_verses_verse_text_tag"
										   id="xyz_bible_verses_verse_text_tag"
										   value="<?= get_option('xyz_bible_verses_verse_text_tag') ?>">
									<?php _e('The tag for text of the verses', XYZ_BIBLE_VERSES_DOMAIN) ?>
								</td>
							</tr>
							<tr>
								<th scope="row">
									<label for="xyz_bible_verses_verse_text_class">
										<?php _e('Class', XYZ_BIBLE_VERSES_DOMAIN) ?> <?= wp_required_field_indicator() ?>
									</label>
								</th>
								<td>
									<input class="form-select" type="text" name="xyz_bible_verses_verse_text_class"
										   id="xyz_bible_verses_verse_text_class"
										   value="<?= get_option('xyz_bible_verses_verse_text_class') ?>">
									<?php _e('The CSS class to use on item', XYZ_BIBLE_VERSES_DOMAIN) ?>
								</td>
							</tr>
							</tbody>
						</table>
					</article>
				</section>
				<p class="submit">
					<button type="submit"
							class="button button-primary"><?php _e('Save changes', XYZ_BIBLE_VERSES_DOMAIN) ?></button>
				</p>
			</form>
		</div>
		<?php
	}


	/**
	 * This function is used to clear a string from all non-alphanumeric chars
	 *
	 * @param string $string
	 *
	 * @return string
	 */
	private static function clear_string(string $string): string
	{
		return trim(htmlspecialchars(strip_tags($string)));
	}

	/**
	 * Save options in wp_options table
	 */
	public static function admin_update_options()
	{
		if (wp_verify_nonce($_POST['saveFilter'], 'saveFilterCheck') and current_user_can('manage_options')) {
			update_option('xyz_bible_verses_verse_container_tag', Xyz_Bible_Verses_Admin::clear_string($_POST['xyz_bible_verses_verse_container_tag']));
			update_option('xyz_bible_verses_verse_reference_tag', Xyz_Bible_Verses_Admin::clear_string($_POST['xyz_bible_verses_verse_reference_tag']));
			update_option('xyz_bible_verses_verse_text_tag', Xyz_Bible_Verses_Admin::clear_string($_POST['xyz_bible_verses_verse_text_tag']));
			?>
			<div class="updated notice">
				<p>
					<?php _e("All settings updated", XYZ_BIBLE_VERSES_DOMAIN) ?>
				</p>
			</div>
		<?php } else { ?>
			<div class="error notice">
				<p>
					<?php _e("There was an error updating options", XYZ_BIBLE_VERSES_DOMAIN) ?>
				</p>
			</div>
		<?php }
	}
}

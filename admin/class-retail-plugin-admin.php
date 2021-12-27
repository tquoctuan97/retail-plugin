<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://github.com/tquoctuan97/retail-plugin
 * @since      1.0.0
 *
 * @package    Retail_Plugin
 * @subpackage Retail_Plugin/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Retail_Plugin
 * @subpackage Retail_Plugin/admin
 * @author     Your Name <email@example.com>
 */
class Retail_Plugin_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $retail_plugin    The ID of this plugin.
	 */
	private $retail_plugin;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $retail_plugin       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $retail_plugin, $version ) {

		$this->retail_plugin = $retail_plugin;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Retail_Plugin_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Retail_Plugin_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->retail_plugin, plugin_dir_url( __FILE__ ) . 'css/retail-plugin-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Retail_Plugin_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Retail_Plugin_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->retail_plugin, plugin_dir_url( __FILE__ ) . 'js/retail-plugin-admin.js', array( 'jquery' ), $this->version, false );

	}

}

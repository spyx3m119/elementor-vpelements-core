<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://vladparole.info
 * @since      1.0.0
 *
 * @package    Elementor_Vpelements_Core
 * @subpackage Elementor_Vpelements_Core/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Elementor_Vpelements_Core
 * @subpackage Elementor_Vpelements_Core/admin
 * @author     Vlad Parole <blodiemere09@gmail.com>
 */
class Elementor_Vpelements_Core_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

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
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
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
		 * defined in Elementor_Vpelements_Core_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Elementor_Vpelements_Core_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/elementor-vpelements-core-admin.css', array(), $this->version, 'all' );
		
		wp_register_style( 'bootstrap.min', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' );
		wp_enqueue_style('bootstrap.min');

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
		 * defined in Elementor_Vpelements_Core_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Elementor_Vpelements_Core_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/elementor-vpelements-core-admin.js', array( 'jquery' ), $this->version, false );
		
		wp_register_script( 'bootstrap.min', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js' );
		wp_enqueue_script('bootstrap.min');
	}
	
}
add_action('admin_menu', 'add_admin_pages');

function add_admin_pages(){

	//The icon in Base64 format
	$icon_base64 = 'PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAyNS4yLjEsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjxzdmcgdmVyc2lvbj0iMS4wIiBpZD0iTGF5ZXJfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiDQoJIHZpZXdCb3g9IjAgMCAyMCAyMCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMjAgMjA7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+DQoJLnN0MHtmb250LWZhbWlseTonQWx0ZXJuaXR5Jzt9DQoJLnN0MXtmb250LXNpemU6MTQuMzI2OXB4O30NCjwvc3R5bGU+DQo8dGV4dCB0cmFuc2Zvcm09Im1hdHJpeCgwLjYwNTMgMCAwIDEgMC44ODc3IDE3LjIyOTgpIiBjbGFzcz0ic3QwIHN0MSI+VlA8L3RleHQ+DQo8L3N2Zz4NCg==';

	//The icon in the data URI scheme
	$icon_data_uri = 'data:image/svg+xml;base64,' . $icon_base64;

	$page_title = 'VPElements Plugin';
	$menu_title = 'VPElements';
	$capability = 'manage_options';
	$menu_slug = 'vpelements_plugin'; 
	$function = 'admin_page';
	// $icon_url = 'dashicons-coffee';
	$icon_url = $icon_data_uri;
	$position = 110;

	add_menu_page( 
		$page_title, 
		$menu_title, 
		$capability, 
		$menu_slug, 
		$function, 
		$icon_url, 
		$position 
	);
}

function admin_page(){ 
    
	require_once plugin_dir_path(__FILE__) . '\partials\elementor-vpelements-core-admin-display.php';
}
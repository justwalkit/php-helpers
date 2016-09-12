<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/pvds
 * @since             1.0.0
 * @package           Php_helper_functions
 *
 * @wordpress-plugin
 * Plugin Name:       PHP helper functions
 * Plugin URI:        https://github.com/pvds/php-helper-functions
 * Description:       Collection of helper functions for streamlined php development
 * Version:           1.0.0
 * Author:            Peter van der Steen
 * Author URI:        https://github.com/pvds
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function load_dependencies() {

    /**
     * The PHP helper function partials
     */
    require_once plugin_dir_path( __FILE__ ) . 'includes/var_dump.php';
    require_once plugin_dir_path( __FILE__ ) . 'includes/get_domain.php';
    require_once plugin_dir_path( __FILE__ ) . 'includes/anchor_tag_extras.php';
    require_once plugin_dir_path( __FILE__ ) . 'includes/anchor_tag.php';
    require_once plugin_dir_path( __FILE__ ) . 'includes/anchor_tag_mailto.php';

}
load_dependencies();

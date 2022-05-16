<?php

/**
 * Plugin Name:       Test Shortcode Plugin
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Handle the basics with this plugin.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Boomdevs
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       test
 * Domain Path:       /languages
 */

define( 'TEST_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'TEST_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'TEST_PLUGIN_INCLUDES', TEST_PLUGIN_PATH . 'includes/' );

function shortcode_generator() {
    return "<h2>Hello world from test shortcode !</h2>";
}

add_shortcode( 'test_shortcode', 'shortcode_generator' );

//include files
require_once TEST_PLUGIN_INCLUDES . 'block-editor/block.php';
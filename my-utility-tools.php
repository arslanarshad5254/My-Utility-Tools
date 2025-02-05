<?php
/**
 * Plugin Name: My Utility Tools
 * Plugin URI:  https://yourwebsite.com
 * Description: A collection of utility tools for WordPress websites.
 * Version:     1.0
 * Author:      Arslan Arshad
 * License:     GPL2
 * Text Domain: my-utility-tools
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Define plugin constants
define( 'MY_UTILITY_TOOLS_DIR', plugin_dir_path( __FILE__ ) );

// Include tool files
require_once MY_UTILITY_TOOLS_DIR . 'includes/timezone-converter.php';
require_once MY_UTILITY_TOOLS_DIR . 'includes/budget-calculator.php';
require_once MY_UTILITY_TOOLS_DIR . 'includes/word-counter.php';
require_once MY_UTILITY_TOOLS_DIR . 'includes/unit-converter.php';
require_once MY_UTILITY_TOOLS_DIR . 'includes/performance-monitor.php';
require_once MY_UTILITY_TOOLS_DIR . 'includes/seo-analyzer.php';
require_once MY_UTILITY_TOOLS_DIR . 'includes/security-checker.php';
require_once MY_UTILITY_TOOLS_DIR . 'includes/to-do-list.php';

// Enqueue assets (CSS & JS)
function my_utility_tools_enqueue_assets() {
    wp_enqueue_style( 'my-utility-tools-style', plugin_dir_url( __FILE__ ) . 'assets/css/style.css' );
    wp_enqueue_script( 'my-utility-tools-script', plugin_dir_url( __FILE__ ) . 'assets/js/script.js', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'my_utility_tools_enqueue_assets' );

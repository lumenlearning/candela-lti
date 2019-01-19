<?php

/**
 * @wordpress-plugin
 * Plugin Name: Candela LTI
 * Description: LTI Integration for Pressbooks
 * Version: 1.0.0
 * Author: Lumen Learning
 * Author URI: https://lumenlearning.com
 * Text Domain: lumen
 * License: MIT
 * GitHub Plugin URI: https://github.com/lumenlearning/candela-lti
 */

use Candela\Lti;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// -----------------------------------------------------------------------------
// Setup
// -----------------------------------------------------------------------------

if ( ! defined( 'CANDELA_LTI_PLUGIN_DIR' ) ) {
	define( 'CANDELA_LTI_PLUGIN_DIR', ( is_link( WP_PLUGIN_DIR . '/candela-lti' ) ? trailingslashit( WP_PLUGIN_DIR . '/candela-lti' ) : trailingslashit( __DIR__ ) ) );
}

// -----------------------------------------------------------------------------
// Autoloader
// -----------------------------------------------------------------------------

require CANDELA_LTI_PLUGIN_DIR . 'autoloader.php';

// Do our necessary plugin setup and add_action routines.
Lti::init();

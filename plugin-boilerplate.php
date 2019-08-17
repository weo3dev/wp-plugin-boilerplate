<?php
/**
 * Plugin Name: Plugin Boilerplate
 * Plugin URI: https://www.weo3.com
 * Description: Plugin Bone Structure
 * Author: weo3dev
 * Author URI: https://www.weo3.com/
 * Version: 1.1.1
 * License: GPL2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * @since 1.1.1
 */

defined( 'ABSPATH' ) || exit;

function weo3_plugin_boilerplate() {

    if ( ! function_exists( 'register_block_type' ) ) {
		// Gutenberg is not active.
		return;
    }
    
    wp_enqueue_script(
        'weo3-plugin-boilerplate-script',
        plugins_url( 'build/index.js', __FILE__ ),
		array( 'wp-blocks', 'wp-i18n', 'wp-element', 'wp-editor' ),
        filemtime( plugin_dir_path( __FILE__ ) . 'build/index.js' )
    );
}
add_action( 'init', 'weo3_plugin_boilerplate' );

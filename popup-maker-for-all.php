<?php
/**
 * Plugin Name: Popup Maker for All
 * Plugin URI: https://github.com/MIGHTYminnow/popup-maker-for-all
 * Description: Makes Popup Maker accessible.
 * Version: 1.0.0
 * Author: MIGHTYminnow
 * Author URI: https://mightyminnow.com
 */

/**
 * Enqueue child theme styles and scripts.
 */
if ( ! function_exists( 'pma_enqueue_assets' ) ) {
	add_action( 'wp_enqueue_scripts', 'pma_enqueue_assets' );
	function pma_enqueue_assets() {
		wp_enqueue_script( 'popup-maker-for-all', plugin_dir_url( __FILE__ ) . 'popup-maker-for-all.js', array( 'jquery' ), '1.0.0', true );
	}
}

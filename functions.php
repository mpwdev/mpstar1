<?php

/**
 * Theme functions
 *
 * @package mpstar1
 */

if ( ! defined( 'MPSTAR1_DIR_PATH' ) ) {
	define( 'MPSTAR1_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if ( ! defined( 'MPSTAR1_DIR_URI' ) ) {
	define( 'MPSTAR1_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

require_once MPSTAR1_DIR_PATH . '/inc/helpers/autoloader.php';

function mpstar1_get_theme_instance() {
	\MPSTAR1_THEME\Inc\MPSTAR1_THEME::get_instance();
}
mpstar1_get_theme_instance();

function mpstar1_enqueue_scripts() {



}
add_action( 'wp_enqueue_scripts', 'mpstar1_enqueue_scripts' );
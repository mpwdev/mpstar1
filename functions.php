<?php

/**
 * Theme functions
 *
 * @package mpstar1
 */

if ( ! defined( 'MPSTAR1_DIR_PATH' ) ) {
	define( 'MPSTAR1_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

require_once MPSTAR1_DIR_PATH . '/inc/helpers/autoloader.php';

function mpstar1_enqueue_scripts() {

	// register styles
	wp_register_style( 'style', get_stylesheet_uri(), [], filemtime( get_template_directory() . '/style.css' ), 'all' );
	wp_register_style( 'bootstrap', get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.css', [], '5.1.3', 'all' );
	// register scripts
	wp_register_script( 'main', get_template_directory_uri() . '/assets/main.js', [], filemtime( get_template_directory() . '/assets/main.js' ), true );
	wp_register_script( 'bootstrap', get_template_directory_uri() . '/assets/src/library/js/bootstrap.min.js', [ 'jquery' ], '5.1.3', true );

	// enqueue styles
	wp_enqueue_style( 'style');
	wp_enqueue_style( 'bootstrap');
	// enqueue scripts
	wp_enqueue_script( 'main');
	wp_enqueue_script( 'bootstrap');
}
add_action( 'wp_enqueue_scripts', 'mpstar1_enqueue_scripts' );
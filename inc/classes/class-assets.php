<?php
/**
 * enqueue theme assets
 *
 * @package mpstar1
 */

namespace MPSTAR1_THEME\Inc;

use MPSTAR1_THEME\Inc\Traits\Singleton;

class Assets {
	use Singleton;

	protected function __construct() {
		//load class
		$this->setup_hooks();
	}

	protected function setup_hooks() {

		/**
		 * actions
		 */
		add_action( 'wp_enqueue_scripts', [ $this, 'register_styles'] );
		add_action( 'wp_enqueue_scripts', [ $this, 'register_scripts'] );
	}

	public function register_styles() {
		// register styles
		wp_register_style( 'style', get_stylesheet_uri(), [], filemtime( MPSTAR1_DIR_PATH . '/style.css' ), 'all' );
		wp_register_style( 'bootstrap', MPSTAR1_DIR_URI . '/assets/src/library/css/bootstrap.min.css', [], '5.1.3', 'all' );

		// enqueue styles
		wp_enqueue_style( 'style');
		wp_enqueue_style( 'bootstrap');
	}

	public function register_scripts() {
		// register scripts
		wp_register_script( 'main', MPSTAR1_DIR_URI . '/assets/main.js', [], filemtime( MPSTAR1_DIR_PATH . '/assets/main.js' ), true );
		wp_register_script( 'bootstrap', MPSTAR1_DIR_URI . '/assets/src/library/js/bootstrap.min.js', [ 'jquery' ], '5.1.3', true );

		// enqueue scripts
		wp_enqueue_script( 'main');
		wp_enqueue_script( 'bootstrap');
	}


}
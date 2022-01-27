<?php
	/**
	 * The theme
	 *
	 * @package mpstar1
	 */

	namespace MPSTAR1_THEME\Inc;

	use MPSTAR1_THEME\Inc\Traits\Singleton;

	class MPSTAR1_THEME {
		use Singleton;

		protected function __construct() {
		 //load class
			Assets::get_instance();

			$this->setup_hooks();
		}

		protected function setup_hooks() {

			/**
			 * actions
			 */

		}


	}
<?php

namespace SCTAutomator\Apps;

use Thrive\Automator\Items\App;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Silence is golden!
}

class Studiocart extends App {

	public static function get_id() {
		return 'studiocart_app';
	}

	public static function get_name() {
		return 'Studiocart';
	}

	public static function get_description() {
		return 'Studiocart Triggers for Thrive Automator';
	}

	public static function get_logo() {
		return SCTA_PLUGIN_URL .'assets/icons/icon-45x45.jpg';
	}


	/**
	 * Whether the current App is available for the current user
	 * e.g prevent premium items from being shown to free users
	 *
	 * @return bool
	 */
	public static function has_access() {
		return true;
	}
}

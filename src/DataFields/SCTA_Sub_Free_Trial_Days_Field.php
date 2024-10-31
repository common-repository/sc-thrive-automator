<?php

namespace SCTAutomator\DataFields;
use Thrive\Automator\Items\Data_Field;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Silence is golden!
}

/**
 * Class SCTA_Sub_Free_Trial_Days_Field
 */
class SCTA_Sub_Free_Trial_Days_Field extends Data_Field {

	/**
	 * Field name
	 */
	public static function get_name() {
		return 'Subscription Trial Days';
	}

	/**
	 * Field description
	 */
	public static function get_description() {
		return 'Studiocart subscription free trial days';
	}

	/**
	 * Field input placeholder
	 */
	public static function get_placeholder() {
		return '';
	}

	public static function get_id() {
		return 'sc_sub_free_trial';
	}

	public static function get_supported_filters() {
		return [ 'string_equals' ];
	}

	public static function get_field_value_type() {
		return static::TYPE_STRING;
	}

}

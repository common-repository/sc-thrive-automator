<?php

namespace SCTAutomator\DataFields;
use Thrive\Automator\Items\Data_Field;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Silence is golden!
}

/**
 * Class SCTA_Vat_Number_Field
 */
class SCTA_Vat_Number_Field extends Data_Field {

	/**
	 * Field name
	 */
	public static function get_name() {
		return 'VAT Number';
	}

	/**
	 * Field description
	 */
	public static function get_description() {
		return 'Studiocart vat number';
	}

	/**
	 * Field input placeholder
	 */
	public static function get_placeholder() {
		return '';
	}

	public static function get_id() {
		return 'sc_vat_number';
	}

	public static function get_supported_filters() {
		return [ 'string_equals' ];
	}

	public static function get_field_value_type() {
		return static::TYPE_STRING;
	}

}

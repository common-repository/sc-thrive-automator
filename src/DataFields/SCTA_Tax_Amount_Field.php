<?php

namespace SCTAutomator\DataFields;
use Thrive\Automator\Items\Data_Field;
use SCTAutomator\DataObjects\SCTA_Order_Data;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Silence is golden!
}

/**
 * Class SCTA_Tax_Amount_Field
 */
class SCTA_Tax_Amount_Field extends Data_Field {

	/**
	 * Field name
	 */
	public static function get_name() {
		return 'Tax Amount';
	}

	/**
	 * Field description
	 */
	public static function get_description() {
		return 'Studiocart order tax amount';
	}

	/**
	 * Field input placeholder
	 */
	public static function get_placeholder() {
		return '';
	}

	public static function get_id() {
		return 'sc_tax_amount';
	}

	public static function get_supported_filters() {
		return [ 'string_equals' ];
	}

	public static function get_field_value_type() {
		return static::TYPE_STRING;
	}

}

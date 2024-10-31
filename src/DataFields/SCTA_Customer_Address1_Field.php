<?php

namespace SCTAutomator\DataFields;
use Thrive\Automator\Items\Data_Field;
use SCTAutomator\DataObjects\SCTA_Order_Data;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Silence is golden!
}

/**
 * Class SCTA_Customer_Address1_Field
 */
class SCTA_Customer_Address1_Field extends Data_Field {

	/**
	 * Field name
	 */
	public static function get_name() {
		return 'Customer Address1';
	}

	/**
	 * Field description
	 */
	public static function get_description() {
		return 'Studiocart customer address1';
	}

	/**
	 * Field input placeholder
	 */
	public static function get_placeholder() {
		return '';
	}

	public static function get_id() {
		return 'customer_address1';
	}

	public static function get_supported_filters() {
		return [ 'string_equals' ];
	}

	public static function get_field_value_type() {
		return static::TYPE_STRING;
	}


}

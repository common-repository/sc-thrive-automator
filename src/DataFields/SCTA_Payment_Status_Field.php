<?php

namespace SCTAutomator\DataFields;
use Thrive\Automator\Items\Data_Field;
use SCTAutomator\DataObjects\SCTA_Order_Data;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Silence is golden!
}

/**
 * Class SCTA_Payment_Status_Field
 */
class SCTA_Payment_Status_Field extends Data_Field {

	/**
	 * Field name
	 */
	public static function get_name() {
		return 'Payment Status';
	}

	/**
	 * Field description
	 */
	public static function get_description() {
		return 'Studiocart order payment status';
	}

	/**
	 * Field input placeholder
	 */
	public static function get_placeholder() {
		return '';
	}

	public static function get_id() {
		return 'sc_payment_status';
	}

	public static function get_supported_filters() {
		return [ 'string_equals' ];
	}

	public static function get_field_value_type() {
		return static::TYPE_STRING;
	}

}

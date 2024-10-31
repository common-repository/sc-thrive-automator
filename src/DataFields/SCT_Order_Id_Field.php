<?php

namespace SCTAutomator\DataFields;
use Thrive\Automator\Items\Data_Field;
use SCTAutomator\DataObjects\SCTA_Order_Data;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Silence is golden!
}

/**
 * Class SCT_Order_Id_Field
 */
class SCT_Order_Id_Field extends Data_Field {

	/**
	 * Field name
	 */
	public static function get_name() {
		return 'Order ID';
	}

	/**
	 * Field description
	 */
	public static function get_description() {
		return 'Filter by SC order id';
	}

	/**
	 * Field input placeholder
	 */
	public static function get_placeholder() {
		return '';
	}

	public static function get_id() {
		return 'order_id';
	}

	public static function get_supported_filters() {
		return [ 'string_equals' ];
	}

	public static function get_field_value_type() {
		return static::TYPE_STRING;
	}

	public static function get_dummy_value() {
		return '1';
	}

	public static function primary_key() {
		return SCTA_Order_Data::get_id();
	}
}

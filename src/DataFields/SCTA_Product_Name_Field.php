<?php

namespace SCTAutomator\DataFields;
use Thrive\Automator\Items\Data_Field;
use SCTAutomator\DataObjects\SCTA_Order_Data;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Silence is golden!
}

/**
 * Class SCTA_Page_Url_Field
 */
class SCTA_Product_Name_Field extends Data_Field {

	/**
	 * Field name
	 */
	public static function get_name() {
		return 'Product Name';
	}

	/**
	 * Field description
	 */
	public static function get_description() {
		return 'Studiocart order product name';
	}

	/**
	 * Field input placeholder
	 */
	public static function get_placeholder() {
		return '';
	}

	public static function get_id() {
		return 'sc_product_name';
	}

	public static function get_supported_filters() {
		return [ 'string_equals' ];
	}

	public static function get_field_value_type() {
		return static::TYPE_STRING;
	}
	
}

<?php

namespace SCTAutomator\DataFields;
use Thrive\Automator\Items\Data_Field;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Silence is golden!
}

/**
 * Class SCTA_Item_Name_Field
 */
class SCTA_Item_Name_Field extends Data_Field {

	/**
	 * Field name
	 */
	public static function get_name() {
		return 'Item Name';
	}

	/**
	 * Field description
	 */
	public static function get_description() {
		return 'Studiocart item name';
	}

	/**
	 * Field input placeholder
	 */
	public static function get_placeholder() {
		return '';
	}

	public static function get_id() {
		return 'sc_item_name';
	}

	public static function get_supported_filters() {
		return [ 'string_equals' ];
	}

	public static function get_field_value_type() {
		return static::TYPE_STRING;
	}

}

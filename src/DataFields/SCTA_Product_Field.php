<?php

namespace SCTAutomator\DataFields;
use Thrive\Automator\Items\Data_Field;
use SCTAutomator\DataObjects\SCTA_Order_Data;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Silence is golden!
}

/**
 * Class SCTA_Product_Field
 */
class SCTA_Product_Field extends Data_Field {

	/**
	 * Field name
	 */
	public static function get_name() {
		return 'Product';
	}

	/**
	 * Field description
	 */
	public static function get_description() {
		return 'Studiocart Product';
	}

	/**
	 * Field input placeholder
	 */
	public static function get_placeholder() {
		return '';
	}

	public static function get_id() {
		return 'sc_product';
	}

	public static function get_supported_filters() {
		return ['autocomplete' ];
	}

	public static function is_ajax_field(): bool {
		return true;
	}

	public static function get_field_value_type() {
		return static::TYPE_STRING;
	}
	
	public static function get_options_callback(): array {

		$posts = [];
		foreach (
			get_posts( [
				'posts_per_page' => '-1',
				'post_type'      => 'sc_product',
			] ) as $post
		) {
			$posts[ $post->ID ] = [
				'label' => $post->post_title .'(ID: '.$post->ID.')',
				'id'    => $post->ID,
			];
		}

		return $posts;

	}

}

<?php

namespace SCTAutomator\Triggers;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Silence is golden!
}

use SCTAutomator\Apps\Studiocart;
use Thrive\Automator\Items\Trigger;
use Thrive\Automator\Items\Data_Object;
use Thrive\Automator\Items\User_Data;
use SCTAutomator\DataObjects\SCTA_Order_Data;


class SCTA_Create_Order extends Trigger {

	public static function get_id() {
		return 'studiocart/create-order';
	}

	public static function get_wp_hook() {
		return 'sc_order_complete';
	}

	public static function get_provided_data_objects() {
		return [ 
			SCTA_Order_Data::get_id(), 
			User_Data::get_id()
		];
	}

	public static function get_hook_params_number() {
		return 3;
	}

	public static function get_app_id() {
		return Studiocart::get_id();
	}

	public static function get_name() {
		return 'Create Order';
	}

	public static function get_description() {
		return 'When an order is created';
	}

	public static function get_image() {
		return SCTA_PLUGIN_URL .'assets/icons/icon-45x45.jpg';
	}

	public function process_params( $params = array() ) {
		
		$data_objects = array();
		if ( ! empty( $params ) ) {
			$order_data = $params[1];
			$data_object_classes = Data_Object::get();
			
			if ( empty( $data_object_classes['order_data'] ) ) {
				/* if we don't have a class that parses the current param, we just leave the value as it is */
				$data_objects['order_data'] = $order_data;
			} else {
				/* when a data object is available for the current parameter key, we create an instance that will handle the data */
				$data_objects['order_data'] = new $data_object_classes['order_data']( $order_data, $this->get_automation_id() );
			}

			$user_data = null;
			/**
			 * try to match email with existing user
			 */
			if ( ! empty( $order_data ) && ! empty( $order_data['email'] ) ) {
				$user_data = get_user_by( 'email', $order_data['email'] );
				if(empty($user_data)){
					$user_data = new WP_User;
					$user->user_login = $order_data['email'];
					$user->user_email = $order_data['email'];
					$user->display_name = $order['firstname'] . ' ' . $order['lastname'];
				}
			}
			if ( empty( $data_object_classes['user_data'] ) ) {
				$data_objects['user_data'] = $user_data;
			} else {
				$data_objects['user_data'] = new $data_object_classes['user_data']( $user_data, $this->get_automation_id() );
			}
		}
		
		return $data_objects;
		
	}
	
}


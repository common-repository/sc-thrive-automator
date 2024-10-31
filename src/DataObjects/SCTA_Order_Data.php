<?php

namespace SCTAutomator\DataObjects;
use SCTAutomator\DataFields\SCTA_Product_Field;
use SCTAutomator\DataFields\SCTA_Plan_Field;
use SCTAutomator\DataFields\SCTA_Order_Id_Field;
use SCTAutomator\DataFields\SCTA_Customer_First_Name_Field;
use SCTAutomator\DataFields\SCTA_Customer_Last_Name_Field;
use SCTAutomator\DataFields\SCTA_Customer_Email_Field;
use SCTAutomator\DataFields\SCTA_Customer_Phone_Field;
use SCTAutomator\DataFields\SCTA_Customer_Address1_Field;
use SCTAutomator\DataFields\SCTA_Customer_Address2_Field;
use SCTAutomator\DataFields\SCTA_Customer_City_Field;
use SCTAutomator\DataFields\SCTA_Customer_State_Field;
use SCTAutomator\DataFields\SCTA_Customer_Zip_Field;
use SCTAutomator\DataFields\SCTA_Customer_Country_Field;
use SCTAutomator\DataFields\SCTA_Tax_Rate_Field;
use SCTAutomator\DataFields\SCTA_Invoice_Subtotal_Field;
use SCTAutomator\DataFields\SCTA_Payment_Status_Field;
use SCTAutomator\DataFields\SCTA_Status_Field;
use SCTAutomator\DataFields\SCTA_Currency_Field;
use SCTAutomator\DataFields\SCTA_Product_Name_Field;
use SCTAutomator\DataFields\SCTA_Page_Url_Field;
use SCTAutomator\DataFields\SCTA_Invoice_Total_Field;
use SCTAutomator\DataFields\SCTA_Coupon_Id_Field;
use SCTAutomator\DataFields\SCTA_Pay_Method_Field;
use SCTAutomator\DataFields\SCTA_Product_Id_Field;
use SCTAutomator\DataFields\SCTA_Coupon_Field;
use SCTAutomator\DataFields\SCTA_Transaction_Id_Field;
use SCTAutomator\DataFields\SCTA_Tax_Amount_Field;

use Thrive\Automator\Items\Data_Object;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Silence is golden!
}

/**
 * Class SCTA_Order_Data
 *
 */
class SCTA_Order_Data extends Data_Object {

	/**
	 * Get the data-object identifier
	 *
	 * @return string
	 */
	public static function get_id() {
		return 'order_data';
	}

	public static function get_nice_name() {
		return 'Studiocart Order Data';
	}

	/**
	 * Array of field object keys that are contained by this data-object
	 *
	 * @return array
	 */
	public static function get_fields() {

		return [
			SCTA_Product_Field::get_id(),
			SCTA_Plan_Field::get_id(),
			SCTA_Order_Id_Field::get_id(),
			SCTA_Customer_First_Name_Field::get_id(),
			SCTA_Customer_Last_Name_Field::get_id(),
			SCTA_Customer_Email_Field::get_id(),
			SCTA_Customer_Phone_Field::get_id(),
			SCTA_Customer_Address1_Field::get_id(),
			SCTA_Customer_Address2_Field::get_id(),
			SCTA_Customer_City_Field::get_id(),
			SCTA_Customer_State_Field::get_id(),
			SCTA_Customer_Zip_Field::get_id(),
			SCTA_Customer_Country_Field::get_id(),
			SCTA_Tax_Amount_Field::get_id(),
			SCTA_Tax_Rate_Field::get_id(),
			SCTA_Invoice_Subtotal_Field::get_id(),
			SCTA_Invoice_Total_Field::get_id(),
			SCTA_Payment_Status_Field::get_id(),
			SCTA_Status_Field::get_id(),
			SCTA_Product_Id_Field::get_id(),
			SCTA_Product_Name_Field::get_id(),
			SCTA_Currency_Field::get_id(),
			SCTA_Page_Url_Field::get_id(),
			SCTA_Coupon_Id_Field::get_id(),
			SCTA_Coupon_Field::get_id(),
			SCTA_Pay_Method_Field::get_id(),
			SCTA_Transaction_Id_Field::get_id(),
		];
	}

	public static function create_object( $order ) {
		
		if ( $order ) {

			return [
				'sc_product'          => $order['product_id'],
				'sc_plan'             => $order['option_id'],
				'order_id'         	  => $order['id'],
				'customer_last_name'  => $order['lastname'],
				'customer_first_name' => $order['firstname'],
				'customer_email'      => $order['email'],
				'customer_phone'      => $order['phone'],
				'customer_address1'   => $order['address1'],
				'customer_address2'   => $order['address2'],
				'customer_city'       => $order['city'],
				'customer_state'      => $order['state'],
				'sc_customer_zip'     => $order['zip'],
				'customer_country'    => $order['country'],
				'sc_tax_rate'         => $order['tax_rate'],
				'sc_tax_amount'       => $order['tax_amount'],
				'sc_invoice_subtotal' => $order['invoice_subtotal'],
				'sc_invoice_total'    => $order['invoice_total'],
				'sc_payment_status'   => $order['payment_status'],
				'sc_status'           => $order['status'],
				'sc_product_id'       => $order['product_id'],
				'sc_product_name'     => $order['product_name'],
				'sc_currency'         => $order['currency'],
				'sc_page_url'         => $order['page_url'],
				'sc_coupon_id'        => $order['coupon_id'],
				'sc_coupon'           => $order['coupon'],
				'sc_payment_method'   => $order['pay_method'],
				'sc_transaction_id'   => $order['transaction_id'],
			];
		}
	}

	public function can_provide_email() {
		return true;
	}

	public function get_provided_email() {
		return $this->get_value( 'customer_email' );
	}

}

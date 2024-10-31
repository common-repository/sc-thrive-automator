<?php

namespace SCTAutomator\DataObjects;

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
use SCTAutomator\DataFields\SCTA_Product_Field;
use SCTAutomator\DataFields\SCTA_Plan_Field;
use SCTAutomator\DataFields\SCTA_Product_Id_Field;
use SCTAutomator\DataFields\SCTA_Product_Name_Field;
use SCTAutomator\DataFields\SCTA_Pay_Method_Field;
use SCTAutomator\DataFields\SCTA_Page_Url_Field;

use SCTAutomator\DataFields\SCTA_Status_Field;
use SCTAutomator\DataFields\SCTA_Item_Name_Field;
use SCTAutomator\DataFields\SCTA_Option_Id_Field;
use SCTAutomator\DataFields\SCTA_Sub_Amount_Field;

use SCTAutomator\DataFields\SCTA_Tax_Amount_Field;
use SCTAutomator\DataFields\SCTA_Tax_Rate_Field;
use SCTAutomator\DataFields\SCTA_Tax_Type_Field;
use SCTAutomator\DataFields\SCTA_Tax_Desc_Field;

use SCTAutomator\DataFields\SCTA_Vat_Number_Field;
use SCTAutomator\DataFields\SCTA_Coupon_Id_Field;
use SCTAutomator\DataFields\SCTA_Currency_Field;

use SCTAutomator\DataFields\SCTA_Sub_Id_Field;
use SCTAutomator\DataFields\SCTA_Sub_Installments_Field;
use SCTAutomator\DataFields\SCTA_Sub_Interval_Field;
use SCTAutomator\DataFields\SCTA_Sub_Frequency_Field;
use SCTAutomator\DataFields\SCTA_Sub_Next_Bill_Date_Field;
use SCTAutomator\DataFields\SCTA_Sub_End_Date_Field;
use SCTAutomator\DataFields\SCTA_Sub_Free_Trial_Days_Field;

use SCTAutomator\DataFields\SCTA_Sub_Signup_Fee_Field;
use SCTAutomator\DataFields\SCTA_Sub_Cancel_Date_Field;


use Thrive\Automator\Items\Data_Object;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Silence is golden!
}

/**
 * Class SCTA_Subscription_Data
 *
 */
class SCTA_Subscription_Data extends Data_Object {

	/**
	 * Get the data-object identifier
	 *
	 * @return string
	 */
	public static function get_id() {
		return 'subscription_data';
	}

	public static function get_nice_name() {
		return 'Studiocart Subscription Data';
	}

	/**
	 * Array of field object keys that are contained by this data-object
	 *
	 * @return array
	 */
	public static function get_fields() {

		return [
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

			SCTA_Product_Field::get_id(),
			SCTA_Plan_Field::get_id(),
			SCTA_Product_Id_Field::get_id(),
			SCTA_Product_Name_Field::get_id(),
			SCTA_Pay_Method_Field::get_id(),
			SCTA_Page_Url_Field::get_id(),

			SCTA_Status_Field::get_id(),
			SCTA_Item_Name_Field::get_id(),
			SCTA_Option_Id_Field::get_id(),
			SCTA_Sub_Amount_Field::get_id(),

			SCTA_Tax_Amount_Field::get_id(),
			SCTA_Tax_Rate_Field::get_id(),
			SCTA_Tax_Type_Field::get_id(),
			SCTA_Tax_Desc_Field::get_id(),

            SCTA_Vat_Number_Field::get_id(),
            SCTA_Coupon_Id_Field::get_id(),
            SCTA_Currency_Field::get_id(),
            
            SCTA_Sub_Id_Field::get_id(),
            SCTA_Sub_Installments_Field::get_id(),
            SCTA_Sub_Interval_Field::get_id(),
            SCTA_Sub_Frequency_Field::get_id(),
            SCTA_Sub_Next_Bill_Date_Field::get_id(),
            SCTA_Sub_End_Date_Field::get_id(),
            SCTA_Sub_Free_Trial_Days_Field::get_id(),
            
            SCTA_Sub_Signup_Fee_Field::get_id(),
            SCTA_Sub_Cancel_Date_Field::get_id(),
		];
	}

	public static function create_object( $subscription ) {
		
		if ( $subscription ) {

			return [
                'customer_first_name' => $subscription['firstname'],
				'customer_last_name'  => $subscription['lastname'],
				'customer_email'      => $subscription['email'],
				'customer_phone'      => $subscription['phone'],
				'customer_address1'   => $subscription['address1'],
				'customer_address2'   => $subscription['address2'],
				'customer_city'       => $subscription['city'],
				'customer_state'      => $subscription['state'],
				'sc_customer_zip'     => $subscription['zip'],
				'customer_country'    => $subscription['country'],
				'sc_product'          => $subscription['product_id'],
				'sc_plan'             => $subscription['option_id'],
                'sc_product_id'       => $subscription['product_id'],
				'sc_product_name'     => $subscription['product_name'],
                'sc_payment_method'   => $subscription['pay_method'],
                'sc_page_url'         => $subscription['page_url'],
                'sc_status'           => $subscription['status'],
                'sc_item_name'        => $subscription['item_name'],
                'sc_option_id'        => $subscription['option_id'],
                'sc_sub_amount'       => $subscription['amount'],
                'sc_tax_amount'       => $subscription['tax_amount'],
				'sc_tax_rate'         => $subscription['tax_rate'],
                'sc_tax_type'         => $subscription['tax_type'],
                'sc_tax_desc'         => $subscription['tax_desc'],
                'sc_vat_number'       => $subscription['vat_number'],
                'sc_coupon_id'        => $subscription['coupon_id'],
                'sc_currency'         => $subscription['currency'],
                'sc_subscription_id'  => $subscription['subscription_id'],
                'sc_sub_installment'  => $subscription['sub_installments'],
                'sc_sub_interval'     => $subscription['sub_interval'],
                'sc_sub_frequency'    => $subscription['sub_frequency'],
                'sc_sub_next_bill'    => $subscription['sub_next_bill_date'],
                'sc_sub_end_date'     => $subscription['sub_end_date'],
                'sc_sub_free_trial'   => $subscription['free_trial_days'],
                'sc_sub_signup_fee'   => $subscription['sign_up_fee'],
                'sc_sub_cancel_date'  => $subscription['cancel_date']
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

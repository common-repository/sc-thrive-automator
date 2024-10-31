<?php

// App
use SCTAutomator\Apps\Studiocart;

// Triggers
use SCTAutomator\Triggers\SCTA_Create_Order;
use SCTAutomator\Triggers\SCTA_Refund_Order;
use SCTAutomator\Triggers\SCTA_Lead_Capture;
use SCTAutomator\Triggers\SCTA_Activate_Subscription;
use SCTAutomator\Triggers\SCTA_Cancel_Subscription;
use SCTAutomator\Triggers\SCTA_Subscription_Renewal;
use SCTAutomator\Triggers\SCTA_Subscription_Renewal_Fail;


// Data Fields
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
use SCTAutomator\DataFields\SC_Status_Field;
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

use SCTAutomator\DataFields\SCTA_Item_Name_Field;
use SCTAutomator\DataFields\SCTA_Option_Id_Field;
use SCTAutomator\DataFields\SCTA_Order_Amount_Field;
use SCTAutomator\DataFields\SCTA_Tax_Type_Field;
use SCTAutomator\DataFields\SCTA_Tax_Desc_Field;
use SCTAutomator\DataFields\SCTA_Vat_Number_Field;

use SCTAutomator\DataFields\SCTA_Sub_Amount_Field;
use SCTAutomator\DataFields\SCTA_Sub_Id_Field;
use SCTAutomator\DataFields\SCTA_Sub_Installments_Field;
use SCTAutomator\DataFields\SCTA_Sub_Interval_Field;
use SCTAutomator\DataFields\SCTA_Sub_Frequency_Field;
use SCTAutomator\DataFields\SCTA_Sub_Next_Bill_Date_Field;
use SCTAutomator\DataFields\SCTA_Sub_End_Date_Field;
use SCTAutomator\DataFields\SCTA_Sub_Free_Trial_Days_Field;

use SCTAutomator\DataFields\SCTA_Sub_Signup_Fee_Field;
use SCTAutomator\DataFields\SCTA_Sub_Cancel_Date_Field;

use SCTAutomator\DataFields\SCTA_Status_Field;

//Data Objects
use SCTAutomator\DataObjects\SCTA_Order_Data;
use SCTAutomator\DataObjects\SCTA_Subscription_Data;

require plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';

add_action( 'thrive_automator_init', static function () {

	// Register Studiocart app
	thrive_automator_register_app( Studiocart::class );
	
	// Subscriptio Activate Trigger
	thrive_automator_register_trigger( SCTA_Create_Order::class );
	thrive_automator_register_trigger( SCTA_Refund_Order::class );
	thrive_automator_register_trigger( SCTA_Lead_Capture::class );
	thrive_automator_register_trigger( SCTA_Activate_Subscription::class );
	thrive_automator_register_trigger( SCTA_Cancel_Subscription::class );
	thrive_automator_register_trigger( SCTA_Subscription_Renewal::class );
	thrive_automator_register_trigger( SCTA_Subscription_Renewal_Fail::class );
	

	// Register Data Objects
	thrive_automator_register_data_object(SCTA_Order_Data::class);
	thrive_automator_register_data_object(SCTA_Subscription_Data::class);

	// Register Data Fields
	thrive_automator_register_data_field(SCTA_Product_Field::class);
	thrive_automator_register_data_field(SCTA_Plan_Field::class);
	thrive_automator_register_data_field(SCTA_Order_Id_Field::class);
	thrive_automator_register_data_field(SCTA_Customer_First_Name_Field::class);
	thrive_automator_register_data_field(SCTA_Customer_Last_Name_Field::class);
	thrive_automator_register_data_field(SCTA_Customer_Email_Field::class);
	thrive_automator_register_data_field(SCTA_Customer_Phone_Field::class);
	thrive_automator_register_data_field(SCTA_Customer_Address1_Field::class);
	thrive_automator_register_data_field(SCTA_Customer_Address2_Field::class);
	thrive_automator_register_data_field(SCTA_Customer_City_Field::class);
	thrive_automator_register_data_field(SCTA_Customer_State_Field::class);
	thrive_automator_register_data_field(SCTA_Customer_Zip_Field::class);
	thrive_automator_register_data_field(SCTA_Customer_Country_Field::class);
	
	thrive_automator_register_data_field(SCTA_Order_Amount_Field::class);
	thrive_automator_register_data_field(SCTA_Tax_Rate_Field::class);
	thrive_automator_register_data_field(SCTA_Invoice_Subtotal_Field::class);
	thrive_automator_register_data_field(SCTA_Payment_Status_Field::class);
	thrive_automator_register_data_field(SCTA_Status_Field::class);
	thrive_automator_register_data_field(SCTA_Currency_Field::class);
	thrive_automator_register_data_field(SCTA_Product_Name_Field::class);
	thrive_automator_register_data_field(SCTA_Page_Url_Field::class);
	thrive_automator_register_data_field(SCTA_Invoice_Total_Field::class);
	thrive_automator_register_data_field(SCTA_Coupon_Id_Field::class);
	thrive_automator_register_data_field(SCTA_Pay_Method_Field::class);
	thrive_automator_register_data_field(SCTA_Product_Id_Field::class);
	thrive_automator_register_data_field(SCTA_Coupon_Field::class);
	thrive_automator_register_data_field(SCTA_Transaction_Id_Field::class);
	thrive_automator_register_data_field(SCTA_Tax_Amount_Field::class);


	thrive_automator_register_data_field(SCTA_Item_Name_Field::class);
	thrive_automator_register_data_field(SCTA_Option_Id_Field::class);
	thrive_automator_register_data_field(SCTA_Sub_Amount_Field::class);
	thrive_automator_register_data_field(SCTA_Tax_Type_Field::class);
	thrive_automator_register_data_field(SCTA_Tax_Desc_Field::class);
	thrive_automator_register_data_field(SCTA_Vat_Number_Field::class);

	thrive_automator_register_data_field(SCTA_Sub_Id_Field::class);
	thrive_automator_register_data_field(SCTA_Sub_Installments_Field::class);
	thrive_automator_register_data_field(SCTA_Sub_Interval_Field::class);
	thrive_automator_register_data_field(SCTA_Sub_Frequency_Field::class);
	thrive_automator_register_data_field(SCTA_Sub_Next_Bill_Date_Field::class);
	thrive_automator_register_data_field(SCTA_Sub_End_Date_Field::class);
	thrive_automator_register_data_field(SCTA_Sub_Free_Trial_Days_Field::class);

	thrive_automator_register_data_field(SCTA_Sub_Signup_Fee_Field::class);
	thrive_automator_register_data_field(SCTA_Sub_Cancel_Date_Field::class);

} );

?>
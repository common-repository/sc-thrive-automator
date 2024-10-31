<?php
/**
 * Plugin Name: SC Thrive Automator
 * Plugin URI: https://www.studiocart.co/docs/add-ons/thrive-automator/
 * Description: Studiocart integrations for Thrive Automator
 * Author URI: https://www.studiocart.co/
 * Version: 1.0
 * Author: <a href="https://www.studiocart.co">Studiocart</a>
 */



if ( ! defined( 'ABSPATH' ) ) {
	exit; // Silence is golden!
}

define( 'SCTA_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

add_action( 'plugins_loaded', function(){

	if (!class_exists('NCS_Cart')) {
		add_action( 'admin_notices', 'scta_sc_notice' );
	}

	if(!is_plugin_active('thrive-automator/thrive-automator.php')){
		add_action( 'admin_notices', 'scta_ta_notice' );
	}

});

function scta_sc_notice(){
	?>
		<div class="error">
			<p><?php echo __('Please activate Studiocart to use the Studiocart Thrive Automator Add-on.'); ?></p>
		</div>
	<?php
	deactivate_plugins( plugin_basename( __FILE__ ) );
}

function scta_ta_notice(){
	?>
		<div class="error">
			<p><?php echo __('Please activate Thrive Automator to use the Studiocart Thrive Automator Add-on.'); ?></p>
		</div>
	<?php
	deactivate_plugins( plugin_basename( __FILE__ ) );
}

require_once( 'sc-thrive.php' );

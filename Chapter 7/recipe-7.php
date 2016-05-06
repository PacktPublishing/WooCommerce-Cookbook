<?php
// remove unnecessary checkout fields
function woocommerce_cookbook_remove_checkout_fields( $fields ) {
	// check if the cart needs shipping
	if ( false == WC()->cart->needs_shipping() ) {
		// hide the billing fields
		unset($fields['billing']['billing_company']);
		unset($fields['billing']['billing_address_1']);
		unset($fields['billing']['billing_address_2']);
		unset($fields['billing']['billing_city']);
		unset($fields['billing']['billing_postcode']);
		unset($fields['billing']['billing_country']);
		unset($fields['billing']['billing_state']);
		unset($fields['billing']['billing_phone']);
		// hide the additional information section
		add_filter( 'woocommerce_enable_order_notes_field', '__return_false' );
	}
	return $fields;
}
// remove unnecessary checkout fields
add_filter( 'woocommerce_checkout_fields' , 'woocommerce_cookbook_remove_checkout_fields' );

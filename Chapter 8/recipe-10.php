<?php
add_filter( 'woocommerce_countries_base_city' , 'set_woocommerce_countries_base_city' );
function set_woocommerce_countries_base_city() {
	// Replace with your store town/city
	return 'Townland';
}

add_filter( 'woocommerce_countries_base_postcode' , 'set_woocommerce_countries_base_postcode' );
function set_woocommerce_countries_base_postcode() {
	// Replace with your store postcode / zipcode
	return '45040';
}

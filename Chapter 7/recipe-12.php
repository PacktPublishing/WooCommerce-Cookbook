<?php
// change the default country to USA
function woocommerce_cookbook_default_checkout_country() {
	return 'US';
}
// change the default state to Colorado
function woocommerce_cookbook_default_checkout_state() {
	return 'CO';
}
// change the default state and country
add_filter( 'default_checkout_country', 'woocommerce_cookbook_default_checkout_country' );
add_filter( 'default_checkout_state', 'woocommerce_cookbook_default_checkout_state' );

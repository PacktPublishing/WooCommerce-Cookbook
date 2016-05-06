<?php
// make the add to cart redirect go to the checkout page 
function woocommerce_cookbook_add_to_cart_redirect() {
	return get_permalink( get_option( 'woocommerce_checkout_page_id' ) );
}
add_filter( 'woocommerce_add_to_cart_redirect', 'woocommerce_cookbook_add_to_cart_redirect' );

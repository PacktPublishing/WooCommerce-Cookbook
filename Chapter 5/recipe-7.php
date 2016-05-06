<?php
/**
* Enable free shipping for orders with products that have the free-shipping shipping class slug
*
* @param bool $is_available
*/
function woocommerce_cookbook_enable_free_shipping( $is_available ) {
    global $woocommerce;

    // set the shipping classes that are eligible
    $eligible = array( 'free-shipping' );

    // get cart contents
    $cart_items = $woocommerce->cart->get_cart();

    // loop through the items checking to make sure they all have the right class
    foreach ( $cart_items as $key => $item ) {
        if ( ! in_array( $item['data']->shipping_class, $eligible ) ) {
            // this item doesn't have the right class. return false
            return false;
        }
    }

    // nothing out of the ordinary return the default value
    return $is_available;
}
add_filter( 'woocommerce_shipping_free_shipping_is_available', 'woocommerce_cookbook_enable_free_shipping', 20 );

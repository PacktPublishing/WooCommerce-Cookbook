<?php
function woocommerce_cookbook_only_ship_to_continental_us( $available_methods ) {
    global $woocommerce;
    $excluded_states = array( 'AK','HI','GU','PR' );

    if( in_array( $woocommerce->customer->get_shipping_state(), $excluded_states ) ) {
        // Empty the $available_methods array
        $available_methods = array();
    }

    return $available_methods;
}
add_filter( 'woocommerce_package_rates', 'woocommerce_cookbook_only_ship_to_continental_us', 10 );

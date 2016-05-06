<?php
// Add a new sorting option
add_filter( 'woocommerce_default_catalog_orderby_options', 'woocommerce_cookbook_catalog_orderby' );
add_filter( 'woocommerce_catalog_orderby', 'woocommerce_cookbook_catalog_orderby' );
function woocommerce_cookbook_catalog_orderby( $sortby ) {
    $sortby['oldest_to_newest'] = __( 'Sort by oldest to newest', 'woocommerce' );
    return $sortby;
}


// Add sorting oldest to newest functionality to sorting dropdown
add_filter( 'woocommerce_get_catalog_ordering_args', 'woocommerce_cookbook_get_catalog_ordering_args' );
function woocommerce_cookbook_get_catalog_ordering_args( $args ) {
    // get the orderby value
    $orderby_value = isset( $_GET['orderby'] ) ? wc_clean( $_GET['orderby'] ) : apply_filters( 'woocommerce_default_catalog_orderby', get_option( 'woocommerce_default_catalog_orderby' ) );

    // if the orderby value matches our custom option
    if ( 'oldest_to_newest' == $orderby_value ) {
        $args['orderby'] = 'date';
        $args['order'] = 'ASC';
    }
    return $args;
}

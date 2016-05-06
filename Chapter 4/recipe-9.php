<?php
add_filter( 'woocommerce_subscription_period_interval_strings', 'woocommerce_cookbook_subscription_intervals' );

function woocommerce_cookbook_subscription_intervals( $intervals ) { 
    $intervals[10] = sprintf( __( 'every %s', 'my-text-domain' ), WC_Subscriptions::append_numeral_suffix( 10 ) );
    return $intervals;
}

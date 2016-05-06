<?php
add_filter( 'woocommerce_subscriptions_price_string', 'woocommerce_cookbook_subscription_price_string', 10, 2 );
add_filter( 'woocommerce_subscriptions_product_price_string', 'woocommerce_cookbook_subscription_price_string', 10, 2 );

function woocommerce_cookbook_subscription_price_string( $subscription_string, $product ) {
    $subscription_string = $subscription_string . '. In 2016 all subscriptions will get a price increase. Buy now to be grandfathered in.';
    return $subscription_string;
}

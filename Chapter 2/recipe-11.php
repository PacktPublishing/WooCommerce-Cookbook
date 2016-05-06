<?php
add_filter( 'woocommerce_product_tabs', 'woocommerce_cookbook_remove_product_tabs', 10 );
function woocommerce_cookbook_remove_product_tabs( $tabs ) {
    $tabs['reviews']['priority'] = 10;
    $tabs['description']['priority'] = 20;
    $tabs['additional_information']['priority'] = 30;
    return $tabs;
}

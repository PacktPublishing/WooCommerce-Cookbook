<?php
add_filter( 'woocommerce_product_tabs', 'woocommerce_cookbook_remove_product_tabs', 10 );
function woocommerce_cookbook_remove_product_tabs( $tabs ) {
    unset( $tabs['description'] );
    return $tabs;
}

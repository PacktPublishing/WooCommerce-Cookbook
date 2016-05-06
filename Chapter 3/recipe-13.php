<?php
// calculate the percentage saved. function woocommerce_cookbook_calculate_percentage_saved( $product ) {
    return round( ( ( $product->regular_price - $product->sale_price ) / $product->regular_price ) * 100 );
}

// Add percentage saved next to sale price
add_filter( 'woocommerce_sale_price_html', 'woocommerce_cookbook_percentage_saved', 10, 2 );
function woocommerce_cookbook_percentage_saved( $price, $product ) {
    $percentage_saved = woocommerce_cookbook_calculate_percentage_saved( $product );
    return $price . sprintf( __( ' Save %s', 'woocommerce' ), $percentage_saved . '%' );
}

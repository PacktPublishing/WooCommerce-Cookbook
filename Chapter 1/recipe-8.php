<?php
add_filter( 'woocommerce_currencies', 'add_my_currency' );
add_filter( 'woocommerce_currency_symbol', 'add_my_currency_symbol', 10, 2 );

function add_my_currency( $currencies ) {
     $currencies['ABC'] = __( 'Currency name', 'woocommerce' );
     return $currencies;
}

function add_my_currency_symbol( $currency_symbol, $currency ) {
     switch( $currency ) {
          case 'ABC': $currency_symbol = '$'; break;
     }
     return $currency_symbol;
}

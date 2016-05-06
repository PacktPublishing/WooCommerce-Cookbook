<?php
add_filter( 'loop_shop_columns', 'woocommerce_cookbook_loop_shop_columns', 20 );
    function woocommerce_cookbook_loop_shop_columns( $cols ) {
    return 3;
}


// matching css for the code above. put in your theme's style.css file.
.woocommerce ul.products li.product,
.woocommerce-page ul.products li.product{
    width: 30.75%
}

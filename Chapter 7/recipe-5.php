<?php
function woocommerce_cookbook_big_upsell_image() {
	if ( class_exists( 'WooCommerce' ) && function_exists( 'woocommerce_get_product_thumbnail' ) ) {
		if ( is_cart() ) {
			remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );

			add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_cookbook_product_thumbnail', 10 );
		}

	}
}


/**
* Get a bigger version of the product thumbnail.
*/
function woocommerce_cookbook_product_thumbnail() {
	echo woocommerce_get_product_thumbnail( 'large' );
	echo woocommerce_cookbook_product_thumbnail_css();
}


function woocommerce_cookbook_product_thumbnail_css() {
	echo '<style>
	.woocommerce .cart-collaterals .cross-sells ul.products li, .woocommerce-page .cart-collaterals .cross-sells ul.products li{
		width: 100%;
	}
	</style>';
}


add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_cookbook_big_upsell_image', 0 );

add_filter( 'woocommerce_cross_sells_total', 'woocommerce_cookbook_cross_sells_total', 10 );
function woocommerce_cookbook_cross_sells_total( $total ) {
	return 1;
}

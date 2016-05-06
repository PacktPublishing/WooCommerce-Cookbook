<?php
add_action( 'pre_get_posts', 'woocommerce_cookbook_pre_get_posts_query' );
function woocommerce_cookbook_pre_get_posts_query( $q ) {
	if ( ! $q->is_main_query() ) return;
	if ( ! $q->is_post_type_archive() ) return;
	if ( ! is_admin() && is_shop() ) {
		$q->set( 'tax_query', array(array(
			'taxonomy' => 'product_cat',
			'field' => 'slug',
			'terms' => array( 'posters' ),
			'operator' => 'NOT IN'
		)));
	}
	remove_action( 'pre_get_posts', 'woocommerce_cookbook_pre_get_posts_query' );
}

<?php
add_filter( 'wp_mail_from', 'woocommerce_cookbook_wp_mail_from', 99 );
function woocommerce_cookbook_wp_mail_from() {
	return html_entity_decode( 'yourname@yourstore.com' );
}

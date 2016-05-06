<?php
add_action( 'woocommerce_single_product_summary', 'woocommerce_cookbook_single_review', 25 );
function woocommerce_cookbook_single_review() {

	// get all of the comments
	$args = array ('post_type' => 'product');
	$comments = get_comments( $args );

	// get the best comment
	$best_comment = woocommerce_cookbook_get_best_comment( $comments );

	// if there is a best comment then print it
	if ( $best_comment > 0 ) {
		woocommerce_cookbook_print_best_comment( $comments[$best_comment] );
	}
}

function woocommerce_cookbook_get_best_comment( $comments ) {
	$best_comment = 0;

	// loop through each comment to find the best
	foreach( $comments as $key => $comment ) {
		// get the rating
		$rating = intval( get_comment_meta( $comment->comment_ID, 'rating', true ) );
		// save the rating in the comment
		$comment->rating = $rating;

		// if the rating is higher, it's approved, and there are at least 10 characters, save it
		if ( $rating > 0 &&
		$rating > $comments[$best_comment]->rating &&
		$comment->comment_approved == '1' &&
		strlen( $comment->comment_content ) > 10 ) {
			// save the array key of the comment
			$best_comment = $key;
		}
	}
	return $best_comment;
}

function woocommerce_cookbook_print_best_comment( $comment ) {
	// print out the best comment and some very basic styles
	?>
	<p>Here's what people are saying about this product:</p>
	<blockquote class='comment-text'>
		<?php
		echo apply_filters( 'comment_text', $comment->comment_content );
		?>
	</blockquote>
	<style>
		.comment-text{
			font-style: italic;
		}
	</style>
	<?php
}

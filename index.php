<?php
global $post;
$terms = wp_get_post_terms( $post->ID, 'product_cat' );
foreach ( $terms as $term ) $categories[] = $term->slug;

if ( in_array( 'your_cat_slug', $categories ) ) {
  echo 'Your post is in your_cat_slug ';
} else {
  echo 'some blabla';
}
?>

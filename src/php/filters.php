<?php

//TODO ca n'a pas l'air de marcher
function custom_excerpt_length($length) {
  return 10;
}

add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
add_filter('excerpt_length', 'custom_excerpt_length', 999 );


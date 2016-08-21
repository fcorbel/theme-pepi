<?php 
/*
 * Template Name: 404
 */
get_header();

do_action('woocommerce_before_main_content');
?>

404

<?php
echo "test:";
echo do_shortcode('[recent_products per_page="4" columns="4"]');

?>

<?php
do_action('woocommerce_after_main_content');

get_footer();
?>

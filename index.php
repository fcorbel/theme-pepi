<?php get_header();

do_action('woocommerce_before_main_content');
?>

<?php the_content(); ?>

<?php
do_action('woocommerce_after_main_content');

get_footer();
?>

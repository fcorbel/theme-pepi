<?php get_header();
do_action('woocommerce_before_main_content');
?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<?php get_template_part('blocs/content', 'post'); ?>

<?php endwhile; ?>
<?php endif; ?>

<?php do_action('woocommerce_after_main_content');
get_footer(); ?>


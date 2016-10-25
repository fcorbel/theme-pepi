<?php get_header();
do_action('woocommerce_before_main_content');
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <?php the_content(); ?>

<?php endwhile; else : ?>
	<p><?php _e( 'Désolé, aucun post à afficher.' ); ?></p>
<?php endif; ?>

<?php do_action('woocommerce_after_main_content');
get_footer(); ?>


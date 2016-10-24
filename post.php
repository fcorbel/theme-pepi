<?php get_header();
do_action('woocommerce_before_main_content');
?>

  <section id="actu">
    <h2>Notre actualité</h2>

    <?php
      $latest_blog_post = new WP_Query( array( 'posts_per_page' => 1 ) );

      if ($latest_blog_post->have_posts()) {
        while ($latest_blog_post->have_posts()) : $latest_blog_post->the_post();
          get_template_part('blocs/content', 'post');
        endwhile;
        echo("<a href='' class='btn secondary'>Toutes nos actualités</a>");
      } else {
        echo("<p>Nous n'avons pas encore d'actualité.</p>");
      }
    ?>
  </section>


<?php do_action('woocommerce_after_main_content');
get_footer(); ?>


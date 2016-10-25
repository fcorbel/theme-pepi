<?php
/*
 * Template Name: Homepage
 */

get_header();
do_action('woocommerce_before_main_content');
?>

  <section id="presentation">
    <h2>Présentation de la pépinière</h2>
      <div class="card">
        <p>Amet natus maiores labore vel voluptatum doloribus. Necessitatibus doloremque tempore cupiditate dolores vero! Nisi consequatur consectetur possimus fuga at praesentium qui expedita. Nulla aspernatur ad nemo quod amet pariatur eius.
        </p>
        <ul>
          <li>Lorem ipsum</li>
          <li>Lorem ipsum</li>
          <li>Lorem ipsum</li>
          <li>Lorem ipsum</li>
          <li>Lorem ipsum</li>
        </ul>
      </div>
      <figure>
        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/mr-t.jpeg" alt="Jean-jacques souriant a la pepi">
        <figcaption>Nous vous attendons a la pépinière!</figcaption>
      </figure>
  </section>

  <section id="selection">
    <h2>La séléction du moment</h2>
    <?php echo do_shortcode('[featured_products per_page="4" columns="4"]'); ?>
  </section>

  <section id="actu">
    <h2>Notre actualité</h2>

    <?php
      $latest_blog_post = new WP_Query( array( 'posts_per_page' => 1 ) );

      if ($latest_blog_post->have_posts()) {
        while ($latest_blog_post->have_posts()) : $latest_blog_post->the_post();
          get_template_part('blocs/content', 'post');
        endwhile;
        ?>
          <a href="<?php echo get_post_type_archive_link('post'); ?>" class='btn'>Toutes nos actualités</a>
        <?php
      } else {
        echo("<p>Nous n'avons pas encore d'actualité.</p>");
      }
    ?>
  </section>

  <section id="drive">
    <h2>Le drive</h2>
    <ol>
      <li class="card">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/plant-icon.png" alt="">
        <h3>Choisissez</h3>
        <p>Ipsum obcaecati qui asperiores distinctio magnam rerum aperiam unde. Reiciendis</p>
      </li>
      <li class="card">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/plant-icon.png" alt="">
        <h3>Achetez</h3>
        <p>Ipsum obcaecati qui asperiores distinctio magnam rerum aperiam unde. Reiciendis</p>
      </li>
      <li class="card">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/plant-icon.png" alt="">
        <h3>Réceptionner</h3>
        <p>Ipsum obcaecati qui asperiores distinctio magnam rerum aperiam unde. Reiciendis</p>
      </li>
    </ol>
  </section>

  <section id="temoignages">
    <h2>Ils sont venus chez nous</h2>

    <?php
      $latest_opinions = new WP_Query( array( 'posts_per_page' => 2,  'post_type' => 'avis-client') );

      if ($latest_opinions->have_posts()) {
        while ($latest_opinions->have_posts()) : $latest_opinions->the_post();
          get_template_part('blocs/content', 'avis');
        endwhile;
      }
    ?>
  </section>

  <section id="ou-nous-trouver">
    <h2>Où nous trouver?</h2>

      <div class="card">
        <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://www.openstreetmap.org/export/embed.html?bbox=-3.99876594543457%2C48.5179119855645%2C-3.9333629608154292%2C48.5521827667489&amp;layer=mapnik&amp;marker=48.535050275918515%2C-3.966064453125"></iframe><br/><small><a href="http://www.openstreetmap.org/?mlat=48.5351&amp;mlon=-3.9661#map=14/48.5351/-3.9661&amp;layers=N">View Larger Map</a></small>
      </div>

  </section>

<?php do_action('woocommerce_after_main_content');
get_footer(); ?>

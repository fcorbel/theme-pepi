<?php get_header();
do_action('woocommerce_before_main_content');
?>

  <section id="presentation">
    <h2>Presentation de la pepi</h2>
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
        <figcaption>Nous vous attendons a la pepi!</figcaption>
      </figure>
  </section>

  <section id="selection">
    <h2>La selection du moment</h2>
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
        echo("<a href='' class='btn secondary'>Toutes nos actualités</a>");
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
        <h3>Receptionner</h3>
        <p>Ipsum obcaecati qui asperiores distinctio magnam rerum aperiam unde. Reiciendis</p>
      </li>
    </ol>
  </section>

  <section id="temoignages">
    <h2>Temoignages clients</h2>
    <blockquote class="temoignage card">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pikachu.png" alt="">
      <p>
  Amet inventore eum nostrum cum excepturi similique consequatur. Ratione sequi beatae ab quidem asperiores illum recusandae placeat eos praesentium. Veritatis dolore quam ea atque dicta. Ut quibusdam totam accusamus dicta.
      </p>
      <footer><cite><a href="">Pikachu</a></cite></footer>
    </blockquote>
    <blockquote class="temoignage card">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pikachu.png" alt="">
      <p>
  Amet inventore eum nostrum cum excepturi similique consequatur. Ratione sequi beatae ab quidem asperiores illum recusandae placeat eos praesentium. Veritatis dolore quam ea atque dicta. Ut quibusdam totam accusamus dicta.
      </p>
      <footer><cite><a href="">Pikachu</a></cite></footer>
    </blockquote>

  </section>

  <section class="test">
    <div>a</div>
    <div>a</div>
    <div>a</div>
    <div>a</div>
    <div>a</div>
    <div>a</div>
    <div>a</div>
    <div>a</div>
    <div>a</div>
    <div>a</div>
    <div>a</div>
    <div>a</div>
  </section>

<?php do_action('woocommerce_after_main_content');
get_footer(); ?>

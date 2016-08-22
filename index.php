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

  <section id="drive">
    <h2>Le drive</h2>
    <ol>
      <li>
        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/plant-icon.png" alt="">
        <h3>Choisissez</h3>
        <p>Ipsum obcaecati qui asperiores distinctio magnam rerum aperiam unde. Reiciendis</p>
      </li>
      <li>
        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/plant-icon.png" alt="">
        <h3>Achetez</h3>
        <p>Ipsum obcaecati qui asperiores distinctio magnam rerum aperiam unde. Reiciendis</p>
      </li>
      <li>
        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/plant-icon.png" alt="">
        <h3>Receptionner</h3>
        <p>Ipsum obcaecati qui asperiores distinctio magnam rerum aperiam unde. Reiciendis</p>
      </li>
    </ol>
  </section>

  <section id="temoignages">
    <h2>Temoignages clients</h2>
    <blockquote class="temoignage">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pikachu.png" alt="">
      <p>
  Amet inventore eum nostrum cum excepturi similique consequatur. Ratione sequi beatae ab quidem asperiores illum recusandae placeat eos praesentium. Veritatis dolore quam ea atque dicta. Ut quibusdam totam accusamus dicta.
      </p>
      <footer><cite><a href="">Pikachu</a></cite></footer>
    </blockquote>
    <blockquote class="temoignage">
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

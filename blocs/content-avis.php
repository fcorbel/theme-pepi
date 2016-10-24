<blockquote class="temoignage card">
    <?php the_post_thumbnail("picto-thumbnail"); ?>
    <?php the_excerpt(); ?>
    <footer>
        <cite>
          <a href="<?php the_permalink(); ?>"><?php echo types_render_field( "auteur", array( "separator" => ", ", "id" => get_the_ID())); ?></a>
        </cite>
  </footer>
</blockquote>

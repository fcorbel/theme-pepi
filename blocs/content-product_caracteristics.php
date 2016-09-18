<?php
  $tags = get_the_terms($post->ID, 'product_tag');

  function show_facilite_entretien($tags) {
    if ($tags["peu-darrosage"] || $tags["pas-de-taille"]) {
      echo "<li id='entretien'>Entretien:";
      if ($tags["peu-darrosage"]) {
        echo "<span>peu d'arrosage</span>";
      }
      echo "</li>";
    }
  }

  function show_lieu($tags) {
    if ($tags["a-lombre"] || $tags["pour-la-terrasse"] || $tags["pour-le-balcon"] || $tags["pour-un-talus"]) {
      echo "<li id='lieu'>Lieu:";
      if ($tags["a-lombre"]) {
        echo "<span>a l'ombre</span>";
      }
      if ($tags["pour-la-terrasse"]) {
        echo "<span>terrasse</span>";
      }
      if ($tags["pour-le-balcon"]) {
        echo "<span>balcon</span>";
      }
      if ($tags["pour-un-talus"]) {
        echo "<span>talus</span>";
      }
      echo "</li>";
    }
  }

?>

<ul id="caracteristics_list">
  <?php
    if (!empty($tags) && ! is_wp_error($tags)) {
      $tags_map = [];
      foreach ($tags as $tag) {
        // echo $tag->name . " ";
        $tags_map[$tag->slug] = $tag;
      }
      show_facilite_entretien($tags_map);
      show_lieu($tags_map);
    }
?>
</ul>




<?php
get_template_part('blocs/content', 'product_calendar');


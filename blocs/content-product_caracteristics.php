<?php
  $tags = get_the_terms($post->ID, 'product_tag');

  function show_tag_infos($tags, $tag_slug) {
    if ($tags[$tag_slug]) {
      $description = htmlspecialchars($tags[$tag_slug]->description, ENT_QUOTES);
      $id = $tags[$tag_slug]->term_taxonomy_id;
      $with_thumbnail = has_term_thumbnail($id) ? "with_thumbnail" : "";
      echo "<span class='tag_info " . $with_thumbnail . "' data-description='" . $description . "'>";
      if ($with_thumbnail) {
        the_term_thumbnail($id, 'picto-thumbnail');
      } else {
        echo $tags[$tag_slug]->name;
      }
      // print_r($tags[$tag_slug]);
      echo "</span>";
    }
  }

  function show_facilite_entretien($tags) {
    if ($tags["peu-darrosage"] || $tags["pas-de-taille"]) {
      echo "<li id='entretien'>Entretien:";
      show_tag_infos($tags, "peu-darrosage");
      echo "</li>";
    }
  }

  function show_lieu($tags) {
    if ($tags["a-lombre"] || $tags["pour-la-terrasse"] || $tags["pour-le-balcon"] || $tags["pour-un-talus"]) {
      echo "<li id='lieu'>Lieu:";
      show_tag_infos($tags, "a-lombre");
      show_tag_infos($tags, "pour-la-terrasse");
      show_tag_infos($tags, "pour-le-balcon");
      show_tag_infos($tags, "pour-un-talus");
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


<?php
  $mois_floraison = get_post_meta($post->ID, 'mois_floraison', true);
  $mois_plantation = get_post_meta($post->ID, 'mois_plantation', true);

  function show_infos($index, $mois_plantation, $mois_floraison) {
    if ($mois_plantation[$index] === 'yes') {
      echo '<div class="plantation"></div>';
    }
    if ($mois_floraison[$index] === 'yes') {
      echo '<div class="floraison"></div>';
    }
  }

?>

<div id="plant_calendar">
  <ol>
    <li class="month">Janv.
      <?php show_infos(0, $mois_plantation, $mois_floraison); ?>
    </li><!--
  --><li class="month">Fevr.
      <?php show_infos(1, $mois_plantation, $mois_floraison); ?>
    </li><!--
  --><li class="month">Mars.
      <?php show_infos(2, $mois_plantation, $mois_floraison); ?>
    </li><!--
  --><li class="month">Avr.
      <?php show_infos(3, $mois_plantation, $mois_floraison); ?>
    </li><!--
  --><li class="month">Mai
      <?php show_infos(4, $mois_plantation, $mois_floraison); ?>
    </li><!--
  --><li class="month">Juin
      <?php show_infos(5, $mois_plantation, $mois_floraison); ?>
    </li><!--
  --><li class="month">Juil.
      <?php show_infos(6, $mois_plantation, $mois_floraison); ?>
    </li><!--
  --><li class="month">Aout
      <?php show_infos(7, $mois_plantation, $mois_floraison); ?>
    </li><!--
  --><li class="month">Sept.
      <?php show_infos(8, $mois_plantation, $mois_floraison); ?>
    </li><!--
  --><li class="month">Oct.
      <?php show_infos(9, $mois_plantation, $mois_floraison); ?>
    </li><!--
  --><li class="month">Nov.
      <?php show_infos(10, $mois_plantation, $mois_floraison); ?>
    </li><!--
  --><li class="month">Dec.
      <?php show_infos(11, $mois_plantation, $mois_floraison); ?>
    </li>
  </ol>

  <ul class="legende">
    <li><div class='plantation'></div>Plantation</li>
    <li><div class='floraison'></div>Floraison</li>
  </ul>
</div>

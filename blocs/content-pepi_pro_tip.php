<?php

// Conseil du producteur  
$conseil = get_post_meta($post->ID, 'pro_tips', true);
if (!empty($conseil)) {
  ?>
  <div id="conseil-pepi">
    <h2>Le conseil du pépiniériste</h2>
    <p><?php echo $conseil; ?></p>
  </div>
  <?php
}

<?php

if (!function_exists('pepi_add_custom_general_fields')) {
  function pepi_add_custom_general_fields() {
    global $woocommerce, $post;

    function add_month_checkbox_field($label, $id, $post_id) {
    ?>
      <p class="form-field <?php echo $id; ?>">
        <label for="<?php echo $id; ?>"><?php echo $label; ?></label>
        <span class="wrap">
          <?php
            $current_state = get_post_meta( $post_id, $id, true );
            $liste_mois = array('Jan', 'Fev', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Aou', 'Sep', 'Oct', 'Nov', 'Dec');
            foreach ($liste_mois as $key => $mois) {
              $previous_value = $current_state[$key];
              $checked = ($previous_value === 'yes') ? 'checked' : '';
          ?>
            <span>
            <input class="" type="checkbox" name="<?php printf('%s_%s', $id, $mois); ?>" value="<?php echo $previous_value; ?>" <?php echo $checked; ?>/>
            <?php echo $mois; ?>
            </span>
          <?php
            }
          ?>
        </span>
      </p>

    <?php
    }

    echo '<div class="options_group">';

    woocommerce_wp_text_input(array( 
      'id'          => 'sci_name', 
      'label'       => __( 'Nom scientifique', 'woocommerce' ), 
      'desc_tip'    => 'true',
      'description' => __( 'Tapez le nom scientifique de cette plante', 'woocommerce' ) 
    ));

    add_month_checkbox_field('Mois de plantation', 'mois_plantation', $post->ID);
    add_month_checkbox_field('Mois de floraison', 'mois_floraison', $post->ID);

    woocommerce_wp_textarea_input(array( 
      'id'          => 'pro_tips', 
      'label'       => __( 'Les conseils du professionnel', 'woocommerce' ), 
      'placeholder' => '', 
      'description' => __( 'Ajouter des informations en plus sur cette plante', 'woocommerce' ) 
    ));

    echo '</div>';
  }
}



if (!function_exists('pepi_add_custom_general_fields_save')) {
  function pepi_add_custom_general_fields_save($post_id) {
    function save_month_checkbox_field($post_id, $id) {
        $liste_mois = array('Jan', 'Fev', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Aou', 'Sep', 'Oct', 'Nov', 'Dec');
        $result = [];
        foreach ($liste_mois as $mois) {
          $result[] = isset($_POST[$id.'_'.$mois]) ? 'yes' : 'no'; 
        }
        update_post_meta($post_id, $id, $result);
    }

    $sci_name = $_POST['sci_name'];
    if (!empty($sci_name)) {
      update_post_meta($post_id, 'sci_name', esc_attr($sci_name));
    }

    save_month_checkbox_field($post_id, 'mois_plantation');
    save_month_checkbox_field($post_id, 'mois_floraison');

    $pro_tips = $_POST['pro_tips'];
    if (!empty($pro_tips)) {
      update_post_meta($post_id, 'pro_tips', esc_attr($pro_tips));
    }
  }
}

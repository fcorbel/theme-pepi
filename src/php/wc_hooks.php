<?php
// Remap woocommerce hooks to our own

///////////////////////////////
// Global
///////////////////////////////
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
add_action( 'woocommerce_before_main_content', 'pepi_output_content_wrapper_start', 10);

if (!function_exists('pepi_output_content_wrapper_start')) {
  function pepi_output_content_wrapper_start() {
    get_template_part('blocs/content', 'wrapper_start');
  }
}

remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
add_action( 'woocommerce_after_main_content', 'pepi_output_content_wrapper_end', 10);

if (!function_exists('pepi_output_content_wrapper_end')) {
  function pepi_output_content_wrapper_end() {
    get_template_part('blocs/content', 'wrapper_end');
  }
}
///////////////////////////////
// Product custom fields in admin
///////////////////////////////
// Display Fields
add_action( 'woocommerce_product_options_general_product_data', 'pepi_add_custom_general_fields' );
// Save Fields
add_action( 'woocommerce_process_product_meta', 'pepi_add_custom_general_fields_save' );

///////////////////////////////
// Product loop
///////////////////////////////
add_action('woocommerce_before_shop_loop_item_title', 'pepi_output_product_header_start', 10);

if (!function_exists('pepi_output_product_header_start')) {
  function pepi_output_product_header_start() {
    echo "<header>";
  }
}

remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);
add_action('woocommerce_after_shop_loop_item_title', 'pepi_output_product_header_end', 10);

if (!function_exists('pepi_output_product_header_end')) {
  function pepi_output_product_header_end() {
    echo "</header>";
  }
}

remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);

///////////////////////////////
// Single product
///////////////////////////////

// Affiche le prix plus bas
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 25);

// Remplace le resume par la description
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
add_action('woocommerce_single_product_summary', function() {
  the_content();
}, 20);

// enleve l'affichage des metas
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);


// Enleve les tabs (description, attributs)
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);

// Enleve la sidebar woocommerce des fiches produits
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

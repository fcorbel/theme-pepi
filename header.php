<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <!-- TODO meta viewport -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/style.css">
  <title><?php wp_title('|', true, 'right'); ?><?php echo bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
  <body <?php body_class(); ?>>
  <div id="top_header">
    <section>
      <span>08.65.66.66.66</span>
    </section>
  </div>
  <div id="main_header">
    <header>
      <!-- title -->
      <h1>This is my header</h1>
      <!-- search -->
      <!-- menu -->
      <?php main_nav(); ?>
    </header>
  </div>

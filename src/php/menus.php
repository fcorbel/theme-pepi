<?php

register_nav_menus(
  array (
    'main_nav' => 'Menu principal'
  )
);

function main_nav() {
  wp_nav_menu(array(
    'menu_id' => 'main_nav',
    'theme_location' => 'main_nav',
    'menu_class' => false,
    'container' => false,
  ));
}

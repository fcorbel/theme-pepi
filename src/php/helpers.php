<?php

function get_theme_custom_logo() {
  if (function_exists('the_custom_logo')) {
    the_custom_logo();
    return true;
  } else {
    return false;
  }
}

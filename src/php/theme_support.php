<?php

if (function_exists('add_theme_support')) {
  // Add Menu Support
  add_theme_support('menus');

  // Add custom logo
  add_theme_support('custom-logo');

  // Add HTML5 Support
  add_theme_support( 'html5', 
   array( 
     'comment-list', 
     'comment-form', 
     'search-form', 
   ) 
  );

}

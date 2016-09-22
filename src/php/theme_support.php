<?php

if (function_exists('add_theme_support')) {
  // Add Menu Support
  add_theme_support('menus');

  // Add thumbnail theme support
  add_theme_support('post-thumbnails');
  add_image_size('picto-thumbnail', 80, 80, true);

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

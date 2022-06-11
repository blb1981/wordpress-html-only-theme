<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php wp_head(); ?>
</head>
<body <?php body_class('reset') ?>>
  <h1>Site Title</h1>

  <?php
    if ( has_nav_menu('primary') ) {
      wp_nav_menu([
        'theme_location'        => 'primary',
        'container'             => false,
        'menu_class'            => 'navigation-primary',
        'fallback_cb'           => false,
        'depth'                 => 4,
        'walker'                => new HO_Custom_Nav_Walker()
      ]);
    }
  ?>
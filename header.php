<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo( 'name' ) ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class( 'reset' ); ?>>
<a href="<?php bloginfo( 'wpurl' ); ?>">
  <h1><?php bloginfo( 'name' ); ?></h1>
</a>  

  <h3>Categories</h3>
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
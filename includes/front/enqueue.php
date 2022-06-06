<?php

function ho_enqueue() {
  $uri                       = get_theme_file_uri(); // Returns a URL
  $ver                       = HO_DEV_MODE ? time() : false;

  // Register styles
  wp_register_style( 'ho_styles', $uri . '/assets/css/styles.css', [], $ver );

  // Then enqueue
  wp_enqueue_style('ho_styles' );

  // Register scripts
  wp_register_script( 'ho_plugins', $uri . '/assets/js/plugins.js', [], $ver, true);

  // Enqueue scripts
  // wp_enqueue_script('jquery');
  wp_enqueue_script('ho_plugins');
}

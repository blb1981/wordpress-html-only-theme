<?php

function ho_enqueue() {
  $uri                       = get_theme_file_uri(); // Returns a URL

  // Register styles
  wp_register_style( 'ho_styles', $uri . '/assets/css/styles.css' );

  // Then enqueue
  wp_enqueue_style('ho_styles' );

  // Register scripts
  wp_register_script( 'ho_plugins', $uri . '/assets/js/plugins.js', [], false, true);

  // Enqueue scripts
  // wp_enqueue_script('jquery');
  wp_enqueue_script('ho_plugins');
}

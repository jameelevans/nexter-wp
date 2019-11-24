<?php

//Adction to enque styles and scripts
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );

//Action to activate the ability to add custom logo in customizer
add_action( 'after_setup_theme', 'nexter_custom_logo_setup' );

//Enqueuing styles and scripts
function theme_enqueue_scripts() {
  wp_enqueue_style('nexter_main_styles', get_stylesheet_uri());
  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
  	wp_enqueue_script( 'comment-reply' );
  }
}

//Activate theme support options, custom images and menus
function nexter_custom_logo_setup() {
  $defaults = array(
      'height'      => 38,
      'width'       => 38,
      'flex-height' => true,
      'flex-width'  => true,
      'header-text' => array( 'Nexter', 'Your home, your freedom' ),
  );
  add_theme_support( 'custom-logo', $defaults );
}

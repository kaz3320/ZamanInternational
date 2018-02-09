<?php
function zaman_enqueue_styles(){
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() .'/css/bootstrap.min.css', array(), '4.0.0', 'all' );
  wp_enqueue_style('style', get_template_directory_uri().'/style.css', array(), '1.0.0', 'all');
  wp_enqueue_style('boot_carousel_css', get_template_directory_uri().'/css/carousel.css', array(), '1.0.0', 'all');
  wp_enqueue_style( 'animated_heading_css', get_template_directory_uri().'/css/home_page_animated_heading.css', array(), '1.0.0', 'all' );
  wp_enqueue_style( 'font_awesome', get_template_directory_uri().'/fonts/font-awesome.min.css', array( ), '', 'all' );
  wp_enqueue_style( 'google_font','https://fonts.googleapis.com/css?family=Libre+Baskerville|Open+Sans+Condensed:300|Open+Sans:300,300i,400,400i,600,600i,700,700i|Source+Sans+Pro',array(),'','all' );
}

function zaman_enqueue_scripts(){
  wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true);
  wp_enqueue_script( 'boot_carousel_js', get_template_directory_uri().'/js/carousel.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script( 'heading_animation_js', get_template_directory_uri().'/js/home_page_animated_heading.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script( 'livereload', 'http://localhost:35729/livereload.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts','zaman_enqueue_styles');
add_action( 'wp_enqueue_scripts','zaman_enqueue_scripts');

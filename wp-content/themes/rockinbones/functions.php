<?php
  // ADD MENU SUPPORT
  add_theme_support('menus');

  

  // REGISTER MENUS
  function register_theme_menus(){
    register_nav_menus(
      array(
        'primary-menu' => __( 'Primary Menu' ),
        'footer-menu' => __( 'Footer Menu' )
      )
    );
  }

  add_action('init', 'register_theme_menus');




  // ADD STYLES HERE
  function rockinbones_theme_styles(){
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/dist/css/pages/home.css');
  }

  add_action( 'wp_enqueue_scripts', 'rockinbones_theme_styles' );




  // ADD SCRIPTS HERE
  function rockinbones_theme_scripts(){
    // $handle, $src, $deps, $ver, $in_footer
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true );
  }

  add_action( 'wp_enqueue_scripts', 'rockinbones_theme_scripts' );




?>
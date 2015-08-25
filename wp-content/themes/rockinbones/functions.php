<?php
  // ADD MENU SUPPORT
  add_theme_support('menus');
  add_theme_support( 'post-thumbnails' ); 

  

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

// ADD FONTS HERE

  function rockinbones_add_fonts(){
    wp_register_style('rockinbones_add_fonts', 'http://fonts.googleapis.com/css?family=Rokkitt:400,700|Open+Sans:400,700');

    wp_enqueue_style('rockinbones_add_fonts');
  }

  add_action('wp_print_styles', 'rockinbones_add_fonts');


?>
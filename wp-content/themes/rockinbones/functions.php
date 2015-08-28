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
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/dist/css/globals.css');

    if ( is_page_template('page-home.php') ){
      wp_enqueue_style( 'home_css', get_template_directory_uri() . '/dist/css/pages/home.css');
    } else if( is_page_template('page-barbers.php') ){
      wp_enqueue_style( 'barbers_css', get_template_directory_uri() . '/dist/css/pages/barber.css');
    } else if( is_home() ){
      wp_enqueue_style( 'blog_css', get_template_directory_uri() . '/dist/css/pages/blog.css');
    } else if( is_page_template('page-friends.php') ){
      wp_enqueue_style( 'friends_css', get_template_directory_uri() . '/dist/css/pages/friends.css');
    }
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

// REGISTER SIDEBARS
function rockinbones_sidebar() {

  $args = array(
    'id'            => 'blog-sidebar',
    'class'         => 'blog-sidebar',
    'name'          => __( 'Blog Sidebar', 'text_domain' ),
    'description'   => __( 'Sidebar that shows on blog pages', 'text_domain' ),
  );
  register_sidebar( $args );

}
add_action( 'widgets_init', 'rockinbones_sidebar' );

?>
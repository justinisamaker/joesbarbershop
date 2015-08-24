<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title><?php wp_title(); ?></title>

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

    <div id="main-container" class="container-fluid">

      <nav>
        <?php
          $defaults = array(
            'container' => false,
            'theme_location' => 'primary-menu',
            'menu_class' => 'primary-menu'
          );

          wp_nav_menu( $defaults );
        ?>
      </nav>
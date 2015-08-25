<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title><?php wp_title(); ?></title>

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

    <div id="main-container" class="container-fluid">

      <header id="main-header">
        <img id="logo" src="<?php echo get_template_directory_uri(); ?>/dist/img/joes-logo.svg" alt="Joe's Barbershop Chicago">
      </header>

      <nav id="primary-menu">
        <?php
          $defaults = array(
            'container' => false,
            'theme_location' => 'primary-menu',
            'menu_class' => 'primary-menu'
          );

          wp_nav_menu( $defaults );
        ?>
      </nav>
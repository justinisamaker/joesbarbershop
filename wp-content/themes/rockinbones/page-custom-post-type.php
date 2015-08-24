<?php
/*
  Template Name: Custom Post Type
*/
?>

<?php get_header(); ?>

  <div id="main-container" class="container-fluid">
    <main role="main" class="main-content">

      <h1><?php bloginfo('name'); ?></h1>

      <?php 
        $args = array(
          'post_type' => 'test_post_type'
        );
        $query = new WP_Query( $args );
      ?>

      <?php
        if( $query->have_posts() ): while( $query->have_posts() ): $query->the_post();
      ?>
        <a href="<?php the_permalink(); ?>"><?php the_permalink(); ?></a><br/>
      <?php endwhile; endif; wp_reset_postdata(); ?>

    </main>
  </div> <!-- END MAIN CONTAINER -->

<?php get_footer(); ?>
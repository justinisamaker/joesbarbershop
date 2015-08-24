<!-- DEFAULT TEMPLATE -->

<?php get_header(); ?>

    <main role="main" class="main-content">

      <h1><?php bloginfo('name'); ?></h1>
      
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        <h2><?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>

      <?php endwhile; else : ?>

        <h2>No posts found.</h2>

      <?php endif; ?>

    </main>

<?php get_footer(); ?>
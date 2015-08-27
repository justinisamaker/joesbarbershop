<?php
/*
  Template Name: Blog
*/
?>

<?php get_header(); ?>

  <div id="main-container" class="container-fluid">
    <main role="main" class="main-content">

      <h1 class="page-title">Blog</h1>

      <section id="blog-container">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <article class="blog-post">
            <h3><?php the_title(); ?></h3>
            <h4>Posted on <?php the_date(); ?></h4>
            <p><?php the_content(); ?></p>
          </article>

        <?php endwhile; ?>

          <nav class="blog-nav">
            <?php next_posts_link( '« View more blog posts'); ?>
          </nav>

        <?php endif; ?>

      </section>

      <aside id="blog-sidebar">
        <?php get_sidebar('blog-sidebar'); ?>
      </aside>
    </main>
  </div> <!-- END MAIN CONTAINER -->

<?php get_footer(); ?>
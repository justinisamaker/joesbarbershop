<?php
/*
  Template Name: History
*/
?>

<?php get_header(); ?>

  <div id="main-container" class="container-fluid">
    <main role="main" class="main-content">

      <h1 class="page-title">History</h1>

      <?php
        $args = array(
          'post_type' => 'history'
        );
        $query = new WP_Query( $args );
      ?>

      <?php
        if( $query->have_posts() ): while( $query->have_posts() ): $query->the_post();
      ?>
        <div class="history-item">

          <div class="history-title">
            <?php if( get_field('history_year') ): ?>
                <h4><?php the_field('history_year');?></h4>
            <?php endif; ?>
            <h3><?php the_title(); ?></h3>
          </div>

          <div class="history-photo">
            <?php
              if ( has_post_thumbnail() ) {
                the_post_thumbnail();
              }
            ?>
          </div>

          <div class="history-info">
            <?php if( get_field('history_description') ): ?>
              <p><?php the_field('history_description');?></p>
            <?php endif; ?>
          </div>

        </div> <!-- END HISTORY ITEM -->
      <?php endwhile; endif; wp_reset_postdata(); ?>

    </main>
  </div> <!-- END MAIN CONTAINER -->

<?php get_footer(); ?>
<?php
/*
  Template Name: Barbers
*/
?>

<?php get_header(); ?>

  <div id="main-container" class="container-fluid">
    <main role="main" class="main-content">

      <h1 class="page-title">Barbers</h1>

      <?php
        $args = array(
          'post_type' => 'barber'
        );
        $query = new WP_Query( $args );
      ?>

      <?php
        if( $query->have_posts() ): while( $query->have_posts() ): $query->the_post();
      ?>
        <div class="barber-listing">

          <div class="barber-photo">
            <?php
              if ( has_post_thumbnail() ) {
                the_post_thumbnail();
              }
            ?>
          </div>

          <div class="barber-info">
            <h2><?php the_title(); ?></h2>

            <?php if( get_field('barber_bio') ): ?>
              <p class="event-date">
                <?php the_field('barber_bio'); ?>
              </p>
            <?php endif; ?>
          </div>

          <div class="barber-hours">
            <?php if( get_field('barber_monday_hours') ): ?>
              <h2>Hours</h2>
              <ul>
                <li><span>Monday:</span> <?php the_field('barber_monday_hours'); ?></li>
                <li><span>Tuesday:</span> <?php the_field('barber_tuesday_hours'); ?></li>
                <li><span>Wednesday:</span> <?php the_field('barber_wednesday_hours'); ?></li>
                <li><span>Thursday:</span> <?php the_field('barber_thursday_hours'); ?></li>
                <li><span>Friday:</span> <?php the_field('barber_friday_hours'); ?></li>
                <li><span>Saturday:</span> <?php the_field('barber_saturday_hours'); ?></li>
                <li><span>Sunday:</span> <?php the_field('barber_sunday_hours'); ?></li>
              </ul>
            <?php endif; ?>
          </div> <!-- END BARBER HOURS -->

        </div>
      <?php endwhile; endif; wp_reset_postdata(); ?>

    </main>
  </div> <!-- END MAIN CONTAINER -->

<?php get_footer(); ?>